<?php
require_once __DIR__ . '/../config/config.php';
use App\Controller\ContatoController;

$contatoController = new ContatoController($entityManager);

$id = $_GET['id'] ?? null;
$contatoController->delete($id);
