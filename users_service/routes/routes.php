<?php

use Joaocoura\UsersService\services\routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Joaocoura\UsersService\controllers\UserController;

$routes = new RouteCollection;

$userStore  = Route::post("", UserController::class, "store");
$userShow   = Route::get("/{id}", UserController::class, "show");
$userUpdate = Route::put("/{id}", UserController::class, "update");
$userDelete = Route::delete("/{id}", UserController::class, "delete");

$routes->add("user_show", $userShow);
$routes->add("user_store", $userStore);
$routes->add("user_update", $userUpdate);
$routes->add("user_delete", $userDelete);

$routes->addPrefix("/api/v1/users");

return $routes;