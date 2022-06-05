<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = @$_POST['l_nome'];
    $email = @$_POST['l_email'];
    $senha  = @$_POST['l_senha'];
} 

if (isset($_POST['l_submit'])) {
    

    if ($nome == '') {
     
        

    }

    if ($email == '') {
        

    }

    if ($senha == '') {


    }


}






?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>DATABASE</title>
</head>

<body>
    <div class="container">
        <header>
            <nav class="t_navbar">
                <h1><img src="https://img.icons8.com/dotty/80/undefined/pixel-cat.png" /></h1>
                <div>
                    <a href="/"> Hello</a>
                    <a href="/"> Hello</a>
                    <a href="/"> Hello</a>
                </div>
            </nav>
        </header>

        <main>
            <section>
                <form action="" method="post">
                    <fieldset>
                        <legend>Formulário</legend>
                        <div class="t_item">
                            <label for="l_nome">NOME:</label>
                            <input type="text" id="l_nome" name="l_nome">
                        </div>
                        <div class="t_item">
                            <label for="l_email">E-MAIL:</label>
                            <input type="text" id="l_email" name="l_email">
                        </div>
                        <div class="t_item">
                            <label for="l_senha">SENHA:</label>
                            <input type="text" id="l_senha" name="l_senha">
                        </div>
                        <div class="t_item">
                            <input type="submit" id="l_submit" name="l_submit" value="Enviar">
                        </div>
                    </fieldset>
                </form>
            </section>
        </main>
    </div>

</body>

</html>