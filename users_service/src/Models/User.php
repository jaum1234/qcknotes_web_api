<?php

namespace Joaocoura\UserService\Models;

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
    private string $id;

    #[Column(type: "string", unique: true)]
    private string $email;
    
    #[Column(type: "string")]
    private string $password;
}