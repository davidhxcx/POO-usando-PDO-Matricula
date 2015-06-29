<?php

require_once 'C:\xampp\htdocs\escola2\classes\crud.php';

class Curso extends Crud{
    
    protected $table = 'curso';
    private $nome;
    private $duracao;
    private $periodo;
    
    
    public function setNome($nome){
        $this->nome = $nome;        
    }
    
    public function setDuracao($duracao){
        $this->duracao = $duracao;    
    }
    
       public function setPeriodo($periodo){
        $this->periodo = $periodo;        
    }    
    
    public function insert(){
    
        $sql = "INSERT INTO $this->table (nome, duracao, periodo) VALUES (:nome, :duracao, :periodo)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':duracao', $this->duracao);
        $stmt->bindParam(':periodo', $this->periodo);
        return $stmt->execute();
    
    }
    
    public function update($id){
        $sql = "UPDATE $this->table SET = nome = :nome, duracao = :duracao, periodo = :periodo WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':duracao', $this->duracao);
        $stmt->bindParam(':periodo', $this->periodo);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    
    
    }
        
}