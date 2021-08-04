<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, ['GET' => 0], null, false, false, null]],
        '/ajout' => [[['_route' => 'ajout', '_controller' => 'App\\Controller\\DefaultController::AjoutConfig'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ajoutEchelle/([^/]++)(*:29)'
                .'|/detail/([^/]++)(*:52)'
                .'|/Norme/([^/]++)(*:74)'
                .'|/Hauteur/([^/]++)(*:98)'
                .'|/Entree/([^/]++)(*:121)'
                .'|/Sortie/([^/]++)(*:145)'
                .'|/Accessoire/([^/]++)(*:173)'
                .'|/ChangementVolee/([^/]++)(*:206)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'ajoutEchelle', '_controller' => 'App\\Controller\\DefaultController::AjoutEchelle'], ['id'], null, null, false, true, null]],
        52 => [[['_route' => 'detailConfig', '_controller' => 'App\\Controller\\DefaultController::detailConfig'], ['id'], null, null, false, true, null]],
        74 => [[['_route' => 'ChoixNorme', '_controller' => 'App\\Controller\\DefaultController::ChoixNorme'], ['id'], null, null, false, true, null]],
        98 => [[['_route' => 'ajoutHauteur', '_controller' => 'App\\Controller\\DefaultController::ajoutHauteur'], ['id'], null, null, false, true, null]],
        121 => [[['_route' => 'ajoutEntree', '_controller' => 'App\\Controller\\DefaultController::ajoutEntree'], ['id'], null, null, false, true, null]],
        145 => [[['_route' => 'ajoutSortie', '_controller' => 'App\\Controller\\DefaultController::ajoutSortie'], ['id'], null, null, false, true, null]],
        173 => [[['_route' => 'accessoireAjout', '_controller' => 'App\\Controller\\DefaultController::AjoutAccessoire'], ['id'], null, null, false, true, null]],
        206 => [
            [['_route' => 'ajoutChangementVolee', '_controller' => 'App\\Controller\\DefaultController::ajoutChangementVolee'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
