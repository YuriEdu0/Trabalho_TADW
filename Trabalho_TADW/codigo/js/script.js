
function validar() {
    if (nome.value == "") {
        alert("Erro: nome vazio!");
        return false;
    }

    if (email.value == "") {
        alert("Erro: email vazio!");
        return false;
    }

    if (senha.value == "") {
        alert("Erro: senha vazio!");
        return false;
    }

    if (numero.value == "") {
        alert("Erro: numero de telefone vazio!");
        return false;
    }

    if (cpf.value == "") {
        alert("Erro: CPF vazio!");
        return false;
    }

    if (datanasc.value == "") {
        alert("Erro: Data de Nascimento vazio!");
        return false;
    }

    if (genero.value == "") {
        alert("Erro: Gênero vazio!");
        return false;
    }
}