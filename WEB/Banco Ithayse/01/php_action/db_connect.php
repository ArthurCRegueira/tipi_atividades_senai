<?php 
    $serverName = "localhost";
    $username = "arthur";
    $password = "password";
    $db_name = "bi";
    $connect = mysqli_connect($serverName, $username, $password, $db_name);
    mysqli_set_charset($connect, "utf8");
    if(mysqli_connect_error()){
        echo "Erro na conexão: ".mysqli_connect_error();
    }
?>