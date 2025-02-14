<?php

namespace App\Models;

class StatisticsModel extends Model {

    public function getTotalProperties(): int
    {
        $query = "SELECT COUNT(*) FROM annonces";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return (int)$stmt->fetchColumn();
    }
    public function getTotalReservations(): int
    {
        $query = "SELECT COUNT(*) FROM reservation";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return (int)$stmt->fetchColumn();
    }
    public function getTotalUsers(): int
    {
        $query = "SELECT COUNT(*) FROM users WHERE deleted_at IS NULL";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return (int)$stmt->fetchColumn();
    }
    public function getTotalRevenue(): float
    {
        $query = "SELECT SUM(montant_reservation) FROM payment";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $revenue = $stmt->fetchColumn();
        return $revenue ? (float)$revenue : 0.00;
    }
}