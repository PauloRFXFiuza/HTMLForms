<?php

$senhaSecreta = "123";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Mensagens</title>
    <link rel="stylesheet" href="htmlForms.css">
</head>

<body>
    <form action="processar-dados.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu Nome" required>

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="exemplo@provedor.com" required>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" rows="7" placeholder="Digite sua Mensagem" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>