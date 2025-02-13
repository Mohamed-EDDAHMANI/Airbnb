<?php
namespace App\Models;

class RevenuxModel extends Model {
    public function getRevenux() {
        $myQuery = "SELECT DATE_TRUNC('month', r.created_at) AS month, SUM(p.montant_reservation) AS total_revenue
                    FROM reservation r
                    JOIN payment p ON r.id = p.reservation_id
                    GROUP BY DATE_TRUNC('month', r.created_at)
                    ORDER BY month DESC";
        $statement = $this->connection->prepare($myQuery);
        $statement->execute();
        return $statement->fetchAll();
    }
}