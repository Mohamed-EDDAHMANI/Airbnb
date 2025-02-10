<?php
namespace App\Models;

class RevenuxModel extends Model {
    public function getRevenues() {
        $query = "SELECT * FROM revenues ORDER BY revenue_date DESC";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
}