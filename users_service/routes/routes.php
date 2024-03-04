<?php

use Joaocoura\UsersService\Services\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Joaocoura\UsersService\Controllers\UserController;

$routes = new RouteCollection;

$userStore  = Route::post("", UserController::class, "store");
$userShowUpdateDelete = Route::many("/{id}", UserController::class, ["show" , "update", "destroy"], ["GET", "PUT", "DELETE"]);

$routes->add("user_store", $userStore);
$routes->add("user_show_update_delete", $userShowUpdateDelete);

$routes->addPrefix("/api/v1/users");

return $routes;