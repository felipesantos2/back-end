<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //arquivo de conecção
    include_once "config.php" ;

    $nome = filter_input(INPUT_POST,'InputName',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'InputEmail',FILTER_SANITIZE_EMAIL);

    //Query de inserção
    $result_usuarios = "INSERT INTO users(`id`, `create`, `name`, `email`) VALUES(NULL, now(),  '$nome', '$email')";

    $resultado_usuario = mysqli_query($conn, $result_usuarios);


    if (mysqli_insert_id($conn)){
        $_SESSION['msg'] = "Usuario cadastrado com sucesso";
        header("location: index.php");

    } else {
        header("location: index.php");

    }
   

}

