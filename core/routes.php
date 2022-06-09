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
//
//$router->define([
//    ''           => 'controllers/home.controller.php',
//    'modellen'   => 'controllers/modellen.controller.php',
//    'contact'    => 'controllers/contact.controller.php',
//    'model'      => 'controllers/model.controller.php',
//    'adminLogin' => 'controllers/adminLogin.controller.php'
//]);

// Shows header on every page
view('shared/header');

// Generate request from URL
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


if (!empty($request)) :
// If request empty, send directly to home
    if (!empty($_POST)) :
        switch ($request) {
            case '/admin-login':
                Router::post('AdminController', 'login');
                break;

            case '/contact':
                Router::post('ContactController', 'new');
                break;
            case '/edit-model':
                Router::post('ModelController', 'edit');
                break;
            default:
                view('404');
                view('shared/footer');
                break;
        }
    else :
        switch ($request) {
            case '/':
            case '/home':
                Router::get('HomeController', 'index');
                break;

            case '/contact':
                Router::get('ContactController', 'index');
                break;

            case '/modellen':
            case '/admin-modellen':
                Router::get('ModelController', 'index');
                break;

            case '/model':
                if (!empty($_GET['id'])) :
                    Router::get('ModelController', 'modelInformation', htmlspecialchars($_GET['id']));
                endif;
                break;

            case '/admin-login':
                Router::get('AdminController', 'index');
                break;

            case '/admin-dashboard':
                Router::get('AdminController', 'dashboardIndex');
                break;

            case '/edit-model':
                if (!empty($_GET['id'])) :
                    Router::get('ModelController', 'editModel', htmlspecialchars($_GET['id']));
                endif;
                break;

            case '/create-model':
                if (!empty($_GET['id'])) :
                    Router::get('ModelController', 'createModel', htmlspecialchars($_GET['id']));
                endif;
                break;

            case '/admin-contacts':
                Router::get('ContactController', 'adminContactIndex');
                break;

            case '/admin-contact':
                if (!empty($_GET['id'])) :
                    Router::get('ContactController', 'contactInformation', htmlspecialchars($_GET['id']));
                endif;
                break;

            case '/delete-contact':
                if (!empty($_GET['id'])) :
                    Router::get('ContactController', 'delete', htmlspecialchars($_GET['id']));
                endif;

                break;
            case '/delete-model':
                if (!empty($_GET['id'])) :
                    Router::get('ModelController', 'delete', htmlspecialchars($_GET['id']));
                endif;
                break;

            case '/uitloggen':
                Router::get('AdminController', 'logout');
                break;

            default:
                view('404');
                view('shared/footer');
                break;
        }
    endif;
else :
    view('home');
endif;

// Shows footer on every page
view('shared/footer');
