<?php
class User {
    private $conn;
    private $table = "utilisateur";

    public $id;
    public $nom;
    public $email;

    public function __construct($db){
        $this->conn = $db;
    }
 //create
    public function create(){
        $sql = "INSERT INTO {$this->table} (nom,email) VALUES (:nom,:email)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['nom' => $this->nom, 'email' => $this->email]);
     }
 //raed
    public function read(){
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
 //update
    public function update(){
        $sql = "UPDATE {$this->table}SET nom=:nom, email=:email where id=:id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $this->id]);
    }
 // DELETE
    public function delete(){
        $sql = "DELETE FROM {$this->table} where id=:id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $this->id]);
    }   


        
    
}