<?php

require_once __DIR__ . "/../models/Livro.php";

class LivroController
{
    private $livroModel;

    public function __construct()
    {
        $this->livroModel = new Livro();
    }

    public function listar()
    {
        $livros = $this->livroModel->listar();
        require_once __DIR__ . "/../views/listar.php";
    }

    public function cadastrar()
    {
        require_once __DIR__ . "/../views/cadastrar.php";
    }

    public function salvar()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $titulo = trim($_POST["titulo"] ?? "");
            $autor = trim($_POST["autor"] ?? "");
            $editora = trim($_POST["editora"] ?? "");
            $ano_publicacao = trim($_POST["ano_publicacao"] ?? "");
            $genero = trim($_POST["genero"] ?? "");

            if ($titulo === "" || $autor === "" || $editora === "" || $ano_publicacao === "" || $genero === "") {
                $this->redirecionar("Preencha todos os campos.", "danger");
            }

            $resultado = $this->livroModel->cadastrar(
                $titulo,
                $autor,
                $editora,
                $ano_publicacao,
                $genero
            );

            if ($resultado) {
                $this->redirecionar("Livro cadastrado com sucesso!", "success");
            }

            $this->redirecionar("Erro ao cadastrar livro.", "danger");
        }

        $this->redirecionar("Requisição inválida.", "danger");
    }

    public function editar()
    {
        $id = $_GET["id"] ?? null;

        if (!$id) {
            $this->redirecionar("Livro não encontrado.", "danger");
        }

        $livro = $this->livroModel->buscarPorId($id);

        if (!$livro) {
            $this->redirecionar("Livro não encontrado.", "danger");
        }

        require_once __DIR__ . "/../views/editar.php";
    }

    public function atualizar()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = $_POST["id"] ?? null;
            $titulo = trim($_POST["titulo"] ?? "");
            $autor = trim($_POST["autor"] ?? "");
            $editora = trim($_POST["editora"] ?? "");
            $ano_publicacao = trim($_POST["ano_publicacao"] ?? "");
            $genero = trim($_POST["genero"] ?? "");

            if (!$id || $titulo === "" || $autor === "" || $editora === "" || $ano_publicacao === "" || $genero === "") {
                $this->redirecionar("Preencha todos os campos.", "danger");
            }

            $resultado = $this->livroModel->atualizar(
                $id,
                $titulo,
                $autor,
                $editora,
                $ano_publicacao,
                $genero
            );

            if ($resultado) {
                $this->redirecionar("Livro atualizado com sucesso!", "success");
            }

            $this->redirecionar("Erro ao atualizar livro.", "danger");
        }

        $this->redirecionar("Requisição inválida.", "danger");
    }

    public function excluir()
    {
        $id = $_GET["id"] ?? null;

        if (!$id) {
            $this->redirecionar("Livro não encontrado.", "danger");
        }

        $resultado = $this->livroModel->excluir($id);

        if ($resultado) {
            $this->redirecionar("Livro excluído com sucesso!", "success");
        }

        $this->redirecionar("Erro ao excluir livro.", "danger");
    }

    private function redirecionar($mensagem, $tipo)
    {
        header("Location: index.php?acao=listar&mensagem=" . urlencode($mensagem) . "&tipo=" . urlencode($tipo));
        exit;
    }
}