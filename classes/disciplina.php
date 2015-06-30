<?php

require_once 'C:\xampp\htdocs\escola\classes\crud.php';

class Disciplina extends Crud{
    
    protected $table = 'disciplina';
    private $nome;

    
    
    public function setNome($nome){
        $this->nome = $nome;        
    }
    

    public function insert(){
    
        $sql = "INSERT INTO $this->table (nome) VALUES (:nome)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        return $stmt->execute();
    
    }
    
    public function update($id){
        $sql = "UPDATE $this->table SET nome = :nome WHERE id_disciplina = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    
    
    }
        
}