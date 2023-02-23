<?php

namespace App\Controller;

use App\Entity\Almacen;
use App\Entity\AlmacenProducto;
use App\Entity\Traslado;
use App\Entity\TrasladoLote;
use App\Entity\Categoria;
use App\Entity\Subcategoria;
use App\Entity\Producto;
use App\Entity\Lote;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class WarehouseTransferController extends AbstractController {

    public function index(Almacen $almacen, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator) {
        $em = $this->getDoctrine();

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!isset($_SESSION['buscar_almacen'])) {
            $_SESSION['buscar_almacen'] = "";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($request->request->get('boton') == "guardar") {

                try {

                    $fecha = $request->request->get('fecha');
                    $observaciones = $request->request->get('observaciones');

                    $lotes = $request->request->get('lote');
                    $cantidades = $request->request->get('cantidad');

                    $almacenB = $em->getRepository(Almacen::class)->find($request->request->get('almacenB'));

                    if (!$lotes) {
                        return $this->redirectToRoute('warehouse_transfer_index', array(
                                    'almacen' => $almacen->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'El traslado no se ha podido realizar, tienes que añadir productos.',
                        ));
                    }

                    if (!$almacenB) {
                        return $this->redirectToRoute('warehouse_transfer_index', array(
                                    'almacen' => $almacen->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'El traslado no se ha podido realizar, tienes que añadir el almacén donde se traslada.',
                        ));
                    }
                    for ($i = 0; $i < count($lotes); $i++) {
                        if ($cantidades[$i] > 0) {
                            $lot = $em->getRepository(Lote::class)->find($lotes[$i]);

                            if ($lot->getCantidad() < $cantidades[$i]) {
                                return $this->redirectToRoute('warehouse_transfer_index', array(
                                            'almacen' => $almacen->getId(),
                                            'excepcion' => 2,
                                            'codigo' => '¡Error!',
                                            'mensaje' => 'El traslado no se ha podido realizar, el lote ' . $lot->getLote() . ' tiene solo ' . $lot->getCantidad() . ' y estás intentando trasladar ' . $cantidades[$i],
                                ));
                            }
                        }
                    }

                    $traslado = new Traslado();

                    if ($fecha) {
                        $traslado->setFecha(new \DateTime($fecha));
                    } else {
                        $traslado->setFecha(null);
                    }

                    $traslado->setAlmacenA($almacen);
                    $traslado->setAlmacenB($almacenB);
                    $traslado->setObservaciones($observaciones);

                    $traslado->setFechaCreado(new \DateTime('now'));
                    $traslado->setUsuarioCreado($usuario);

                    $em->getManager()->persist($traslado);
                    $em->getManager()->flush();

                    for ($i = 0; $i < count($lotes); $i++) {

                        if ($cantidades[$i] > 0) {

                            $lot = $em->getRepository(Lote::class)->find($lotes[$i]);

                            $lot->getProducto()->setCantidad($lot->getProducto()->getCantidad() - $cantidades[$i]);
                            $lot->setCantidad($lot->getCantidad() - $cantidades[$i]);

                            $almacenProducto = $em->getRepository(AlmacenProducto::class)->findOneBy(array(
                                'producto' => $lot->getProducto()->getProducto()->getId(),
                                'almacen' => $almacenB->getId()
                            ));

                            if (!$almacenProducto) {
                                $almacenProducto = new AlmacenProducto();

                                $almacenProducto->setAlmacen($almacenB);
                                $almacenProducto->setCantidad((int) 0);
                                $almacenProducto->setProducto($lot->getProducto()->getProducto());
                                $almacenProducto->setUmbral((int) 0);

                                $almacenProducto->setFechaCreado(new \DateTime('now'));
                                $almacenProducto->setUsuarioCreado($usuario);

                                $em->getManager()->persist($almacenProducto);
                                $em->getManager()->flush();
                            }

                            $almacenProducto->setCantidad((int) ($almacenProducto->getCantidad() + $cantidades[$i]));

                            $lote = $em->getRepository(Lote::class)->findOneBy(array(
                                'producto' => $almacenProducto->getId(),
                                'lote' => $lot->getLote()
                            ));

                            if (!$lote) {
                                $lote = new Lote();

                                $lote->setCantidad((int) 0);
                                $lote->setProducto($almacenProducto);
                                $lote->setLote($lot->getLote());
                                $lote->setFechaCaducidad($lot->getFechaCaducidad());

                                $lote->setFechaCreado(new \DateTime('now'));
                                $lote->setUsuarioCreado($usuario);

                                $em->getManager()->persist($lote);
                                $em->getManager()->flush();
                            }

                            $lote->setCantidad((int) ($lote->getCantidad() + $cantidades[$i]));

                            $trasladoLote = new TrasladoLote();

                            $trasladoLote->setTraslado($traslado);
                            $trasladoLote->setCantidad((int) $cantidades[$i]);
                            $trasladoLote->setLote($lote);

                            $trasladoLote->setFechaCreado(new \DateTime('now'));
                            $trasladoLote->setUsuarioCreado($usuario);

                            $em->getManager()->persist($trasladoLote);
                            $em->getManager()->flush();
                        }
                    }

                    return $this->redirectToRoute('warehouse_transfer_index', array(
                                'almacen' => $almacen->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'El traslado de productos se ha realizado correctamente',
                    ));
                } catch (Exception $ex) {
                    return $this->redirectToRoute('warehouse_transfer_index', array(
                                'almacen' => $almacen->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'Hubo un error, vuelve a intentarlo',
                    ));
                }
            }
        }

        $desde = $request->query->get('desde');
        $hasta = $request->query->get('hasta');
        $tipoFecha = $request->query->get('tipoFecha');

        $id = $request->query->get('id');
        $producto = $request->query->get('producto');
        $categoria = $request->query->get('categoria');
        $almacenB = $request->query->get('almacenB');

        if (!isset($_SESSION['fecha_desde'])) {
            $_SESSION['fecha_desde'] = (new \DateTime('now'))->modify('-1 month')->format("Y-m-d");
        }
        if (!isset($_SESSION['fecha_hasta'])) {
            $_SESSION['fecha_hasta'] = (new \DateTime('now'))->format("Y-m-d");
        }

        if ($desde or isset($desde)) {
            $_SESSION['fecha_desde'] = $desde;
        } else {
            $desde = $_SESSION['fecha_desde'];
        }

        if ($hasta or isset($hasta)) {
            $_SESSION['fecha_hasta'] = $hasta;
        } else {
            $hasta = $_SESSION['fecha_hasta'];
        }

        if (!$tipoFecha) {
            $tipoFecha = "fecha";
        }

        if ($id) {
            $qid = 'AND p.id = ' . $id;
        } else {
            $qid = null;
        }

        if ($producto) {
            $qproducto = 'AND (p.nombre LIKE :producto OR p.codigo LIKE :producto OR p.referencia LIKE :producto OR p.codigoBarra LIKE :producto) ';
        } else {
            $qproducto = null;
        }

        if ($categoria) {
            $qcategoria = 'AND p.categoria = ' . $categoria;
        } else {
            $qcategoria = null;
        }

        if ($almacenB) {
            $qalmacenB = 'AND x.almacenB = ' . $almacenB;
        } else {
            $qalmacenB = null;
        }

        $qTraslados = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Traslado x '
                . 'JOIN x.lotes tl '
                . 'JOIN tl.lote l '
                . 'JOIN l.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE x.almacenA = ' . $almacen->getId() . ' '
                . "AND CAST(x." . $tipoFecha . " as date) BETWEEN :desde AND :hasta "
                . $qid
                . $qproducto
                . $qcategoria
                . $qalmacenB
                . 'ORDER BY x.fecha ASC'
        );

        $qTraslados->setParameter('desde', (new \DateTime($desde))->format('Y-m-d'));
        $qTraslados->setParameter('hasta', (new \DateTime($hasta))->format('Y-m-d'));

        if ($producto) {
            $qTraslados->setParameter('producto', "%" . $producto . "%");
        }

        $categorias = $em->getRepository(Categoria::class)->findAll();
        $subcategorias = $em->getRepository(Subcategoria::class)->findAll();

        $qalmacenes = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Almacen x '
                . 'WHERE x.id != ' . $almacen->getId() . ' '
                . 'ORDER BY x.nombre ASC'
        );

        $almacenes = $qalmacenes->getResult();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }
        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $qTraslados,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('almacen/traslado/index.html.twig', [
                    'traslados' => $pagination,
                    'almacen' => $almacen,
                    'tipoFecha' => $tipoFecha,
                    'desde' => $desde,
                    'hasta' => $hasta,
                    'almacenB' => $almacenB,
                    'id' => $id,
                    'producto' => $producto,
                    'categoria' => $categoria,
                    'almacenes' => $almacenes,
                    'categorias' => $categorias,
                    'subcategorias' => $subcategorias,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(Almacen $almacen, Traslado $traslado, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null) {

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($traslado->getAlmacenA()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($request->request->get('boton') == "editar") {

                $oldAlmacenB = $traslado->getAlmacenB();
                $almacenB = $em->getRepository(Almacen::class)->find($request->request->get('almacenB'));
                $fecha = $request->request->get('fecha');
                $observaciones = $request->request->get('observaciones');

                if ($fecha) {
                    $traslado->setFecha(new \DateTime($fecha));
                } else {
                    $traslado->setFecha(null);
                }

                $traslado->setAlmacenA($almacen);
                $traslado->setAlmacenB($almacenB);
                $traslado->setObservaciones($observaciones);

                $em->getManager()->flush();

                if ($almacenB != $oldAlmacenB) {
                    foreach ($traslado->getLotes() as $l) {
                        $lot = $l->getLote();
                        $cantidad = $l->getCantidad();

                        $lot->getProducto()->setCantidad($lot->getProducto()->getCantidad() - $cantidad);
                        $lot->setCantidad($lot->getCantidad() - $cantidad);

                        $almacenProducto = $em->getRepository(AlmacenProducto::class)->findOneBy(array(
                            'producto' => $lot->getProducto()->getProducto()->getId(),
                            'almacen' => $almacenB->getId()
                        ));

                        if (!$almacenProducto) {
                            $almacenProducto = new AlmacenProducto();

                            $almacenProducto->setAlmacen($almacenB);
                            $almacenProducto->setCantidad((int) 0);
                            $almacenProducto->setProducto($lot->getProducto()->getProducto());
                            $almacenProducto->setUmbral((int) 0);

                            $almacenProducto->setFechaCreado(new \DateTime('now'));
                            $almacenProducto->setUsuarioCreado($usuario);

                            $em->getManager()->persist($almacenProducto);
                            $em->getManager()->flush();
                        }

                        $almacenProducto->setCantidad((int) ($almacenProducto->getCantidad() + $cantidad));

                        $lote = $em->getRepository(Lote::class)->findOneBy(array(
                            'producto' => $almacenProducto->getId(),
                            'lote' => $lot->getLote()
                        ));

                        if (!$lote) {
                            $lote = new Lote();

                            $lote->setCantidad((int) 0);
                            $lote->setProducto($almacenProducto);
                            $lote->setLote($lot->getLote());
                            $lote->setFechaCaducidad($lot->getFechaCaducidad());

                            $lote->setFechaCreado(new \DateTime('now'));
                            $lote->setUsuarioCreado($usuario);

                            $em->getManager()->persist($lote);
                            $em->getManager()->flush();
                        }

                        $lote->setCantidad((int) ($lote->getCantidad() + $cantidad));

                        $em->getManager()->flush();
                    }
                }

                return $this->redirectToRoute('warehouse_transfer_show', array(
                            'almacen' => $almacen->getId(),
                            'id' => $traslado->getId(),
                            'excepcion' => 1,
                            'codigo' => '¡Correcto!',
                            'mensaje' => 'El traslado se ha modificado correctamente',
                ));
            }
            if ($request->request->get('boton') == "add") {

                try {

                    $lotes = $request->request->get('lote');
                    $cantidades = $request->request->get('cantidad');

                    $almacenB = $traslado->getAlmacenB();

                    if (!$lotes) {
                        return $this->redirectToRoute('warehouse_transfer_show', array(
                                    'almacen' => $almacen->getId(),
                                    'id' => $traslado->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'El traslado no se ha podido realizar, tienes que añadir productos.',
                        ));
                    }

                    if (!$almacenB) {
                        return $this->redirectToRoute('warehouse_transfer_show', array(
                                    'almacen' => $almacen->getId(),
                                    'id' => $traslado->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'El traslado no se ha podido realizar, tienes que añadir el almacén donde se traslada.',
                        ));
                    }

                    for ($i = 0; $i < count($lotes); $i++) {
                        if ($cantidades[$i] > 0) {
                            $lot = $em->getRepository(Lote::class)->find($lotes[$i]);

                            if ($lot->getCantidad() < $cantidades[$i]) {
                                return $this->redirectToRoute('warehouse_transfer_show', array(
                                            'almacen' => $almacen->getId(),
                                            'id' => $traslado->getId(),
                                            'excepcion' => 2,
                                            'codigo' => '¡Error!',
                                            'mensaje' => 'El traslado no se ha podido realizar, el lote ' . $lot->getLote() . ' tiene solo ' . $lot->getCantidad() . ' y estás intentando trasladar ' . $cantidades[$i],
                                ));
                            }
                        }
                    }

                    for ($i = 0; $i < count($lotes); $i++) {

                        if ($cantidades[$i] > 0) {

                            $lot = $em->getRepository(Lote::class)->find($lotes[$i]);

                            $lot->getProducto()->setCantidad($lot->getProducto()->getCantidad() - $cantidades[$i]);
                            $lot->setCantidad($lot->getCantidad() - $cantidades[$i]);

                            $almacenProducto = $em->getRepository(AlmacenProducto::class)->findOneBy(array(
                                'producto' => $lot->getProducto()->getProducto()->getId(),
                                'almacen' => $almacenB->getId()
                            ));

                            if (!$almacenProducto) {
                                $almacenProducto = new AlmacenProducto();

                                $almacenProducto->setAlmacen($almacenB);
                                $almacenProducto->setCantidad((int) 0);
                                $almacenProducto->setProducto($lot->getProducto()->getProducto());
                                $almacenProducto->setUmbral((int) 0);

                                $almacenProducto->setFechaCreado(new \DateTime('now'));
                                $almacenProducto->setUsuarioCreado($usuario);

                                $em->getManager()->persist($almacenProducto);
                                $em->getManager()->flush();
                            }

                            $almacenProducto->setCantidad((int) ($almacenProducto->getCantidad() + $cantidades[$i]));

                            $lote = $em->getRepository(Lote::class)->findOneBy(array(
                                'producto' => $almacenProducto->getId(),
                                'lote' => $lot->getLote()
                            ));

                            if (!$lote) {
                                $lote = new Lote();

                                $lote->setCantidad((int) 0);
                                $lote->setProducto($almacenProducto);
                                $lote->setLote($lot->getLote());
                                $lote->setFechaCaducidad($lot->getFechaCaducidad());

                                $lote->setFechaCreado(new \DateTime('now'));
                                $lote->setUsuarioCreado($usuario);

                                $em->getManager()->persist($lote);
                                $em->getManager()->flush();
                            }

                            $lote->setCantidad((int) ($lote->getCantidad() + $cantidades[$i]));

                            $trasladoLote = new TrasladoLote();

                            $trasladoLote->setTraslado($traslado);
                            $trasladoLote->setCantidad((int) $cantidades[$i]);
                            $trasladoLote->setLote($lote);

                            $trasladoLote->setFechaCreado(new \DateTime('now'));
                            $trasladoLote->setUsuarioCreado($usuario);

                            $em->getManager()->persist($trasladoLote);
                            $em->getManager()->flush();
                        }
                    }

                    return $this->redirectToRoute('warehouse_transfer_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $traslado->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'El traslado de productos se ha realizado correctamente',
                    ));
                } catch (Exception $ex) {
                    return $this->redirectToRoute('warehouse_transfer_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $traslado->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'Hubo un error, vuelve a intentarlo',
                    ));
                }
            }
        }

        $categorias = $em->getRepository(Categoria::class)->findAll();
        $subcategorias = $em->getRepository(Subcategoria::class)->findAll();

        $qalmacenes = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Almacen x '
                . 'WHERE x.id != ' . $almacen->getId() . ' '
                . 'ORDER BY x.nombre ASC'
        );

        $almacenes = $qalmacenes->getResult();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('almacen/traslado/show.html.twig', [
                    'almacen' => $almacen,
                    'traslado' => $traslado,
                    'categorias' => $categorias,
                    'subcategorias' => $subcategorias,
                    'almacenes' => $almacenes,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function showLot(Almacen $almacen, Traslado $traslado, TrasladoLote $trasladoLote, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null) {

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($traslado->getAlmacenA()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($trasladoLote->getTraslado()->getAlmacenA()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($request->request->get('boton') == "editar") {

                $cantidadAnterior = $trasladoLote->getCantidad();

                $lotB = $trasladoLote->getLote();
                $cantidadB = $trasladoLote->getCantidad();

                $lotB->getProducto()->setCantidad($lotB->getProducto()->getCantidad() - $cantidadB);
                $lotB->setCantidad($lotB->getCantidad() - $cantidadB);

                $qlotes = $em->getManager()->createQuery(''
                        . 'SELECT x FROM App:Lote x '
                        . 'JOIN x.producto ap '
                        . 'JOIN ap.producto p '
                        . 'WHERE ap.almacen = ' . $almacen->getId() . ' '
                        . 'AND p.id = ' . $lotB->getProducto()->getProducto()->getId() . ' '
                        . 'AND x.lote LIKE :lote '
                );

                $qlotes->setParameter('lote', "%" . $lotB->getLote() . "%");
                $loteAlmacenA = $qlotes->getResult();

                $lot = $em->getRepository(Lote::class)->find($request->request->get('lote'));
                $cantidad = $request->request->get('cantidad');

                if ($loteAlmacenA) {
                    if ($loteAlmacenA[0]->getCantidad() >= $cantidad) {
                        $loteAlmacenA[0]->getProducto()->setCantidad($loteAlmacenA[0]->getProducto()->getCantidad() + $cantidadAnterior - $cantidad);
                        $loteAlmacenA[0]->setCantidad($loteAlmacenA[0]->getCantidad() + $cantidadAnterior - $cantidad);
                    } else {
                        return $this->redirectToRoute('warehouse_transfer_lot_show', array(
                                    'almacen' => $almacen->getId(),
                                    'id' => $traslado->getId(),
                                    'trasladoLote' => $trasladoLote->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'El traslado no se ha podido realizar, el lote ' . $lot->getLote() . ' tiene solo ' . $lot->getCantidad() . ' y estás intentando trasladar ' . $cantidad,
                        ));
                    }
                } else {
                    return $this->redirectToRoute('warehouse_transfer_lot_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $traslado->getId(),
                                'trasladoLote' => $trasladoLote->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'El traslado no se ha podido realizar, el lote ' . $lot->getLote() . ' no se encuentra en éste almacén '
                    ));
                }

                if ($cantidad > 0) {

                    $almacenProducto = $em->getRepository(AlmacenProducto::class)->findOneBy(array(
                        'producto' => $lot->getProducto()->getProducto()->getId(),
                        'almacen' => $traslado->getAlmacenB()->getId()
                    ));

                    if (!$almacenProducto) {
                        $almacenProducto = new AlmacenProducto();

                        $almacenProducto->setAlmacen($traslado->getAlmacenB());
                        $almacenProducto->setCantidad((int) 0);
                        $almacenProducto->setProducto($lot->getProducto()->getProducto());
                        $almacenProducto->setUmbral((int) 0);

                        $almacenProducto->setFechaCreado(new \DateTime('now'));
                        $almacenProducto->setUsuarioCreado($usuario);

                        $em->getManager()->persist($almacenProducto);
                        $em->getManager()->flush();
                    }

                    $almacenProducto->setCantidad((int) ($almacenProducto->getCantidad() + $cantidad));

                    $lote = $em->getRepository(Lote::class)->findOneBy(array(
                        'producto' => $almacenProducto->getId(),
                        'lote' => $lot->getLote()
                    ));

                    if (!$lote) {
                        $lote = new Lote();

                        $lote->setCantidad((int) 0);
                        $lote->setProducto($almacenProducto);
                        $lote->setLote($lot->getLote());
                        $lote->setFechaCaducidad($lot->getFechaCaducidad());

                        $lote->setFechaCreado(new \DateTime('now'));
                        $lote->setUsuarioCreado($usuario);

                        $em->getManager()->persist($lote);
                        $em->getManager()->flush();
                    }

                    $lote->setCantidad((int) ($lote->getCantidad() + $cantidad));

                    $trasladoLote->setCantidad((int) $cantidad);
                    $trasladoLote->setLote($lote);

                    $em->getManager()->flush();

                    return $this->redirectToRoute('warehouse_transfer_lot_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $traslado->getId(),
                                'trasladoLote' => $trasladoLote->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'El lote se ha modificado correctamente',
                    ));
                } else {

                    $em->getManager()->remove($trasladoLote);
                    $em->getManager()->flush();

                    return $this->redirectToRoute('warehouse_transfer_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $traslado->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'El lote se ha eliminado correctamente',
                    ));
                }
            }
        }

        $qlotes = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Lote x '
                . 'JOIN x.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE ap.almacen = ' . $almacen->getId() . ' '
                . 'AND x.cantidad > 0 '
                . 'ORDER BY p.nombre ASC '
        );

        $lotes = $qlotes->getResult();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('almacen/traslado/lot.html.twig', [
                    'almacen' => $almacen,
                    'traslado' => $traslado,
                    'trasladoLote' => $trasladoLote,
                    'lotes' => $lotes,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function searchLot(Almacen $almacen, Request $request, UserInterface $usuario) {

        $em = $this->getDoctrine();
        $categoria = trim($request->request->get('categoria'));
        $subcategoria = trim($request->request->get('subcategoria'));
        $tipo = $request->request->get('tipo');
        $referencia = $request->request->get('referencia');

        if ($categoria) {
            $qcategoria = 'AND p.categoria = ' . $categoria . ' ';
        } else {
            $qcategoria = "";
        }

        if ($subcategoria) {
            $qsubcategoria = 'AND p.subcategoria = ' . $subcategoria . ' ';
        } else {
            $qsubcategoria = "";
        }

        $qlotes = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Lote x '
                . 'JOIN x.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE ap.almacen = ' . $almacen->getId() . ' '
                . 'AND x.cantidad > 0 '
                . 'AND p.' . $tipo . ' LIKE :referencia '
                . $qcategoria
                . $qsubcategoria
                . 'ORDER BY p.nombre ASC '
        );

        $qlotes->setParameter('referencia', "%" . $referencia . "%");

        $lotes = $qlotes->getResult();

        if (count($lotes) > 0) {

            foreach ($lotes as $lote) {
                $fecha = null;
                if ($lote->getFechaCaducidad()) {
                    if ($lote->getFechaCaducidad() < (new \DateTime((new \DateTime('now'))->format('d-m-Y')))) {
                        $fecha = "<br />F. caducidad: <span style='color: red;'>" . $lote->getFechaCaducidad()->format('d-m-Y') . "</span>";
                    } else {
                        $fecha = "<br />F. caducidad: " . $lote->getFechaCaducidad()->format('d-m-Y');
                    }
                }
                $datos[] = array(
                    'id' => $lote->getId(),
                    'nombre' => "Nombre: " . $lote->getProducto()->getProducto()->getNombre() . ($lote->getProducto()->getProducto()->getCategoria() ? " <br />Categoría: " . $lote->getProducto()->getProducto()->getCategoria() : "") . ($lote->getProducto()->getProducto()->getSubcategoria() ? " <br />Subcategoría: " . $lote->getProducto()->getProducto()->getSubcategoria() : "") . ($lote->getProducto()->getProducto()->getCodigo() ? " <br />Código: " . $lote->getProducto()->getProducto()->getCodigo() : ""),
                    'lote' => "Lote: " . $lote->getLote() . "<br />Cantidad: " . $lote->getCantidad() . $fecha,
                    'idp' => $lote->getProducto()->getProducto()->getId(),
                    'foto' => $lote->getProducto()->getProducto()->getFoto()
                );
            }

            return new JsonResponse($datos);
        } else {
            $datos = array(
                'existe' => "2",
            );
            return new JsonResponse($datos);
        }
    }

    public function addLot(Almacen $almacen, Request $request, UserInterface $usuario) {

        $em = $this->getDoctrine();

        $lote = $em->getManager()->getRepository(Lote::class)->find($request->request->get('id'));

        if ($lote) {

            $datos = array(
                'id' => $lote->getId(),
                'nombre' => $lote->getProducto()->getProducto()->getNombre(),
                'lote' => $lote->getLote(),
                'cantidad' => $lote->getCantidad(),
                'idp' => $lote->getProducto()->getProducto()->getId(),
                'foto' => $lote->getProducto()->getProducto()->getFoto()
            );

            return new JsonResponse($datos);
        } else {
            $datos = array(
                'existe' => "2",
            );
            return new JsonResponse($datos);
        }
    }

}
