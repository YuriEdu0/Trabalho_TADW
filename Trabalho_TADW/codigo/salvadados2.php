<?php
session_start();

$numero = $_GET['numero'];
$cpf = $_GET['cpf'];

$_SESSION['numero'] = $numero;
$_SESSION['cpf'] = $cpf;

header('Location: coletadados3.php');
?>
