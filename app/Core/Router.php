<?php
namespace app\Core;

class Router {
    private static $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function get($uri, $action) {
        self::$routes['GET'][$uri] = $action;
    }

    public static function post($uri, $action) {
        self::$routes['POST'][$uri] = $action;
    }

    public static function dispatch($requestUri, $method) {

        $requestUri = explode('?', $requestUri)[0];

        foreach (self::$routes[$method] as $route => $action) {
            $pattern = preg_replace('/{([^\/]+)}/', '([^/]+)', $route);
            $pattern = "#^$pattern$#";

            if (preg_match($pattern, $requestUri, $matches)) {

                array_shift($matches);

                if (is_callable($action)) {
                    return call_user_func_array($action, $matches);
                }

                if (is_array($action)) {
                    $controller = new $action[0];
                    $method = $action[1];
                    return call_user_func_array([$controller, $method], $matches);
                }
            }
        }

        http_response_code(404);
        echo "404 - Página no encontrada";
    }
}
