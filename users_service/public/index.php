<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../bootstrap/bootstrap.php";

echo $controller->$action($request, $response);
