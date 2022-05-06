<?php
session_start();

include("conexao.php");

$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$sql = "select count(*) as total from usuarios where nome_usu = '$usuario'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuarios (nome_usu, senha) VALUES ('$usuario', '$senha')";

echo $sql;

if($mysqli->query($sql) === true){
    $_SESSION['status_cadastro'] = true;
}

$mysqli->close();

header('location: cadastro.php');
exit;
?>