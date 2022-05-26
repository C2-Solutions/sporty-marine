<?php

class Router
{
    // Handles all GET operations from routes.php
    public static function get($controller, $method, $getter = null)
    {
        self::checkClassmethod($controller, $method);

        $request = new $controller();
        $request->$method($getter);
    }

    // Handles all POST operations from routes.php
    public static function post($controller, $method, $posts = null)
    {
        self::checkClassMethod($controller, $method);

        $request = new $controller();
        $request->$method($posts);
    }

    // Checks if the controller and methods exist, otherwise show 404 and footer
    private static function checkClassMethod($controller, $method)
    {
        if (!class_exists($controller) || !method_exists($controller, $method)) :
            view('shared/404.php');
            view('shared/footer.php');
            exit;
        endif;
    }
}
