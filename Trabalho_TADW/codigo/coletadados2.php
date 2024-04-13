<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro2</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body style="background-color: #f0f5f9;">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="salvadados2.php" onsubmit="return validar()" class="bg-white p-4 rounded shadow">
                <h2 class="text-center mb-4" style="color: #007bff;">Cadastro</h2>
                <div class="form-group">
                    <label for="numero" style="color: #007bff;">Número de Telefone:</label>
                    <input type="text" class="form-control" name="numero" id="numero" placeholder="09-123456789" required>
                </div>
                <div class="form-group">
                    <label for="cpf" style="color: #007bff;">CPF:</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="123456789-12" required>
                </div>
                <input type="hidden" name="diferenciar" value="2">
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Prosseguir" style="background-color: #007bff; border-color: #007bff;">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Incluir o Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
