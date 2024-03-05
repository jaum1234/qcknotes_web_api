<?php

namespace Joaocoura\Models;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

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