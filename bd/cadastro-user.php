<?php 

    require_once("connection.php");
    session_start();
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    
        #Conecta banco de dados 

    $sql2 = mysqli_query($con, "SELECT * FROM usuario WHERE login_user = '$email'");
    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql2)>0) 
        $result = false; 
    else {
        $sql = "INSERT INTO usuario(name_user, login_user, senha) VALUES('$nome','$email', '$senha')";
        $result = mysqli_query($con, $sql);
    }

      
    if($result == true){
        header("Location:../index.php");
    }else {
        header("Location:../index.php?erro=3");
    }
?>