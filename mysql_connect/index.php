<?php

$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = limpa_inputs($_POST['InputEmail']);
    $passWord = limpa_inputs($_POST['InputPassword']);
    $enviar = limpa_inputs($_POST['submit']);
}

function limpa_inputs($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}






?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- coluna 1 -->
            <div class="col">
                <form method="POST">
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém. </div>
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="InputPassword">
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
            <!-- coluna 2 -->
            <div class="col"></div>
        </div>

    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>