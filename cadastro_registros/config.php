<?php

$conn = mysqli_connect("localhost", "root", "", "alunos");

if (!$conn) {
    die("Falha na conecção " . mysqli_connect_error());
}
