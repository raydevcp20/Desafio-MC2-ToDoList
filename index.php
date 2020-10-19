<?php 
    if(isset($_GET['erro'])){
        if($_GET['erro'] == 1){
            $erro = "Acesso Negado!";
        }else if($_GET['erro'] == 2){
            $erro = "Email ou senha inválidos!";
        }else{
            $erro = "Email ja cadastrado";
        }
    }else{
        $erro = "";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-p.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
</head>

<body class="body">

    <div class="enter">
        <span class="span"><?php echo $erro; ?></span>
        <form action="./bd/verifica-perfil.php" method="post">
            <h1>Cadastro de tarefas</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Endereço de email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>

            <button type="submit" class="btn btn-outline-success">Enviar</button>
            <a class="btn btn-success" href="./cadastro.php" role="button">Cadastrar</a>
        </form>
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