<?php

//variaveis de Conecção
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "sakila2022";

//Variavel de Conecção

$conn = mysqli_connect($dbhost, $dbuser, $dbname, $dbpassword);

if (!$conn) {
    die("Falha na conecção " . mysqli_connect_error());
} else {
    echo "Connected successfully";   
}



