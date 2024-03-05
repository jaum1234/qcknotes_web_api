<?php

namespace Joaocoura\Helpers;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator {
    public function getEntityManager($params): EntityManagerInterface {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . "/../Models"],
            isDevMode: true
        );

        $connection = DriverManager::getConnection([
            "dbname"    => $params["db_name"],
            "user"      => $params["db_user"],
            "password"  => $params["db_password"],
            "host"      => $params["db_host"]
        ], $config);

        return new EntityManager($connection, $config);
    }
}