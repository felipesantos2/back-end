<?php

$to = 'felipe@rkminformatica.com.br'; // destinatario - para quem
$assunto = 'Formulário do site';
$mensagem = $_POST['mensagem'] . " - " . $_POST['nome'];
$remetente  = $_POST['email']; 

mail($to, $assunto, $mensagem);