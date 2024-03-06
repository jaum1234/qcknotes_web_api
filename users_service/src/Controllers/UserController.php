<?php

namespace Joaocoura\UsersService\Controllers;

use Joaocoura\UserService\Models\User;
use Joaocoura\UsersService\Services\Dotenv\Dotenv;
use Joaocoura\UsersService\Services\Repositories\Repository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController {
    public function __construct(
        private Repository $userRepository,
        private Dotenv $dotenvService
    ) {
        $this->userRepository->get(User::class);
    }

    public function store(Request $request, Response $response) {

    }
    public function show() {
    }
    public function update() {}
    public function delete() {}
}