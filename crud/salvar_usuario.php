<?php

    switch ($_REQUEST['acao']) {
        case 'cadastar':

            $nome = $_POST['text_name'];
            $email = $_POST['text_email'];
            $senha = $_POST['t_senha'];
            $dat_nasc = $_POST['t_data_nasc'];

            $sql = "INSERT INTO usuarios(nome, email, senha, dat_nasciment) VALUES ( '{$nome}','{$email}', '{$senha}', '{$data_nasc}')";

            $resul = $conn->query($sql);

            //criação
            break;
        case 'ediatar':
            break;
        case 'excluir':
        default:
            echo '<h2>Bem-Vindos<h2>';
    }


?>