<?php


    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem  = $_POST['mensagem'];

    }

    if($nome == ''|| $email == ''|| $mensagem == ''){
        echo '<script>alert("Preencha os campos por favor")</script>';
        echo "<span></span>"

    }
    

?>