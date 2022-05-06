<?php
session_start();
include("conexao.php");

$sql = "SELECT `Perguntas` FROM `perguntas` ORDER BY RAND() LIMIT 1;";
$result = mysqli_query($mysqli, $sql);


$_SESSION['pergunta'] = $result;
exit();
?>