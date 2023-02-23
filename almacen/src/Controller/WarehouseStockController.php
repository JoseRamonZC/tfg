<?php

namespace App\Controller;

use App\Entity\Almacen;
use App\Entity\AlmacenProducto;
use App\Entity\Inventario;
use App\Entity\InventarioLote;
use App\Entity\Categoria;
use App\Entity\Subcategoria;
use App\Entity\Proveedor;
use App\Entity\Producto;
use App\Entity\Lote;
use App\Entity\LogInventario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use \Gumlet\ImageResize;

class WarehouseStockController extends AbstractController {

    public function index(Almacen $almacen, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator) {
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
        $cantidad1 = $request->query->get('cantidad1');
        $cantidad2 = $request->query->get('cantidad2');
        $stock = $request->query->get('stock');

        if ($producto) {
            $qproducto = 'AND (p.nombre LIKE :producto OR p.codigo LIKE :producto OR p.referencia LIKE :producto OR p.codigoBarra LIKE :producto) ';
        } else {
            $qproducto = null;
        }

        if ($id) {
            $qid = 'AND p.id = ' . $id;
        } else {
            $qid = null;
        }

        if ($stock) {
            $qstock = 'AND x.cantidad <= x.umbral ';
        } else {
            $qstock = null;
        }

        if ($categoria) {
            $qcategoria = 'AND p.categoria = ' . $categoria;
        } else {
            $qcategoria = null;
        }

        if ($cantidad1 or $cantidad2 or $cantidad1 == "0" or $cantidad2 == "0") {
            if (!$cantidad1) {
                $cantidad1 = $cantidad2;
            }
            if (!$cantidad2) {
                $cantidad2 = $cantidad1;
            }
            if ($cantidad1 > $cantidad2) {
                $cantidad1 = $cantidad2;
            }

            $qcantidad = 'AND x.cantidad BETWEEN ' . $cantidad1 . ' AND ' . $cantidad2 . ' ';
        } else {
            $qcantidad = null;
        }

        $qInventario = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:AlmacenProducto x '
                . 'JOIN x.producto p '
                . 'WHERE x.almacen = ' . $almacen->getId() . ' '
                . 'AND x.cantidad > 0 '
                . $qid
                . $qproducto
                . $qstock
                . $qcategoria
                . $qcantidad
                . 'ORDER BY p.nombre ASC'
        );

        if ($producto) {
            $qInventario->setParameter('producto', "%" . $producto . "%");
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
                $qInventario,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('almacen/inventario/index.html.twig', [
                    'inventario' => $pagination,
                    'almacen' => $almacen,
                    'categorias' => $categorias,
                    'id' => $id,
                    'producto' => $producto,
                    'categoria' => $categoria,
                    'cantidad1' => $cantidad1,
                    'cantidad2' => $cantidad2,
                    'stock' => $stock,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(Almacen $almacen, AlmacenProducto $almacenProducto, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null) {

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($almacenProducto->getAlmacen()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $ruta = '../archivos/fotos';
            if (!is_dir('../archivos')) {
                mkdir('../archivos');
            }
            if (!is_dir($ruta)) {
                mkdir($ruta);
            }

            $producto = $almacenProducto->getProducto();

            $comprobar = $em->getRepository(Producto::class)->findOneBy(array(
                'nombre' => $request->request->get('nombre'),
                'codigo' => $request->request->get('codigo')
                    )
            );
            if ($comprobar) {
                if ($comprobar != $producto) {
                    return $this->redirectToRoute('products_show', array(
                                'id' => $producto->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'El producto no se ha podido modificar, el producto ya existe',
                    ));
                }
            }

            if ($_FILES['foto']['error'] != 4) {
                $nombre = $_FILES['foto']['name'];
                $extension = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));
                $nombre_tmp = $_FILES['foto']['tmp_name'];
                $nombreArchivo = "PRODUCTO_" . time() . "_" . rand(0, 100) . "." . $extension;

                $porcion = 1200;

                list($ancho_orig, $alto_orig) = getimagesize($nombre_tmp);

                if ($porcion > $ancho_orig) {
                    if ($ancho_orig > $alto_orig) {
                        $tama = $alto_orig;
                    } else {
                        $tama = $ancho_orig;
                    }
                } else {
                    if ($porcion > $alto_orig) {
                        $tama = $alto_orig;
                    } else {
                        $tama = $porcion;
                    }
                }

                $image = new ImageResize($nombre_tmp);
                $image->resizeToBestFit($tama, $tama);
                $image->save($nombre_tmp);

                rename($nombre_tmp, $ruta . "/" . $nombreArchivo);
                if ($producto->getFoto() and file_exists($ruta . "/" . $producto->getFoto())) {
                    unlink($ruta . "/" . $producto->getFoto());
                }
                $producto->setFoto($nombreArchivo);
            }

            $producto->setNombre($request->request->get('nombre'));
            $producto->setCodigo($request->request->get('codigo'));
            $producto->setReferencia($request->request->get('referencia'));
            $producto->setCodigoBarra($request->request->get('codigoBarra'));
            $producto->setPrecio((float) $request->request->get('precio'));
            $producto->setDescripcion($request->request->get('descripcion'));

            $categoria = $em->getRepository(Categoria::class)->find($request->request->get('categoria'));
            $subcategoria = $em->getRepository(Subcategoria::class)->find($request->request->get('subcategoria'));

            if ($categoria) {
                $producto->setCategoria($categoria);
                if ($subcategoria) {
                    if ($subcategoria->getCategoria() == $categoria) {
                        $producto->setSubcategoria($subcategoria);
                    } else {
                        $producto->setSubcategoria(null);
                    }
                } else {
                    $producto->setSubcategoria(null);
                }
            } else {
                $producto->setCategoria(null);
                $producto->setSubcategoria(null);
            }

            $almacenProducto->setCantidad($request->request->get('cantidad'));
            $almacenProducto->setUmbral($request->request->get('umbral'));

            $em->getManager()->flush();

            return $this->redirectToRoute('warehouse_stock_show', array(
                        'almacen' => $almacen->getId(),
                        'id' => $almacenProducto->getId(),
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El producto se ha modificado correctamente',
            ));
        }

        $categorias = $em->getRepository(Categoria::class)->findAll();
        $subcategorias = $em->getManager()->getRepository(Subcategoria::class)->findAll();

        $qLotes = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Lote x '
                . 'JOIN x.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE ap.almacen = ' . $almacen->getId() . ' '
                . 'AND ap.id = ' . $almacenProducto->getId() . ' '
                . 'AND x.cantidad > 0 '
                . 'ORDER BY p.nombre ASC'
        );
        $lotes = $qLotes->getResult();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('almacen/inventario/show.html.twig', [
                    'almacen' => $almacen,
                    'lotes' => $lotes,
                    'almacenProducto' => $almacenProducto,
                    'categorias' => $categorias,
                    'subcategorias' => $subcategorias,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function showLot(Almacen $almacen, AlmacenProducto $almacenProducto, Lote $lote, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null) {

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($almacenProducto->getAlmacen()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($lote->getProducto()->getAlmacen()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $cantidadAnterior = $lote->getCantidad();

            $lote->getProducto()->setCantidad($lote->getProducto()->getCantidad() - $cantidadAnterior);
            $lote->setCantidad($lote->getCantidad() - $cantidadAnterior);

            $cantidad = $request->request->get('cantidad');

            $almacenProducto->setCantidad((int) ($almacenProducto->getCantidad() + $cantidad));

            $lote->setCantidad((int) ($lote->getCantidad() + $cantidad));
            $lote->setFechaCaducidad($request->request->get('fechaCaducidad') ? new \DateTime($request->request->get('fechaCaducidad')) : null);

            $em->getManager()->flush();

            return $this->redirectToRoute('warehouse_stock_lot_show', array(
                        'almacen' => $almacen->getId(),
                        'id' => $almacenProducto->getId(),
                        'lote' => $lote->getId(),
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El lote se ha modificado correctamente',
            ));
        }

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('almacen/inventario/lote.html.twig', [
                    'almacen' => $almacen,
                    'lote' => $lote,
                    'almacenProducto' => $almacenProducto,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

}
