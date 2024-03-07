<?php

namespace Joaocoura\UsersService\Controllers;

use Joaocoura\UsersService\Models\User;
use Joaocoura\UsersService\Services\Dotenv\Dotenv;
use Joaocoura\UsersService\Services\Repositories\Repository;
use Joaocoura\UsersService\Services\RequestService;
use Joaocoura\UsersService\Services\ResponseService;
use Symfony\Component\HttpFoundation\Request;

class UserController {
    public function __construct(
        private Repository $userRepository,
        private Dotenv $dotenvService
    ) {
        $this->userRepository->get(User::class);
    }

    public function store(Request $request, ResponseService $response) {
        $body = $request->toArray();

        $email = $body["email"];
        $password = $body["password"];

        $user = new User($email, $password);
        $this->userRepository->save($user);

        return $response->json($user);
    }

    public function show() {
    }
    public function update() {}
    public function delete() {}
}