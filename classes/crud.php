<?php

require_once 'C:\xampp\htdocs\escola\classes\DB.php';

abstract class Crud extends DB{
        
    protected $table;
    
    abstract public function insert();
    abstract public function update($id);
    
    public function find($id){
        $sql = "SELECT * FROM $this->table WHERE id_aluno = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function find2($id){
        $sql = "SELECT * FROM $this->table WHERE id_professor= :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function find3($id){
        $sql = "SELECT * FROM $this->table WHERE id_curso= :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function find4($id){
        $sql = "SELECT * FROM $this->table WHERE id_disciplina= :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function findALL(){
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function delete($id){
       $sql = "DELETE FROM $this->table WHERE id_aluno = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();    
    }
    
    public function delete2($id){
       $sql = "DELETE FROM $this->table WHERE id_professor = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();    
    }
    
    public function delete3($id){
       $sql = "DELETE FROM $this->table WHERE id_curso = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();    
    }
    
    public function delete4($id){
       $sql = "DELETE FROM $this->table WHERE id_disciplina = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();    
    }


}