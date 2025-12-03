# Camisas Flamengo – Sistema CRUD

Este projeto é um sistema simples de **CRUD em PHP** para gerenciamento de camisas do Flamengo.  
Permite cadastrar, listar, editar e excluir produtos, incluindo upload de imagens.

## 🔧 Tecnologias Utilizadas
- PHP
- MySQL
- HTML / CSS
- Bootstrap
- JavaScript

## 📌 Funcionalidades
- Cadastro de camisas com imagem
- Listagem de produtos
- Edição de informações e foto
- Exclusão de itens
- Upload organizado na pasta `/uploads`

## ▶️ Como Executar
1. Clone o repositório:
   ```bash
   git clone https://github.com/pedromatos007/Camisas_Flamengo_CRUD.php.git
Coloque os arquivos no servidor local (XAMPP, WAMP, etc.).

Crie o banco de dados:

sql
Copiar código
CREATE DATABASE flamengo_store;
USE flamengo_store;

CREATE TABLE camisas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  modelo VARCHAR(100),
  tamanho VARCHAR(10),
  preco DECIMAL(10,2),
  imagem VARCHAR(255)
);
Acesse no navegador:
http://localhost/Camisas_Flamengo_CRUD.php

📁 Estrutura do Projeto
bash
Copiar código
/index.php
/cadastrar.php
/editar.php
/excluir.php
/conexao.php
/uploads/

👤 Autor
Projeto desenvolvido por Pedro Henrique Matos Leitão de Medeiros,
Aluno do 2º período de Ciência da Computação – UNIPÊ.
