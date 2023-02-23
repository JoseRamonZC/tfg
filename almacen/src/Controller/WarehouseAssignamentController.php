<?php

namespace App\Controller;

use App\Entity\Almacen;
use App\Entity\AlmacenProducto;
use App\Entity\Lote;
use App\Entity\AreaServicio;
use App\Entity\Asignacion;
use App\Entity\AsignacionLote;
use App\Entity\Categoria;
use App\Entity\Subcategoria;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class WarehouseAssignamentController extends AbstractController {

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
                    $terceros = $request->request->get('terceros');
                    $encargado = $request->request->get('encargado');
                    $ordenTrabajo = $request->request->get('ordenTrabajo');
                    $observaciones = $request->request->get('observaciones');

                    $areaServicio = $em->getRepository(AreaServicio::class)->find($request->request->get('areaServicio'));

                    $lotes = $request->request->get('lote');
                    $cantidades = $request->request->get('cantidad');

                    if (!$lotes) {
                        return $this->redirectToRoute('warehouse_assignament_index', array(
                                    'almacen' => $almacen->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'La asignación no se ha podido realizar, tienes que añadir productos.',
                        ));
                    }

                    if (!$areaServicio) {
                        return $this->redirectToRoute('warehouse_assignament_index', array(
                                    'almacen' => $almacen->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'La asignación no se ha podido realizar, tienes que añadir el área de servicio donde se asigna.',
                        ));
                    }

                    if (!$terceros and $areaServicio->getNombre() == "Terceros") {
                        return $this->redirectToRoute('warehouse_assignament_index', array(
                                    'almacen' => $almacen->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'La asignación no se ha podido realizar, tienes que rellenar el campo de "Terceros".',
                        ));
                    }

                    for ($i = 0; $i < count($lotes); $i++) {
                        if ($cantidades[$i] > 0) {
                            $lot = $em->getRepository(Lote::class)->find($lotes[$i]);

                            if ($lot->getCantidad() < $cantidades[$i]) {
                                return $this->redirectToRoute('warehouse_assignament_index', array(
                                            'almacen' => $almacen->getId(),
                                            'excepcion' => 2,
                                            'codigo' => '¡Error!',
                                            'mensaje' => 'La asignación no se ha podido realizar, el lote ' . $lot->getLote() . ' tiene solo ' . $lot->getCantidad() . ' y estás intentando trasladar ' . $cantidades[$i],
                                ));
                            }
                        }
                    }

                    $asignacion = new Asignacion();

                    if ($fecha) {
                        $asignacion->setFecha(new \DateTime($fecha));
                    } else {
                        $asignacion->setFecha(null);
                    }

                    $asignacion->setAlmacen($almacen);
                    $asignacion->setAreaServicio($areaServicio);
                    if ($areaServicio->getNombre() == "Terceros") {
                        $asignacion->setTerceros($terceros);
                    } else {
                        $asignacion->setTerceros(null);
                    }
                    $asignacion->setEncargado($encargado);
                    $asignacion->setOrdenTrabajo($ordenTrabajo);
                    $asignacion->setObservaciones($observaciones);

                    $asignacion->setFechaCreado(new \DateTime('now'));
                    $asignacion->setUsuarioCreado($usuario);

                    $em->getManager()->persist($asignacion);
                    $em->getManager()->flush();

                    for ($i = 0; $i < count($lotes); $i++) {

                        if ($cantidades[$i] > 0) {

                            $lote = $em->getRepository(Lote::class)->find($lotes[$i]);

                            $lote->getProducto()->setCantidad($lote->getProducto()->getCantidad() - $cantidades[$i]);
                            $lote->setCantidad($lote->getCantidad() - $cantidades[$i]);

                            $asignacionLote = new AsignacionLote();

                            $asignacionLote->setAsignacion($asignacion);
                            $asignacionLote->setCantidad((int) $cantidades[$i]);
                            $asignacionLote->setLote($lote);

                            $asignacionLote->setFechaCreado(new \DateTime('now'));
                            $asignacionLote->setUsuarioCreado($usuario);

                            $em->getManager()->persist($asignacionLote);
                            $em->getManager()->flush();
                        }
                    }

                    return $this->redirectToRoute('warehouse_assignament_index', array(
                                'almacen' => $almacen->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'La asignación de productos se ha realizado correctamente',
                    ));
                } catch (Exception $ex) {
                    return $this->redirectToRoute('warehouse_assignament_index', array(
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
        $areaServicio = $request->query->get('areaServicio');

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

        if ($areaServicio) {
            $qareaServicio = 'AND x.areaServicio = ' . $areaServicio;
        } else {
            $qareaServicio = null;
        }

        $qAsignacions = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Asignacion x '
                . 'JOIN x.lotes al '
                . 'JOIN al.lote l '
                . 'JOIN l.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE x.almacen = ' . $almacen->getId() . ' '
                . "AND CAST(x." . $tipoFecha . " as date) BETWEEN :desde AND :hasta "
                . $qid
                . $qproducto
                . $qcategoria
                . $qareaServicio
                . 'ORDER BY x.fecha ASC'
        );

        $qAsignacions->setParameter('desde', (new \DateTime($desde))->format('Y-m-d'));
        $qAsignacions->setParameter('hasta', (new \DateTime($hasta))->format('Y-m-d'));

        if ($producto) {
            $qAsignacions->setParameter('producto', "%" . $producto . "%");
        }

        $categorias = $em->getRepository(Categoria::class)->findAll();
        $subcategorias = $em->getRepository(Subcategoria::class)->findAll();

        $areas = $em->getRepository(AreaServicio::class)->findAll();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }
        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $qAsignacions,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('almacen/asignacion/index.html.twig', [
                    'asignaciones' => $pagination,
                    'almacen' => $almacen,
                    'tipoFecha' => $tipoFecha,
                    'desde' => $desde,
                    'hasta' => $hasta,
                    'areaServicio' => $areaServicio,
                    'id' => $id,
                    'producto' => $producto,
                    'categoria' => $categoria,
                    'areas' => $areas,
                    'categorias' => $categorias,
                    'subcategorias' => $subcategorias,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(Almacen $almacen, Asignacion $asignacion, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null) {

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($asignacion->getAlmacen()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($request->request->get('boton') == "editar") {

                $fecha = $request->request->get('fecha');
                $terceros = $request->request->get('terceros');
                $encargado = $request->request->get('encargado');
                $ordenTrabajo = $request->request->get('ordenTrabajo');
                $observaciones = $request->request->get('observaciones');

                $areaServicio = $em->getRepository(AreaServicio::class)->find($request->request->get('areaServicio'));

                if (!$areaServicio) {
                    return $this->redirectToRoute('warehouse_assignament_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $asignacion->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'La asignación no se ha podido realizar, tienes que añadir el área de servicio donde se asigna.',
                    ));
                }

                if (!$terceros and $areaServicio->getNombre() == "Terceros") {
                    return $this->redirectToRoute('warehouse_assignament_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $asignacion->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'La asignación no se ha podido realizar, tienes que rellenar el campo de "Terceros".',
                    ));
                }

                if ($fecha) {
                    $asignacion->setFecha(new \DateTime($fecha));
                } else {
                    $asignacion->setFecha(null);
                }

                $asignacion->setAlmacen($almacen);
                $asignacion->setAreaServicio($areaServicio);
                if ($areaServicio->getNombre() == "Terceros") {
                    $asignacion->setTerceros($terceros);
                } else {
                    $asignacion->setTerceros(null);
                }
                $asignacion->setEncargado($encargado);
                $asignacion->setOrdenTrabajo($ordenTrabajo);
                $asignacion->setObservaciones($observaciones);

                $em->getManager()->flush();

                return $this->redirectToRoute('warehouse_assignament_show', array(
                            'almacen' => $almacen->getId(),
                            'id' => $asignacion->getId(),
                            'excepcion' => 1,
                            'codigo' => '¡Correcto!',
                            'mensaje' => 'La asignación se ha modificado correctamente',
                ));
            }
            if ($request->request->get('boton') == "add") {

                $lotes = $request->request->get('lote');
                $cantidades = $request->request->get('cantidad');
                try {
                    for ($i = 0; $i < count($lotes); $i++) {
                        if ($cantidades[$i] > 0) {
                            $lot = $em->getRepository(Lote::class)->find($lotes[$i]);

                            if ($lot->getCantidad() < $cantidades[$i]) {
                                return $this->redirectToRoute('warehouse_assignament_show', array(
                                            'almacen' => $almacen->getId(),
                                            'id' => $asignacion->getId(),
                                            'excepcion' => 2,
                                            'codigo' => '¡Error!',
                                            'mensaje' => 'La asignación no se ha podido realizar, el lote ' . $lot->getLote() . ' tiene solo ' . $lot->getCantidad() . ' y estás intentando trasladar ' . $cantidades[$i],
                                ));
                            }
                        }
                    }

                    for ($i = 0; $i < count($lotes); $i++) {

                        if ($cantidades[$i] > 0) {

                            $lote = $em->getRepository(Lote::class)->find($lotes[$i]);

                            $lote->getProducto()->setCantidad($lote->getProducto()->getCantidad() - $cantidades[$i]);
                            $lote->setCantidad($lote->getCantidad() - $cantidades[$i]);

                            $asignacionLote = new AsignacionLote();

                            $asignacionLote->setAsignacion($asignacion);
                            $asignacionLote->setCantidad((int) $cantidades[$i]);
                            $asignacionLote->setLote($lote);

                            $asignacionLote->setFechaCreado(new \DateTime('now'));
                            $asignacionLote->setUsuarioCreado($usuario);

                            $em->getManager()->persist($asignacionLote);
                            $em->getManager()->flush();
                        }
                    }

                    return $this->redirectToRoute('warehouse_assignament_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $asignacion->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'La asignación de productos se ha realizado correctamente',
                    ));
                } catch (Exception $ex) {
                    return $this->redirectToRoute('warehouse_assignament_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $asignacion->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'Hubo un error, vuelve a intentarlo',
                    ));
                }
            }
        }

        $categorias = $em->getRepository(Categoria::class)->findAll();
        $subcategorias = $em->getRepository(Subcategoria::class)->findAll();

        $areas = $em->getRepository(AreaServicio::class)->findAll();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('almacen/asignacion/show.html.twig', [
                    'almacen' => $almacen,
                    'asignacion' => $asignacion,
                    'categorias' => $categorias,
                    'subcategorias' => $subcategorias,
                    'areas' => $areas,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function showLot(Almacen $almacen, Asignacion $asignacion, AsignacionLote $asignacionLote, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null) {

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($asignacion->getAlmacen()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($asignacionLote->getAsignacion()->getAlmacen()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($request->request->get('boton') == "editar") {

                $cantidadAnterior = $asignacionLote->getCantidad();

                $lotB = $asignacionLote->getLote();

                $qlotes = $em->getManager()->createQuery(''
                        . 'SELECT x FROM App:Lote x '
                        . 'JOIN x.producto ap '
                        . 'JOIN ap.producto p '
                        . 'WHERE ap.almacen = ' . $almacen->getId() . ' '
                        . 'AND p.id = ' . $lotB->getProducto()->getProducto()->getId() . ' '
                        . 'AND x.lote LIKE :lote '
                );

                $qlotes->setParameter('lote', "%" . $lotB->getLote() . "%");
                $loteAlmacen = $qlotes->getResult();

                $lote = $em->getRepository(Lote::class)->find($request->request->get('lote'));
                $cantidad = $request->request->get('cantidad');

                if ($loteAlmacen) {
                    if ($loteAlmacen[0]->getCantidad() >= $cantidad) {
                        $loteAlmacen[0]->getProducto()->setCantidad($loteAlmacen[0]->getProducto()->getCantidad() + $cantidadAnterior - $cantidad);
                        $loteAlmacen[0]->setCantidad($loteAlmacen[0]->getCantidad() + $cantidadAnterior - $cantidad);
                    } else {
                        return $this->redirectToRoute('warehouse_assignament_lot_show', array(
                                    'almacen' => $almacen->getId(),
                                    'id' => $asignacion->getId(),
                                    'asignacionLote' => $asignacionLote->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'La asignación no se ha podido realizar, el lote ' . $lote->getLote() . ' tiene solo ' . $lote->getCantidad() . ' y estás intentando trasladar ' . $cantidad,
                        ));
                    }
                } else {
                    return $this->redirectToRoute('warehouse_assignament_lot_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $asignacion->getId(),
                                'asignacionLote' => $asignacionLote->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'La asignación no se ha podido realizar, el lote ' . $lot->getLote() . ' no se encuentra en éste almacén '
                    ));
                }

                if ($cantidad > 0) {

                    $asignacionLote->setCantidad((int) $cantidad);
                    $asignacionLote->setLote($lote);

                    $em->getManager()->flush();

                    return $this->redirectToRoute('warehouse_assignament_lot_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $asignacion->getId(),
                                'asignacionLote' => $asignacionLote->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'El lote se ha modificado correctamente',
                    ));
                } else {

                    $em->getManager()->remove($asignacionLote);
                    $em->getManager()->flush();

                    return $this->redirectToRoute('warehouse_assignament_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $asignacion->getId(),
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

        return $this->render('almacen/asignacion/lot.html.twig', [
                    'almacen' => $almacen,
                    'asignacion' => $asignacion,
                    'asignacionLote' => $asignacionLote,
                    'lotes' => $lotes,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

}
