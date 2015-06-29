<?php

require_once 'C:\xampp\htdocs\escola2\classes\crud.php';

class Professor extends Crud{
    
    protected $table = 'professor';
    private $nome;
    private $nascimento;
    private $endereco;
    private $email;
    
    
    public function setNome($nome){
        $this->nome = $nome;        
    }
    
    public function setNascimento($nascimento){
        $this->nascimento = $nascimento;    
    }
    
       public function setEndereco($endereco){
        $this->endereco = $endereco;        
    }
    
    public function setEmail($email){
        $this->email = $email;    
    }
    public function insert(){
    
        $sql = "INSERT INTO $this->table (nome, dataNasc, endereco, email) VALUES (:nome, :nascimento, :endereco, :email)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':nascimento', $this->nascimento);
        $stmt->bindParam(':endereco', $this->endereco);
        $stmt->bindParam(':email', $this->email);
        return $stmt->execute();
    
    }
    
    public function update($id){
        $sql = "UPDATE $this->table SET = nome = :nome, dataNasc = :nascimento, endereco = :endereco, email = :email WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':nascimento', $this->nascimento);
        $stmt->bindParam(':endereco', $this->endereco);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    
    
    }
        
}