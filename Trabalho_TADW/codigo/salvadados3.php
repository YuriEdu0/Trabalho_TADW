<?php
session_start();

$datanasc = $_GET['datanasc'] ?? '';
$genero = $_GET['genero'] ?? '';

$_SESSION['datanasc'] = $datanasc;
$_SESSION['genero'] = $genero;

$nome = $_SESSION['nome'] ?? '';
$email = $_SESSION['email'] ?? '';
$senha = $_SESSION['senha'] ?? '';
$numero = $_SESSION['numero'] ?? '';
$cpf = $_SESSION['cpf'] ?? '';
$datanasc = $_SESSION['datanasc'] ?? '';
$genero = $_SESSION['genero'] ?? '';

require_once 'conexao.php';

$sql = "INSERT INTO tb_cadastro (nome, email, senha, numero, cpf, datanasc, genero) VALUES ('$nome', '$email', '$senha', '$numero', '$cpf', '$datanasc', '$genero')";

if (mysqli_query($conexao, $sql)) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao executar a query: " . mysqli_error($conexao);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f0f5f9;">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow" style="background-color: #007bff;">
                <div class="card-body" style="color: white;">
                    <h1 class="text-center mb-4">Cadastro Realizado</h1>
                    <p class="mb-3">Veja abaixo os detalhes do cadastro:</p>
                    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
                    <p><strong>E-mail:</strong> <?php echo $email; ?></p>
                    <p><strong>Senha:</strong> <?php echo $senha; ?></p>
                    <p><strong>Número:</strong> <?php echo $numero; ?></p>
                    <p><strong>CPF:</strong> <?php echo $cpf; ?></p>
                    <p><strong>Data de Nascimento:</strong> <?php echo $datanasc; ?></p>
                    <p><strong>Gênero:</strong> <?php echo $genero; ?></p>
                    
                    <div class="mt-4 text-center">
                        <a href="index.html" class="btn btn-outline-light">Retornar à Página Inicial</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
