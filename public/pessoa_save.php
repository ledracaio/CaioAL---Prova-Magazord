<?php
require_once __DIR__ . '/../config/config.php';
use App\Controller\PessoaController;

$pessoaController = new PessoaController($entityManager);

$data = $_POST;
$pessoaController->save($data);
