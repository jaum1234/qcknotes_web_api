<?php

use Joaocoura\UsersService\Services\Dotenv\DotenvService;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new DotenvService((new Dotenv()));

$dotenv->load(__DIR__ . "/../.env");