<?php

$dataRoutes = [
    '/' => [
        'path' => './controller/HomeController.php',
        'controller' => 'HomeController',
        'action' => 'render'
    ],
    '/posts' => [
        'path' => './controller/BlogController.php',
        'controller' => 'BlogController',
        'action' => 'getPosts'
    ],
    '/post' => [
        'path' => './controller/BlogController.php',
        'controller' => 'BlogController',
        'action' => 'getPost'
    ],
    '/login' => [
        'path' => './controller/LoginController.php',
        'controller' => 'LoginController',
        'action' => 'render'
    ],
    '/registration' => [
        'path' => './controller/RegistrationController.php',
        'controller' => 'RegistrationController',
        'action' => 'render'
    ],
];

