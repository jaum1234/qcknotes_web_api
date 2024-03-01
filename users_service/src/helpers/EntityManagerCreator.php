<?php

use Doctrine\ORM\ORMSetup;

class EntityManagerCreator {
    protected static $config;

    public function setUp() {
        ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . "/"]
        );
    }
}