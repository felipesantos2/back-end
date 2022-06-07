<?php


    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = "";
    $dbname = 'imports';

    $conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

    if($conn->connect_errno){
        echo("Erro na conexão!<br>") . $conn->connect_error;
    // mysqli_connect_error();

    }

    // Query 

    $sql = "CREATE TABLE teste(nome VARCHAR(100), sobrenome VARCHAR(100))";
    // $sql = "DROP TABLE teste";

    $conn->query($sql);

    $result->close();




?>


 