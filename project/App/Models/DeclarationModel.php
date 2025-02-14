<?php
namespace App\Models;

class DeclarationModel extends Model{
    private static $table = "declarations";

    public function __construct() {
        parent::__construct(self::$table);
    }
    public function resoudreLitige(int $id): bool {
        $query = "UPDATE " . self::$table . " SET status = 'resolved' WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}