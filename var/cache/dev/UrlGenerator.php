<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/user']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/']], [], []],
    'services' => [[], ['_controller' => 'App\\Controller\\ServiceController::services'], [], [['text', '/ver-noticias']], [], []],
    'service_detail' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/servicio']], [], []],
    'service_creation' => [[], ['_controller' => 'App\\Controller\\ServiceController::creation'], [], [['text', '/nueva-suscripcion']], [], []],
    'my_services' => [[], ['_controller' => 'App\\Controller\\ServiceController::myServices'], [], [['text', '/mis-suscripciones']], [], []],
    'service_edit' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/editar-suscripcion']], [], []],
    'service_delete' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/borrar-suscripcion']], [], []],
    'category_detail' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categoria']], [], []],
    'by_category' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::byCategory'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/por-categoria']], [], []],
    'category_creation' => [[], ['_controller' => 'App\\Controller\\CategoryController::creation'], [], [['text', '/nueva-categoria']], [], []],
    'my_categories' => [[], ['_controller' => 'App\\Controller\\CategoryController::myCategories'], [], [['text', '/mis-categorias']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/editar-categoria']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/borrar-categoria']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/registro']], [], []],
    'profile_view' => [[], ['_controller' => 'App\\Controller\\UserController::profile_view'], [], [['text', '/mi-perfil']], [], []],
    'profile_edit' => [[], ['_controller' => 'App\\Controller\\UserController::profile_edit'], [], [['text', '/editar-perfil']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
    'user_delete' => [[], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['text', '/darse-de-baja']], [], []],
];