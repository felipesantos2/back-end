<?php
include_once "config/url.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- boostrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- css -->
    <link rel="stylesheet" href="<?php $BASE_URL ?>css/styles.css">

    <title>Bootstrap demo</title>
</head>

<body>
    <div class="container my-5">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-light">
                <a class="navbar-brand" href="<?php $BASE_URL ?>index.php">
                    <img src="<?php $BASE_URL ?>img/logo_1.svg" alt="Agenda">
                </a>
            </nav>

            <div class="navbar-nav">
                <a class="navbar-link"> Home</a>
            </div>
            <div class="navbar-nav">
                <a class="navbar-link"> Contatos</a>
            </div>
            <div class="navbar-nav">
                <a class="navbar-link"> Mais</a>
            </div>
        </header>