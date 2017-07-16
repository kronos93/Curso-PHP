<?php
define('ROUTES', [
    '' => [
            'controller' => 'Page',
            'action' => 'index',
        ],
    'nosotros' => [
            'controller' => 'Page',
            'action' => 'about',
        ],
    'producto' => [
            'controller' => 'Article',
            'action' => 'show',
        ],
    'productos' => [
            'controller' => 'Article',
            'action' => 'index',
        ],
    'contacto' => [
            'controller' => 'Page',
            'action' => 'contact',
        ]
]);
