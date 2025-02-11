<?php 

namespace App\Classes;

class User{

    private $email;
    private $password;
    private $userName;
    private $role;
    private $id;
    private $pic;

    public function __construct($email, $password, $userName = '', $role = '', $id = '', $pic = '') {
        $this->email = $email;
        $this->password = $password;
        $this->userName = $userName;
        $this->role = $role;
        $this->id = $id;
        $this->pic = $pic;
    }

    // Getters
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getRole() {
        return $this->role;
    }

    public function getId() {
        return $this->id;
    }
}

?>
