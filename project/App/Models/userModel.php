<?php
namespace App\Models;
use App\Classes\User;
use PDO;

class UserModel extends Model
{

    private static $table = "users";

    public function __construct()
    {
        parent::__construct(self::$table);
    }
    public function findUserByEmailPassword($user)
    {
        $email = $user->getEmail();
        $password = $user->getPassword();
        $query = "SELECT * FROM {$this::$table} WHERE email = :email AND password = :password";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if($user){
            return new User($user['email'], $user['password'], $user['name'], $user['role'], $user['id'],$user['pic']);
        }else{
            return false ;
        }
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
    public function findUserByEmail($user)
    {
        $email = $user->getEmail();
        $query = "SELECT * FROM {$this::$table} WHERE email = :email";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if($user){
            return new User($user['email'], $user['password'], $user['name'], $user['role'], $user['id']);
        }else{
            return false ;
        }
    }

    public function createNewUser($user)
    {
            $email = $user->getEmail();
            $password = $user->getPassword();
            $name = $user->getName();
            $role = $user->getRole();
            $pic = $user->getPic();
            $query = "INSERT INTO {$this::$table} (email, password, name, role, pic) 
                  VALUES (:email, :password, :name, :role, :pic)";
            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':role', $role, PDO::PARAM_STR);
            $stmt->bindParam(':pic', $pic, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
    }

    public function connectUser($user)
    {
        $id = $user->getId();
        $isConnect = $this->isConnect($id);
        if($isConnect){
            return;
        }

        $query = "UPDATE {$this::$table} SET is_connected = true WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->execute()) {
            return ;
        } else {
            return false;
        }
    }

    public function isConnect($id)
    {
        $query = "SELECT is_connected FROM {$this::$table} 
              WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        return (bool) $stmt->fetchColumn();
    }
}
?>