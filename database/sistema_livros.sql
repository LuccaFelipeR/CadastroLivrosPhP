CREATE DATABASE IF NOT EXISTS sistema_livros;

USE sistema_livros;

CREATE TABLE IF NOT EXISTS livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    editora VARCHAR(100) NOT NULL,
    ano_publicacao INT NOT NULL,
    genero VARCHAR(80) NOT NULL
);