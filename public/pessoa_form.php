<?php
require_once __DIR__ . '/../config/config.php';
use App\Controller\PessoaController;

$pessoaController = new PessoaController($entityManager);

$id = $_GET['id'] ?? null;
$pessoaController->form($id);
