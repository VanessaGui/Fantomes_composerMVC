<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/src"),
    isDevMode: true,
);

// configuring the database connection
$connectionParams = array(
    "dbname" => "fantomes_composer_mvc",
    "user" => "root",
    "password" => "",
    "host" => "localhost",
    "driver" => "pdo_mysql",
    "charset"=>"utf8"
);
$connection = DriverManager::getConnection($connectionParams, $config);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);
?>