<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . '/config.php';

// Configure o EntityManager
$paths = [__DIR__ . '/src/Entity'];
$isDevMode = true;

// Parâmetros de conexão com o banco de dados
$dbParams = [
    'driver'   => 'pdo_pgsql',
    'user'     => 'postgres',
    'password' => 'postgres', 
    'dbname'   => 'provaMaga', 
    'host'     => 'localhost',
];

// Cria a configuração do Doctrine sem o SimpleAnnotationReader
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);

// Retorna o HelperSet do ConsoleRunner
return ConsoleRunner::createHelperSet($entityManager);
