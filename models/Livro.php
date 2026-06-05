<?php

require_once __DIR__ . "/../config/Database.php";

class Livro
{
    private $conn;
    private $tabela = "livros";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    public function listar()
    {
        $sql = "SELECT * FROM " . $this->tabela . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM " . $this->tabela . " WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($titulo, $autor, $editora, $ano_publicacao, $genero)
    {
        $sql = "INSERT INTO " . $this->tabela . " 
                (titulo, autor, editora, ano_publicacao, genero) 
                VALUES 
                (:titulo, :autor, :editora, :ano_publicacao, :genero)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":autor", $autor);
        $stmt->bindParam(":editora", $editora);
        $stmt->bindParam(":ano_publicacao", $ano_publicacao);
        $stmt->bindParam(":genero", $genero);

        return $stmt->execute();
    }

    public function atualizar($id, $titulo, $autor, $editora, $ano_publicacao, $genero)
    {
        $sql = "UPDATE " . $this->tabela . " 
                SET titulo = :titulo,
                    autor = :autor,
                    editora = :editora,
                    ano_publicacao = :ano_publicacao,
                    genero = :genero
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":autor", $autor);
        $stmt->bindParam(":editora", $editora);
        $stmt->bindParam(":ano_publicacao", $ano_publicacao);
        $stmt->bindParam(":genero", $genero);

        return $stmt->execute();
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM " . $this->tabela . " WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        return $stmt->execute();
    }
}