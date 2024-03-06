<?php

use Joaocoura\UsersService\Services\Dotenv\Dotenv;
use Symfony\Component\Dotenv\Dotenv as SymDotenv;

$dotenv = new Dotenv((new SymDotenv()));

$dotenv->load(__DIR__ . "/../.env");