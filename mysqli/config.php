<?php

error_reporting(0);

$dbhost = 'localhost';
$dbhost = 'root';
$dbpassword = '';
$dbname = 'imports';


$conn = new mysqli($dbhost, $dbuser , $dbpassword , $dbname);

if($conn->connect_errno){
    echo 'Ocorreu um erro na conexão' . $conn->connect_errno . ' - ' . $conn->connect_error;
}

$Resultado = $conn->query('SELECT * FROM pessoa');

var_dump($resultado->fetch_assoc());