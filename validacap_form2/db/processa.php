<?php
    /*
    verificar se os campos exitem
    verificar se os campos estão preenchidos
    verificar o tipo de dados

    */

    // verificar se os campos exitem

    // if(isset($_POST['text_name']) == false)

    if ( !isset($_POST['text_name']) || !isset($_POST['text_email']) || !isset($_POST['t_senha'])) {

        die("<span 
                style='font-family: Verdana;
                color: red;
                font-size: 2rem;'>
                error - Não exitem os campos necessários 
            <span>");
    }

    //verificar se os campos estão preenchidos
    
    if(!empty($_POST['text_name']) || empty($_POST['text_email']) || !empty($_POST['t_senha'])) {

        die("<span 
                style='font-family: Verdana;
                color: red;
                font-size: 2rem;'>
                error - Um dos campos não está preenchido 
            <span>");

    }




    $usuario_nome = $_POST['text_name'];
    $usuario_email = $_POST['text_email'];
    $usuario_senha = $_POST['t_senha'];


    echo "Seu email é " . $usuario_email;
    echo "<br>";
    echo "Seu nome é " . $usuario_nome;


?>