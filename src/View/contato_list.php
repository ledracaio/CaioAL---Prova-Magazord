<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Lista de Contatos</h1>
    <a href="contato_form.php?pessoa_id=<?= $pessoa->getId() ?>" class="btn btn-success mb-3">Adicionar Contato</a>
    <a href="index.php" class="btn btn-secondary mb-3">Voltar</a>
    <ul class="list-group">
        <?php foreach ($contatos as $contato): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><?= $contato->getTipo() ?>: <?= $contato->getDescricao() ?></span>
                <div>
                    <a href="public\..\..\contato_form.php?pessoa_id=<?= $pessoa->getId() ?>&id=<?= $contato->getId() ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="public\..\..\contato_delete.php?id=<?= $contato->getId() ?>" class="btn btn-danger btn-sm">Excluir</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
