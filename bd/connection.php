<?php
    $server = "127.0.0.1:3306";
    $password = ""; 
    $user = "root";
    $name_database = "list_tarefa";

    $con = mysqli_connect($server, $user, $password, $name_database);

    if(mysqli_connect_errno()){
        echo "Failed connection: " . mysqli_connect_error();
    }

    mysqli_select_db($con, $name_database);
?>