<?php
$router = new Routes();

$preroute = trim((new ViewModel())->extendRoute(), '//');

$namesuffix = ' - ' . SITE_NAME;

$routes = $router->define(
    [
        'GET' => [
            $preroute . '' => [
                'controller' => 'IndexController',
                'method' => 'index',
                'name' => 'Home',
                'title' => 'Home' . $namesuffix
            ],
            $preroute . 'about' => [
                'controller' => 'AboutController',
                'method' => 'index',
                'name' => 'About',
                'title' => 'About' . $namesuffix
            ],
            $preroute . 'contact' => [
                'controller' => 'ContactController',
                'method' => 'index',
                'name' => 'Contact',
                'title' => 'Contact' . $namesuffix
            ],
            $preroute . 'boats' => [
                'controller' => 'BoatController',
                'method' => 'index',
                'name' => 'Boats',
                'title' => 'Models' . $namesuffix
            ],
            $preroute . 'login' => [
                'controller' => 'AuthenticationController',
                'method' => 'index',
                'name' => 'Login',
                'title' => 'Login' . $namesuffix
            ],
            $preroute . 'logout' => [
                'controller' => 'AuthenticationController',
                'method' => 'logout',
                'name' => 'Logout',
                'title' => "Logout" . $namesuffix
            ],
        ],
        'POST' => [
            $preroute . 'login' => [
                'controller' => 'AuthenticationController',
                'method' => 'loginUser'
            ],
            $preroute . 'logout' => [
                'controller' => 'AuthenticationController',
                'method' => 'logoutUser'
            ],
            $preroute . 'contact' => [
                'controller' => 'ContactController',
                'method' => 'new'
            ],
        ]
    ]
);
