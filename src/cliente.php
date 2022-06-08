<?php
class Cliente {
    // Propriedades (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;
    
    /* métodos getters e setters */
    public function getNome():string{
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
}