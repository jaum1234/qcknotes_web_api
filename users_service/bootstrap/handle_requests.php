<?php

use Joaocoura\UsersService\Services\ResponseService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

$routes = require_once __DIR__ . "/../routes/routes.php";

$request = Request::createFromGlobals();
$response = new ResponseService();

$response->setHeader("Content-Type", "application/json");

$context = new RequestContext();
$context->fromRequest($request);

$path = $context->getPathInfo();
$method = $context->getMethod();

$matcher = new UrlMatcher($routes, $context);
$match = $matcher->match($path);

$controller = $container->get($match["_controller"]);
$action = $match["_actions"];

if (is_array($action)) $action = $action[$method];

