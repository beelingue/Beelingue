<?php
    $con = mysqli_connect("127.0.0.1", "root", "", "db");
    mysqli_query($con, "SET time_zone='+00:00'");

    date_default_timezone_set("UTC");

    if(mysqli_connect_errno()){
        echo "Falha a ligar a base de dados:".msqli_connect_error();
        exit();
    }
?>