<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:72)'
                    .'|wdt/([^/]++)(*:91)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:136)'
                            .'|router(*:150)'
                            .'|exception(?'
                                .'|(*:170)'
                                .'|\\.css(*:183)'
                            .')'
                        .')'
                        .'|(*:193)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dministracion/(?'
                        .'|usuarios/([^/]++)/(?'
                            .'|detalle(*:253)'
                            .'|borrar(*:267)'
                        .')'
                        .'|pro(?'
                            .'|ductos/([^/]++)/(?'
                                .'|detalle(*:308)'
                                .'|borrar(*:322)'
                                .'|foto(*:334)'
                            .')'
                            .'|veedores/([^/]++)/(?'
                                .'|detalle(*:371)'
                                .'|borrar(*:385)'
                            .')'
                        .')'
                        .'|categorias/([^/]++)/(?'
                            .'|detalle(*:425)'
                            .'|borrar(*:439)'
                            .'|subcategorias(?'
                                .'|(*:463)'
                                .'|/([^/]++)/(?'
                                    .'|detalle(*:491)'
                                    .'|borrar(*:505)'
                                .')'
                            .')'
                        .')'
                        .'|a(?'
                            .'|lmacenes/([^/]++)/(?'
                                .'|detalle(*:548)'
                                .'|borrar(*:562)'
                            .')'
                            .'|reas\\-de\\-servicio/([^/]++)/(?'
                                .'|detalle(*:609)'
                                .'|borrar(*:623)'
                            .')'
                        .')'
                    .')'
                    .'|lmacen/([^/]++)/(?'
                        .'|producto(?'
                            .'|s(*:665)'
                            .'|/([^/]++)/foto(*:687)'
                        .')'
                        .'|recepcion\\-de\\-pedidos(?'
                            .'|(*:721)'
                            .'|/(?'
                                .'|([^/]++)/(?'
                                    .'|detalle(?'
                                        .'|(*:755)'
                                        .'|/([^/]++)/lote(*:777)'
                                    .')'
                                    .'|borrar(*:792)'
                                .')'
                                .'|nuevo\\-pro(?'
                                    .'|ducto(*:819)'
                                    .'|veedor(*:833)'
                                .')'
                                .'|buscar\\-producto(*:858)'
                                .'|anadir\\-producto(*:882)'
                            .')'
                        .')'
                        .'|stock(?'
                            .'|(*:900)'
                            .'|/([^/]++)/(?'
                                .'|detalle(?'
                                    .'|(*:931)'
                                    .'|/([^/]++)/lote(*:953)'
                                .')'
                                .'|borrar(*:968)'
                            .')'
                        .')'
                        .'|traslados(?'
                            .'|(*:990)'
                            .'|/(?'
                                .'|([^/]++)/(?'
                                    .'|detalle(?'
                                        .'|(*:1024)'
                                        .'|/([^/]++)/lote(*:1047)'
                                    .')'
                                    .'|borrar(*:1063)'
                                .')'
                                .'|buscar\\-lote(*:1085)'
                                .'|anadir\\-lote(*:1106)'
                            .')'
                        .')'
                        .'|asignacion\\-de\\-materiales(?'
                            .'|(*:1146)'
                            .'|/([^/]++)/(?'
                                .'|detalle(?'
                                    .'|(*:1178)'
                                    .'|/([^/]++)/lote(*:1201)'
                                .')'
                                .'|borrar(*:1217)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        72 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        91 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        136 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        150 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        183 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        193 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        253 => [[['_route' => 'users_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        267 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'products_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        322 => [[['_route' => 'products_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        334 => [[['_route' => 'products_photo', '_controller' => 'App\\Controller\\ProductController::photo'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        371 => [[['_route' => 'suppliers_show', '_controller' => 'App\\Controller\\SupplierController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        385 => [[['_route' => 'suppliers_delete', '_controller' => 'App\\Controller\\SupplierController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [[['_route' => 'categories_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        439 => [[['_route' => 'categories_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        463 => [[['_route' => 'subcategories_index', '_controller' => 'App\\Controller\\SubcategoryController::index'], ['id'], null, null, true, false, null]],
        491 => [[['_route' => 'subcategories_show', '_controller' => 'App\\Controller\\SubcategoryController::show'], ['id', 'sub'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        505 => [[['_route' => 'subcategories_delete', '_controller' => 'App\\Controller\\SubcategoryController::delete'], ['id', 'sub'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        548 => [[['_route' => 'warehouses_show', '_controller' => 'App\\Controller\\WarehouseController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        562 => [[['_route' => 'warehouses_delete', '_controller' => 'App\\Controller\\WarehouseController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        609 => [[['_route' => 'service_areas_show', '_controller' => 'App\\Controller\\ServiceAreaController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        623 => [[['_route' => 'service_areas_delete', '_controller' => 'App\\Controller\\ServiceAreaController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        665 => [[['_route' => 'warehouse_product_index', '_controller' => 'App\\Controller\\WarehouseProductController::index'], ['almacen'], null, null, true, false, null]],
        687 => [[['_route' => 'warehouse_products_photo', '_controller' => 'App\\Controller\\ProductController::photo'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        721 => [[['_route' => 'warehouse_import_index', '_controller' => 'App\\Controller\\WarehouseImportController::index'], ['almacen'], null, null, true, false, null]],
        755 => [[['_route' => 'warehouse_import_show', '_controller' => 'App\\Controller\\WarehouseImportController::show'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        777 => [[['_route' => 'warehouse_import_lot_show', '_controller' => 'App\\Controller\\WarehouseImportController::showLot'], ['almacen', 'id', 'importacionLote'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        792 => [[['_route' => 'warehouse_import_delete', '_controller' => 'App\\Controller\\WarehouseImportController::delete'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        819 => [[['_route' => 'products_new', '_controller' => 'App\\Controller\\WarehouseImportController::newProduct'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        833 => [[['_route' => 'suppliers_new', '_controller' => 'App\\Controller\\WarehouseImportController::newSupplier'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        858 => [[['_route' => 'products_search', '_controller' => 'App\\Controller\\WarehouseImportController::searchProduct'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        882 => [[['_route' => 'products_add', '_controller' => 'App\\Controller\\WarehouseImportController::addProduct'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        900 => [[['_route' => 'warehouse_stock_index', '_controller' => 'App\\Controller\\WarehouseStockController::index'], ['almacen'], null, null, true, false, null]],
        931 => [[['_route' => 'warehouse_stock_show', '_controller' => 'App\\Controller\\WarehouseStockController::show'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        953 => [[['_route' => 'warehouse_stock_lot_show', '_controller' => 'App\\Controller\\WarehouseStockController::showLot'], ['almacen', 'id', 'lote'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        968 => [[['_route' => 'warehouse_stock_delete', '_controller' => 'App\\Controller\\WarehouseStockController::delete'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        990 => [[['_route' => 'warehouse_transfer_index', '_controller' => 'App\\Controller\\WarehouseTransferController::index'], ['almacen'], null, null, true, false, null]],
        1024 => [[['_route' => 'warehouse_transfer_show', '_controller' => 'App\\Controller\\WarehouseTransferController::show'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1047 => [[['_route' => 'warehouse_transfer_lot_show', '_controller' => 'App\\Controller\\WarehouseTransferController::showLot'], ['almacen', 'id', 'trasladoLote'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1063 => [[['_route' => 'warehouse_transfer_delete', '_controller' => 'App\\Controller\\WarehouseTransferController::delete'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1085 => [[['_route' => 'lots_search', '_controller' => 'App\\Controller\\WarehouseTransferController::searchLot'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1106 => [[['_route' => 'lots_add', '_controller' => 'App\\Controller\\WarehouseTransferController::addLot'], ['almacen'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1146 => [[['_route' => 'warehouse_assignament_index', '_controller' => 'App\\Controller\\WarehouseAssignamentController::index'], ['almacen'], null, null, true, false, null]],
        1178 => [[['_route' => 'warehouse_assignament_show', '_controller' => 'App\\Controller\\WarehouseAssignamentController::show'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1201 => [[['_route' => 'warehouse_assignament_lot_show', '_controller' => 'App\\Controller\\WarehouseAssignamentController::showLot'], ['almacen', 'id', 'asignacionLote'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1217 => [
            [['_route' => 'warehouse_assignament_delete', '_controller' => 'App\\Controller\\WarehouseAssignamentController::delete'], ['almacen', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
