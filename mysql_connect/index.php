<?php

    $email = $_POST['InputEmail'];
    $passWord = $_POST['InputPassword'];
    $enviar = $_POST['submit'];






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
                <form>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém. </div>
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="InputPassword">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="Check1" name="Check1">
                        <label class="form-check-label" for="Check1">Check me out</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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