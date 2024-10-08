<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Formulário de Pessoa</h1>
    <form action="public\..\pessoa_save.php" method="post">
        <input type="hidden" name="id" value="<?= $pessoa ? $pessoa->getId() : '' ?>">
        <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input type="text" name="nome" value="<?= $pessoa ? $pessoa->getNome() : '' ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">CPF:</label>
            <input type="text" name="cpf" value="<?= $pessoa ? $pessoa->getCpf() : '' ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
</body>
</html>
