<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Livro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <div class="container mt-5">
        <div class="mb-4">
            <h1>Editar Livro</h1>
            <p class="text-muted">Altere os dados abaixo e salve as modificações.</p>
        </div>

        <div class="card">
            <div class="card-header">
                Dados do livro
            </div>

            <div class="card-body">
                <form action="index.php?acao=atualizar" method="POST">

                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($livro["id"]); ?>">

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input
                            type="text"
                            name="titulo"
                            id="titulo"
                            class="form-control"
                            value="<?php echo htmlspecialchars($livro["titulo"]); ?>"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input
                            type="text"
                            name="autor"
                            id="autor"
                            class="form-control"
                            value="<?php echo htmlspecialchars($livro["autor"]); ?>"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="editora" class="form-label">Editora</label>
                        <input
                            type="text"
                            name="editora"
                            id="editora"
                            class="form-control"
                            value="<?php echo htmlspecialchars($livro["editora"]); ?>"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="ano_publicacao" class="form-label">Ano de publicação</label>
                        <input
                            type="number"
                            name="ano_publicacao"
                            id="ano_publicacao"
                            class="form-control"
                            value="<?php echo htmlspecialchars($livro["ano_publicacao"]); ?>"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="genero" class="form-label">Gênero</label>
                        <input
                            type="text"
                            name="genero"
                            id="genero"
                            class="form-control"
                            value="<?php echo htmlspecialchars($livro["genero"]); ?>"
                            required
                        >
                    </div>

                    <button type="submit" class="btn btn-success">
                        Atualizar
                    </button>

                    <a href="index.php?acao=listar" class="btn btn-secondary">
                        Voltar
                    </a>

                </form>
            </div>
        </div>
    </div>

</body>

</html>