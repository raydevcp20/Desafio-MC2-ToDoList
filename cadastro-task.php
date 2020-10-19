<?php
    session_start();
    if (!isset($_SESSION['email']) and !isset($_SESSION['senha'])) {
        header("Location:index.php?erro=1");
    }
    require_once("bd/connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style-p.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastre sua nova tarefa</title>
</head>

<body>
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
                        <a class="nav-link new-task" href="./cadastro-task.php">Cadastrar nova tarefa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
    <div class="body">
        <div class="enter">
            <form action="./bd/cadastro-tarefa.php" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Usuario</label>
                    <input type="text" name = "user_name" class="form-control" id="formGroupExampleInput" placeholder="Digite o seu nome">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Titulo</label>
                    <input type="text" name = "title" class="form-control" id="formGroupExampleInput" placeholder="Digite o título da tarefa">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Data de início (favor digitar no modelo DD/MM/AAAA HH:MM)</label>
                    <input type="text" name = "date_ini" class="form-control" id="formGroupExampleInput" placeholder="Digite a data de início">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Data de finalização (favor digitar no modelo DD/MM/AAAA HH:MM)</label>
                    <input type="text" name = "date_fim" class="form-control" id="formGroupExampleInput" placeholder="Digite a data de finalização">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Status</label>
                    <input type="text" name = "status" class="form-control" id="formGroupExampleInput" placeholder="Digite o status">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Digite uma descrição para sua tarefa</label>
                    <textarea class="form-control" name = "description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar tarefa</button>
            </form>
        </div>
    </div>
    <footer>
        <h3>Feito por Rayane Cristina</h3>
        <a href="https://github.com/raydevcp20"><img class = "git" src="./img/github.png" alt=""></a>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>