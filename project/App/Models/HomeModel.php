<?php 

namespace App\Models;
use PDO;

class HomeModel extends Model{

    private static $table = "annonce";

    public function __construct(){
        parent::__construct(self::$table);
    }

    public function getAllAnnonces(){
        $query = "SELECT * FROM {$this::$table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getAnnonce($id){
        $query = "SELECT * FROM {$this::$table} where id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function reserver($id) {
        $query = "SELECT * FROM {$this::$table} where id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

}






?>