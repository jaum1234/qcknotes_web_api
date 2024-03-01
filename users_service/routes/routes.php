<?php

use Joaocoura\UsersService\services\routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Joaocoura\UsersService\controllers\UserController;

$routes = new RouteCollection;

$userStore  = Route::post("", UserController::class, "store");
$userShowUpdateDelete = Route::many("/{id}", UserController::class, ["show" , "update", "destroy"], ["GET", "PUT", "DELETE"]);

$routes->add("user_store", $userStore);
$routes->add("user_show_update_delete", $userShowUpdateDelete);

$routes->addPrefix("/api/v1/users");

return $routes;