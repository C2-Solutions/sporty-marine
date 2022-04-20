<?php

require 'core/bootstrap.php';
//require 'views/home.views.php';

$router = new Router();

require 'routes.php'; //Die de method define uitvoert en de de routes klaar zet.

$uri =  trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri); //geef ons de pagina wanneer we op deze uri komen.