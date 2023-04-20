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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/category/create' => [[['_route' => 'create_category', '_controller' => 'App\\Controller\\CategoryController::create'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/genre/create' => [[['_route' => 'create_genre', '_controller' => 'App\\Controller\\GenreController::add'], null, null, null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'product_list', '_controller' => 'App\\Controller\\ProductController::listAction'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'product_create', '_controller' => 'App\\Controller\\ProductController::createAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/product(?'
                    .'|_view/([^/]++)(*:194)'
                    .'|ByGenre/([^/]++)(*:218)'
                .')'
                .'|/de(?'
                    .'|lete/([^/]++)(*:246)'
                    .'|tails/([^/]++)(*:268)'
                .')'
                .'|/edit/([^/]++)(*:291)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'view_product', '_controller' => 'App\\Controller\\HomeController::Show'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'productByGenre', '_controller' => 'App\\Controller\\ProductController::GenreAction'], ['id'], null, null, false, true, null]],
        246 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::deleteAction'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'product_details', '_controller' => 'App\\Controller\\ProductController::detailsAction'], ['id'], null, null, false, true, null]],
        291 => [
            [['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::editAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
