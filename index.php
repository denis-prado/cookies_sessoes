<?php
//starting session
session_start();


$user = $_SESSION['user'] ?? null;

if(!$user){
    header('location: login.php');
    exit;
}
?>

<h1>Pagina protegida</h1>