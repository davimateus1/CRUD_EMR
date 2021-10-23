<?php
include 'Connection/conexao.php';

$id = $_GET['updateid'];
$sql = "Select * from `dadosfunc` where  id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$nome = $row['nome'];
$sobrenome = $row['sobrenome'];
$cargo = $row['cargo'];
$nascimento = $row['nascimento'];
$admissao = $row['admissao'];
$salario = $row['salario'];

if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cargo = $_POST['cargo'];
    $nascimento = $_POST['nascimento'];
    $admissao = $_POST['admissao'];
    $salario = $_POST['salario'];

    $sql = "update `dadosfunc` set 
        id='$id',
        nome='$nome',
        sobrenome='$sobrenome',
        cargo='$cargo',
        nascimento='$nascimento',
        admissao='$admissao',
        salario='$salario' where id=$id";

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

    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css" />
    <title>CRUD - Cadastro Funcionários</title>
</head>

<body style="background: #a7d6b2; font-family: Poppins, sans-serif;">
    <div class="container mt-5">
        <form method="post">
            <h3 class="text-center" style="font-weight:bold;"> Update - Dados do funcionário </h3>
            <div class="form-group">
                <label>Nome</label>
                <div id="inputs">
                    <input required type="text" class="form-control" placeholder="Informe seu nome" name="nome" value=<?php
                                                                                                                        echo $nome;
                                                                                                                        ?>>
                </div>
            </div>

            <div class="form-group">
                <label>Sobrenome</label>
                <div id="inputs">
                    <input required type="text" class="form-control" placeholder="Informe seu sobrenome" name="sobrenome" value=<?php
                                                                                                                                echo $sobrenome;
                                                                                                                                ?>>
                </div>
            </div>

            <div class="form-group">
                <label>Cargo</label>
                <div id="inputs">
                    <input required type="text" class="form-control" placeholder="Informe seu cargo" name="cargo" value=<?php
                                                                                                                        echo $cargo;
                                                                                                                        ?>>
                </div>
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <div id="inputs">
                    <input required type="date" class="form-control" name="nascimento" value=<?php
                                                                                                echo $nascimento;
                                                                                                ?>>
                </div>
            </div>

            <div class="form-group">
                <label>Data de Admissão</label>
                <div id="inputs">
                    <input required type="date" class="form-control" name="admissao" value=<?php
                                                                                            echo $admissao;
                                                                                            ?>>
                </div>
            </div>

            <div class="form-group">
                <label>Salário</label>
                <div id="inputs">
                    <input type="number" class="form-control" placeholder="Informe seu salário" name="salario" value=<?php
                                                                                                                        echo $salario;
                                                                                                                        ?>>
                </div>
            </div>

            <button name="submit" type="submit" class="btn btn-primary">Update</button>
        </form>
        <button class="btn btn-danger mt-3">
            <a style="text-decoration: none;" href="display.php" class="text-light">
                Voltar para a tabela de funcionários
            </a>
        </button>
    </div>

</body>

</html>