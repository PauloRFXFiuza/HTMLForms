<?php

// Coletando os dados provindos do formulário- arquivo htmlForms.html
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Configurações de Credenciais
//servidor
$server = 'localhost';
//usuário
$usuario = 'root';
//senha
$senha = '';
//base de dados (banco de dados do MySQL)
$banco = 'aula_formulario';

//Conectar com o banco de dados criado no MySQL
$conn = new mysqli($server, $usuario, $senha, $banco);

if ($conn->connect_error) {
}
