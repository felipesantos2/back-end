<?php


 if (isset($_POST['text_name']) && isset($_POST['text_email'])  && isset($_POST['t_senha']) && isset($_POST['t_acao'])){

    include_once "config.php";
    
    // $nome = trim(htmlspecialchars($_POST['text_name']));
    // $email = trim(htmlspecialchars($_POST['text_email']));
    // $senha =  trim(htmlspecialchars($_POST['t_senha']));

    $nome = cleanPost($_POST['text_name']);
    $email = cleanPost($_POST['text_email']);
    $senha =  cleanPost($_POST['t_senha']);
    
    // $nome = stripslashes($nome);
    // $email = stripslashes($email);
    // $senha = stripslashes($senha);


    function cleanPost($dados) {
        $dados = trim($dados);
        $dados = stripslashes($dados);
        $dados = htmlspecialchars($dados);
        return $dados;
    }


    /*Verifica se os campos estão vazios ou nulos */
    
    if(empty($nome) || $nome == null){
        echo  "O Nome não pode ser vazio.";
        exit();
    } 

    if(empty($email) || $email == null){
        echo "O E-mail não pode ser vazio.";
        exit();
    }

    if(empty($senha) || $senha == null){
        echo  "A senha não pode ser vazia.";
        exit();
    }


 }




