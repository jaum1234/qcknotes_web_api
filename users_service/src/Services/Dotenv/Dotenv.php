<?php

namespace Joaocoura\UsersService\Services\Dotenv;

use Symfony\Component\Dotenv\Dotenv as SymDotenv;

class Dotenv {

    public function __construct(
        private SymDotenv $service
    ) {}

    public function load($path) {
        $this->service->load($path);
    }

    public function get($name) {
        return $_ENV[$name];
    }
}