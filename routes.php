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
            $preroute . 'admin-contact' => [
                'controller' => 'ContactController',
                'method' => 'contactInformation',
                'name' => 'Contact',
                'title' => 'Contact' . $namesuffix
            ],
            $preroute . 'delete-contact' => [
                'controller' => 'ContactController',
                'method' => 'delete',
                'name' => 'Contact',
                'title' => 'Deleting' . $namesuffix
            ],
            $preroute . 'boats' => [
                'controller' => 'BoatController',
                'method' => 'index',
                'name' => 'Boats',
                'title' => 'Models' . $namesuffix
            ],
            $preroute . 'boat' => [
                'controller' => 'BoatController',
                'method' => 'boatInformation',
                'name' => 'Boat',
                'title' => 'Model' . $namesuffix
            ],
            $preroute . 'dashboard' => [
                'controller' => 'AdminController',
                'method' => 'index',
                'name' => 'Admin',
                'title' => 'Dashboard' . $namesuffix
            ],
            $preroute . 'new-boat' => [
                'controller' => 'BoatController',
                'method' => 'newBoat',
                'name' => 'Boat',
                'title' => 'New' . $namesuffix
            ],
            $preroute . 'edit-boat' => [
                'controller' => 'BoatController',
                'method' => 'editBoat',
                'name' => 'Boat',
                'title' => 'Edit' . $namesuffix
            ],
            $preroute . 'delete-boat' => [
                'controller' => 'BoatController',
                'method' => 'delete',
                'name' => 'Boat',
                'title' => 'Deleting' . $namesuffix
            ],
            $preroute . 'boattype' => [
                'controller' => 'BoatController',
                'method' => 'typeIndex',
                'name' => 'Boat',
                'protected' => true,
                'title' => 'Boattypes' . $namesuffix
            ],
            $preroute . 'new-type' => [
                'controller' => 'BoatController',
                'method' => 'newTypeIndex',
                'name' => 'Boat',
                'protected' => true,
                'title' => 'New type' . $namesuffix
            ],
            $preroute . 'delete-type' => [
                'controller' => 'BoatController',
                'method' => 'deleteType',
                'name' => 'Boat',
                'protected' => true,
                'title' => 'Deleting' . $namesuffix
            ],
            $preroute . 'login' => [
                'controller' => 'AuthenticationController',
                'method' => 'loginIndex',
                'name' => 'Login',
                'title' => 'Login' . $namesuffix
            ],
            $preroute . 'logout' => [
                'controller' => 'AuthenticationController',
                'method' => 'logoutIndex',
                'name' => 'Logout',
                'protected' => true,
                'title' => "Logout" . $namesuffix
            ],
            $preroute . 'setup' => [
                'controller' => 'SetupController',
                'method' => 'index',
                'name' => 'Setup',
                'title' => "Setup" . $namesuffix
            ],
        ],
        'POST' => [
            $preroute . 'login' => [
                'controller' => 'AuthenticationController',
                'method' => 'loginUser'
            ],
            $preroute . 'logout' => [
                'controller' => 'AuthenticationController',
                'method' => 'logoutUser',
                'protected' => true
            ],
            $preroute . 'setup' => [
                'controller' => 'AuthenticationController',
                'method' => 'createUser'
            ],
            $preroute . 'contact' => [
                'controller' => 'ContactController',
                'method' => 'createNew'
            ],
            $preroute . 'new-boat' => [
                'controller' => 'BoatController',
                'method' => 'new',
                'protected' => true
            ],
            $preroute . 'edit-boat' => [
                'controller' => 'BoatController',
                'method' => 'edit',
                'protected' => true
            ],
            $preroute . 'new-type' => [
                'controller' => 'BoatController',
                'method' => 'newType',
                'protected' => true
            ],
            $preroute . 'edit-type' => [
                'controller' => 'BoatController',
                'method' => 'editType',
                'protected' => true
            ],
        ]
    ]
);
