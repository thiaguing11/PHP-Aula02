<?php
// Coletando dados do formulario
$nome = isset($_POST["nome"]) ? $_POST["nome"] : "Anônimo";
$email = $_POST['email'] ?? 'Nao informado'; // Null coalescing operator
$idade = $_POST['idade'] ?? 'Nao informado';

// Armazenamento dados em um array associativo
$usuario = [
    'nome' => $nome,
    'email' => $email,
    'idade' => $idade
];

// Funcao para saudacao
function saudacao($nome) {
    return "Ola $nome, seja bem-vindo ao nosso sistema!";
}

//Exibindo uma mensagem de boas-vindas
echo saudacao($usuario['nome']) . '<br>';
echo "Aqui estao os detalhes do seu cadastro:<br>";
echo 'Nome: ' . $usuario['nome'] . "<br>";
echo 'Email: ' . $usuario['email'] . "<br>";
echo 'Idade: ' . $usuario['idade'] . "<br>";

// Adicionando comentarios explicativos ao código
// Este script processa as entradas de uma formulário e exibe uma mensagem personalizada.
?>
