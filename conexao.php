<?php

$host = "localhost";
$db = "quiz";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $db);
mysqli_set_charset($mysqli,"utf8");

if($mysqli->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}