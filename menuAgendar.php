<?php
session_start();
require_once('db/conexao.php');



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/agendar.css" rel="stylesheet">
    <title>AGENDAMENTO</title>
</head>

<body>
    <h1>AGENDAMENTO</h1>
    <div class="box">
        <a href="menuMedico.php"> MEDICO</a>
        <a href="menuEsp.php"> ESPECIALIDADE</a>
    </div>
    <br>
    <div class="d-flex">
        <a href="home.php" class="btn btn-danger"> VOLTAR </a>
    </div>


</body>

</html>