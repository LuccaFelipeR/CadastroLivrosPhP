<?php

require_once "controllers/LivroController.php";

$controller = new LivroController();

$acao = $_GET["acao"] ?? "listar";

switch ($acao) {
    case "listar":
        $controller->listar();
        break;

    default:
        $controller->listar();
        break;
}