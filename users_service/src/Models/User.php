<?php

namespace Joaocoura\UsersService\Models;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: "users")]
class User {

    #[Id]
    #[Column(type: "integer")]
    #[GeneratedValue()]
    private int $id;

    #[Column(type: "string", unique: true)]
    private string $email;
    
    #[Column(type: "string")]
    private string $password;

    public function __construct(string $email, string $password) {
        $this->email = $email;
        $this->password = $password;
    }
}