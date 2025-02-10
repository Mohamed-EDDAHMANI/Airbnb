<?php
namespace App\Models;

class AnnonceModel extends Model {
    public function getAllAnnonces() {
        $query = "SELECT * FROM annonces";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
    public function validateAnnonce(int $id): bool {
        $sql = "UPDATE annonces SET status = 'validated' WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function deleteAnnonceById(int $id): bool {
        $query = "DELETE FROM " . self::$table_name . " WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function deleteCommentaireById(int $id): bool {
        $query = "DELETE FROM " . self::$table_name . " WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}