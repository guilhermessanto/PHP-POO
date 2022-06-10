<?php
/* Classes abstract não podem ser instanciadas, não é possivel criar um objeto a partir dessa classe  */
abstract class Cliente {
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
    //email
    public function getEmail():string{
        return $this->email;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    //senha
    public function getSenha():string{
        return $this->senha;
    }
    public function setSenha(string $senha){
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }
    
}