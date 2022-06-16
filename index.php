<?php

ini_set("display_errors", "1");

require_once('config/config.php');
require_once('vendor/autoload.php');

require_once('core/bootstrap.php');
require_once('core/request.php');
require_once('core/functions.php');

require('core/Routes.php');
require('routes.php');

require_all_files("/App");

// // Where are these used?
// $models = scandir('App/Models');
// $controllers = scandir('App/Controllers');

// loadFilesFromDir($models, 'App/Models');
// loadFilesFromDir($controllers, 'App/Controllers');

$routerOutput = $router->direct(
    Request::uri()
);
