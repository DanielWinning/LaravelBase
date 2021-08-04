<?php

use Illuminate\Support\Facades\Route;

if (!function_exists("getAllRoutes")) {
    function getAllRoutes(): array
    {
        $getRoutes = Route::getRoutes();
        $routeList = array();

        foreach ($getRoutes as $route) {
            if ($route->action["prefix"] !== "_ignition") {
                $r = new stdClass;

                $r->uri = $route->uri;
                $r->methods = "";
                $r->controller = $route->action["controller"] ?? null;
                if (gettype($route->action["uses"]) === "object") {
                    $r->controllerAction = "Closure";
                } else {
                    $r->controllerAction = explode("@", $route->action["uses"]);
                    $r->controllerAction = $r->controllerAction[count($r->controllerAction) - 1];
                }

                foreach ($route->methods as $routeMethod) {
                    if ($routeMethod !== "HEAD") {
                        $r->methods .= $routeMethod . " ";
                    }
                }

                $routeList[] = $r;
            }
        }

        return $routeList;
    }
}
