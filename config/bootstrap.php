<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;

$config = Setup::createAnnotationMetadataConfiguration(array("app/models"),
    $isDevMode,
    $proxyDir,
    $cache,
    $useSimpleAnnotationReader);

// database configuration parameters
$connection = array(
    "dbname" => "telegram_shop",
    "user" => "root",
    "password" => "",
    "host" => "localhost",
    'driver' => 'pdo_mysql',
);

// obtaining the entity manager
$entityManager = EntityManager::create($connection, $config);