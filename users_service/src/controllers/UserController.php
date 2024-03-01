<?php

namespace Joaocoura\UsersService\controllers;

use Joaocoura\UsersService\services\repositories\UserRepository;

class UserController {
    public function __construct(private UserRepository $userRepository) {}

    public function store() {}
    public function show() {}
    public function update() {}
    public function delete() {}
}