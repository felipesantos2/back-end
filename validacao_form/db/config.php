<?php
    // ARQUIVO DE CONEXÃO COM O BANCO
  
    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'form';

    // conexão com mysqli 
    
    $conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);



?>