
<?php
    session_start();
    $_SESSION['nome'] = 'Felipe';
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get post</title>
</head>
<body>
    <?php
    if(isset($_GET['acao'])){
        $nome = @$_GET['nome'];
        $email = @$_GET['email'];

        echo $nome;
        echo "<br>";
        echo $email;
    }

    if($email == ''){
        echo "campos vazios"
    }

    ?>
    <form action="" method="POST">
        <input type="text" name="nome" id="nome" placeholder="Nome:">
        <input type="email" name="email" id="email" placeholder="E-mail:">
        <input type="submit" name="acao" id="acao" value="Enviar">
        <select name="select">
            <option value="Felipe">Felipe</option>
            <option value="Felipe">Miguel</option>
        </select>
    </form>
</body>
</html>