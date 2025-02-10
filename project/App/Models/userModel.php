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

}






?>