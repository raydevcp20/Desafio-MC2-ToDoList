<?php
    session_start();
    if (!isset($_SESSION['email']) and !isset($_SESSION['senha'])) {
        header("Location:index.php?erro=1");
    }
    require_once("bd/connection.php");
    //Imprime tarefas
    $id = $_SESSION['id_user'];
    $sql = "SELECT * FROM tarefa WHERE cod_id = $id";
    $result_task = mysqli_query($con, $sql);

    $sql2 = "SELECT * FROM usuario WHERE cod_id = $id";
    $resul_task = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Home</title>
</head>

<body class="home">

    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="nav-link" href="home.php"><img class= "logo" src="./img/Design.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link new-task" href="cadastro-task.php">Cadastrar nova tarefa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="title">
        <h1>LISTA DE TAREFAS</h1>
        <h2>Bem vindo(a), <?=$_SESSION['nome']?></h2>
    </div>

    <div class="to-do">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id da Tarefa</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data de inicio</th>
                    <th scope="col">Data de finalização</th>
                    <th scope="col">Status</th>
                    <th scope="col">Excluir/Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result_task as $task){ ?>
                    <tr>
                        <td><?= $task['cod_task']?></td>
                        <td><?= $task['usuario']?></td>
                        <td><?= $task['titulo']?></td>
                        <td><?= $task['descricao']?></td>
                        <td><?= $task['data_ini']?></td>
                        <td><?= $task['data_fim']?></td>
                        <td><?= $task['estatus']?></td>
                        <td>
                            <a href="/php/bd/delete.php?cod=<?=$task['cod_task']?>"> <img src="./img/bin.png" class="delete-row" alt=""></a>
                            <a href="/php/edit.php?cod=<?=$task['cod_task']?>"> <img src="./img/ferramenta-de-lapis.png" alt=""></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    <footer>
        <h3>Feito por Rayane Cristina</h3>
        <a href="https://github.com/raydevcp20"><img class = "git" src="./img/github.png" alt=""></a>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>

</body>

</html>