<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/administracion/usuarios' => [[['_route' => 'users_index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, true, false, null]],
        '/administracion/productos' => [[['_route' => 'products_index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, true, false, null]],
        '/administracion/proveedores' => [[['_route' => 'suppliers_index', '_controller' => 'App\\Controller\\SupplierController::index'], null, null, null, true, false, null]],
        '/administracion/categorias' => [[['_route' => 'categories_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, true, false, null]],
        '/administracion/almacenes' => [[['_route' => 'warehouses_index', '_controller' => 'App\\Controller\\WarehouseController::index'], null, null, null, true, false, null]],
        '/administracion/areas-de-servicio' => [[['_route' => 'service_areas_index', '_controller' => 'App\\Controller\\ServiceAreaController::index'], null, null, null, true, false, null]],
        '/iniciar-sesion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\DefaultController::login'], null, null, null, false, false, null]],
        '/mi-perfil' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\DefaultController::profile'], null, null, null, false, false, null]],
        '/salir' => [[['_route' => 'app_logout'], null, null, null, false, false, null]],
        '/sesion-cerrada' => [[['_route' => 'app_logout_vista', '_controller' => 'App\\Controller\\DefaultController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/js/routing(?:\\.(js|json))?(*:34)'
                .'|/a(?'
                    .'|dministracion/(?'
                        .'|usuarios/([^/]++)/(?'
                            .'|detalle(*:91)'
                            .'|borrar(*:104)'
                        .')'
                        .'|pro(?'
                            .'|ductos/([^/]++)/(?'
                                .'|detalle(*:145)'
                                .'|borrar(*:159)'
                                .'|foto(*:171)'
                            .')'
                            .'|veedores/([^/]++)/(?'
                                .'|detalle(*:208)'
                                .'|borrar(*:222)'
                            .')'
                        .')'
                        .'|categorias/([^/]++)/(?'
                            .'|detalle(*:262)'
                            .'|borrar(*:276)'
                            .'|subcategorias(?'
                                .'|(*:300)'
                                .'|/([^/]++)/(?'
                                    .'|detalle(*:328)'
                                    .'|borrar(*:342)'
                                .')'
                            .')'
                        .')'
                        .'|a(?'
                            .'|lmacenes/([^/]++)/(?'
                                .'|detalle(*:385)'
                                .'|borrar(*:399)'
                            .')'
                            .'|reas\\-de\\-servicio/([^/]++)/(?'
                                .'|detalle(*:446)'
                                .'|borrar(*:460)'
                            .')'
                        .')'
                    .')'
                    .'|lmacen/([^/]++)/(?'
                        .'|producto(?'
                            .'|s(*:502)'
                            .'|/([^/]++)/foto(*:524)'
                        .')'
                        .'|recepcion\\-de\\-pedidos(?'
                            .'|(*:558)'
                            .'|/(?'
                                .'|([^/]++)/(?'
                                    .'|detalle(?'
                                        .'|(*:592)'
                                        .'|/([^/]++)/lote(*:614)'
                                    .')'
                                    .'|borrar(*:629)'
                                .')'
                                .'|nuevo\\-pro(?'
                                    .'|ducto(*:656)'
                                    .'|veedor(*:670)'
                                .')'
                                .'|buscar\\-producto(*:695)'
                                .'|anadir\\-producto(*:719)'
                            .')'
                        .')'
                        .'|stock(?'
                            .'|(*:737)'
                            .'|/([^/]++)/(?'
                                .'|detalle(?'
                                    .'|(*:768)'
                                    .'|/([^/]++)/lote(*:790)'
                                .')'
                                .'|borrar(*:805)'
                            .')'
                        .')'
                        .'|traslados(?'
                            .'|(*:827)'
                            .'|/(?'
                                .'|([^/]++)/(?'
                                    .'|detalle(?'
                                        .'|(*:861)'
                                        .'|/([^/]++)/lote(*:883)'
                                    .')'
                                    .'|borrar(*:898)'
                                .')'
                                .'|buscar\\-lote(*:919)'
                                .'|anadir\\-lote(*:939)'
                            .')'
                        .')'
                        .'|asignacion\\-de\\-materiales(?'
                            .'|(*:978)'
                            .'|/([^/]++)/(?'
                                .'|detalle(?'
                                    .'|(*:1009)'
                                    .'|/([^/]++)/lote(*:1032)'
                                .')'
                                .'|borrar(*:1048)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'users_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        104 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        145 => [[['_route' => 'products_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        159 => [[['_route' => 'products_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        171 => [[['_route' => 'products_photo', '_controller' => 'App\\Controller\\ProductController::photo'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'suppliers_show', '_controller' => 'App\\Controller\\SupplierController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        222 => [[['_route' => 'suppliers_delete', '_controller' => 'App\\Controller\\SupplierController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        262 => [[['_route' => 'categories_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        276 => [[['_route' => 'categories_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [[['_route' => 'subcategories_index', '_controller' => 'App\\Controller\\SubcategoryController::index'], ['id'], null, null, true, false, null]],
        328 => [[['_route' => 'subcategories_show', '_controller' => 'App\\Controller\\SubcategoryController::show'], ['id', 'sub'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        342 => [[['_route' => 'subcategories_delete', '_controller' => 'App\\Controller\\SubcategoryController::delete'], ['id', 'sub'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        385 => [[['_route' => 'warehouses_show', '_controller' => 'App\\Controller\\WarehouseController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        399 => [[['_route' => 'warehouses_delete', '_controller' => 'App\\Controller\\WarehouseController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        446 => [[['_route' => 'service_areas_show', '_controller' => 'App\\Controller\\ServiceAreaController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        460 => [[['_route' => 'service_areas_delete', '_controller' => 'App\\Controller\\ServiceAreaController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        502 => [[['_route' => 'warehouse_product_index', '_controller' => 'App\\Controller\\WarehouseProductController::index'], ['almacen'], null, null, true, false, null]],
        524 => [[['_route' => 'warehouse_products_photo', '_controller' => 'App\\Controller\\ProductController::photo'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        558 => [[['_route' => 'warehouse_import_index', '_controller' => 'App\\Controller\\WarehouseImportController::index'], ['almacen'], null, null, true, false, null]],
        592 => [[['_route' => 'warehouse_import_show', '_controller' => 'App\\Controller\\WarehouseImportController::show'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        614 => [[['_route' => 'warehouse_import_lot_show', '_controller' => 'App\\Controller\\WarehouseImportController::showLot'], ['almacen', 'id', 'importacionLote'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        629 => [[['_route' => 'warehouse_import_delete', '_controller' => 'App\\Controller\\WarehouseImportController::delete'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        656 => [[['_route' => 'products_new', '_controller' => 'App\\Controller\\WarehouseImportController::newProduct'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        670 => [[['_route' => 'suppliers_new', '_controller' => 'App\\Controller\\WarehouseImportController::newSupplier'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        695 => [[['_route' => 'products_search', '_controller' => 'App\\Controller\\WarehouseImportController::searchProduct'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        719 => [[['_route' => 'products_add', '_controller' => 'App\\Controller\\WarehouseImportController::addProduct'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        737 => [[['_route' => 'warehouse_stock_index', '_controller' => 'App\\Controller\\WarehouseStockController::index'], ['almacen'], null, null, true, false, null]],
        768 => [[['_route' => 'warehouse_stock_show', '_controller' => 'App\\Controller\\WarehouseStockController::show'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        790 => [[['_route' => 'warehouse_stock_lot_show', '_controller' => 'App\\Controller\\WarehouseStockController::showLot'], ['almacen', 'id', 'lote'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        805 => [[['_route' => 'warehouse_stock_delete', '_controller' => 'App\\Controller\\WarehouseStockController::delete'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        827 => [[['_route' => 'warehouse_transfer_index', '_controller' => 'App\\Controller\\WarehouseTransferController::index'], ['almacen'], null, null, true, false, null]],
        861 => [[['_route' => 'warehouse_transfer_show', '_controller' => 'App\\Controller\\WarehouseTransferController::show'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        883 => [[['_route' => 'warehouse_transfer_lot_show', '_controller' => 'App\\Controller\\WarehouseTransferController::showLot'], ['almacen', 'id', 'trasladoLote'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        898 => [[['_route' => 'warehouse_transfer_delete', '_controller' => 'App\\Controller\\WarehouseTransferController::delete'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        919 => [[['_route' => 'lots_search', '_controller' => 'App\\Controller\\WarehouseTransferController::searchLot'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        939 => [[['_route' => 'lots_add', '_controller' => 'App\\Controller\\WarehouseTransferController::addLot'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        978 => [[['_route' => 'warehouse_assignament_index', '_controller' => 'App\\Controller\\WarehouseAssignamentController::index'], ['almacen'], null, null, true, false, null]],
        1009 => [[['_route' => 'warehouse_assignament_show', '_controller' => 'App\\Controller\\WarehouseAssignamentController::show'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1032 => [[['_route' => 'warehouse_assignament_lot_show', '_controller' => 'App\\Controller\\WarehouseAssignamentController::showLot'], ['almacen', 'id', 'asignacionLote'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1048 => [
            [['_route' => 'warehouse_assignament_delete', '_controller' => 'App\\Controller\\WarehouseAssignamentController::delete'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
