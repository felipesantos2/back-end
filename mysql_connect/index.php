
<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <title>Crud</title>
</head>

<body>
    <div class="container">
        <h2>Cadastrar usuario</h2>
        <span>
            <?php
        
                if($_SESSION['msg']){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            
            ?>
            
        </span>
        
        <form action="dados.php" method="POST">
        
            <div>  
                <label for="InputName">Nome</label>
                <input type="text" placeholder="Digite seu nome:" name="InputName" id="InputName">
            </div>
            <br>
            <div>  
                <label for="InputEmail">Email</label>
                <input type="text" placeholder="Digite seu email:" name="InputEmail" id="InputEmail">
            </div>
            <br>
            <div>  
                <input type="submit" value="Cadastrar" name="InputCad">
            </div>
        </form>
    </div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>