<?php

namespace Joaocoura\UsersService\services\routing;

use Symfony\Component\Routing\Route as RoutingRoute;

class Route {
   
    public static function get(string $url, string $controller, string $action): RoutingRoute {
        return self::create($url, $controller, $action, ["GET"]);
    }

    public static function post(string $url, string $controller, string $action): RoutingRoute {
        return self::create($url, $controller, $action, ["POST"]);
    }    

    public static function put(string $url, string $controller, string $action): RoutingRoute {
        return self::create($url, $controller, $action, ["PUT"]);
    }

    public static function delete(string $url, string $controller, string $action): RoutingRoute {
        return self::create($url, $controller, $action, ["DELETE"]);
    }

    private static function create(string $url, string $controller, string $action, array $methods): RoutingRoute {
        return new RoutingRoute($url, [
            "_controller" => $controller,
            "_action" => $action
        ], methods: $methods);
    }
}