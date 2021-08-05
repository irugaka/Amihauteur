<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout'], null, ['GET' => 0], null, false, false, null],
        ],
        '/index' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/pdf2' => [[['_route' => 'pdf2', '_controller' => 'App\\Controller\\DefaultController::toPdfActionLegend'], null, null, null, false, false, null]],
        '/GestionAdmin' => [[['_route' => 'GestionAdmin', '_controller' => 'App\\Controller\\AdminController::GestionAdmin'], null, null, null, false, false, null]],
        '/GestionAdmin/AjouterAccessoire' => [[['_route' => 'AdminAjouterAccessoire', '_controller' => 'App\\Controller\\AdminController::AjouterAccessoire'], null, null, null, false, false, null]],
        '/GestionAdmin/AjouterTypeEchelle' => [[['_route' => 'AdminAjouterTypeEchelle', '_controller' => 'App\\Controller\\AdminController::AjouterTypeEchelle'], null, null, null, false, false, null]],
        '/GestionAdmin/AjouterEntree' => [[['_route' => 'AdminAjouterEntree', '_controller' => 'App\\Controller\\AdminController::AjouterEntree'], null, null, null, false, false, null]],
        '/GestionAdmin/AjouterSortie' => [[['_route' => 'AdminAjouterSortie', '_controller' => 'App\\Controller\\AdminController::AjouterSortie'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/register(?'
                    .'|/([^/]++)(?'
                        .'|(*:31)'
                        .'|(*:38)'
                    .')'
                    .'|Invite/([^/]++)(*:61)'
                .')'
                .'|/ajout(?'
                    .'|/([^/]++)(*:87)'
                    .'|Echelle/([^/]++)(*:110)'
                .')'
                .'|/detail/([^/]++)(*:135)'
                .'|/Norme/([^/]++)(*:158)'
                .'|/Hauteur/([^/]++)(*:183)'
                .'|/Entree/([^/]++)(*:207)'
                .'|/Sortie/([^/]++)(*:231)'
                .'|/A(?'
                    .'|ccessoire/([^/]++)(*:262)'
                    .'|joutFixation/([^/]++)(*:291)'
                .')'
                .'|/ChangementVolee/([^/]++)(*:325)'
                .'|/Pdf/([^/]++)(*:346)'
                .'|/pdf3/([^/]++)(*:368)'
                .'|/GestionAdmin/(?'
                    .'|Supprimer(?'
                        .'|Accessoire/([^/]++)(*:424)'
                        .'|TypeEchelle/([^/]++)(*:452)'
                        .'|Entree/([^/]++)(*:475)'
                        .'|Sortie/([^/]++)(*:498)'
                    .')'
                    .'|Modifier(?'
                        .'|Accessoire/([^/]++)(*:537)'
                        .'|TypeEchelle/([^/]++)(*:565)'
                        .'|Entree/([^/]++)(*:588)'
                        .'|Sortie/([^/]++)(*:611)'
                    .')'
                    .'|Commercialise(?'
                        .'|Accessoire/([^/]++)(*:655)'
                        .'|TypeEchelle/([^/]++)(*:683)'
                        .'|Entree/([^/]++)(*:706)'
                        .'|Sortie/([^/]++)(*:729)'
                    .')'
                .')'
                .'|/ModifierConfig/([^/]++)(*:763)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], ['verification'], null, null, false, true, null]],
        38 => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], ['Verification'], null, null, false, true, null]],
        61 => [[['_route' => 'RegisterInvite', '_controller' => 'App\\Controller\\RegistrationController::RegisterInvite'], ['id'], null, null, false, true, null]],
        87 => [[['_route' => 'ajout', '_controller' => 'App\\Controller\\DefaultController::AjoutConfig'], ['verification'], null, null, false, true, null]],
        110 => [[['_route' => 'ajoutEchelle', '_controller' => 'App\\Controller\\DefaultController::AjoutEchelle'], ['id'], null, null, false, true, null]],
        135 => [[['_route' => 'detailConfig', '_controller' => 'App\\Controller\\DefaultController::detailConfig'], ['id'], null, null, false, true, null]],
        158 => [[['_route' => 'ChoixNorme', '_controller' => 'App\\Controller\\DefaultController::ChoixNorme'], ['id'], null, null, false, true, null]],
        183 => [[['_route' => 'ajoutHauteur', '_controller' => 'App\\Controller\\DefaultController::ajoutHauteur'], ['id'], null, null, false, true, null]],
        207 => [[['_route' => 'ajoutEntree', '_controller' => 'App\\Controller\\DefaultController::ajoutEntree'], ['id'], null, null, false, true, null]],
        231 => [[['_route' => 'ajoutSortie', '_controller' => 'App\\Controller\\DefaultController::ajoutSortie'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'accessoireAjout', '_controller' => 'App\\Controller\\DefaultController::AjoutAccessoire'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'ajoutFixation', '_controller' => 'App\\Controller\\DefaultController::AjoutFixation'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'ajoutChangementVolee', '_controller' => 'App\\Controller\\DefaultController::ajoutChangementVolee'], ['id'], null, null, false, true, null]],
        346 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\DefaultController::toPdfAction'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'pdf3', '_controller' => 'App\\Controller\\DefaultController::toPdfActionIncruste'], ['id'], null, null, false, true, null]],
        424 => [[['_route' => 'AdminSupprimerAccessoire', '_controller' => 'App\\Controller\\AdminController::SupprimerAccessoire'], ['id'], null, null, false, true, null]],
        452 => [[['_route' => 'AdminSupprimerTypeEchelle', '_controller' => 'App\\Controller\\AdminController::SupprimerTypeEchelle'], ['id'], null, null, false, true, null]],
        475 => [[['_route' => 'AdminSupprimerEntree', '_controller' => 'App\\Controller\\AdminController::SupprimerEntree'], ['id'], null, null, false, true, null]],
        498 => [[['_route' => 'AdminSupprimerSortie', '_controller' => 'App\\Controller\\AdminController::SupprimerSortie'], ['id'], null, null, false, true, null]],
        537 => [[['_route' => 'AdminModifierAccessoire', '_controller' => 'App\\Controller\\AdminController::ModifierAccessoire'], ['id'], null, null, false, true, null]],
        565 => [[['_route' => 'AdminModifierTypeEchelle', '_controller' => 'App\\Controller\\AdminController::ModifierTypeEchelle'], ['id'], null, null, false, true, null]],
        588 => [[['_route' => 'AdminModifierEntree', '_controller' => 'App\\Controller\\AdminController::ModifierEntree'], ['id'], null, null, false, true, null]],
        611 => [[['_route' => 'AdminModifierSortie', '_controller' => 'App\\Controller\\AdminController::ModifierSortie'], ['id'], null, null, false, true, null]],
        655 => [[['_route' => 'AdminCommercialiseAccessoire', '_controller' => 'App\\Controller\\AdminController::CommercialiseAccessoire'], ['id'], null, null, false, true, null]],
        683 => [[['_route' => 'AdminCommercialiseTypeEchelle', '_controller' => 'App\\Controller\\AdminController::CommercialiseTypeEchelle'], ['id'], null, null, false, true, null]],
        706 => [[['_route' => 'AdminCommercialiseEntree', '_controller' => 'App\\Controller\\AdminController::CommercialiseEntree'], ['id'], null, null, false, true, null]],
        729 => [[['_route' => 'AdminCommercialiseSortie', '_controller' => 'App\\Controller\\AdminController::CommercialiseSortie'], ['id'], null, null, false, true, null]],
        763 => [
            [['_route' => 'ModifierConfig', '_controller' => 'App\\Controller\\DefaultController::ModifierConfig'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
