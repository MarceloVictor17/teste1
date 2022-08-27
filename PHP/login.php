<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location: game.php');
   }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="..\CSS/stylegeral.css">
    <link rel="stylesheet" href="..\CSS/login.css">
    <title>Login - Puzzle Brain</title>
    <link rel="icon" type="image/png" href="..\Midia\Img\puzzle-removebg-preview.png"/>
</head>
<body class="bg-fundosite text-light">
    <div class="container">

    <form action="login2.php" method="POST">
    <div id="login">

        <h1 id="login_titulo" class="font-sigmar">Login</h1>

        <?php
        if (isset($_GET['erro'])) { if ($_GET['erro'] == "dadoserrado"){
        ?>
        <div id="login_erro" class="font-sigmar">
            <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
        <?php 
        }} unset($_GET['erro']);
         ?>

         
        <input name="usuario" class="login_input" type="text" placeholder="Nome"><br><br>
        <input name="senha" class="login_input" type="password" placeholder="Senha"><br><br>
        <button type="submit" id="login_botao">Logar-se</button>

        <div class="mt-4 float-end">
        <a class="link-light" href="cadastro.php">Quer se cadastrar?</a>
        </div>
        </form>
    </div>
    </div>
</body>
</html>