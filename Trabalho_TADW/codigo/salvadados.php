<?php
session_start();

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

$_SESSION['nome'] = $nome;
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;

header('Location: coletadados2.php');