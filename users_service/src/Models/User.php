<?php

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Id;

class User {

    #[Id]
    #[Column(type: "uuid", unique: true)]
    private string $id;

    private string $email;
    
    private string $password;
}