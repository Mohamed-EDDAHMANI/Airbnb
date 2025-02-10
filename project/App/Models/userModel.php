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
        $stmt->bindParam(':email', $email, PDO::PARAM_INT);
        $stmt->bindParam(':password', $password, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->execute()) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return new User($user['email'], $user['password'], $user['userName'], $user['role'], $user['id']);
        } else {
            return false;
        }
    }

    public function createNewUser($user)
    {
        $email = $user->getEmail();
        $password = $user->getPassword();
        $userName = $user->getUserName();
        $role = $user->getRole();
        $query = "INSERT INTO {$this::$table} (email, password, userName, role) 
              VALUES (:email, :password, :userName, :role)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':userName', $userName, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->execute()) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return new User($user['email'], $user['password'], $user['userName'], $user['role'], $user['id']);
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

        $query = "UPDATE {$this::$table} SET isConnected = 1 WHERE id = :id";
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
        $query = "SELECT isConnected FROM {$this::$table} 
              WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return (bool) $stmt->fetchColumn();
    }
}
?>