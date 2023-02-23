<?php

namespace App\Controller;

use App\Entity\Almacen;
use App\Entity\AlmacenProducto;
use App\Entity\Importacion;
use App\Entity\ImportacionLote;
use App\Entity\Categoria;
use App\Entity\Subcategoria;
use App\Entity\Proveedor;
use App\Entity\Producto;
use App\Entity\Lote;
use App\Entity\LogImportacion;
use App\Entity\Log;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class WarehouseImportController extends AbstractController {

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

    public function index(Almacen $almacen, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator) {
        $em = $this->getDoctrine();

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!isset($_SESSION['buscar_almacen'])) {
            $_SESSION['buscar_almacen'] = "";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            if ($request->request->get('boton') == "importarActual") {
                $log = new Log();

                $log->setAccion('IMPORTAR ARCHIVO DE STOCK ALMACÉN ' . $almacen->getId());
                $log->setIp($this->getIPAddress());
                $log->setUsuario($usuario ? $usuario->getId() : null);

                $em->getManager()->persist($log);
                $em->getManager()->flush();

//                    "id;" .
//                    "Código;" .
//                    "Referencia;" .
//                    "Código de barras;" .
//                    "Nombre;" .
//                    "Lote;" .
//                    "Precio;" .
//                    "Cantidad;" .
//                    "Fecha caducidad" .

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

                        $id = trim($cdatos[0]);
                        $codigo = trim($cdatos[1]);
                        $referencia = trim($cdatos[2]);
                        $codigoBarras = trim($cdatos[3]);
                        $nombre = trim($cdatos[4]);
                        $lote = trim($cdatos[5]);
                        $cantidad = trim($cdatos[7]);

                        if (!$codigo and!$referencia and!$codigoBarras and!$nombre and!$id) {
                            return $this->redirectToRoute('warehouse_import_index', array(
                                        'almacen' => $almacen->getId(),
                                        'excepcion' => 2,
                                        'codigo' => '¡Error!',
                                        'mensaje' => 'El producto de la línea ' . $cfila . ' debe estar identificado, como mínimo, con el id del producto (si el producto existe), código, referencia o código de barras.',
                            ));
                        }

                        if (!$cantidad or $cantidad < 1) {
                            return $this->redirectToRoute('warehouse_import_index', array(
                                        'almacen' => $almacen->getId(),
                                        'excepcion' => 2,
                                        'codigo' => '¡Error!',
                                        'mensaje' => 'El producto de la línea ' . $cfila . ' debe tener una cantidad.',
                            ));
                        }

                        if (!$lote) {
                            return $this->redirectToRoute('warehouse_import_index', array(
                                        'almacen' => $almacen->getId(),
                                        'excepcion' => 2,
                                        'codigo' => '¡Error!',
                                        'mensaje' => 'El producto de la línea ' . $cfila . ' debe tener un lote.',
                            ));
                        }
                        $cfila++;
                    }
                    fclose($cgestor);

                    $gestor = fopen($archivo_tmp, "r");
                    $fila = 1;
                    $productoimportados = 0;
                    $loteimportados = 0;
                    $productonoexiste = null;
                    $lotenoexiste = null;

                    $importacion = new Importacion();

                    $importacion->setFecha(null);

                    $importacion->setAlmacen($almacen);
                    $importacion->setObservaciones("Importación del stock");

                    $importacion->setFechaCreado(new \DateTime('now'));
                    $importacion->setUsuarioCreado($usuario);

                    $em->getManager()->persist($importacion);
                    $em->getManager()->flush();

                    while (($datos = fgetcsv($gestor, 0, ";")) !== FALSE) {

                        $id = trim($datos[0]);
                        $codigo = trim($datos[1]);
                        $referencia = trim($datos[2]);
                        $codigoBarras = trim($datos[3]);

                        if ($id) {
                            $producto = $em->getRepository(Producto::class)->findOneById($id);
                            if (!$producto) {
                                if ($codigo) {
                                    $producto = $em->getRepository(Producto::class)->findOneByCodigo($codigo);
                                    if (!$producto) {
                                        if ($referencia) {
                                            $producto = $em->getRepository(Producto::class)->findOneByReferencia($referencia);
                                            if (!$producto) {
                                                if ($codigoBarras) {
                                                    $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                                }
                                            }
                                        } elseif ($codigoBarras) {
                                            $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                        }
                                    }
                                } elseif ($referencia) {
                                    $producto = $em->getRepository(Producto::class)->findOneByReferencia($referencia);
                                    if (!$producto) {
                                        if ($codigoBarras) {
                                            $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                        }
                                    }
                                } elseif ($codigoBarras) {
                                    $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                }
                            }
                        } elseif ($codigo) {
                            $producto = $em->getRepository(Producto::class)->findOneByCodigo($codigo);
                            if (!$producto) {
                                if ($referencia) {
                                    $producto = $em->getRepository(Producto::class)->findOneByReferencia($referencia);
                                    if (!$producto) {
                                        if ($codigoBarras) {
                                            $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                        }
                                    }
                                } elseif ($codigoBarras) {
                                    $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                }
                            }
                        } elseif ($referencia) {
                            $producto = $em->getRepository(Producto::class)->findOneByReferencia($referencia);
                            if (!$producto) {
                                if ($codigoBarras) {
                                    $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                }
                            }
                        } elseif ($codigoBarras) {
                            $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                        }

                        if (!$producto) {
                            $producto = new Producto();

                            $producto->setNombre(trim($datos[4]));
                            $producto->setCodigo(trim($datos[1]));
                            $producto->setReferencia(trim($datos[2]));
                            $producto->setCodigoBarra(trim($datos[3]));
                            $producto->setPrecio((float) (trim($datos[6]) ? trim($datos[6]) : 0));
                            $producto->setCantidad(0);

                            $producto->setUsuarioCreado($usuario);
                            $producto->setFechaCreado(new \DateTime('now'));

                            $em->getManager()->persist($producto);
                            $em->getManager()->flush();

                            $productonoexiste[] = $fila;
                            $productoimportados++;
                        }


                        $producto->setPrecio((float) (trim($datos[6]) ? trim($datos[6]) : 0));

                        $almacenProducto = $em->getRepository(AlmacenProducto::class)->findOneBy(array(
                            'producto' => $producto->getId(),
                            'almacen' => $almacen->getId()
                        ));

                        if (!$almacenProducto) {
                            $almacenProducto = new AlmacenProducto();

                            $almacenProducto->setAlmacen($almacen);
                            $almacenProducto->setCantidad((int) 0);
                            $almacenProducto->setProducto($producto);
                            $almacenProducto->setUmbral((int) 0);

                            $almacenProducto->setFechaCreado(new \DateTime('now'));
                            $almacenProducto->setUsuarioCreado($usuario);

                            $em->getManager()->persist($almacenProducto);
                            $em->getManager()->flush();
                        }

                        $almacenProducto->setCantidad((int) ($almacenProducto->getCantidad() + trim($datos[7])));

                        $lote = $em->getRepository(Lote::class)->findOneBy(array(
                            'producto' => $almacenProducto->getId(),
                            'lote' => trim($datos[5])
                        ));

                        if (!$lote) {
                            $lote = new Lote();

                            $lote->setCantidad((int) 0);
                            $lote->setProducto($almacenProducto);
                            $lote->setLote(trim($datos[5]));
                            $lote->setFechaCaducidad(trim($datos[8]) ? new \DateTime(trim($datos[8])) : null);

                            $lote->setFechaCreado(new \DateTime('now'));
                            $lote->setUsuarioCreado($usuario);

                            $em->getManager()->persist($lote);
                            $em->getManager()->flush();

                            $lotenoexiste[] = $fila;
                            $loteimportados++;
                        }

                        $lote->setCantidad((int) ($lote->getCantidad() + trim($datos[7])));

                        $importacionLote = new ImportacionLote();

                        $importacionLote->setImportacion($importacion);
                        $importacionLote->setCantidad((int) trim($datos[7]));
                        $importacionLote->setPrecio((float) (trim($datos[6]) ? trim($datos[6]) : 0));
                        $importacionLote->setLote($lote);

                        $importacionLote->setFechaCreado(new \DateTime('now'));
                        $importacionLote->setUsuarioCreado($usuario);

                        $em->getManager()->persist($importacionLote);
                        $em->getManager()->flush();

                        $fila++;
                    }
                    fclose($gestor);

                    return $this->redirectToRoute('warehouse_import_index', array(
                                'almacen' => $almacen->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'Se han guardado ' . ($fila - 1) . ' lotes, de los cuales ' . $productoimportados . ' son productos nuevos ' . ($productonoexiste ? ', (números de filas: ' . implode(", ", $productonoexiste) . ")" : null) . ' y ' . $loteimportados . ' son lotes nuevos ' . ($lotenoexiste ? ', (números de filas: ' . implode(", ", $lotenoexiste) . ")" : null)
                    ));
                } else {
                    return $this->redirectToRoute('warehouse_import_index', array(
                                'almacen' => $almacen->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'No se ha subido ningun archivo',
                    ));
                }
            }

            if ($request->request->get('boton') == "importar") {
                $log = new Log();

                $log->setAccion('IMPORTAR ARCHIVO DE STOCK ALMACÉN ' . $almacen->getId());
                $log->setIp($this->getIPAddress());
                $log->setUsuario($usuario ? $usuario->getId() : null);

                $em->getManager()->persist($log);
                $em->getManager()->flush();

//                    "id;" .
//                    "Código;" .
//                    "Referencia;" .
//                    "Código de barras;" .
//                    "Nombre;" .
//                    "Lote;" .
//                    "Precio;" .
//                    "Cantidad;" .
//                    "Fecha caducidad" .

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

                        $id = trim($cdatos[0]);
                        $codigo = trim($cdatos[1]);
                        $referencia = trim($cdatos[2]);
                        $codigoBarras = trim($cdatos[3]);
                        $nombre = trim($cdatos[4]);
                        $lote = trim($cdatos[5]);
                        $cantidad = trim($cdatos[7]);

                        if (!$codigo and!$referencia and!$codigoBarras and!$nombre and!$id) {
                            return $this->redirectToRoute('warehouse_import_index', array(
                                        'almacen' => $almacen->getId(),
                                        'excepcion' => 2,
                                        'codigo' => '¡Error!',
                                        'mensaje' => 'El producto de la línea ' . $cfila . ' debe estar identificado, como mínimo, con el id del producto (si el producto existe), código, referencia o código de barras.',
                            ));
                        }

                        if (!$cantidad or $cantidad < 1) {
                            return $this->redirectToRoute('warehouse_import_index', array(
                                        'almacen' => $almacen->getId(),
                                        'excepcion' => 2,
                                        'codigo' => '¡Error!',
                                        'mensaje' => 'El producto de la línea ' . $cfila . ' debe tener una cantidad.',
                            ));
                        }

                        if (!$lote) {
                            return $this->redirectToRoute('warehouse_import_index', array(
                                        'almacen' => $almacen->getId(),
                                        'excepcion' => 2,
                                        'codigo' => '¡Error!',
                                        'mensaje' => 'El producto de la línea ' . $cfila . ' debe tener un lote.',
                            ));
                        }
                        $cfila++;
                    }
                    fclose($cgestor);

                    $gestor = fopen($archivo_tmp, "r");
                    $fila = 1;
                    $productoimportados = 0;
                    $loteimportados = 0;
                    $productonoexiste = null;
                    $lotenoexiste = null;

                    $prov = trim($request->request->get('proveedor'));
                    if (!$prov and trim($request->request->get('otroproveedor'))) {

                        $proveedor = $em->getRepository(Proveedor::class)->findOneByNombre($request->request->get('otroproveedor'));

                        if (!$proveedor) {
                            $proveedor = new Proveedor();

                            $proveedor->setNombre($request->request->get('otroproveedor'));

                            $proveedor->setUsuarioCreado($usuario);
                            $proveedor->setFechaCreado(new \DateTime('now'));

                            $em->getManager()->persist($proveedor);
                            $em->getManager()->flush();
                        }
                        $prov = $proveedor->getId();
                    }

                    $fecha = $request->request->get('fecha');
                    $albaran = $request->request->get('albaran');
                    $factura = $request->request->get('factura');
                    $observaciones = $request->request->get('observaciones');
                    $importacion = new Importacion();

                    if ($fecha) {
                        $importacion->setFecha(new \DateTime($fecha));
                    } else {
                        $importacion->setFecha(null);
                    }

                    $importacion->setAlmacen($almacen);
                    $importacion->setAlbaran($albaran);
                    $importacion->setFactura($factura);
                    $importacion->setProveedor($em->getRepository(Proveedor::class)->find($prov));
                    $importacion->setObservaciones($observaciones);

                    $importacion->setFechaCreado(new \DateTime('now'));
                    $importacion->setUsuarioCreado($usuario);

                    $em->getManager()->persist($importacion);
                    $em->getManager()->flush();

                    $em->getManager()->persist($importacion);
                    $em->getManager()->flush();

                    while (($datos = fgetcsv($gestor, 0, ";")) !== FALSE) {

                        $id = trim($datos[0]);
                        $codigo = trim($datos[1]);
                        $referencia = trim($datos[2]);
                        $codigoBarras = trim($datos[3]);

                        if ($id) {
                            $producto = $em->getRepository(Producto::class)->findOneById($id);
                            if (!$producto) {
                                if ($codigo) {
                                    $producto = $em->getRepository(Producto::class)->findOneByCodigo($codigo);
                                    if (!$producto) {
                                        if ($referencia) {
                                            $producto = $em->getRepository(Producto::class)->findOneByReferencia($referencia);
                                            if (!$producto) {
                                                if ($codigoBarras) {
                                                    $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                                }
                                            }
                                        } elseif ($codigoBarras) {
                                            $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                        }
                                    }
                                } elseif ($referencia) {
                                    $producto = $em->getRepository(Producto::class)->findOneByReferencia($referencia);
                                    if (!$producto) {
                                        if ($codigoBarras) {
                                            $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                        }
                                    }
                                } elseif ($codigoBarras) {
                                    $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                }
                            }
                        } elseif ($codigo) {
                            $producto = $em->getRepository(Producto::class)->findOneByCodigo($codigo);
                            if (!$producto) {
                                if ($referencia) {
                                    $producto = $em->getRepository(Producto::class)->findOneByReferencia($referencia);
                                    if (!$producto) {
                                        if ($codigoBarras) {
                                            $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                        }
                                    }
                                } elseif ($codigoBarras) {
                                    $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                }
                            }
                        } elseif ($referencia) {
                            $producto = $em->getRepository(Producto::class)->findOneByReferencia($referencia);
                            if (!$producto) {
                                if ($codigoBarras) {
                                    $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                                }
                            }
                        } elseif ($codigoBarras) {
                            $producto = $em->getRepository(Producto::class)->findOneByCodigoBarra($codigoBarras);
                        }

                        if (!$producto) {
                            $producto = new Producto();

                            $producto->setNombre(trim($datos[4]));
                            $producto->setCodigo(trim($datos[1]));
                            $producto->setReferencia(trim($datos[2]));
                            $producto->setCodigoBarra(trim($datos[3]));
                            $producto->setPrecio((float) (trim($datos[6]) ? trim($datos[6]) : 0));
                            $producto->setCantidad(0);

                            $producto->setUsuarioCreado($usuario);
                            $producto->setFechaCreado(new \DateTime('now'));

                            $em->getManager()->persist($producto);
                            $em->getManager()->flush();

                            $productonoexiste[] = $fila;
                            $productoimportados++;
                        }


                        $producto->setPrecio((float) (trim($datos[6]) ? trim($datos[6]) : 0));

                        $almacenProducto = $em->getRepository(AlmacenProducto::class)->findOneBy(array(
                            'producto' => $producto->getId(),
                            'almacen' => $almacen->getId()
                        ));

                        if (!$almacenProducto) {
                            $almacenProducto = new AlmacenProducto();

                            $almacenProducto->setAlmacen($almacen);
                            $almacenProducto->setCantidad((int) 0);
                            $almacenProducto->setProducto($producto);
                            $almacenProducto->setUmbral((int) 0);

                            $almacenProducto->setFechaCreado(new \DateTime('now'));
                            $almacenProducto->setUsuarioCreado($usuario);

                            $em->getManager()->persist($almacenProducto);
                            $em->getManager()->flush();
                        }

                        $almacenProducto->setCantidad((int) ($almacenProducto->getCantidad() + trim($datos[7])));

                        $lote = $em->getRepository(Lote::class)->findOneBy(array(
                            'producto' => $almacenProducto->getId(),
                            'lote' => trim($datos[5])
                        ));

                        if (!$lote) {
                            $lote = new Lote();

                            $lote->setCantidad((int) 0);
                            $lote->setProducto($almacenProducto);
                            $lote->setLote(trim($datos[5]));
                            $lote->setFechaCaducidad(trim($datos[8]) ? new \DateTime(trim($datos[8])) : null);

                            $lote->setFechaCreado(new \DateTime('now'));
                            $lote->setUsuarioCreado($usuario);

                            $em->getManager()->persist($lote);
                            $em->getManager()->flush();

                            $lotenoexiste[] = $fila;
                            $loteimportados++;
                        }

                        $lote->setCantidad((int) ($lote->getCantidad() + trim($datos[7])));

                        $importacionLote = new ImportacionLote();

                        $importacionLote->setImportacion($importacion);
                        $importacionLote->setCantidad((int) trim($datos[7]));
                        $importacionLote->setPrecio((float) (trim($datos[6]) ? trim($datos[6]) : 0));
                        $importacionLote->setLote($lote);

                        $importacionLote->setFechaCreado(new \DateTime('now'));
                        $importacionLote->setUsuarioCreado($usuario);

                        $em->getManager()->persist($importacionLote);
                        $em->getManager()->flush();

                        $fila++;
                    }
                    fclose($gestor);

                    return $this->redirectToRoute('warehouse_import_index', array(
                                'almacen' => $almacen->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'Se han guardado ' . ($fila - 1) . ' lotes, de los cuales ' . $productoimportados . ' son productos nuevos ' . ($productonoexiste ? ' (números de filas: ' . implode(", ", $productonoexiste) . ")" : null) . ' y ' . $loteimportados . ' son lotes nuevos ' . ($lotenoexiste ? ', (números de filas: ' . implode(", ", $lotenoexiste) . ")" : null)
                    ));
                } else {
                    return $this->redirectToRoute('warehouse_import_index', array(
                                'almacen' => $almacen->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'No se ha subido ningun archivo',
                    ));
                }
            }

            if ($request->request->get('boton') == "guardar") {
                try {
                    $prov = trim($request->request->get('proveedor'));
                    if (!$prov and trim($request->request->get('otroproveedor'))) {

                        $proveedor = $em->getRepository(Proveedor::class)->findOneByNombre($request->request->get('otroproveedor'));

                        if (!$proveedor) {
                            $proveedor = new Proveedor();

                            $proveedor->setNombre($request->request->get('otroproveedor'));

                            $proveedor->setUsuarioCreado($usuario);
                            $proveedor->setFechaCreado(new \DateTime('now'));

                            $em->getManager()->persist($proveedor);
                            $em->getManager()->flush();
                        }
                        $prov = $proveedor->getId();
                    }

                    $fecha = $request->request->get('fecha');
                    $albaran = $request->request->get('albaran');
                    $factura = $request->request->get('factura');
                    $observaciones = $request->request->get('observaciones');

                    $productos = $request->request->get('producto');
                    $lotes = $request->request->get('lote');
                    $precios = $request->request->get('precio');
                    $cantidades = $request->request->get('cantidad');
                    $fechaCaducidad = $request->request->get('fechaCaducidad');

                    if (!$productos) {
                        return $this->redirectToRoute('warehouse_import_index', array(
                                    'almacen' => $almacen->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'La importación no se ha podido realizar, tienes que añadir productos.',
                        ));
                    }

                    $importacion = new Importacion();

                    if ($fecha) {
                        $importacion->setFecha(new \DateTime($fecha));
                    } else {
                        $importacion->setFecha(null);
                    }

                    $importacion->setAlmacen($almacen);
                    $importacion->setAlbaran($albaran);
                    $importacion->setFactura($factura);
                    $importacion->setProveedor($em->getRepository(Proveedor::class)->find($prov));
                    $importacion->setObservaciones($observaciones);

                    $importacion->setFechaCreado(new \DateTime('now'));
                    $importacion->setUsuarioCreado($usuario);

                    $em->getManager()->persist($importacion);
                    $em->getManager()->flush();

                    for ($i = 0; $i < count($productos); $i++) {

                        if ($cantidades[$i] > 0) {

                            $producto = $em->getRepository(Producto::class)->find($productos[$i]);
                            $producto->setPrecio((float) $precios[$i]);

                            $almacenProducto = $em->getRepository(AlmacenProducto::class)->findOneBy(array(
                                'producto' => $producto->getId(),
                                'almacen' => $almacen->getId()
                            ));

                            if (!$almacenProducto) {
                                $almacenProducto = new AlmacenProducto();

                                $almacenProducto->setAlmacen($almacen);
                                $almacenProducto->setCantidad((int) 0);
                                $almacenProducto->setProducto($producto);
                                $almacenProducto->setUmbral((int) 0);

                                $almacenProducto->setFechaCreado(new \DateTime('now'));
                                $almacenProducto->setUsuarioCreado($usuario);

                                $em->getManager()->persist($almacenProducto);
                                $em->getManager()->flush();
                            }

                            $almacenProducto->setCantidad((int) ($almacenProducto->getCantidad() + $cantidades[$i]));

                            $lote = $em->getRepository(Lote::class)->findOneBy(array(
                                'producto' => $almacenProducto->getId(),
                                'lote' => $lotes[$i]
                            ));

                            if (!$lote) {
                                $lote = new Lote();

                                $lote->setCantidad((int) 0);
                                $lote->setProducto($almacenProducto);
                                $lote->setLote($lotes[$i]);
                                $lote->setFechaCaducidad($fechaCaducidad[$i] ? new \DateTime($fechaCaducidad[$i]) : null);

                                $lote->setFechaCreado(new \DateTime('now'));
                                $lote->setUsuarioCreado($usuario);

                                $em->getManager()->persist($lote);
                                $em->getManager()->flush();
                            }

                            $lote->setCantidad((int) ($lote->getCantidad() + $cantidades[$i]));

                            $importacionLote = new ImportacionLote();

                            $importacionLote->setImportacion($importacion);
                            $importacionLote->setCantidad((int) $cantidades[$i]);
                            $importacionLote->setPrecio((float) $precios[$i]);
                            $importacionLote->setLote($lote);

                            $importacionLote->setFechaCreado(new \DateTime('now'));
                            $importacionLote->setUsuarioCreado($usuario);

                            $em->getManager()->persist($importacionLote);
                            $em->getManager()->flush();
                        }
                    }

                    return $this->redirectToRoute('warehouse_import_index', array(
                                'almacen' => $almacen->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'La importación de productos se ha realizado correctamente',
                    ));
                } catch (Exception $ex) {
                    return $this->redirectToRoute('warehouse_import_index', array(
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
        $factura = $request->query->get('factura');
        $albaran = $request->query->get('albaran');
        $producto = $request->query->get('producto');
        $categoria = $request->query->get('categoria');
        $proveedor = $request->query->get('proveedor');

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

        if ($factura) {
            $qfactura = 'AND x.factura LIKE :factura ';
        } else {
            $qfactura = null;
        }

        if ($albaran) {
            $qalbaran = 'AND x.albaran LIKE :albaran ';
        } else {
            $qalbaran = null;
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

        if ($proveedor) {
            $qproveedor = 'AND x.proveedor = ' . $proveedor;
        } else {
            $qproveedor = null;
        }

        $qImportaciones = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Importacion x '
                . 'JOIN x.lotes il '
                . 'JOIN il.lote l '
                . 'JOIN l.producto ap '
                . 'JOIN ap.producto p '
                . 'WHERE x.almacen = ' . $almacen->getId() . ' '
                . "AND CAST(x." . $tipoFecha . " as date) BETWEEN :desde AND :hasta "
                . $qfactura
                . $qalbaran
                . $qid
                . $qproducto
                . $qcategoria
                . $qproveedor
                . 'ORDER BY x.fecha ASC'
        );

        $qImportaciones->setParameter('desde', (new \DateTime($desde))->format('Y-m-d'));
        $qImportaciones->setParameter('hasta', (new \DateTime($hasta))->format('Y-m-d'));

        if ($factura) {
            $qImportaciones->setParameter('factura', "%" . $factura . "%");
        }
        if ($albaran) {
            $qImportaciones->setParameter('albaran', "%" . $albaran . "%");
        }
        if ($producto) {
            $qImportaciones->setParameter('producto', "%" . $producto . "%");
        }

        $proveedores = $em->getRepository(Proveedor::class)->findAll();
        $categorias = $em->getRepository(Categoria::class)->findAll();
        $subcategorias = $em->getRepository(Subcategoria::class)->findAll();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }
        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $qImportaciones,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('almacen/importacion/index.html.twig', [
                    'importaciones' => $pagination,
                    'almacen' => $almacen,
                    'tipoFecha' => $tipoFecha,
                    'desde' => $desde,
                    'hasta' => $hasta,
                    'factura' => $factura,
                    'albaran' => $albaran,
                    'id' => $id,
                    'producto' => $producto,
                    'categoria' => $categoria,
                    'proveedor' => $proveedor,
                    'categorias' => $categorias,
                    'subcategorias' => $subcategorias,
                    'proveedores' => $proveedores,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(Almacen $almacen, Importacion $importacion, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null) {

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($importacion->getAlmacen()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($request->request->get('boton') == "editar") {

                $prov = trim($request->request->get('proveedor'));
                if (!$prov and trim($request->request->get('otroproveedor'))) {

                    $proveedor = $em->getRepository(Proveedor::class)->findOneByNombre($request->request->get('otroproveedor'));

                    if (!$proveedor) {
                        $proveedor = new Proveedor();

                        $proveedor->setNombre($request->request->get('otroproveedor'));

                        $proveedor->setUsuarioCreado($usuario);
                        $proveedor->setFechaCreado(new \DateTime('now'));

                        $em->getManager()->persist($proveedor);
                        $em->getManager()->flush();
                    }
                    $prov = $proveedor->getId();
                }

                $fecha = $request->request->get('fecha');
                $albaran = $request->request->get('albaran');
                $factura = $request->request->get('factura');
                $observaciones = $request->request->get('observaciones');

                if ($fecha) {
                    $importacion->setFecha(new \DateTime($fecha));
                } else {
                    $importacion->setFecha(null);
                }

                $importacion->setAlmacen($almacen);
                $importacion->setAlbaran($albaran);
                $importacion->setFactura($factura);
                $importacion->setProveedor($em->getRepository(Proveedor::class)->find($prov));
                $importacion->setObservaciones($observaciones);

                $em->getManager()->flush();

                return $this->redirectToRoute('warehouse_import_show', array(
                            'almacen' => $almacen->getId(),
                            'id' => $importacion->getId(),
                            'excepcion' => 1,
                            'codigo' => '¡Correcto!',
                            'mensaje' => 'La importación se ha modificado correctamente',
                ));
            }
            if ($request->request->get('boton') == "add") {
                try {

                    $productos = $request->request->get('producto');
                    $lotes = $request->request->get('lote');
                    $precios = $request->request->get('precio');
                    $cantidades = $request->request->get('cantidad');
                    $fechaCaducidad = $request->request->get('fechaCaducidad');

                    if (!$productos) {
                        return $this->redirectToRoute('warehouse_import_show', array(
                                    'almacen' => $almacen->getId(),
                                    'id' => $importacion->getId(),
                                    'excepcion' => 2,
                                    'codigo' => '¡Error!',
                                    'mensaje' => 'La importación no se ha podido realizar, tienes que añadir productos.',
                        ));
                    }

                    for ($i = 0; $i < count($productos); $i++) {

                        if ($cantidades[$i] > 0) {

                            $producto = $em->getRepository(Producto::class)->find($productos[$i]);
                            $producto->setPrecio((float) $precios[$i]);

                            $almacenProducto = $em->getRepository(AlmacenProducto::class)->findOneBy(array(
                                'producto' => $producto->getId(),
                                'almacen' => $almacen->getId()
                            ));

                            if (!$almacenProducto) {
                                $almacenProducto = new AlmacenProducto();

                                $almacenProducto->setAlmacen($almacen);
                                $almacenProducto->setCantidad((int) 0);
                                $almacenProducto->setProducto($producto);
                                $almacenProducto->setUmbral((int) 0);

                                $almacenProducto->setFechaCreado(new \DateTime('now'));
                                $almacenProducto->setUsuarioCreado($usuario);

                                $em->getManager()->persist($almacenProducto);
                                $em->getManager()->flush();
                            }

                            $almacenProducto->setCantidad((int) ($almacenProducto->getCantidad() + $cantidades[$i]));

                            $lote = $em->getRepository(Lote::class)->findOneBy(array(
                                'producto' => $almacenProducto->getId(),
                                'lote' => $lotes[$i]
                            ));

                            if (!$lote) {
                                $lote = new Lote();

                                $lote->setCantidad((int) 0);
                                $lote->setProducto($almacenProducto);
                                $lote->setLote($lotes[$i]);
                                $lote->setFechaCaducidad($fechaCaducidad[$i] ? new \DateTime($fechaCaducidad[$i]) : null);

                                $lote->setFechaCreado(new \DateTime('now'));
                                $lote->setUsuarioCreado($usuario);

                                $em->getManager()->persist($lote);
                                $em->getManager()->flush();
                            }

                            $lote->setCantidad((int) ($lote->getCantidad() + $cantidades[$i]));

                            $importacionLote = new ImportacionLote();

                            $importacionLote->setImportacion($importacion);
                            $importacionLote->setCantidad((int) $cantidades[$i]);
                            $importacionLote->setPrecio((float) $precios[$i]);
                            $importacionLote->setLote($lote);

                            $importacionLote->setFechaCreado(new \DateTime('now'));
                            $importacionLote->setUsuarioCreado($usuario);

                            $em->getManager()->persist($importacionLote);
                            $em->getManager()->flush();
                        }
                    }


                    return $this->redirectToRoute('warehouse_import_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $importacion->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'Se han añadido lotes nuevos a la importación correctamente',
                    ));
                } catch (Exception $ex) {
                    return $this->redirectToRoute('warehouse_import_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $importacion->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'Hubo un error, vuelve a intentarlo',
                    ));
                }
            }
        }

        $proveedores = $em->getRepository(Proveedor::class)->findAll();
        $categorias = $em->getRepository(Categoria::class)->findAll();
        $subcategorias = $em->getRepository(Subcategoria::class)->findAll();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('almacen/importacion/show.html.twig', [
                    'almacen' => $almacen,
                    'importacion' => $importacion,
                    'categorias' => $categorias,
                    'subcategorias' => $subcategorias,
                    'proveedores' => $proveedores,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function showLot(Almacen $almacen, Importacion $importacion, ImportacionLote $importacionLote, UserInterface $usuario, Request $request, $ex = null, $cod = null, $msg = null) {

        if (!in_array("ROLE_GESTOR", $usuario->getRoles()) or!in_array($almacen->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($importacion->getAlmacen()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        if (!in_array($importacionLote->getImportacion()->getAlmacen()->getId(), $usuario->getAlmacenes())) {
            return $this->redirectToRoute('app_index');
        }

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($request->request->get('boton') == "editar") {

                $cantidadAnterior = $importacionLote->getCantidad();

                $importacionLote->getLote()->getProducto()->setCantidad($importacionLote->getLote()->getProducto()->getCantidad() - $cantidadAnterior);
                $importacionLote->getLote()->setCantidad($importacionLote->getLote()->getCantidad() - $cantidadAnterior);

                $producto = $request->request->get('producto');
                $lot = $request->request->get('lote');
                $precio = $request->request->get('precio');
                $cantidad = $request->request->get('cantidad');
                $fechaCaducidad = $request->request->get('fechaCaducidad');

                if ($cantidad > 0) {

                    $producto = $em->getRepository(Producto::class)->find($producto);
                    $producto->setPrecio((float) $precio);

                    $almacenProducto = $em->getRepository(AlmacenProducto::class)->findOneBy(array(
                        'producto' => $producto->getId(),
                        'almacen' => $almacen->getId()
                    ));

                    if (!$almacenProducto) {
                        $almacenProducto = new AlmacenProducto();

                        $almacenProducto->setAlmacen($almacen);
                        $almacenProducto->setCantidad((int) 0);
                        $almacenProducto->setProducto($producto);
                        $almacenProducto->setUmbral((int) 0);

                        $almacenProducto->setFechaCreado(new \DateTime('now'));
                        $almacenProducto->setUsuarioCreado($usuario);

                        $em->getManager()->persist($almacenProducto);
                        $em->getManager()->flush();
                    }

                    $almacenProducto->setCantidad((int) ($almacenProducto->getCantidad() + $cantidad));

                    $lote = $em->getRepository(Lote::class)->findOneBy(array(
                        'producto' => $almacenProducto->getId(),
                        'lote' => $lot
                    ));

                    if (!$lote) {
                        $lote = new Lote();

                        $lote->setCantidad((int) 0);
                        $lote->setProducto($almacenProducto);
                        $lote->setLote($lot);
                        $lote->setFechaCaducidad($fechaCaducidad ? new \DateTime($fechaCaducidad) : null);

                        $lote->setFechaCreado(new \DateTime('now'));
                        $lote->setUsuarioCreado($usuario);

                        $em->getManager()->persist($lote);
                        $em->getManager()->flush();
                    }

                    $lote->setFechaCaducidad($fechaCaducidad ? new \DateTime($fechaCaducidad) : null);
                    $lote->setCantidad((int) ($lote->getCantidad() + $cantidad));

                    $importacionLote->setImportacion($importacion);
                    $importacionLote->setCantidad((int) $cantidad);
                    $importacionLote->setPrecio((float) $precio);
                    $importacionLote->setLote($lote);

                    $em->getManager()->flush();

                    return $this->redirectToRoute('warehouse_import_lot_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $importacion->getId(),
                                'importacionLote' => $importacionLote->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'El lote se ha modificado correctamente',
                    ));
                } else {

                    $em->getManager()->remove($importacionLote);
                    $em->getManager()->flush();

                    return $this->redirectToRoute('warehouse_import_show', array(
                                'almacen' => $almacen->getId(),
                                'id' => $importacion->getId(),
                                'excepcion' => 1,
                                'codigo' => '¡Correcto!',
                                'mensaje' => 'El lote se ha eliminado correctamente',
                    ));
                }
            }
        }
        $productos = $em->getRepository(Producto::class)->findAll();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('almacen/importacion/lot.html.twig', [
                    'almacen' => $almacen,
                    'importacion' => $importacion,
                    'importacionLote' => $importacionLote,
                    'productos' => $productos,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function newSupplier(Almacen $almacen, Request $request, UserInterface $usuario) {
        try {
            $em = $this->getDoctrine();

            if (!$request->request->get('proveedor')) {
                return new JsonResponse([
                    'codigo' => 200,
                    'mensaje' => "No se puede dejar el campo 'Proveedor' en blanco.",
                ]);
            }

            $comprobar = $em->getRepository(Proveedor::class)->findOneByNombre($request->request->get('proveedor'));
            if (isset($comprobar)) {
                return new JsonResponse([
                    'codigo' => 200,
                    'mensaje' => "El proveedor ya está en uso.",
                ]);
            }

            $proveedor = new Proveedor();

            $proveedor->setNombre($request->request->get('proveedor'));

            $proveedor->setUsuarioCreado($usuario);
            $proveedor->setFechaCreado(new \DateTime('now'));

            $em->getManager()->persist($proveedor);
            $em->getManager()->flush();

            return new JsonResponse([
                'codigo' => 200,
                'mensaje' => "El proveedor se ha añadido correctamente.",
            ]);
        } catch (Exception $ex) {
            return new JsonResponse([
                'codigo' => 500,
                'mensaje' => "Hubo un error al intentar crear el proveedor, vuelva a intentarlo.",
            ]);
        }
    }

    public function newProduct(Almacen $almacen, Request $request, UserInterface $usuario) {
        try {
            $em = $this->getDoctrine();

            if (!$request->request->get('nombre') or!$request->request->get('codigo') or!$request->request->get('precio')) {
                return new JsonResponse([
                    'codigo' => 200,
                    'mensaje' => "No se pueden dejar los campos 'Nombre' ni 'Código' ni 'Precio' en blanco.",
                ]);
            }

            $comprobar = $em->getRepository(Producto::class)->findOneBy(array(
                'nombre' => $request->request->get('nombre'),
                'codigo' => $request->request->get('codigo')
                    )
            );
            if (isset($comprobar)) {
                return new JsonResponse([
                    'codigo' => 200,
                    'mensaje' => "El producto ya está en uso.",
                ]);
            }

            $cat = trim($request->request->get('categoria'));
            if (!$cat and trim($request->request->get('otracategoria'))) {

                $categoria = $em->getRepository(Categoria::class)->findOneByNombre($request->request->get('otracategoria'));

                if (!$categoria) {
                    $categoria = new Categoria();

                    $categoria->setNombre($request->request->get('otracategoria'));

                    $categoria->setUsuarioCreado($usuario);
                    $categoria->setFechaCreado(new \DateTime('now'));

                    $em->getManager()->persist($categoria);
                    $em->getManager()->flush();
                }
                $cat = $categoria->getId();
            }

            $producto = new Producto();

            $producto->setNombre($request->request->get('nombre'));
            $producto->setCodigo($request->request->get('codigo'));
            $producto->setReferencia($request->request->get('referencia'));
            $producto->setCodigoBarra($request->request->get('codigoBarra'));
            $producto->setPrecio((float) $request->request->get('precio'));
            $producto->setCategoria($em->getRepository(Categoria::class)->find($cat));
            $producto->setDescripcion($request->request->get('descripcion'));

            $producto->setUsuarioCreado($usuario);
            $producto->setFechaCreado(new \DateTime('now'));

            $em->getManager()->persist($producto);
            $em->getManager()->flush();

            return new JsonResponse([
                'codigo' => 200,
                'mensaje' => "El producto se ha añadido correctamente.",
            ]);
        } catch (Exception $ex) {
            return new JsonResponse([
                'codigo' => 500,
                'mensaje' => "Hubo un error al intentar crear el producto, vuelva a intentarlo.",
            ]);
        }
    }

    public function searchProduct(Almacen $almacen, Request $request, UserInterface $usuario) {

        $em = $this->getDoctrine();
        $categoria = trim($request->request->get('categoria'));
        $subcategoria = trim($request->request->get('subcategoria'));
        $tipo = $request->request->get('tipo');
        $referencia = $request->request->get('referencia');

        if ($categoria) {
            $qcategoria = 'AND x.categoria = ' . $categoria . ' ';
        } else {
            $qcategoria = "";
        }

        if ($subcategoria) {
            $qsubcategoria = 'AND x.subcategoria = ' . $subcategoria . ' ';
        } else {
            $qsubcategoria = "";
        }


        $qProducto = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Producto x '
                . 'WHERE x.' . $tipo . ' LIKE :referencia '
                . $qcategoria
                . $qsubcategoria
                . 'ORDER BY x.nombre ASC '
        );

        $qProducto->setParameter('referencia', "%" . $referencia . "%");

        $productos = $qProducto->getResult();

        if (count($productos) > 0) {

            foreach ($productos as $producto) {
                $datos[] = array(
                    'id' => $producto->getId(),
                    'nombre' => "Nombre: " . $producto->getNombre() . ($producto->getCategoria() ? " <br /> Categoría: " . $producto->getCategoria() : "") . ($producto->getSubcategoria() ? " <br /> Subcategoría: " . $producto->getSubcategoria() : "") . ($producto->getCodigo() ? " <br /> Código: " . $producto->getCodigo() : ""),
                    'foto' => $producto->getFoto()
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

    public function addProduct(Almacen $almacen, Request $request, UserInterface $usuario) {

        $em = $this->getDoctrine();

        $producto = $em->getManager()->getRepository(Producto::class)->find($request->request->get('id'));

        if ($producto) {

            $datos = array(
                'id' => $producto->getId(),
                'nombre' => $producto->getNombre(),
                'precio' => $producto->getPrecio(),
                'foto' => $producto->getFoto()
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
