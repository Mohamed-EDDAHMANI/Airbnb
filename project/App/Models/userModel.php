<?php 
namespace App\Models;

class UserModel extends Model{

    private static $table = "users";

    public function __construct(){
        parent::__construct(self::$table);
    }
    public function findUserByEmailPassword($user){
        $email = $user->getEmail();
        $password = $user->getPassword();
        $query = "SELECT * FROM {$this::$table} WHERE email = :email AND password = :password";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':email', $email, \PDO::PARAM_INT);
        $stmt->bindParam(':password', $password, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public function getAllUsers(): array {
        $query = "SELECT * FROM users where deleted_at is NULL";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function toggleUserStatus(int $id): bool {
        $sql = "UPDATE users SET is_active = NOT is_active WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function deleteUser(int $id): bool {
        $sql = "UPDATE users SET deleted_at = CURRENT_DATE WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function permanentDeleteUser(int $id): bool {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function restoreUser(int $id): bool {
        $sql = "UPDATE users SET deleted_at = NULL WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function getDeletedUsers(): array {
        $query = "SELECT * FROM users WHERE deleted_at IS NOT NULL";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}