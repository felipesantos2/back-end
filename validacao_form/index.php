<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Seletor universal */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style-type: none;

        }

        div.container{
            width: 100%;
            max-width: 300px;
            padding: 10px;
            background: silver;/*background - shorthand*/
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            position: absolute;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }


        form input[type="text"],input[type="email"], input[type="password"] {
            width: 200px;
            padding: 5px;
            margin-top: 10px;
            outline: none;
        }


        form input[type="submit"] {
            width: 200px;
            padding: 5px;
            margin-top: 10px;
            outline: none;
            cursor: pointer;
        }
        

        .form h1{
            color: rgb(50, 187, 192);
            font-size: 2.5rem;
        }


    </style>
    <title>PHP E FORM</title>
</head>
<body>
    <!-- $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha); -->
    <!-- $conexao = new mysqli($dbhost,$dbusername,$dbpassword,$dbname); -->
<div class="container">
    <div class="form">
        <h1>Cadastro de Usuario</h1>
        <form action="" method="POST">
            <div>
                <input type="text" name="text_name" placeholder="NOME">
            </div>
            <div>
                <input type="email" name="text_email" placeholder="E-MAIL">
            </div>
            <div>
                <input type="password" name="t_senha" placeholder="SENHA">
            </div>
            <div>
                <input type="submit" name="t_acao" value="Cadastrar">
            </div>
            <div>
                <input type="hidden" value="f_form">
            </div>
        </form>
    </div>
</div>
  
</body>
</html>