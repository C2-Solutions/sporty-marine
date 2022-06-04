<?php

require_once('core/functions.php');
require_once('core/database/config.php');
require_once('core/settings.php');

$models = scandir('models');
$controllers = scandir('controllers');
$classes = scandir('class');

loadFilesFromDir($models, 'models');
loadFilesFromDir($controllers, 'controllers');
loadFilesFromDir($classes, 'class');

require_once('class/Router.php');
require_once('core/routes.php');
