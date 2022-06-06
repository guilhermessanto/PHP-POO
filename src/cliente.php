<?php
class Cliente{
    //propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;
}

// $clienteA = new Cliente();
// $clienteA ->nome = "Guilherme";
// $clienteA ->email = "g.santossantana22@gmail.com";
// $clienteA ->senha = "1234567";
// $clienteA ->telefones = ['11976756555','11981229731'];

$clienteB = new Cliente();
$clienteB ->nome = "Carol";
$clienteB ->email = "carol@gmail.com";
$clienteB ->senha = "12345678";
$clienteB ->telefones = ['112345678','1140028922'];