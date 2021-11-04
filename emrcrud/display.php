<?php
include 'Connection/conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" />

    <title>CRUD - Cadastro Funcionários</title>
</head>

<body style="background-color: #a7d6b2; font-family: Poppins, sans-serif;">
    <div class="container">
        <button class="btn btn-primary mt-5">
            <a href="func.php" class="text-light" style="text-decoration: none;">Cadastrar novo funcionário</a>
        </button>
        <table class="table mt-3 table-bordered text-center">
            <thead>
                <tr class="bg-warning">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Admissão</th>
                    <th scope="col">Salário</th>
                    <th scope="col">Operações</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "Select * from `dadosfunc`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    echo '<h3 class="text-center mt-3" style="font-weight:bold;"> Tabela de Dados do Funcionário </h3>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $nome = $row['nome'];
                        $sobrenome = $row['sobrenome'];
                        $cargo = $row['cargo'];
                        $nascimento = $row['nascimento'];
                        $admissao = $row['admissao'];
                        $salario = $row['salario'];
                        
                        echo '
                        
                        <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $nome . '</td>
                        <td>' . $sobrenome . '</td>
                        <td>' . $cargo . '</td>
                        <td>' . $nascimento . '</td>
                        <td>' . $admissao . '</td>
                        <td>' . $salario . ' R$</td>
                        <td>
                        <button class="btn btn-primary text-light">
                            <a href="update.php?updateid=' . $id . '"  class="text-light" style="text-decoration: none;">
                                Update
                            </a>
                        </button>
                        <button class="btn btn-danger">
                            <a href="delete.php?deleteid=' . $id . '" class="text-light" style="text-decoration: none;">
                                Delete
                            </a>
                        </button>
                        </td>
                        </tr>
                        ';
                    }
                }

                ?>

            </tbody>
        </table>

        <table class="table mt-3 table-bordered text-center">
            <thead>
                <tr class="bg-warning">
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Atividades</th>
                    <th scope="col">Operações</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "Select * from `cargofunc`";
                $result = mysqli_query($con, $sql);

                echo '<h3 class="text-center mt-5" style="font-weight:bold;"> Tabela de Cargo do Funcionário </h3>';
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $descricao = $row['descricao'];
                        $atividade = $row['atividade'];
                        echo '                    
                        <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $descricao . '</td>
                        <td>' . $atividade . '</td>
                        <td>
                        <button class="btn btn-primary text-light">
                            <a style="text-decoration: none;" href="update2.php?updateid=' . $id . '"  class="text-light">
                                Update
                            </a>
                        </button>
                        <button class="btn btn-danger">
                            <a  style="text-decoration: none;" href="delete2.php?deleteid=' . $id . '" class="text-light">
                                Delete
                            </a>
                        </button>
                        </td>
                        </tr>
                        ';
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>