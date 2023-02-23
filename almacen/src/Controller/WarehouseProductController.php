<?php

namespace App\Controller;

use App\Entity\Categoria;
use App\Entity\Almacen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use \Gumlet\ImageResize;

class WarehouseProductController extends AbstractController {

    public function index(Almacen $almacen, Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator, UserInterface $usuario) {
        $em = $this->getDoctrine();

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!isset($_SESSION['buscar_almacen'])) {
            $_SESSION['buscar_almacen'] = "";
        }

        $producto = $request->query->get('producto');
        $id = $request->query->get('id');
        $categoria = $request->query->get('categoria');

        if ($producto) {
            $qproducto = 'AND x.nombre LIKE :producto OR x.codigo LIKE :producto OR x.referencia LIKE :producto OR x.codigoBarra LIKE :producto ';
        } else {
            $qproducto = null;
        }

        if ($id) {
            $qid = 'AND x.id = ' . $id;
        } else {
            $qid = null;
        }

        if ($categoria) {
            $qcategoria = 'AND x.categoria = ' . $categoria;
        } else {
            $qcategoria = null;
        }

        $qProductos = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Producto x '
                . 'WHERE 1 = 1 '
                . $qproducto
                . $qid
                . $qcategoria
                . 'ORDER BY x.nombre ASC'
        );

        if ($producto) {
            $qProductos->setParameter('producto', "%" . $producto . "%");
        }

        $categorias = $em->getRepository(Categoria::class)->findAll();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }
        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $qProductos,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('almacen/producto/index.html.twig', [
                    'productos' => $pagination,
                    'categorias' => $categorias,
                    'id' => $id,
                    'producto' => $producto,
                    'categoria' => $categoria,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }
}
