<?php

use DI\ContainerBuilder;
use Doctrine\ORM\EntityManager;
use Joaocoura\UsersService\Helpers\EntityManagerCreator;

$builder = new ContainerBuilder();

$builder->addDefinitions([
    EntityManager::class => function() use ($dbconfig) {
        return (new EntityManagerCreator())->getEntityManager($dbconfig);
    }
]);

$container = $builder->build();
