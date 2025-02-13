<?php
namespace App\Models;

class PopulairePropritaireModel extends Model {
    public function getPopularOwners() {
        $query = "SELECT owner_id, COUNT(*) AS annonce_count FROM annonces GROUP BY owner_id ORDER BY annonce_count DESC LIMIT 10";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
    public function getAllOwners(){
        $myQuery="SELECT id, name, email, password, is_active, is_connected, created_at 
                    from users 
                    where role='proprietaire'";
        $stmt=$this->connection->prepare($myQuery);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}