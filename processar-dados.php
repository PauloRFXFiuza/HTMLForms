<?php

// Coletando os dados provindos do formulário- arquivo htmlForms.html
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

//Conectar com o banco de dados criado no MySQL
$conn = new mysqli('localhost', 'root', '', 'aula_formulario');
