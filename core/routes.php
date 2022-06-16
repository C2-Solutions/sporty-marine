<?php

foreach (glob("App/**/*.php") as $filename) {
    require_once($filename);
}

class Routes
{
    protected $routes = [];

    // Define the routes
    public function define($routes)
    {
        $this->routes = $routes;
        define('ROUTES', $routes);
    }

    // Direct the user to the given uri
    public function direct($uri)
    {
        if (isset($this->routes['GET'][$uri])) {
            $pn = $this->routes['GET'][$uri]['title'];
        } else {
            $pn = "Not found - " . SITE_NAME;
        }

        define('PAGE_NAME', $pn);

        require 'views/shared/head.view.php';
        self::returnHeader();

        // try {
        if (isset($this->routes['GET']) || isset($this->routes['POST'])) {
            // If the request method is post it will select the array keys from the POST in the array
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controller = $this->routes['POST'][$uri]['controller'];
                $method = $this->routes['POST'][$uri]['method'];
//                $id = $this->routes['GET'][$uri]['id'];

                return $controller::$method();
            // If the request method is get it will select the array keys from the GET in the array
            } elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && !isset($routes['GET'][$uri])) {
                $controller = $this->routes['GET'][$uri]['controller'];
                $method = $this->routes['GET'][$uri]['method'];

                // Added some protected routes so not anyone has access to these routes
                if (!empty($this->routes['GET'][$uri]['protected'])) {
                    $protectedRoute = $this->routes['GET'][$uri]['protected'];
                } else {
                    $protectedRoute = false;
                }
                if (isset($_GET['id'])) {
                    $id = htmlspecialchars($_GET['id']);
                    $controller::$method($id);
                } else {
                    $controller::$method();
                }
            } else {
                // Page doesn't exist, return error
                (new NotFoundController())->index();
            }
        } else {
            // Page doesn't exist, return error
            (new NotFoundController())->index();
        }
        // } catch (Throwable $e) {
        //     // Page doesn't exist, return error
        //     (new NotFoundController())->index();
        // }
        require 'views/shared/footer.view.php';
    }

    protected function returnHeader($protectedRoute = false)
    {
        if ($protectedRoute) {
            if ($_SESSION['user_logged_in']) {
                require 'views/shared/admin-header.view.php';
            }
        } else {
            require 'views/shared/header.view.php';
        }
    }
}
