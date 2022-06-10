<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5 - Herança</title>
</head>
<body>
    <h1>PHP POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visibilidade</li>
        <li>Métodos de acesso:  getters e setters</li>
    </ul>
<?php
// Importando a classe
require_once "src/Cliente.php";

// Criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;

//Atribuindo dados via setters do objeto

//cliente A
$clienteA->setNome("Guilherme");
$clienteA->setEmail("guilherme@gmail.com");
$clienteA->setSenha("senha123");

//cliente B
$clienteB->setNome("João");
$clienteB->setEmail("joao@gmail.com");
$clienteB->setSenha("senha321");
?>

<h2>Dados dos objetos (leitura via getters)</h2>
<h3><?= $clienteA->getNome()?></h3>
<p><?=$clienteA->getEmail()?></p>
<p><?=$clienteA->getSenha()?></p>

<h3><?= $clienteB->getNome() ?></h3>
<p><?=$clienteB->getEmail()?></p>
<p><?=$clienteB->getSenha()?></p>


</body>
</html>