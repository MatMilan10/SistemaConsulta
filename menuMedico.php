<?php

include_once('db/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/menus.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <label>Medico:</label>
    <select name="select">
        <option> Selecione o MEDICO </option>
        <?php
        $result = "SELECT * FROM medico";
        $resultado_medico = mysqli_query($conexao, $result);
        while ($row_medico = mysqli_fetch_assoc($resultado_medico)) { ?>
            <option value="<?php echo $row_medico['id']; ?>"> <?php echo $row_medico['nome']; ?> </option>
        <?php
        }
        ?>
    </select>
    <label>Dia:</label>
    <div class="">
        <input name='data' type="date" placeholder="Escolha a data:" required ;>
    </div>
    <label>Horario:</label>
    <div class="">
        <input name='data' type="time" placeholder="Escolha o horario:" required ;>
    </div>

</html>