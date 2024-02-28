<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection;
$routes->addNamePrefix("/api/v1/users");

$userStore = new Route("", [
    "_controller" => UserController::class,
    "_action" => "store"
], methods: ["POST"]);

$userShow = new Route("/{id}", [
    "_controller" => UserController::class,
    "_action" => "show"
], methods: ["GET"]);

$userUpdate = new Route("/{id}", [
    "_controller" => UserController::class,
    "_action" => "update"
], methods: ["PUT"]);

$userDelete = new Route("/{id}", [
    "_controller" => UserController::class,
    "_action" => "destroy"
], methods: ["DELETE"]);

$routes->add("user_list", $userList);


