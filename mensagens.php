<?php
//Definição da senha para acesso das mensagens- página do ADM

require_once 'config.php';

$senhaSecreta = "123";

//Verifica se foi digitado algo na senha
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Atribui o que foi digitado(conteúdo do input) à variável $senhaDigitada
    $senhaDigitada = $_POST['senha'];

    // Se digitou a senha corretamente 
    if ($senhaDigitada === $senhaSecreta) {
    }
};

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Mensagens</title>
    <link rel="stylesheet" href="htmlForms.css">
</head>

<body>
    <form method="post">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Digite sua Senha" required>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>