<?php
require_once __DIR__ . '/../config/config.php';

use App\Controller\PessoaController;

$pessoaController = new PessoaController($entityManager);

if (isset($_GET['search'])) {
    $pessoaController->index($_GET['search']);
} else {
    $pessoaController->index();
}

