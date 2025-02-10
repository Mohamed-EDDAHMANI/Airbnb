<?php 
namespace App\Models;
use PDO;

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
        $stmt->bindParam(':email', $email, PDO::PARAM_INT);
        $stmt->bindParam(':password', $password, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getAllUsers(): array {
        $query = "SELECT * FROM users";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function validateUser(int $id): bool {
        $sql = "UPDATE users SET is_valid = 1 WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}