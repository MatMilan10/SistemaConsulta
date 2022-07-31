<?php
session_start();
include_once('db/conexao.php');
$sql = "SELECT * FROM medico ORDER BY id";

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM medico WHERE nome LIKE '%$data%' or especialidade LIKE '%$data%' or crm LIKE '%$data%' ORDER BY nome";
} else {
    $sql = "SELECT * FROM medico ORDER BY id";
}
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/listagem.css" rel="stylesheet">
    <title>MEDICOS</title>
</head>

<body>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </button>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NOME</th>
                    <th scope="col">ESPECIALIDADE</th>
                    <th scope="col">CRM</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['especialidade'] . "</td>";
                    echo "<td>" . $user_data['crm'] . "</td>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <div class="d-flex">
            <a href="home.php" class="btn btn-danger"> VOLTAR </a>
        </div>
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = 'listagemMedicos.php?search=' + search.value;
    }
</script>

</html>