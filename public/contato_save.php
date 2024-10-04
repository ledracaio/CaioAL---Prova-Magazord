<?php
require_once __DIR__ . '/../config/config.php';
use App\Controller\ContatoController;

$contatoController = new ContatoController($entityManager);

$data = $_POST;
$contatoController->save($data);
