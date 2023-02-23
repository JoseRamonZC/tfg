<?php

namespace App\Controller;

use App\Entity\Categoria;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class CategoryController extends AbstractController {

    public function index(Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator,UserInterface $usuario) {
        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $comprobar = $em->getRepository(Categoria::class)->findOneByNombre($request->request->get('categoria'));
            if (isset($comprobar)) {
                return $this->redirectToRoute('categories_index', array(
                            'excepcion' => 2,
                            'codigo' => '¡Error!',
                            'mensaje' => 'La categoría ya está en uso',
                ));
            }

            $categoria = new Categoria();

            $categoria->setNombre($request->request->get('categoria'));
            
            $categoria->setUsuarioCreado($usuario);
            $categoria->setFechaCreado(new \DateTime('now'));

            $em->getManager()->persist($categoria);
            $em->getManager()->flush();

            return $this->redirectToRoute('categories_index', array(
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'La categoría se ha añadido correctamente',
            ));
        }

        if (!isset($_SESSION['buscar_categoria'])) {
            $_SESSION['buscar_categoria'] = "";
        }

        $categoria = $request->query->get('categoria');

        if ($categoria) {
            $qcategoria = 'WHERE x.nombre LIKE :categoria ';
        } else {
            $qcategoria = null;
        }

        $qCategorias = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Categoria x '
                . $qcategoria
                . 'ORDER BY x.nombre ASC'
        );

        if ($categoria) {
            $qCategorias->setParameter('categoria', "%" . $categoria . "%");
        }

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }
        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $qCategorias,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('categoria/index.html.twig', [
                    'categorias' => $pagination,
                    'categoria' => $categoria,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(Categoria $categoria, Request $request, $ex = null, $cod = null, $msg = null) {

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $comprobar = $em->getRepository(Categoria::class)->findOneByNombre($request->request->get('categoria'));
            if ($comprobar) {
                if ($comprobar != $categoria) {
                    return $this->redirectToRoute('categories_show', array(
                                'id' => $categoria->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'La categoría no se ha podido modificar, la categoría ya existe',
                    ));
                }
            }

            $categoria->setNombre($request->request->get('categoria'));

            $em->getManager()->flush();

            return $this->redirectToRoute('categories_show', array(
                        'id' => $categoria->getId(),
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'La categoría se ha modificado correctamente',
            ));
        }

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('categoria/show.html.twig', [
                    'categoria' => $categoria,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

}
