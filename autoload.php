<?php

require_once('core/functions.php');
require_once('core/database/config.php');
require_once('core/settings.php');

require_once('class/Router.php');
require_once('core/routes.php');

ini_set("display_errors", "1");

require_once('config/config.php');
require_once('vendor/autoload.php');

require('core/bootstrap.php');
require('core/request.php');
require('routes.php');

$routerOutput = $router->direct(
    Request::uri()
);
