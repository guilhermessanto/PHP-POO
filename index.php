<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>
    <h1>PHO POO - Exemplo 01</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação da classe</li>
        <li>Importação do arquivo de classe</li>
        <li>Criação dos objetos</li>
    </ul>

<?php
//Importando a classe
require_once "src/cliente.php";

//Criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;



?>
<pre><?= var_dump($clienteA,$clienteB)?></pre>
</body>
</html>