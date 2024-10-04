<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

// Inclua o arquivo de bootstrap ou configuração
require_once __DIR__ . '/config.php'; // Altere para o caminho correto do seu arquivo de configuração

// Configure o EntityManager
$paths = [__DIR__ . '/src/Entity']; // Caminho para as suas entidades
$isDevMode = true; // Defina como true se estiver em modo de desenvolvimento

// Configuração do banco de dados para PostgreSQL
$dbParams = [
    'driver'   => 'pdo_pgsql',
    'user'     => 'postgres',
    'password' => 'postgres', 
    'dbname'   => 'provaMaga', 
    'host'     => 'localhost',
];

// Crie o EntityManager
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

// Crie o HelperSet para o Console
return ConsoleRunner::createHelperSet($entityManager);
