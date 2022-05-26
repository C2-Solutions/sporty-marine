<?php

//$prefix = '';
//$requestURI = explode('?', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[0];
//if (!empty($prefix) && $requestURI=='/'.$prefix):
//    header("Location: /".$prefix."/", true, 301);
//    exit();
//elseif ($requestURI=='/'.$prefix."/"):
//    $requestURI="/";
//elseif (substr($requestURI, 0, strlen('/'.$prefix))===('/'.$prefix)):
//    $requestURI=substr($requestURI, strlen('/'.$prefix));
//endif;
//
//$request = trim($requestURI, '/');


$router->define([
    ''           => 'controllers/home.controller.php',
    'modellen'   => 'controllers/modellen.controller.php',
    'contact'    => 'controllers/contact.controller.php',
    'model'      => 'controllers/model.controller.php',
    'adminLogin' => 'controllers/adminLogin.controller.php'
]);
