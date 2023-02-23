<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Categoria;
use App\Entity\Subcategoria;

class SubcategoryController extends AbstractController {

    public function index(Categoria $categoria, Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator) {


        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $comprobar = $em->getRepository(Subcategoria::class)->findOneBy(array('nombre' => $request->request->get('nombre'), 'categoria' => $categoria->getId()));
            if (isset($comprobar)) {
                return $this->redirectToRoute('subcategories_index', array(
                            'id' => $categoria->getId(),
                            'excepcion' => 2,
                            'codigo' => '¡Error!',
                            'mensaje' => 'La subcategoría ya está en uso',
                ));
            }

            $subcategoria = new Subcategoria();

            $subcategoria->setCategoria($categoria);
            $subcategoria->setNombre($request->request->get('subcategoria'));

            $subcategoria->setFechaCreado(new \DateTime('now'));
            $subcategoria->setUsuarioCreado($this->getUser());

            $em->getManager()->persist($subcategoria);
            $em->getManager()->flush();

            return $this->redirectToRoute('subcategories_index', array(
                        'id' => $categoria->getId(),
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'La subcategoría se ha añadido correctamente',
            ));
        }

        if (!isset($_SESSION['buscar_subcategoria'])) {
            $_SESSION['buscar_subcategoria'] = "";
        }

        $nombre = $request->query->get('nombre');

        if ($nombre or isset($nombre)) {
            $_SESSION['buscar_subcategoria'] = $nombre;
        } else {
            $nombre = $_SESSION['buscar_subcategoria'];
        }

        if ($nombre) {
            $qSubcategoria = $em->getManager()->createQuery(''
                            . 'SELECT u FROM App:Subcategoria u '
                            . 'WHERE u.nombre LIKE :nombre '
                            . 'AND u.categoria = ' . $categoria->getId()
                            . 'ORDER BY u.nombre ASC'
                    )
                    ->setParameter('nombre', "%" . $nombre . "%");
            $subcategorias = $qSubcategoria->getResult();
        } else {
            $subcategorias = $em->getManager()->getRepository(Subcategoria::class)->findByCategoria($categoria);
        }


        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }
        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $subcategorias,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('subcategoria/index.html.twig', [
                    'subcategorias' => $pagination,
                    'categoria' => $categoria,
                    'nombre' => $nombre,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(Categoria $categoria, Subcategoria $subcategoria, Request $request, $ex = null, $cod = null, $msg = null) {

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($request->request->get('boton') == "editar") {

                $comprobar = $em->getRepository(Subcategoria::class)->findOneBy(array('nombre' => $request->request->get('nombre'), 'categoria' => $categoria->getId()));
                if ($comprobar) {
                    if ($comprobar != $subcategoria) {
                        return $this->redirectToRoute('subcategories_show', array(
                                    'id' => $categoria->getId(),
                                    'sub' => $subcategoria->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'La subcategoría no se ha podido modificar, el subcategoría ya está en uso',
                        ));
                    }
                }

                $subcategoria->setNombre($request->request->get('subcategoria'));

                $em->getManager()->flush();

                return $this->redirectToRoute('subcategories_show', array(
                            'id' => $categoria->getId(),
                            'sub' => $subcategoria->getId(),
                            'excepcion' => 1,
                            'codigo' => '¡Correcto!',
                            'mensaje' => 'La subcategoría se ha modificado correctamente',
                ));
            }
        }


        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('subcategoria/show.html.twig', [
                    'subcategoria' => $subcategoria,
                    'categoria' => $categoria,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

}
