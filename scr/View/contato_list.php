<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contatos</title>
</head>
<body>
    <h1>Lista de Contatos</h1>
    <a href="/public/contato_form.php?pessoa_id=<?= $pessoa->getId() ?>">Adicionar Contato</a>
    <ul>
        <?php foreach ($contatos as $contato): ?>
            <li>
                <?= $contato->getTipo() ?>: <?= $contato->getDescricao() ?>
                <a href="/public/contato_delete.php?id=<?= $contato->getId() ?>">Excluir</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="/public/pessoa_list.php">Voltar</a>
</body>
</html>
