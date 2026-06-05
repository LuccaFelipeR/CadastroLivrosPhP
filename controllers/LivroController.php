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
}