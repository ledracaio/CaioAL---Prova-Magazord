<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Lista de Pessoas</h1>
    <a href="pessoa_form.php" class="btn btn-success mb-3">Adicionar Pessoa</a>
    <ul class="list-group">
        <?php foreach ($pessoas as $pessoa): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><?= $pessoa->getNome() ?> (<?= $pessoa->getCpf() ?>)</span>
                <div>
                    <a href="public\..\..\pessoa_form.php?id=<?= $pessoa->getId() ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="public\..\..\pessoa_delete.php?id=<?= $pessoa->getId() ?>" class="btn btn-danger btn-sm">Excluir</a>
                    <a href="public\..\..\index_contato.php?pessoa_id=<?= $pessoa->getId() ?>" class="btn btn-info btn-sm">Ver Contatos</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
