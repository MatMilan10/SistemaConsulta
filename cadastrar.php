<?php
include_once('db/conexao.php');
include_once('api/viacep.php');
$address = getAddress();

if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $senha = $_POST['senha'];
    $hoje = date('Y/m/d H:i:s');

    $result = mysqli_query($conexao, "INSERT INTO cliente(nome, cpf, data_cad, data_nasc, telefone, email, cep, numero, senha) 
    VALUES('$nome', '$cpf', '$hoje', '$data_nasc', '$telefone', '$email', '$cep', '$numero', '$senha')");

    header("Location: index.php");
}


/*
if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
    $erro_nome = "Somente permitido letras e espaços em branco!";
}

if (strlen($cpf) == 11) {
    $erro_cpf = "CPF Deve conter 11 numeros!";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erro_email = "Formato de e-mail inválido!";
}

if ($senha !== $senha_conf) {
    $erro_senha_conf = "Senhas diferentes!";
}
*/

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>CADASTRO</title>
</head>

<body>
    <form action="cadastrar.php" method="POST">

        <h1>CADASTRO</h1>
        <?php if (isset($erro_geral)) { ?>
            <div class="erro-geral animate__animated animate__flash">
                <?php echo $erro_geral; ?>
            </div>
        <?php } ?>

        <div class="input-group">
            <img class="input-icon" src="img/usercad.png">
            <input type="text" name="nome" placeholder="Nome Completo" required ;>
        </div>

        <div class="input-group">
            <img class="input-icon" src="img/security.png">
            <input type="integer" name="cpf" placeholder="CPF" required ;>
        </div>

        <div class="input-group">
            <img class="input-icon" src="img/login.png">
            <input type="date" name="data_nasc" placeholder="Data de Nascimento" required ;>
        </div>

        <div class="input-group">
            <img class="input-icon" src="img/smartphone.png">
            <input type="tel" name="telefone" placeholder="Telefone" required ;>
        </div>

        <div class="input-group">
            <img class="input-icon" src="img/affiliate.png">
            <input type="text" name="email" placeholder="Email" required ;>
        </div>

        <div class="input-group">
            <img class="input-icon" src="img/eco-home.png">
            <input type="integer" name="cep" placeholder="CEP" value="<?php echo $address->cep ?>" required ;>
        </div>

        <div class="input-group">
            <img class="input-icon" src="img/eco-home.png">
            <input type="integer" name="numero" placeholder="Numero" required ;>
        </div>

        <div class=" input-group">
            <img class="input-icon" src="img/key.png">
            <input type="password" name="senha" placeholder="Senha" required ;>
        </div>

        <div class="input-group">
            <img class="input-icon" src="img/key.png">
            <input type="password" name="senha_conf" placeholder="Confirmar Senha" required ;>
        </div>

        <button class="btn-blue" type="submit" name="submit"> ENVIAR </button>
        <a href="index.php"> VOLTAR </a>
    </form>

</body>

</html>