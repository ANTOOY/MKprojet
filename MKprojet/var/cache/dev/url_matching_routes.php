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
        '/admin/annonces/ajout' => [[['_route' => 'admin_annonces_ajout', '_controller' => 'App\\Controller\\Admin\\AdminController::ajoutannonce'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/annonces' => [[['_route' => 'admin_annonces_home', '_controller' => 'App\\Controller\\Admin\\AnnoncesController::index'], null, null, null, true, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories_home', '_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], null, null, null, true, false, null]],
        '/admin/categories/ajout' => [[['_route' => 'admin_categories_ajout', '_controller' => 'App\\Controller\\Admin\\CategoriesController::ajoutCategorie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/articles' => [[['_route' => 'app_articles', '_controller' => 'App\\Controller\\ArticlesController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/invoice' => [[['_route' => 'invoice', '_controller' => 'App\\Controller\\InvoiceController::index'], null, null, null, false, false, null]],
        '/invoice/new' => [[['_route' => 'invoice_new', '_controller' => 'App\\Controller\\InvoiceController::ajoutannonce'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier/voir' => [[['_route' => 'panier_voir', '_controller' => 'App\\Controller\\PanierController::voir'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'app_users', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|annonces/(?'
                            .'|activer/([^/]++)(*:210)'
                            .'|supprimer/([^/]++)(*:236)'
                        .')'
                        .'|categories/modifier/([^/]++)(*:273)'
                    .')'
                    .'|nnonces/details/([^/]++)(*:306)'
                .')'
                .'|/panier/(?'
                    .'|panier/([^/]++)/less(*:346)'
                    .'|([^/]++)/remove(*:369)'
                    .'|panier/([^/]++)/add(*:396)'
                .')'
                .'|/([^/]++)/stripe(*:421)'
                .'|/stripe/([^/]++)/(?'
                    .'|succes/([^/]++)(*:464)'
                    .'|annulation(*:482)'
                .')'
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
        210 => [[['_route' => 'admin_annonces_activer', '_controller' => 'App\\Controller\\Admin\\AnnoncesController::activer'], ['id'], null, null, false, true, null]],
        236 => [[['_route' => 'admin_annonces_supprimer', '_controller' => 'App\\Controller\\Admin\\AnnoncesController::supprimer'], ['id'], null, null, false, true, null]],
        273 => [[['_route' => 'admin_categories_modifier', '_controller' => 'App\\Controller\\Admin\\CategoriesController::ModifCategories'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        306 => [[['_route' => 'annonces_details', '_controller' => 'App\\Controller\\AnnoncesController::details'], ['slug'], null, null, false, true, null]],
        346 => [[['_route' => 'panier_less', '_controller' => 'App\\Controller\\PanierController::less'], ['product'], null, null, false, false, null]],
        369 => [[['_route' => 'panier_supprimer', '_controller' => 'App\\Controller\\PanierController::remove'], ['product'], null, null, false, false, null]],
        396 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\PanierController::add'], ['product'], null, null, false, false, null]],
        421 => [[['_route' => 'stripe_checkout', '_controller' => 'App\\Controller\\StripeController::checkout'], ['invoice'], null, null, false, false, null]],
        464 => [[['_route' => 'stripe_valid_payment', '_controller' => 'App\\Controller\\StripeController::success'], ['invoice', 'stripeSuccessKey'], null, null, false, true, null]],
        482 => [
            [['_route' => 'stripe_error_payment', '_controller' => 'App\\Controller\\StripeController::error'], ['invoice'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
