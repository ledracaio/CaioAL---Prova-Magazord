<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function pesquisarNome() {
            const searchInput = document.getElementById('search');
            const searchValue = searchInput.value;

            window.location.href = `index.php?search=${encodeURIComponent(searchValue)}`;
        }
        function focusOnSearchInput() {
            const searchInput = document.getElementById('search');
            searchInput.focus();
        }
    </script>
</head>
<body class="container mt-5" onload="focusOnSearchInput()">
    <h1 class="mb-4">Lista de Pessoas</h1>
    <form action="index.php" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar por nome" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" oninput="pesquisarNome()">
        </div>
    </form>

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
