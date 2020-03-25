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
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/ver-noticias' => [[['_route' => 'services', '_controller' => 'App\\Controller\\ServiceController::services'], null, null, null, false, false, null]],
        '/nueva-suscripcion' => [[['_route' => 'service_creation', '_controller' => 'App\\Controller\\ServiceController::creation'], null, null, null, false, false, null]],
        '/mis-suscripciones' => [[['_route' => 'my_services', '_controller' => 'App\\Controller\\ServiceController::myServices'], null, null, null, false, false, null]],
        '/nueva-categoria' => [[['_route' => 'category_creation', '_controller' => 'App\\Controller\\CategoryController::creation'], null, null, null, false, false, null]],
        '/mis-categorias' => [[['_route' => 'my_categories', '_controller' => 'App\\Controller\\CategoryController::myCategories'], null, null, null, false, false, null]],
        '/registro' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/mi-perfil' => [[['_route' => 'profile_view', '_controller' => 'App\\Controller\\UserController::profile_view'], null, null, null, false, false, null]],
        '/editar-perfil' => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\UserController::profile_edit'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        '/darse-de-baja' => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], null, null, null, false, false, null]],
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
                .'|/servicio/([^/]++)(*:187)'
                .'|/editar\\-(?'
                    .'|suscripcion/([^/]++)(*:227)'
                    .'|categoria/([^/]++)(*:253)'
                .')'
                .'|/borrar\\-(?'
                    .'|suscripcion/([^/]++)(*:294)'
                    .'|categoria/([^/]++)(*:320)'
                .')'
                .'|/categoria/([^/]++)(*:348)'
                .'|/por\\-categoria/([^/]++)(*:380)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'service_detail', '_controller' => 'App\\Controller\\ServiceController::detail'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], null, null, false, true, null]],
        294 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], null, null, false, true, null]],
        348 => [[['_route' => 'category_detail', '_controller' => 'App\\Controller\\CategoryController::detail'], ['id'], null, null, false, true, null]],
        380 => [
            [['_route' => 'by_category', '_controller' => 'App\\Controller\\CategoryController::byCategory'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
