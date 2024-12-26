<?php
// Configurações de Credenciais
//servidor
$server = 'localhost';
//usuário
$usuario = 'root';
//senha
$senha = '';
//base de dados (banco de dados do MySQL)
$banco = 'aula_formulario';

// Conectar com o banco de dados criado no MySQL
$conn = new mysqli($server, $usuario, $senha, $banco);

// Verificação se a conexão deu erro
if ($conn->connect_error) {
    // o sinal de ponto "." é o concatenador do PHP
    die("Falha ao se comunicar com banco de dados: " . $conn->connect_error);
};
?>
php