<?php

require_once("connection.php");
session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);


$query = "select * from $name_database.usuario where login_user = '$email' and senha = '$senha'";

$resul = mysqli_query($con, $query);



if(mysqli_num_rows($resul) > 0)
{
    $dados = mysqli_fetch_array($resul);
    $_SESSION['id_user']   = $dados['cod_id'];
    $_SESSION['nome']   = $dados['name_user'];
    $_SESSION['email']  = $dados['login_user'];
    header('location:http://localhost/php/home.php');
}
else
{
	echo "<script>alert('Login ou Senha inválido(a), tente novamente.');</script>";
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
  echo $email;
  echo $senha;
  header('location:http://localhost/php/index.php?erro=2');
}
