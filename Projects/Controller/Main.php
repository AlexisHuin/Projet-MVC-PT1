<?php
namespace Controller;

//use Controller\Session;
use Model\Db;

class Main
{
    static function Route($routes)
    {
        $dispatcher = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) use($routes) {
            foreach($routes as $uri=>$route)
            {
                $r->addRoute($route['method'],$uri,$route['controller']);
            }
        }) ;

        // Fetch method and URI from somewhere
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri        = $_SERVER['REQUEST_URI'];

        // Strip query string (?foo=bar) and decode URI
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
        switch ($routeInfo[0]) {
            case \FastRoute\Dispatcher::NOT_FOUND:
                echo ' ... 404 Not Found';
                break;
            case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                echo ' ... 405 Method Not Allowed';
                break;
            case \FastRoute\Dispatcher::FOUND:
                $handler    = $routeInfo[1];
                $vars       = $routeInfo[2];
                
                // Si non Static : 
                $handler[0] = new $handler[0];
                
                call_user_func(
                    $handler
                    , $vars
                );
                break;
        }
    }

    public function __construct()
    {
        //Session::Start();
        Db::Connect();
    }

    public function __destruct()
    {
        
    }

    public function __get($var)
    {

    }

    public function __set($var,$value)
    {

    }

    public function __call($method,$parameters)
    {

    }
}


?>