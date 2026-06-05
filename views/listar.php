<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Cadastro de Livros</h1>

            <a href="index.php?acao=cadastrar" class="btn btn-primary">
                Cadastrar novo livro
            </a>
        </div>

        <div class="card">
            <div class="card-header">
                Livros cadastrados
            </div>

            <div class="card-body">
                <?php if (empty($livros)): ?>
                <p class="text-muted">Nenhum livro cadastrado até o momento.</p>
                <?php else: ?>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Editora</th>
                            <th>Ano</th>
                            <th>Gênero</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($livros as $livro): ?>
                        <tr>
                            <td><?php echo $livro["id"]; ?></td>
                            <td><?php echo htmlspecialchars($livro["titulo"]); ?></td>
                            <td><?php echo htmlspecialchars($livro["autor"]); ?></td>
                            <td><?php echo htmlspecialchars($livro["editora"]); ?></td>
                            <td><?php echo htmlspecialchars($livro["ano_publicacao"]); ?></td>
                            <td><?php echo htmlspecialchars($livro["genero"]); ?></td>
                            <td>
                                <a href="index.php?acao=editar&id=<?php echo $livro["id"]; ?>"
                                    class="btn btn-warning btn-sm">
                                    Editar
                                </a>

                                <a href="index.php?acao=excluir&id=<?php echo $livro["id"]; ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir este livro?')">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <?php endif; ?>
            </div>
        </div>
    </div>

</body>

</html>