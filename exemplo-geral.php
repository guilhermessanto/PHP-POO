<?php
//exemplo-geral.php
class Exemplo{
    public string $nome;
    public string $escola;
    public string $cidade;
}

//criar objetos/instancias
$exemploA = new Exemplo;
$exemploB = new Exemplo;

echo "<pre>";
var_dump($exemploA);
var_dump($exemploB);
echo "</pre>";