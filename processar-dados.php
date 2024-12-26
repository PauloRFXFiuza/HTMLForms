<?php
/* "<?php - Abre o PHP" */

/*Comando para importar um arquivo php*/
require_once 'config.php';


// Coletando os dados provindos do formulário- arquivo htmlForms.html
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_atual = date('d/m/Y'); //Exemplo: 13/08/2024 - 13=d, 08=m, 2024=Y
// Comando para definir o horário de brasília como padrão
date_default_timezone_set('America/Sao_Paulo');
$hora_atual = date('H:i:s'); //Exemplo: 14:15:52- 14h15min52s - 14=H, 15=i, 52=s

// Preparação de comandos para inserir dados na tabela
$smtp = $conn->prepare("INSERT INTO mensagens (nome, email, mensagem, data, hora) 
VALUES (?, ?, ?, ?, ?)");
// nome=?, email=?, ..., hora=? 
//Esta técnica "?" é importante para segurança de dados, 
//para evitar injeção de SQL, ataques de hackers. 

$smtp->bind_param("sssss", $nome, $email, $mensagem, $data_atual, $hora_atual);
// "sssss" - s refere-se ao tipo do formato do dado, ou seja
// nome, email, mensagem, data e hora são do tipo string, ou seja
// string= s, para inteiro, usa-se i=integer

// Verificação de Envio ao Usuário caso o formulário 
//foi preenchido com sucesso ou erro
if ($smtp->execute()) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro no envio da mensagem: " . $smtp->error;
};

// Comando para encerrar a comunicação smtp com o banco 
//e a conexão do servidor local com o banco no MySQL
$smtp->close();
$conn->close();

/* ?> - Fecha o PHP */
