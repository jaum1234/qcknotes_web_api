<?php

require_once __DIR__ . "/../vendor/autoload.php";
$routes = require_once __DIR__ . "/../routes/index.php";

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$context = new RequestContext();
$context->fromRequest($request);

$path = $context->getPathInfo();

$matcher = new UrlMatcher($routes, $context);
$match = $matcher->match($path);

var_dump($match);

