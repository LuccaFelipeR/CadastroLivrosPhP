<?php

require_once "config/Database.php";

$database = new Database();
$conexao = $database->conectar();

if ($conexao) {
    echo "Conexão com o banco de dados realizada com sucesso!";
} else {
    echo "Erro ao conectar com o banco de dados.";
}