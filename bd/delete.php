<?php

session_start();

    require_once ("connection.php");
    session_start();
    $cod = $_GET['cod'];

    $sql = "DELETE FROM tarefa WHERE cod_task = $cod ";

    $resultado = mysqli_query($con, $sql);

    if($resultado == true){
        header("Location:../home.php");
    }


?>