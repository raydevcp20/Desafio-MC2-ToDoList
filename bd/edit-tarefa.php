<?php

require_once ("connection.php");
session_start();

$nome_user = $_POST['user_name'];
$titulo = $_POST['title'];
$dataIni = $_POST['date_ini'];
$dataFim = $_POST['date_fim'];
$status = $_POST['status'];
$descricao = $_POST['description'];
$cod_tarefa = $_GET['cod'];

$sql = "UPDATE tarefa SET 
            titulo = '$titulo', 
            descricao = '$descricao',
            data_ini = '$dataIni', 
            data_fim = '$dataFim',
            usuario = '$nome_user',
            estatus = '$status'
            WHERE
            cod_task = $cod_tarefa
        ";
$resultado = mysqli_query($con, $sql);

if($resultado == true){
    header("Location:../home.php");
}
?>
