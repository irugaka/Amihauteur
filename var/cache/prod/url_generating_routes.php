<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
    'ajout' => [[], ['_controller' => 'App\\Controller\\DefaultController::AjoutConfig'], [], [['text', '/ajout']], [], []],
    'ajoutEchelle' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::AjoutEchelle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ajoutEchelle']], [], []],
    'detailConfig' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::detailConfig'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/detail']], [], []],
    'ChoixNorme' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::ChoixNorme'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Norme']], [], []],
    'ajoutHauteur' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::ajoutHauteur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Hauteur']], [], []],
    'ajoutEntree' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::ajoutEntree'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Entree']], [], []],
    'ajoutSortie' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::ajoutSortie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Sortie']], [], []],
    'accessoireAjout' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::AjoutAccessoire'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Accessoire']], [], []],
    'ajoutChangementVolee' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::ajoutChangementVolee'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ChangementVolee']], [], []],
];