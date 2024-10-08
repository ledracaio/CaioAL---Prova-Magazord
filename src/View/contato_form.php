<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Formulário de Contato</h1>
    <form action="public\..\contato_save.php" method="post">
        <input type="hidden" name="pessoa_id" value="<?= $pessoaId ?>">
        <input type="hidden" name="id" value="<?= $contato ? $contato->getId() : '' ?>">
        <label>Tipo: 
            <select name='tipo'>
                <option value="Email" <?= $contato && $contato->getTipo() == "Email" ? "selected" : '' ?>>E-mail</option>
                <option value="Telefone" <?= $contato && $contato->getTipo() == "Telefone" ? "selected" : '' ?>>Telefone</option>
            </select>
        </label><br>
        <label>Descrição: <input type="text" name="descricao" value="<?= $contato ? $contato->getDescricao() : '' ?>" required></label><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="index_contato.php?pessoa_id=<?= $pessoaId ?>">Voltar</a>
</body>
</html>
