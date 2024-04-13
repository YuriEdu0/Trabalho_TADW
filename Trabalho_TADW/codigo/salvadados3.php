<?php
session_start();

$datanasc = $_GET['datanasc'];
$genero = $_GET['genero'];

$_SESSION['datanasc'] = $datanasc;
$_SESSION['genero'] = $genero;

$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
$numero = $_SESSION['numero'];
$cpf = $_SESSION['cpf'];
$datanasc = $_SESSION['datanasc'];
$genero	 = $_SESSION['genero'];

echo 'Nome: ' . $nome . '<br>';
echo 'E-mail: ' . $email . '<br>';
echo 'Senha: ' . $senha . '<br>';
echo 'Número: ' . $numero . '<br>';
echo 'CPF: ' . $cpf . '<br>';
echo 'Data de Nascimento: ' . $datanasc . '<br>';
echo 'Gênero: ' . $genero . '<br>';

require_once 'conexao.php';

$sql = "INSERT INTO tb_cadastro (nome, email, senha, numero, cpf, datanasc, genero) VALUES ( '$nome',  '$email', '$numero', '$cpf', '$cpf', '$datanasc', '$genero')";

//  if (mysqli_query($conexao, $sql)) {
//      // Obtenha o ID do vendedor recém-criado
//      header('Location: index.html');
//      exit();
//  } else {
//      echo "Ocorreu um erro. Tente novamente.";
//  }
//  mysqli_close($conexao);


