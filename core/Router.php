<?php

class Router
{
    //dit is de manier van stephan. Moet nog checken om het te laten werken.
    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        //wanneer de uri bestaat in onze routes array neem ons dan naar die
        //controller.
        if (array_key_exists($uri, $this->routes)) :
            return $this->routes[$uri]; //Als de key bestaat geef de value.
        endif;

        throw new Exception('No route defined!');
    }

//    public static function get($controller, $method, $getter = null)
//    {
//        self::checkClassmethod($controller, $method);
//
//        $request = new $controller();
//        $request->$method($posts);
//    }
//
//    private static function checkClassMethod($controller, $method)
//    {
//        if(!class_exists($controller) || !method_exists($controller, $method)) :
//            view('shared/footer.php');
//            exit;
//        endif;
//    }
}
