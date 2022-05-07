<?php

session_start();

include("conexao.php");

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: login.php');
    exit();
}

$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "SELECT * FROM `usuarios` WHERE nome_usu = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: game.php');
    exit();
} else {
    header("Location: login.php?erro=dadoserrado");
    exit();
}