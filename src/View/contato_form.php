<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Formulário de Contato</h1>
    <form action="public\..\contato_save.php" method="post" class="mb-3">
        <input type="hidden" name="pessoa_id" value="<?= $pessoaId ?>">
        <input type="hidden" name="id" value="<?= $contato ? $contato->getId() : '' ?>">
        <div class="mb-3">
            <label class="form-label">Tipo:</label>
            <select name='tipo' class="form-select">
                <option value="Email" <?= $contato && $contato->getTipo() == "Email" ? "selected" : '' ?>>E-mail</option>
                <option value="Telefone" <?= $contato && $contato->getTipo() == "Telefone" ? "selected" : '' ?>>Telefone</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição:</label>
            <input type="text" name="descricao" value="<?= $contato ? $contato->getDescricao() : '' ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index_contato.php?pessoa_id=<?= $pessoaId ?>" class="btn btn-secondary">Voltar</a>
    </form>
</body>
</html>
