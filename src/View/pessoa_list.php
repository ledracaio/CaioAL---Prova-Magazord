<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pessoas</title>
</head>
<body>
    <h1>Lista de Pessoas</h1>
    <a href="pessoa_form.php">Adicionar Pessoa</a>
    <ul>
        <?php foreach ($pessoas as $pessoa): ?>
            <li>
                <?= $pessoa->getNome() ?> (<?= $pessoa->getCpf() ?>)
                <a href="public\..\..\public\pessoa_delete.php?id=<?= $pessoa->getId() ?>">Excluir</a>
                <a href="public\..\..\public\pessoa_form.php?id=<?= $pessoa->getId() ?>">Editar</a>
                <a href="public\..\..\public\index_contato.php?pessoa_id=<?= $pessoa->getId() ?>">Ver Contatos</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
