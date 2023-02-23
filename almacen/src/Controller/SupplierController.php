<?php

namespace App\Controller;

use App\Entity\Proveedor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class SupplierController extends AbstractController {

    public function index(Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator, UserInterface $usuario) {
        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $comprobar = $em->getRepository(Proveedor::class)->findOneByNombre($request->request->get('proveedor'));
            if (isset($comprobar)) {
                return $this->redirectToRoute('suppliers_index', array(
                            'excepcion' => 2,
                            'codigo' => '¡Error!',
                            'mensaje' => 'El proveedor ya está en uso',
                ));
            }

            $proveedor = new Proveedor();

            $proveedor->setNombre($request->request->get('proveedor'));
            $proveedor->setDescripcion($request->request->get('descripcion'));
            $proveedor->setDireccion($request->request->get('direccion'));

            $proveedor->setUsuarioCreado($usuario);
            $proveedor->setFechaCreado(new \DateTime('now'));

            $em->getManager()->persist($proveedor);
            $em->getManager()->flush();

            return $this->redirectToRoute('suppliers_index', array(
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El proveedor se ha añadido correctamente',
            ));
        }

        if (!isset($_SESSION['buscar_proveedor'])) {
            $_SESSION['buscar_proveedor'] = "";
        }

        $proveedor = $request->query->get('proveedor');

        if ($proveedor) {
            $qproveedor = 'WHERE x.nombre LIKE :proveedor ';
        } else {
            $qproveedor = null;
        }

        $qProveedors = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Proveedor x '
                . $qproveedor
                . 'ORDER BY x.nombre ASC'
        );

        if ($proveedor) {
            $qProveedors->setParameter('proveedor', "%" . $proveedor . "%");
        }

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }
        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $qProveedors,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('proveedor/index.html.twig', [
                    'proveedores' => $pagination,
                    'proveedor' => $proveedor,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(Proveedor $proveedor, Request $request, $ex = null, $cod = null, $msg = null) {

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $comprobar = $em->getRepository(Proveedor::class)->findOneByNombre($request->request->get('proveedor'));
            if ($comprobar) {
                if ($comprobar != $proveedor) {
                    return $this->redirectToRoute('suppliers_show', array(
                                'id' => $proveedor->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'El proveedor no se ha podido modificar, el proveedor ya existe',
                    ));
                }
            }

            $proveedor->setNombre($request->request->get('proveedor'));
            $proveedor->setDescripcion($request->request->get('descripcion'));
            $proveedor->setDireccion($request->request->get('direccion'));

            $em->getManager()->flush();

            return $this->redirectToRoute('suppliers_show', array(
                        'id' => $proveedor->getId(),
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El proveedor se ha modificado correctamente',
            ));
        }

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('proveedor/show.html.twig', [
                    'proveedor' => $proveedor,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

}
