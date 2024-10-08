<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . '/config.php';

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

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);

return ConsoleRunner::createHelperSet($entityManager);
