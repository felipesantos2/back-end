<?php
session_start();
require_once "config.php";

if(isset($_POST['btn-enviar'])){
    $nome = mysqli_real_escape_string($conn,$_POST['name']);
    $curso = mysqli_real_escape_string($conn,$_POST['curso']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $senha = mysqli_real_escape_string($conn,$_POST['password']);

    $query = "INSERT INTO alunos(id, nome, curso, email , senha) VALUES(NULL, '$nome', '$curso', '$email',' $senha')";

    $query_run = mysqli_query($conn, $query);
    
    if($query_run){
        $_SESSION['msg'] = "Usuario cadastrado com sucesso";
        header("location:index.php");
        exit();

    } else {

        $_SESSION['msg'] = "Erro no cadastro";
        header("location:index.php");
        exit();

    }

}