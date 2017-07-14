<?php
define('ROUTES', [
    '' => [
            'controller' => 'Page',
            'action' => 'index',
        ],
    'nosotros' => [
            'controller' => 'Page',
            'action' => 'index',
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
