<?php

namespace App\Controller;

use App\Entity\Almacen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class WarehouseController extends AbstractController {

    public function index(Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator, UserInterface $usuario) {
        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $comprobar = $em->getRepository(Almacen::class)->findOneByNombre($request->request->get('almacen'));
            if (isset($comprobar)) {
                return $this->redirectToRoute('warehouses_index', array(
                            'excepcion' => 2,
                            'codigo' => '¡Error!',
                            'mensaje' => 'El almacén ya está en uso',
                ));
            }

            $almacen = new Almacen();

            $almacen->setNombre($request->request->get('almacen'));

            $almacen->setUsuarioCreado($usuario);
            $almacen->setFechaCreado(new \DateTime('now'));

            $em->getManager()->persist($almacen);
            $em->getManager()->flush();

            return $this->redirectToRoute('warehouses_index', array(
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El almacén se ha añadido correctamente',
            ));
        }

        if (!isset($_SESSION['buscar_almacen'])) {
            $_SESSION['buscar_almacen'] = "";
        }

        $almacen = $request->query->get('almacen');

        if ($almacen) {
            $qalmacen = 'WHERE x.nombre LIKE :almacen ';
        } else {
            $qalmacen = null;
        }

        $qAlmacens = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Almacen x '
                . $qalmacen
                . 'ORDER BY x.nombre ASC'
        );

        if ($almacen) {
            $qAlmacens->setParameter('almacen', "%" . $almacen . "%");
        }

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }
        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $qAlmacens,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('almacen/index.html.twig', [
                    'almacenes' => $pagination,
                    'almacen' => $almacen,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(Almacen $almacen, Request $request, $ex = null, $cod = null, $msg = null) {

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $comprobar = $em->getRepository(Almacen::class)->findOneByNombre($request->request->get('almacen'));
            if ($comprobar) {
                if ($comprobar != $almacen) {
                    return $this->redirectToRoute('warehouses_show', array(
                                'id' => $almacen->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'El almacén no se ha podido modificar, el almacén ya existe',
                    ));
                }
            }

            $almacen->setNombre($request->request->get('almacen'));

            $em->getManager()->flush();

            return $this->redirectToRoute('warehouses_show', array(
                        'id' => $almacen->getId(),
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El almacén se ha modificado correctamente',
            ));
        }


        $desde = $request->query->get('desde');
        $hasta = $request->query->get('hasta');

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

        $qInventario = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:AlmacenProducto x '
                . 'JOIN x.producto p '
                . 'WHERE x.almacen = ' . $almacen->getId() . ' '
                . 'AND x.cantidad > 0 '
                . 'ORDER BY p.nombre ASC'
        );
        $inventario = $qInventario->getResult();

        $qImportaciones = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Importacion x '
                . 'JOIN x.lotes il '
                . 'JOIN il.lote l '
                . 'JOIN l.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE x.almacen = ' . $almacen->getId() . ' '
                . "AND CAST(x.fechaCreado as date) BETWEEN :desde AND :hasta "
                . 'ORDER BY x.fecha ASC'
        );
        $qImportaciones->setParameter('desde', (new \DateTime($desde))->format('Y-m-d'));
        $qImportaciones->setParameter('hasta', (new \DateTime($hasta))->format('Y-m-d'));
        $importaciones = $qImportaciones->getResult();

        $qTraslados = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Traslado x '
                . 'JOIN x.lotes tl '
                . 'JOIN tl.lote l '
                . 'JOIN l.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE x.almacenA = ' . $almacen->getId() . ' '
                . "AND CAST(x.fechaCreado as date) BETWEEN :desde AND :hasta "
                . 'ORDER BY x.fecha ASC'
        );
        $qTraslados->setParameter('desde', (new \DateTime($desde))->format('Y-m-d'));
        $qTraslados->setParameter('hasta', (new \DateTime($hasta))->format('Y-m-d'));
        $traslados = $qTraslados->getResult();

        $qAsignacions = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Asignacion x '
                . 'JOIN x.lotes al '
                . 'JOIN al.lote l '
                . 'JOIN l.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE x.almacen = ' . $almacen->getId() . ' '
                . "AND CAST(x.fechaCreado as date) BETWEEN :desde AND :hasta "
                . 'ORDER BY x.fecha ASC'
        );
        $qAsignacions->setParameter('desde', (new \DateTime($desde))->format('Y-m-d'));
        $qAsignacions->setParameter('hasta', (new \DateTime($hasta))->format('Y-m-d'));
        $asignaciones = $qAsignacions->getResult();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('almacen/show.html.twig', [
                    'almacen' => $almacen,
                    'desde' => $desde,
                    'hasta' => $hasta,
                    'inventario' => $inventario,
                    'importaciones' => $importaciones,
                    'traslados' => $traslados,
                    'asignaciones' => $asignaciones,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

}
