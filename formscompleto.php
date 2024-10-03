<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nasc = $_POST['data_nasc'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $senha = $_POST['senha'];
    $confirmacao_senha = $_POST['confirmacao_senha'];
    $termos = $_POST['termos'];

    if ($senha != $confirmacao_senha) {
        echo "<h1>Erro: As senhas não coincidem!</h1>";
        exit;
    }

    echo "<h1>Cadastro Concluído com Sucesso!</h1>";
    echo "<p>Nome Completo: $nome</p>";
    echo "<p>E-mail:$email</p>";
    echo "<p>Data de Nascimento: $data_nasc</p>";
    echo "<p>CPF: $cpf</p>";
    echo "<p>Endereço: $endereco</p>";
    echo "<p>Estado: $estado</p>";
    echo "<p>Status dos Termos: $termos</p>";

?>