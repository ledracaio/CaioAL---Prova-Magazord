<?php
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . '/../vendor/autoload.php';

$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . '/../src/Entity'], true);
$entityManager = EntityManager::create([
    'driver' => 'pdo_pgsql',
    'user' => 'postgres',
    'password' => 'postgres',
    'dbname' => 'provaMaga',
], $config);
