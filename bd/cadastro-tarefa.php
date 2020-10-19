<?php 

    require_once("connection.php");
    session_start();
    $cod_user = $_SESSION['id_user'];
    
    $nome_user = $_POST['user_name'];
    $titulo = $_POST['title'];
    $dataIni = $_POST['date_ini'];
    $dataFim = $_POST['date_fim'];
    $status = $_POST['status'];
    $descricao = $_POST['description'];

    $sql = "INSERT INTO tarefa(cod_id, titulo, descricao, data_ini, data_fim, usuario, estatus) 
                        VALUES('$cod_user', '$titulo', '$descricao', '$dataIni', '$dataFim', '$nome_user', '$status')";

    $result = mysqli_query($con, $sql);

    if($result == true){
        header("Location:../home.php");
    }
?>