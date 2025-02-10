<?php
namespace App\Models;

class PopulairePropritaireModel extends Model {
    public function getPopularOwners() {
        $query = "SELECT owner_id, COUNT(*) AS annonce_count FROM annonces GROUP BY owner_id ORDER BY annonce_count DESC LIMIT 10";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
}