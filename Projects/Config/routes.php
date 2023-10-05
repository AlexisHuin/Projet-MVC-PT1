<?php

$routes = [
    '/' => [
        'method'=>['GET'],
        'controller'=>['Controller\Home','Index']
    ],
    '/test/{id}' => [
        'method' => ['GET'],
        'controller' => ['Controller\Test','Test']
    ]
];

?>