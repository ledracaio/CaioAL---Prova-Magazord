<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$conn = [
    'driver'   => 'pdo_pgsql', // Driver para PostgreSQL
    'user'     => 'postgres', // Seu usuário do PostgreSQL
    'password' => 'postgres', // Sua senha do PostgreSQL
    'dbname'   => 'provaMaga', // Nome do banco que você criou
    'host'     => 'localhost', // Normalmente localhost
];

$config = Setup::createAnnotationMetadataConfiguration(
    [__DIR__ . '/../src'], 
    true
);

$entityManager = EntityManager::create($conn, $config);
