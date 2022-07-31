<?php
require('db/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet">
    <title>LOGIN</title>
</head>

<body>
    <form action="testelogin.php" method="POST">
        <h1>CONSULTORIO</h1>

        <div class="input-group">
            <img class="input-icon" src="img/user.png">
            <input name='email' type="email" placeholder="Insira seu email" required;>
        </div>
        <div class="input-group">
            <img class="input-icon" src="img/key.png">
            <input name='senha' type="password" placeholder="Insira sua senha" required ;>
        </div>
        <input class="btn-blue" name='submit' type="submit"></input>
        <a href="cadastrar.php"> CADASTRAR-SE </a>
    </form>

</body>

</html>