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
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout'], null, ['GET' => 0], null, false, false, null],
        ],
        '/index' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/pdf2' => [[['_route' => 'pdf2', '_controller' => 'App\\Controller\\DefaultController::toPdfActionLegend'], null, null, null, false, false, null]],
        '/pdf3' => [[['_route' => 'pdf3', '_controller' => 'App\\Controller\\DefaultController::toPdfActionIncruste'], null, null, null, false, false, null]],
        '/GestionAdmin' => [[['_route' => 'GestionAdmin', '_controller' => 'App\\Controller\\AdminController::GestionAdmin'], null, null, null, false, false, null]],
        '/GestionAdmin/AjouterAccessoire' => [[['_route' => 'AdminAjouterAccessoire', '_controller' => 'App\\Controller\\AdminController::AjouterAccessoire'], null, null, null, false, false, null]],
        '/GestionAdmin/AjouterTypeEchelle' => [[['_route' => 'AdminAjouterTypeEchelle', '_controller' => 'App\\Controller\\AdminController::AjouterTypeEchelle'], null, null, null, false, false, null]],
        '/GestionAdmin/AjouterEntree' => [[['_route' => 'AdminAjouterEntree', '_controller' => 'App\\Controller\\AdminController::AjouterEntree'], null, null, null, false, false, null]],
        '/GestionAdmin/AjouterSortie' => [[['_route' => 'AdminAjouterSortie', '_controller' => 'App\\Controller\\AdminController::AjouterSortie'], null, null, null, false, false, null]],
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
                .'|/register(?'
                    .'|/([^/]++)(?'
                        .'|(*:193)'
                        .'|(*:201)'
                    .')'
                    .'|Invite/([^/]++)(*:225)'
                .')'
                .'|/ajout(?'
                    .'|/([^/]++)(*:252)'
                    .'|Echelle/([^/]++)(*:276)'
                .')'
                .'|/detail/([^/]++)(*:301)'
                .'|/Norme/([^/]++)(*:324)'
                .'|/Hauteur/([^/]++)(*:349)'
                .'|/Entree/([^/]++)(*:373)'
                .'|/Sortie/([^/]++)(*:397)'
                .'|/A(?'
                    .'|ccessoire/([^/]++)(*:428)'
                    .'|joutFixation/([^/]++)(*:457)'
                .')'
                .'|/ChangementVolee/([^/]++)(*:491)'
                .'|/Pdf/([^/]++)(*:512)'
                .'|/GestionAdmin/(?'
                    .'|Supprimer(?'
                        .'|Accessoire/([^/]++)(*:568)'
                        .'|TypeEchelle/([^/]++)(*:596)'
                        .'|Entree/([^/]++)(*:619)'
                        .'|Sortie/([^/]++)(*:642)'
                    .')'
                    .'|Modifier(?'
                        .'|Accessoire/([^/]++)(*:681)'
                        .'|TypeEchelle/([^/]++)(*:709)'
                        .'|Entree/([^/]++)(*:732)'
                        .'|Sortie/([^/]++)(*:755)'
                    .')'
                    .'|Commercialise(?'
                        .'|Accessoire/([^/]++)(*:799)'
                        .'|TypeEchelle/([^/]++)(*:827)'
                        .'|Entree/([^/]++)(*:850)'
                        .'|Sortie/([^/]++)(*:873)'
                    .')'
                .')'
                .'|/ModifierConfig/([^/]++)(*:907)'
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
        193 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], ['verification'], null, null, false, true, null]],
        201 => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], ['Verification'], null, null, false, true, null]],
        225 => [[['_route' => 'RegisterInvite', '_controller' => 'App\\Controller\\RegistrationController::RegisterInvite'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'ajout', '_controller' => 'App\\Controller\\DefaultController::AjoutConfig'], ['verification'], null, null, false, true, null]],
        276 => [[['_route' => 'ajoutEchelle', '_controller' => 'App\\Controller\\DefaultController::AjoutEchelle'], ['id'], null, null, false, true, null]],
        301 => [[['_route' => 'detailConfig', '_controller' => 'App\\Controller\\DefaultController::detailConfig'], ['id'], null, null, false, true, null]],
        324 => [[['_route' => 'ChoixNorme', '_controller' => 'App\\Controller\\DefaultController::ChoixNorme'], ['id'], null, null, false, true, null]],
        349 => [[['_route' => 'ajoutHauteur', '_controller' => 'App\\Controller\\DefaultController::ajoutHauteur'], ['id'], null, null, false, true, null]],
        373 => [[['_route' => 'ajoutEntree', '_controller' => 'App\\Controller\\DefaultController::ajoutEntree'], ['id'], null, null, false, true, null]],
        397 => [[['_route' => 'ajoutSortie', '_controller' => 'App\\Controller\\DefaultController::ajoutSortie'], ['id'], null, null, false, true, null]],
        428 => [[['_route' => 'accessoireAjout', '_controller' => 'App\\Controller\\DefaultController::AjoutAccessoire'], ['id'], null, null, false, true, null]],
        457 => [[['_route' => 'ajoutFixation', '_controller' => 'App\\Controller\\DefaultController::AjoutFixation'], ['id'], null, null, false, true, null]],
        491 => [[['_route' => 'ajoutChangementVolee', '_controller' => 'App\\Controller\\DefaultController::ajoutChangementVolee'], ['id'], null, null, false, true, null]],
        512 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\DefaultController::toPdfAction'], ['id'], null, null, false, true, null]],
        568 => [[['_route' => 'AdminSupprimerAccessoire', '_controller' => 'App\\Controller\\AdminController::SupprimerAccessoire'], ['id'], null, null, false, true, null]],
        596 => [[['_route' => 'AdminSupprimerTypeEchelle', '_controller' => 'App\\Controller\\AdminController::SupprimerTypeEchelle'], ['id'], null, null, false, true, null]],
        619 => [[['_route' => 'AdminSupprimerEntree', '_controller' => 'App\\Controller\\AdminController::SupprimerEntree'], ['id'], null, null, false, true, null]],
        642 => [[['_route' => 'AdminSupprimerSortie', '_controller' => 'App\\Controller\\AdminController::SupprimerSortie'], ['id'], null, null, false, true, null]],
        681 => [[['_route' => 'AdminModifierAccessoire', '_controller' => 'App\\Controller\\AdminController::ModifierAccessoire'], ['id'], null, null, false, true, null]],
        709 => [[['_route' => 'AdminModifierTypeEchelle', '_controller' => 'App\\Controller\\AdminController::ModifierTypeEchelle'], ['id'], null, null, false, true, null]],
        732 => [[['_route' => 'AdminModifierEntree', '_controller' => 'App\\Controller\\AdminController::ModifierEntree'], ['id'], null, null, false, true, null]],
        755 => [[['_route' => 'AdminModifierSortie', '_controller' => 'App\\Controller\\AdminController::ModifierSortie'], ['id'], null, null, false, true, null]],
        799 => [[['_route' => 'AdminCommercialiseAccessoire', '_controller' => 'App\\Controller\\AdminController::CommercialiseAccessoire'], ['id'], null, null, false, true, null]],
        827 => [[['_route' => 'AdminCommercialiseTypeEchelle', '_controller' => 'App\\Controller\\AdminController::CommercialiseTypeEchelle'], ['id'], null, null, false, true, null]],
        850 => [[['_route' => 'AdminCommercialiseEntree', '_controller' => 'App\\Controller\\AdminController::CommercialiseEntree'], ['id'], null, null, false, true, null]],
        873 => [[['_route' => 'AdminCommercialiseSortie', '_controller' => 'App\\Controller\\AdminController::CommercialiseSortie'], ['id'], null, null, false, true, null]],
        907 => [
            [['_route' => 'ModifierConfig', '_controller' => 'App\\Controller\\DefaultController::ModifierConfig'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
