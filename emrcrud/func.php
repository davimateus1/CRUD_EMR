<?php
include 'Connection/conexao.php';
if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cargo = $_POST['cargo'];
    $nascimento = $_POST['nascimento'];
    $admissao = $_POST['admissao'];
    $salario = $_POST['salario'];
    $descricao = $_POST['descricao'];
    $atividades = $_POST['atividades'];


    $sql = "insert into `dadosfunc` (nome,sobrenome,cargo,nascimento,admissao,salario) values('$nome','$sobrenome','$cargo','$nascimento','$admissao','$salario')";

    $sql1 = "insert into `cargofunc` (descricao, atividade) values('$descricao','$atividades')";

    $result = mysqli_query($con, $sql);
    $result = mysqli_query($con, $sql1);

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
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <title>CRUD - Cadastro Funcionários</title>
</head>

<body style="font-family: Poppins, sans-serif; background: #a7d6b2;">
    <div class="container mt-5">
        <form method="post">
            <h3 class="text-center" style="font-weight:bold;"> Dados do Funcionário </h3>

            <div class="form-group">
                <label>Nome</label>
                <div id="inputs">

                    <input type="text" id="nome" class="form-control" placeholder="Informe seu nome" name="nome" required>
                </div>
            </div>

            <div class="form-group">
                <label>Sobrenome</label>
                <div id="inputs">

                    <input type="text" id="sobrenome" class="form-control" placeholder="Informe seu sobrenome" name="sobrenome" required>
                </div>
            </div>

            <div class="form-group">
                <label>Cargo</label>
                <div id="inputs">
                    <input type="text" id="cargo" class="form-control" placeholder="Informe seu cargo" name="cargo" required>
                </div>
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <div id="inputs">

                    <input type="date" id="nascimento" class="form-control" name="nascimento" required>
                </div>
            </div>

            <div class="form-group">
                <label>Data de Admissão</label>
                <div id="inputs">

                    <input type="date" id="admissao" class="form-control" name="admissao" required>
                </div>
            </div>

            <div class="form-group">
                <label>Salário</label>
                <div id="inputs">

                    <input type="number" id="salario" class="form-control" placeholder="Informe seu salário" name="salario">
                </div>
            </div>

            <h3 class="text-center" style="font-weight:bold;"> Cargo do Funcionário </h3>

            <div class="form-group">
                <label>Descrição</label>
                <div id="inputs">
                    <input type="text" id="descricao" class="form-control" placeholder="Nos fale mais sobre o seu cargo" name="descricao" required>

                </div>
            </div>

            <div class="form-group">
                <label>Atividades</label>
                <div id="inputs">
                    <input type="text" id="atividades" class="form-control" placeholder="Informe suas atividades neste cargo" name="atividades" required>

                </div>
            </div>

            <button name="submit" type="submit" class="btn btn-primary" onclick="validar()">Enviar</button>
        </form>
        <button class="btn btn-danger mt-3">
            <a style="text-decoration: none;" href="display.php" class="text-light">
                Ir para a tabela de funcionários
            </a>
        </button>
    </div>
</body>

<!-- JAVASCRIPT -->
<script>
    function validar() {
        var nome = document.getElementById("nome");
        var sobrenome = document.getElementById("sobrenome");
        var cargo = document.getElementById("cargo");
        var nascimento = document.getElementById("nascimento");
        var admissao = document.getElementById("admissao");
        var salario = document.getElementById("salario");
        var descricao = document.getElementById("descricao");
        var atividades = document.getElementById("atividades");

        if (nome.value == "") {
            alert("Nome não informado");
            nome.focus();
            return;
        }
        if (sobrenome.value == "") {
            alert("Sobrenome não informado");
            sobrenome.focus();
            return;
        }
        if (cargo.value == "") {
            alert("Cargo não informado");
            cargo.focus();
            return;
        }
        if (nascimento.value == "") {
            alert("Data de nascimento não informada");
            nascimento.focus();
            return;
        }
        if (admissao.value == "") {
            alert("Data de Admissão não informada");
            admissao.focus();
            return;
        }
        if (salario.value == "") {
            alert("Salário não informado");
            salario.focus();
            return;
        }
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
        alert("Funcionário cadastrado com sucesso!");
    }
</script>
<!--------------->

</html>