<?php

namespace Joaocoura\UsersService\Services;

use Symfony\Component\HttpFoundation\Response;

class ResponseService {
    private Response $response;

    public function __construct() {
        $this->response = new Response();
    }

    public function json(mixed $data) {
        $json = json_encode($data);
        $this->response->setContent($json)->send();

        return $this;
    }

    public function status(int $status) {
        $this->response->setStatusCode($status);

        return $this;
    }

    public function setHeader(string $key, string $value) {
        $this->response->headers->set($key, $value);

        return $this;
    }
}