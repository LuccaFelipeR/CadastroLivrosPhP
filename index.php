<?php

require_once "controllers/LivroController.php";

$controller = new LivroController();

$acao = $_GET["acao"] ?? "listar";

switch ($acao) {
    case "listar":
        $controller->listar();
        break;

    case "cadastrar":
        $controller->cadastrar();
        break;

    case "salvar":
        $controller->salvar();
        break;

    case "editar":
        $controller->editar();
        break;

    case "atualizar":
        $controller->atualizar();
        break;

    case "excluir":
        $controller->excluir();
        break;

    default:
        $controller->listar();
        break;
}