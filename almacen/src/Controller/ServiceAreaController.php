<?php

namespace App\Controller;

use App\Entity\AreaServicio;
use App\Entity\Categoria;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class ServiceAreaController extends AbstractController {

    public function index(Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator, UserInterface $usuario) {
        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $comprobar = $em->getRepository(AreaServicio::class)->findOneByNombre($request->request->get('areaServicio'));
            if (isset($comprobar)) {
                return $this->redirectToRoute('service_areas_index', array(
                            'excepcion' => 2,
                            'codigo' => '¡Error!',
                            'mensaje' => 'El área de servicio ya está en uso',
                ));
            }

            $areaServicio = new AreaServicio();

            $areaServicio->setNombre($request->request->get('areaServicio'));

            $areaServicio->setUsuarioCreado($usuario);
            $areaServicio->setFechaCreado(new \DateTime('now'));

            $em->getManager()->persist($areaServicio);
            $em->getManager()->flush();

            return $this->redirectToRoute('service_areas_index', array(
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El área de servicio se ha añadido correctamente',
            ));
        }

        if (!isset($_SESSION['buscar_areaServicio'])) {
            $_SESSION['buscar_areaServicio'] = "";
        }

        $areaServicio = $request->query->get('areaServicio');

        if ($areaServicio) {
            $qareaServicio = 'WHERE x.nombre LIKE :areaServicio ';
        } else {
            $qareaServicio = null;
        }

        $qAreaServicios = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:AreaServicio x '
                . $qareaServicio
                . 'ORDER BY x.nombre ASC'
        );

        if ($areaServicio) {
            $qAreaServicios->setParameter('areaServicio', "%" . $areaServicio . "%");
        }

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }
        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $qAreaServicios,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('area_servicio/index.html.twig', [
                    'areaServicios' => $pagination,
                    'areaServicio' => $areaServicio,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(AreaServicio $areaServicio, Request $request, PaginatorInterface $paginator, $ex = null, $cod = null, $msg = null) {

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $comprobar = $em->getRepository(AreaServicio::class)->findOneByNombre($request->request->get('areaServicio'));
            if ($comprobar) {
                if ($comprobar != $areaServicio) {
                    return $this->redirectToRoute('service_areas_show', array(
                                'id' => $areaServicio->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'El área de servicio no se ha podido modificar, el área de servicio ya existe',
                    ));
                }
            }

            $areaServicio->setNombre($request->request->get('areaServicio'));

            $em->getManager()->flush();

            return $this->redirectToRoute('service_areas_show', array(
                        'id' => $areaServicio->getId(),
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El área de servicio se ha modificado correctamente',
            ));
        }

        $desde = $request->query->get('desde');
        $hasta = $request->query->get('hasta');
        $tipoFecha = $request->query->get('tipoFecha');

        $id = $request->query->get('id');
        $producto = $request->query->get('producto');
        $categoria = $request->query->get('categoria');

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

        $qAsignacions = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Asignacion x '
                . 'JOIN x.lotes al '
                . 'JOIN al.lote l '
                . 'JOIN l.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE x.areaServicio = ' . $areaServicio->getId() . ' '
                . "AND CAST(x." . $tipoFecha . " as date) BETWEEN :desde AND :hasta "
                . $qid
                . $qproducto
                . $qcategoria
                . 'ORDER BY x.fecha ASC'
        );

        $qAsignacions->setParameter('desde', (new \DateTime($desde))->format('Y-m-d'));
        $qAsignacions->setParameter('hasta', (new \DateTime($hasta))->format('Y-m-d'));

        if ($producto) {
            $qAsignacions->setParameter('producto', "%" . $producto . "%");
        }

        $categorias = $em->getRepository(Categoria::class)->findAll();

        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $qAsignacions,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('area_servicio/show.html.twig', [
                    'areaServicio' => $areaServicio,
                    'asignaciones' => $pagination,
                    'categorias' => $categorias,
                    'tipoFecha' => $tipoFecha,
                    'desde' => $desde,
                    'hasta' => $hasta,
                    'id' => $id,
                    'producto' => $producto,
                    'categoria' => $categoria,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

}
