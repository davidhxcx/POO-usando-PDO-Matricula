<?php

require_once 'crud.php';

class Usuarios extends Crud{
    
    protected $table = 'usuarios';
    private $login;
    private $senha;
    
    public function setLogin($login){
        $this->login = $login;        
    }
    
    public function setSenha($senha){
        $this->senha = $senha;    
    }
    
    public function insert(){
    
        $sql = "INSERT INTO $this->table (nome, login, email, senha)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':login', $this->login);
        $stmt->bindParam(':senha', $this->senha);
        return $stmt->execute();
    
    }
    
    public function update($id){
        $sql = "UPDATE $this->table SET = login = :login, senha = :senha WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':login', $this->nome);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    
    
    }
        
}