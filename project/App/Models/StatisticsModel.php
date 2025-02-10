<?php
namespace App\Models;

class StatisticsModel extends Model {
    public function getStatistics() {
        $query = "SELECT COUNT(*) AS total_users, COUNT(DISTINCT owner_id) AS total_owners FROM users";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetch();
    }
}