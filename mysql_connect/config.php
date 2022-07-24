<?php

//variaveis de Conecção
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "imports";

//Variavel de Conecção

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if (!$conn) {
    die("Falha na conecção " . mysqli_connect_error());
}


