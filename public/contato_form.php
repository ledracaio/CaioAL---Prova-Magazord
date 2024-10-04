<?php
require_once __DIR__ . '/../config/config.php';
use App\Controller\ContatoController;

$contatoController = new ContatoController($entityManager);
$pessoaId = $_GET['pessoa_id'] ?? null;
$id = $_GET['id'] ?? null;
$contatoController->form($pessoaId, $id);
