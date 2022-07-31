<?php
session_start();
include_once('db/conexao.php');

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}
$logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/home.css" rel="stylesheet">
    <title>HOME</title>
</head>

<body>
    <h1>CONSULTORIO</h1>
    <div class="box">
        <a href="menuAgendar.php"> AGENDAR CONSULTA</a>
        <a href="verificar.php"> VERIFICAR CONSULTA</a>
        <a href="listagemMedicos.php"> LISTAGEM MEDICOS</a>
    </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger"> SAIR </a>
    </div>


</body>

</html>