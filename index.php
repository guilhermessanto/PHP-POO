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
        <li>Herança</li>
    </ul>
<?php
// Importando a classe
require_once "src/Cliente.php";
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";

$clientePF = new PessoaFisica;
$clientePF -> setNome('Guilherme');
$clientePF -> setEmail('guilherme@gmail.com');
$clientePF -> setSenha('123asd');
$clientePF -> setCpf('123-456-789-10');
$clientePF -> setIdade(23);

$clientePJ = new PessoaJuridica;
$clientePJ -> setNome('Antonio');
$clientePJ -> setNomeFantasia('La casa de pastel');
$clientePJ -> setAnoFundacao(2019);
$clientePJ -> setCnpj('12.345.678/0001-11');
$clientePJ -> setEmail('lacasadepastel@gmail.com');
$clientePJ -> setSenha('2345678A');

?>

<pre><?=var_dump($clientePF, $clientePJ)?></pre>


</body>
</html>