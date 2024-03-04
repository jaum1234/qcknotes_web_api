<?php

namespace Joaocoura\UsersService\Controllers;

use Joaocoura\UsersService\Services\Dotenv\DotenvService;
use Joaocoura\UsersService\Services\Repositories\UserRepository;

class UserController {
    public function __construct(
        private UserRepository $userRepository,
        private DotenvService $dotenvService
    ) {}

    public function store() {}
    public function show() {
    }
    public function update() {}
    public function delete() {}
}