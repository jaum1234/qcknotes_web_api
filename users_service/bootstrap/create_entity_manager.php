<?php

use Joaocoura\Helpers\EntityManagerCreator;

$dbconfig = require_once __DIR__ . "/../config/database.php";

$creator = new EntityManagerCreator();
$entityManager = $creator->getEntityManager($dbconfig);