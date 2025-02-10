<?php
namespace App\Models;
use App\core\Database;
use PDO;

class Model{
    
    protected $connection;
    protected $table_name;

    public function __construct($table_name){
        $this->connection = Database::connection();
        $this->table_name = $table_name;
    }
    public function findById($id) {
        $query = "SELECT * FROM {$this->table_name} WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function findAll() {
        $query = "SELECT * FROM {$this->table_name}";
        $stmt = $this->connection->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function delete($id) {
        $query = "DELETE FROM {$this->table_name} WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}