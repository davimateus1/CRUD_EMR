<?php
include 'Connection/conexao.php';

$id = $_GET['updateid'];
$sql = "Select * from `cargofunc` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$descricao = $row['descricao'];
$atividade = $row['atividade'];



if (isset($_POST['submit'])) {

    $descricao = $_POST['descricao'];
    $atividade = $_POST['atividades'];

    $sql = "update `cargofunc` set id='$id',descricao='$descricao',atividade='$atividade' where id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="assets/style.css" />
    <title>CRUD - Cadastro Funcionários</title>
</head>

<body style="background: #a7d6b2; font-family: Poppins, sans-serif;">
    <div class="container mt-5">
        <form method="post">

            <h3 class="text-center" style="font-weight:bold;">Update - Cargo do funcionário </h3>

            <div class="form-group">
                <label>Descrição</label>
                <div id="inputs">
                    <input required type="text" id="descricao" class="form-control" placeholder="Nos fale mais sobre o seu cargo" name="descricao" value=<?php
                                                                                                                                            echo $descricao;
                                                                                                                                            ?>>
                </div>
            </div>

            <div class="form-group">
                <label>Atividades</label>
                <div id="inputs">
                    <input required type="text" id="atividades" class="form-control" placeholder="Informe suas atividades neste cargo" name="atividades" value=<?php
                                                                                                                                                echo $atividade;
                                                                                                                                                ?>>
                </div>
            </div>

            <button name="submit" type="submit" class="btn btn-primary" onclick="validar()">Update</button>
        </form>
        <button class="btn btn-danger mt-3">
            <a style="text-decoration: none;" href="display.php" class="text-light">
                Voltar para a tabela de funcionários
            </a>
        </button>
    </div>

</body>

<!-- JAVASCRIPT -->
<script>
    function validar() {
        var descricao = document.getElementById("descricao");
        var atividades = document.getElementById("atividades");

        if (descricao.value == "") {
            alert("Descrição não informada");
            descricao.focus();
            return;
        }
        if (atividades.value == "") {
            alert("Atividades não informadas");
            descricao.focus();
            return;
        }
        alert("Cargo atualizado com sucesso!");
    }
</script>
<!--------------->

</html>