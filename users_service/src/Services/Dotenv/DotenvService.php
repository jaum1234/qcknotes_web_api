<?php

namespace Joaocoura\UsersService\Services\Dotenv;

use Symfony\Component\Dotenv\Dotenv;

class DotenvService {

    public function __construct(
        private Dotenv $service
    ) {}

    public function load($path) {
        $this->service->load($path);
    }

    public function get($name) {
        return $_ENV[$name];
    }
}