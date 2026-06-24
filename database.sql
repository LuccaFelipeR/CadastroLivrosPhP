-- Banco de dados utilizado pelo projeto
-- No pgAdmin, crie primeiro o banco com o nome: sistema_livros

CREATE DATABASE sistema_livros;

-- Depois de criar o banco, selecione o banco sistema_livros
-- e execute o comando abaixo para criar a tabela

CREATE TABLE IF NOT EXISTS livros (
    id SERIAL PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    autor VARCHAR(120) NOT NULL,
    editora VARCHAR(120) NOT NULL,
    ano_publicacao INTEGER NOT NULL,
    genero VARCHAR(80) NOT NULL
);