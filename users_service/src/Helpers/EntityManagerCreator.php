<?php

namespace Joaocoura\UsersService\Helpers;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator {
    public function getEntityManager($params): EntityManager {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . "/../Models"],
            isDevMode: true
        );

        $connection = DriverManager::getConnection([
            "dbname"    => $params["db_name"],
            "user"      => $params["db_user"],
            "password"  => $params["db_password"],
            "host"      => $params["db_host"],
            "driver"    => $params["db_driver"]
        ], $config);

        return new EntityManager($connection, $config);
    }
}