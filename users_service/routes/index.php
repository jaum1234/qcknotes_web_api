<?php

use JoaoCoura\UserService\services\routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection;
$routes->addNamePrefix("/api/v1/users");

$userStore  = Route::post("", UserController::class, "index");
$userShow   = Route::get("/{id}", UserController::class, "store");
$userUpdate = Route::put("/{id}", UserController::class, "update");
$userDelete = Route::delete("/{id}", UserController::class, "delete");

$routes->add("user_list", $userList);