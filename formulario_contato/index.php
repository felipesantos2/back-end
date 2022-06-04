<?php
session_start();
// $erroN = $erroE = $erroM = "";


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $nome = @$_POST['nome'];
//     $email = @$_POST['email'];
//     $mensagem  = @$_POST['mensagem'];
// } #else {
//    # echo "<span>Falha no metodo de requisição<span>";}

// if (isset($_POST['submit'])) {

//     if ($nome == '') {
//         // echo '<script>alert("Preencha os campos por favor")</script>';
//         // echo "<span>Preencha por favor o campo NOME</span><br>";
//         $erroN = "<span>Preencha por favor o campo NOME</span><br>";
//     }
//     if ($email == '') {
//         // echo '<script>alert("preencha os campos por favor")</script>';
//         // echo "<span>preencha por favor  o Campo E-MAIL</span><br>";
//         $erroE = "<span>Preencha por favor  o Campo E-MAIL</span><br>";
//     }
//     if ($mensagem == '') {
//         // echo '<script>alert("preencha os campos por favor")</script>';
//         // echo "<span>preencha por favor a MENSAGEM</span><br>";
//         $erroM = "<span>Preencha por favor a MENSAGEM</span><br>";
//     }
// }


// ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Contato</title>
    <!-- CSS only -->
    <style>
        span {
            font-size: 1.1rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: red;
            text-align: center;
        }

        h1 {
            color: black;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="my-5"> Formulário de Contato </h1>
                <form action="processa.php" method="POST">

                    <div class="mb-5">
                        <input type="text" name="nome" placeholder="Digite seu nome:" class="form-control">
                        <?php
                            if ($_SESSION['erroN'] != empty($_SESSION['erroN'])) {
                                echo $_SESSION['erroN'];
                            }
                        ?>
                    </div>
                    <div class="mb-5">
                        <input type="email" name="email" placeholder="Digite seu email:" class="form-control">
                        <?php
                            if ($_SESSION['erroE']!= empty($_SESSION['erroE'])) {
                                echo $_SESSION['erroE'];
                            }
                        ?>
                    </div>
                    <div class="mb-5">
                        <textarea name="textarea" cols="30" rows="3" name="mensagem" placeholder="Digite mensagem" class="form-control"></textarea>
                        <?php
                        if ($_SESSION['erroM'] != empty($_SESSION['erroM'])) {
                                echo $_SESSION['erroM'];
                            }
                        ?>
                    </div>
                    <div class="mb-5">
                        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>