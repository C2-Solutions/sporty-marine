<?php

ini_set("display_errors", "1");

require_once('config/config.php');
require_once('vendor/autoload.php');

require_once('core/bootstrap.php');
require_once('core/request.php');
require_once('core/functions.php');

require('core/Routes.php');
require('routes.php');

// // Where are these used?
// // $models = scandir('models');
// $controllers = scandir('controllers');

// loadFilesFromDir($controllers, 'App/Controllers');
// // loadFilesFromDir($models, 'App/Models');

$routerOutput = $router->direct(
    Request::uri()
);
