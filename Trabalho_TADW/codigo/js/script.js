function validar() {
    const nome = document.getElementById('nome');
    const email = document.getElementById('email');
    const senha = document.getElementById('senha');
    const numero = document.getElementById('numero');
    const cpf = document.getElementById('cpf');
    const datanasc = document.getElementById('datanasc');
    const genero = document.getElementById('genero');

    var diferenciar = document.getElementsByName('diferenciar')[0].value;

    if (diferenciar == 1) {
        if (nome.value == "") {
            alert("Erro: nome vazio!");
            return false;
        }

        if (nome.value.length < 2 || nome.value.length > 50) {
            alert("Erro: nome deve ter entre 2 e 50 caracteres!");
            return false;
        }

        if (email.value == "") {
            alert("Erro: email vazio!");
            return false;
        }

        if (email.value.length < 5 || email.value.length > 50) {
            alert("Erro: email deve ter entre 5 e 50 caracteres!");
            return false;
        }

        if (senha.value == "") {
            alert("Erro: senha vazio!");
            return false;
        }

        if (senha.value.length < 3 || senha.value.length > 50) {
            alert("Erro: senha deve ter entre 3 e 50 caracteres!");
            return false;
        }
    }

    if (diferenciar == 2) {
        if (numero.value == "") {
            alert("Erro: numero de telefone vazio!");
            return false;
        }

        if (numero.value.length < 11 || numero.value.length > 15) {
            alert("Erro: numero deve ter entre 11 e 15 caracteres!");
            return false;
        }

        if (cpf.value == "") {
            alert("Erro: CPF vazio!");
            return false;
        }

        if (cpf.value.length != 12) {
            alert("Erro: CPF deve ter 12 caracteres!");
            return false;
        }
    }

    if (diferenciar == 3) {
        if (datanasc.value == "") {
            alert("Erro: Data de Nascimento vazio!");
            return false;
        }

        if (datanasc.value.length != 10) {
            alert("Erro: Data de Nascimento deve ter 10 caracteres!");
            return false;
        }

        if (genero.value == "") {
            alert("Erro: Gênero vazio!");
            return false;
        }

        if (genero.value.length < 1 || genero.value.length > 50) {
            alert("Erro: Gênero deve ter entre 1 e 50 caracteres!");
            return false;
        }
    }

    return true; // Retorna true se todas as validações passarem
}
