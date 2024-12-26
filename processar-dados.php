<?php

// Coletando os dados provindos do formulário- arquivo htmlForms.html
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

//Conectar com o banco de dados criado no MySQL
//servidor
$server = 'localhost';
//usuário
$usuario = 'root';
//senha
$senha = '';
//base de dados (banco de dados do MySQL)
$banco = 'aula_formulario';

$conn = new mysqli($server, $usuario, $senha, $banco);
