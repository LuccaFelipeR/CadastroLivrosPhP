<?php

class Database
{
    private $host = "localhost";
    private $port = "5432";
    private $db_name = "sistema_livros";
    private $username = "postgres";
    private $password = "1234";
    public $conn;

    public function conectar()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $erro) {
            echo "Erro na conexão: " . $erro->getMessage();
        }

        return $this->conn;
    }
}