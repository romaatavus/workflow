<?php

// Fix: Include Composer Autoload
require_once "../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Fix: Include Path Database
$paths = array("../path/to/entity-files");
$dbParams = array(
    'driver' => 'pdo_pgsql',
    'user' => 'support',
    'password' => 'workflow',
    'dbname' => 'root',
);

$config = Setup::createAnnotationMetadataConfiguration($paths);
$entityManager = EntityManager::create($dbParams, $config);