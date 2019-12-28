<?php

$dataRoutes = [
    '/' => [
        'path' => './controller/HomeController.php',
        'controller' => 'HomeController',
        'action' => 'render'
    ],
    '/gallery' => [
        'path' => './controller/GalleryController.php',
        'controller' => 'GalleryController',
        'action' => 'render'
    ],
    '/login' => [
        'path' => './controller/LoginController.php',
        'controller' => 'LoginController',
        'action' => 'render'
    ]
];

