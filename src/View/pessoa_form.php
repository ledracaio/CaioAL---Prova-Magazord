<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Pessoa</title>
</head>
<body>
    <h1>Formulário de Pessoa</h1>
    <form action="public\..\pessoa_save.php" method="post">
        <input type="hidden" name="id" value="<?= $pessoa ? $pessoa->getId() : '' ?>">
        <label>Nome: <input type="text" name="nome" value="<?= $pessoa ? $pessoa->getNome() : '' ?>" required></label><br>
        <label>CPF: <input type="text" name="cpf" value="<?= $pessoa ? $pessoa->getCpf() : '' ?>" required></label><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>

