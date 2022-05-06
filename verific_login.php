<?php

session_start();

$teste = '';

if(!$_SESSION['usuario']){
    header('location: login.php');
    exit();
}

?>