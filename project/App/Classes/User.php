<?php 
namespace App\Classes;

class User{

    private $email;
    private $password;
    private $name;
    private $role;
    private $id;
    private $pic;

    public function __construct($email, $password, $name = '', $role = '', $id = '', $pic = '') {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
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

    public function getName() {
        return $this->name;
    }

    public function getRole() {
        return $this->role;
    }

    public function getId() {
        return $this->id;
    }
    public function getPic() {
        return $this->pic;
    }
}