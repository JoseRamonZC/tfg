<?php

namespace App\Controller;

use App\Entity\Producto;
use App\Entity\Categoria;
use App\Entity\Subcategoria;
use App\Entity\Log;
use App\Entity\LogImportacion;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use \Gumlet\ImageResize;
use \PHPExcel_IOFactory;

class ProductController extends AbstractController {

    public function getIPAddress() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function index(Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator, UserInterface $usuario) {
        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($request->request->get('boton') == "importar") {
                $log = new Log();

                $log->setAccion('IMPORTAR ARCHIVO DE PRODUCTOS');
                $log->setIp($this->getIPAddress());
                $log->setUsuario($usuario ? $usuario->getId() : null);

                $em->getManager()->persist($log);
                $em->getManager()->flush();

//                    "Nombre;" .
//                    "Código;" .
//                    "Referencia;" .
//                    "Código de barras;" .
//                    "Precio;" .
//                    "Categoría;" .
//                    "Subcategoría;" .
//                    "Descripción" .

                if ($_FILES['archivo']['error'] != 4) {
                    $nombre = $_FILES['archivo']['name'];
                    $extension = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));

                    $logImportacion = new LogImportacion();

                    $logImportacion->setUsuario($usuario->getId());
                    $logImportacion->setArchivo(base64_encode($nombre));

                    $em->getManager()->persist($logImportacion);
                    $em->getManager()->flush();

                    if ($extension != "csv") {
                        return $this->redirectToRoute('products_index', array(
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'El archivo no es un CSV',
                        ));
                    }

                    $archivo_tmp = $_FILES['archivo']['tmp_name'];

                    $cgestor = fopen($archivo_tmp, "r");

                    $cfila = 1;
                    while (($cdatos = fgetcsv($cgestor, 0, ";")) !== FALSE) {
                        $nombre = trim($cdatos[0]);
                        $codigo = trim($cdatos[1]);
                        $referencia = trim($cdatos[2]);
                        $codigoBarras = trim($cdatos[3]);

                        if (!$codigo and!$referencia and!$codigoBarras) {
                            return $this->redirectToRoute('products_index', array(
                                        'excepcion' => 2,
                                        'codigo' => '¡Error!',
                                        'mensaje' => 'El producto de la línea ' . $cfila . ' debe estar identificado, como mínimo, con un código, referencia o código de barras.',
                            ));
                        }

                        if (!$nombre) {
                            return $this->redirectToRoute('products_index', array(
                                        'excepcion' => 2,
                                        'codigo' => '¡Error!',
                                        'mensaje' => 'El producto de la línea ' . $cfila . ' debe estar identificado por un nombre de producto.',
                            ));
                        }
                        $cfila++;
                    }
                    fclose($cgestor);

                    $gestor = fopen($archivo_tmp, "r");
                    $fila = 1;
                    $importados = 0;
                    $noImportados = 0;
                    $existe = null;

                    while (($datos = fgetcsv($gestor, 0, ";")) !== FALSE) {

                        $codigo = trim($datos[1]);
                        $referencia = trim($datos[2]);
                        $codigoBarras = trim($datos[3]);

                        $qcodigo = null;
                        $qreferencia = null;
                        $qcodigoBarras = null;

                        if ($codigo) {
                            $qcodigo = 'AND (x.codigo = :codigo ';
                            if ($referencia) {
                                $qreferencia = 'AND x.referencia = :referencia ';
                                if ($codigoBarras) {
                                    $qcodigoBarras = 'OR x.codigoBarra = :codigoBarra) ';
                                } else {
                                    $qcodigoBarras = ")";
                                }
                            } elseif ($codigoBarras) {
                                $qcodigoBarras = 'AND x.codigoBarra = :codigoBarra) ';
                            } else {
                                $qcodigoBarras = ")";
                            }
                        } elseif ($referencia) {
                            $qreferencia = 'AND (x.referencia = :referencia ';
                            if ($codigoBarras) {
                                $qcodigoBarras = 'OR x.codigoBarra = :codigoBarra) ';
                            } else {
                                $qcodigoBarras = ")";
                            }
                        } elseif ($codigoBarras) {
                            $qcodigoBarras = 'AND x.codigoBarra = :codigoBarra ';
                        }

                        $qComprobarProductos = $em->getManager()->createQuery(''
                                . 'SELECT count(x.id) as total FROM App:Producto x '
                                . 'WHERE 1 = 1 '
                                . $qcodigo
                                . $qreferencia
                                . $qcodigoBarras
                        );

                        if ($codigo) {
                            $qComprobarProductos->setParameter('codigo', $codigo);
                        }
                        if ($referencia) {
                            $qComprobarProductos->setParameter('referencia', $referencia);
                        }
                        if ($codigoBarras) {
                            $qComprobarProductos->setParameter('codigoBarra', $codigoBarras);
                        }

                        $comprobarProductos = $qComprobarProductos->getResult();

                        if ($comprobarProductos[0]['total'] > 0) {
                            $existe[] = $fila;
                            $noImportados++;
                        } else {

                            $producto = new Producto();

                            $producto->setNombre(trim($datos[0]));
                            $producto->setCodigo(trim($datos[1]));
                            $producto->setReferencia(trim($datos[2]));
                            $producto->setCodigoBarra(trim($datos[3]));
                            $producto->setPrecio((float) (trim($datos[4]) ? trim($datos[4]) : 0));
                            $producto->setCantidad(0);
                            $producto->setDescripcion(trim($datos[7]));

                            $categoria = $em->getRepository(Categoria::class)->findOneByNombre(trim($datos[5]));
                            $subcategoria = $em->getRepository(Subcategoria::class)->findOneByNombre(trim($datos[6]));

                            if ($categoria) {
                                $producto->setCategoria($categoria);
                                if ($subcategoria) {
                                    if ($subcategoria->getCategoria() == $categoria) {
                                        $producto->setSubcategoria($subcategoria);
                                    } else {
                                        $subcategoria = new Subcategoria();

                                        $subcategoria->setCategoria($categoria);
                                        $subcategoria->setNombre(trim($datos[6]));

                                        $subcategoria->setFechaCreado(new \DateTime('now'));
                                        $subcategoria->setUsuarioCreado($this->getUser());

                                        $em->getManager()->persist($subcategoria);
                                        $em->getManager()->flush();
                                    }
                                } else {
                                    $producto->setSubcategoria(null);
                                }
                            } else {
                                if (trim($datos[5])) {
                                    $categoria = new Categoria();

                                    $categoria->setNombre(trim($datos[5]));

                                    $categoria->setFechaCreado(new \DateTime('now'));
                                    $categoria->setUsuarioCreado($this->getUser());

                                    $em->getManager()->persist($categoria);
                                    $em->getManager()->flush();
                                    if (trim($datos[6])) {
                                        $subcategoria = new Subcategoria();

                                        $subcategoria->setCategoria($categoria);
                                        $subcategoria->setNombre(trim($datos[6]));

                                        $subcategoria->setFechaCreado(new \DateTime('now'));
                                        $subcategoria->setUsuarioCreado($this->getUser());

                                        $em->getManager()->persist($subcategoria);
                                        $em->getManager()->flush();
                                    } else {
                                        $producto->setSubcategoria(null);
                                    }
                                } else {
                                    $producto->setCategoria(null);
                                    $producto->setSubcategoria(null);
                                }
                            }

                            $producto->setUsuarioCreado($usuario);
                            $producto->setFechaCreado(new \DateTime('now'));

                            $em->getManager()->persist($producto);
                            $em->getManager()->flush();

                            $importados++;
                        }
                        $fila++;
                    }
                    fclose($gestor);

                    return $this->redirectToRoute('products_index', array(
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'Se han leído ' . ($fila-1) . ' productos, de los cuales ' . $importados . ' han sido importados y ' . $noImportados . ' no han sido importados' . ($existe ? ', los números de filas son: ' . implode(", ", $existe) : null)
                    ));
                } else {
                    return $this->redirectToRoute('products_index', array(
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'No se ha subido ningun archivo',
                    ));
                }
            }

            $comprobar = $em->getRepository(Producto::class)->findOneBy(array(
                'nombre' => $request->request->get('nombre'),
                'codigo' => $request->request->get('codigo')
                    )
            );
            if (isset($comprobar)) {
                return $this->redirectToRoute('products_index', array(
                            'excepcion' => 2,
                            'codigo' => '¡Error!',
                            'mensaje' => 'El producto ya está en uso',
                ));
            }

            $ruta = '../archivos/fotos';
            if (!is_dir('../archivos')) {
                mkdir('../archivos');
            }
            if (!is_dir($ruta)) {
                mkdir($ruta);
            }

            $producto = new Producto();

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
                $image->save($nombreArchivo);

                rename($nombreArchivo, $ruta . "/" . $nombreArchivo);
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
            $producto->setCantidad(0);
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

            $producto->setUsuarioCreado($usuario);
            $producto->setFechaCreado(new \DateTime('now'));

            $em->getManager()->persist($producto);
            $em->getManager()->flush();

            return $this->redirectToRoute('products_index', array(
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El producto se ha añadido correctamente',
            ));
        }

        if (!isset($_SESSION['buscar_producto'])) {
            $_SESSION['buscar_producto'] = "";
        }

        $producto = $request->query->get('producto');
        $id = $request->query->get('id');
        $categoria = $request->query->get('categoria');

        if ($producto) {
            $qproducto = 'AND (x.nombre LIKE :producto OR x.codigo LIKE :producto OR x.referencia LIKE :producto OR x.codigoBarra LIKE :producto) ';
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
        $subcategorias = $em->getManager()->getRepository(Subcategoria::class)->findAll();

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

        return $this->render('producto/index.html.twig', [
                    'productos' => $pagination,
                    'categorias' => $categorias,
                    'subcategorias' => $subcategorias,
                    'id' => $id,
                    'producto' => $producto,
                    'categoria' => $categoria,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(Producto $producto, Request $request, $ex = null, $cod = null, $msg = null) {

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $ruta = '../archivos/fotos';
            if (!is_dir('../archivos')) {
                mkdir('../archivos');
            }
            if (!is_dir($ruta)) {
                mkdir($ruta);
            }

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

            $em->getManager()->flush();

            return $this->redirectToRoute('products_show', array(
                        'id' => $producto->getId(),
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El producto se ha modificado correctamente',
            ));
        }

        $categorias = $em->getRepository(Categoria::class)->findAll();
        $subcategorias = $em->getManager()->getRepository(Subcategoria::class)->findAll();

        $qLotes = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:AlmacenProducto x '
                . 'JOIN x.producto p '
                . 'WHERE x.cantidad > 0 '
                . 'AND p.id = ' . $producto->getId() . ' '
                . 'ORDER BY x.cantidad ASC'
        );
        $lotes = $qLotes->getResult();

        $qImportaciones = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:ImportacionLote x '
                . 'JOIN x.lote l '
                . 'JOIN x.importacion i '
                . 'JOIN l.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE p.id = ' . $producto->getId() . ' '
                . 'ORDER BY i.fecha DESC'
        );

        $importaciones = $qImportaciones->getResult();

        $qTraslados = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:TrasladoLote x '
                . 'JOIN x.lote l '
                . 'JOIN x.traslado i '
                . 'JOIN l.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE p.id = ' . $producto->getId() . ' '
                . 'ORDER BY i.fecha DESC'
        );

        $traslados = $qTraslados->getResult();

        $qAsignaciones = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:AsignacionLote x '
                . 'JOIN x.lote l '
                . 'JOIN x.asignacion i '
                . 'JOIN l.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE p.id = ' . $producto->getId() . ' '
                . 'ORDER BY i.fecha DESC'
        );

        $asignaciones = $qAsignaciones->getResult();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('producto/show.html.twig', [
                    'producto' => $producto,
                    'categorias' => $categorias,
                    'subcategorias' => $subcategorias,
                    'lotes' => $lotes,
                    'importaciones' => $importaciones,
                    'traslados' => $traslados,
                    'asignaciones' => $asignaciones,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function photo(Producto $producto) {
        return $this->file("../archivos/fotos/" . $producto->getFoto());
    }

}
