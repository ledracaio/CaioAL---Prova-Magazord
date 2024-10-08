<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contatos</title>
</head>
<body>
    <h1>Lista de Contatos</h1>
    <a href="contato_form.php?pessoa_id=<?= $pessoa->getId() ?>">Adicionar Contato</a>
    <ul>
        <?php foreach ($contatos as $contato): ?>
            <li>
                <?= $contato->getTipo() ?>: <?= $contato->getDescricao() ?>
                <a href="public\..\..\public\contato_form.php?pessoa_id=<?= $pessoa->getId() ?>&id=<?= $contato->getId() ?>">Editar</a>
                <a href="public\..\..\public\contato_delete.php?id=<?= $contato->getId() ?>">Excluir</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php">Voltar</a>
</body>
</html>
