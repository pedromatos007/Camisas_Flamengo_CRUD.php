🏆 Flamengo Store – Sistema de CRUD com Upload de Imagens
Desenvolvido por Pedro Henrique Matos Leitão de Medeiros

2º Período – Ciência da Computação
Centro Universitário de João Pessoa – UNIPÊ

📌 Sobre o Projeto

O Flamengo Store é um sistema completo de gerenciamento de produtos voltado para a venda de camisas oficiais e temáticas do Clube de Regatas do Flamengo.

A aplicação tem como objetivo aplicar conceitos fundamentais da programação web, incluindo:

Conexão e manipulação de banco de dados MySQL

Uso de linguagem PHP para construção de sistemas dinâmicos

Implementação de CRUD completo (Create, Read, Update, Delete)

Upload e tratamento de imagens

Interface profissional utilizando Bootstrap 5

Organização modular e boas práticas de desenvolvimento

Este projeto reflete a evolução técnica do aluno e demonstra sua habilidade prática em construir sistemas funcionais e bem estruturados.

🎯 Objetivo do Sistema

O sistema tem como finalidade permitir o gerenciamento completo de camisas do catálogo da loja fictícia "Flamengo Store", oferecendo ferramentas para:

✔ Cadastrar novos produtos
✔ Editar produtos existentes
✔ Excluir camisas do catálogo
✔ Exibir todos os itens em uma interface moderna em formato de cards
✔ Fazer upload das imagens das camisas
✔ Salvar tudo de forma organizada em um banco de dados

🛠️ Tecnologias Utilizadas
Tecnologia	Descrição
PHP 8+	Linguagem principal do projeto
MySQL	Banco de dados para armazenamento das camisas
Bootstrap 5	Layout profissional e responsivo
HTML5 & CSS3	Estrutura e estilo da aplicação
Apache (XAMPP)	Servidor utilizado no desenvolvimento
JavaScript	Funcionalidades básicas e confirmações
🗂️ Funcionalidades do CRUD
1️⃣ Create — Cadastro de Camisas

Formulário moderno

Campos: modelo, tamanho, preço e imagem

Upload da imagem com renomeação única

Armazenamento no banco e no diretório /uploads

2️⃣ Read — Listagem Profissional

Cards com imagem, preço e informações

Botões intuitivos de editar/excluir

Layout responsivo e organizado

3️⃣ Update — Edição Completa

Permite alterar todos os campos

Upload opcional de nova imagem

Atualização imediata no banco

4️⃣ Delete — Exclusão Segura

Confirmação antes da exclusão

Remoção do registro no banco e do arquivo da imagem no servidor

📷 Layout do Sistema

O design foi criado utilizando Bootstrap 5, garantindo:

Visual moderno

Responsividade em todos os dispositivos

Componentes elegantes (cards, botões, barra de navegação)

Layout harmônico com cores e estética associadas ao Flamengo

🏗️ Estrutura de Pastas
flamengo_store/
│── index.php
│── cadastrar.php
│── editar.php
│── excluir.php
│── conexao.php
│── uploads/
│── assets/
│     └── style.css

💾 Configuração do Banco de Dados

Criação da base:

CREATE DATABASE flamengo_store;

USE flamengo_store;

CREATE TABLE camisas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(100),
    tamanho VARCHAR(10),
    preco DECIMAL(10,2),
    imagem VARCHAR(255)
);

🚀 Como Executar o Projeto

Instale o XAMPP ou outro servidor Apache/PHP

Coloque o projeto dentro de:

C:\xampp\htdocs\flamengo_store


Crie a pasta uploads/ com permissão de escrita

Importe o SQL acima no phpMyAdmin

Inicie Apache + MySQL

Acesse no navegador:

http://localhost/flamengo_store/

👨‍🎓 Autor

Pedro Henrique Matos Leitão de Medeiros
Aluno do 2º período do curso de Ciência da Computação
Centro Universitário de João Pessoa – UNIPÊ

