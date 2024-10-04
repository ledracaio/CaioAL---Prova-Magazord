<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . '/vendor/autoload.php';

// Configuração do banco de dados
$dbParams = [
    'driver'   => 'pdo_pgsql',
    'user'     => 'postgres',
    'password' => 'postgres', 
    'dbname'   => 'provaMaga', 
    'host'     => 'localhost',
];

// Configuração do EntityManager
$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . '/src'], true);
$entityManager = EntityManager::create($dbParams, $config);

return ConsoleRunner::createHelperSet($entityManager);
