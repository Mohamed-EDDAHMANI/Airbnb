<?php 

namespace App\Classes;

class User{

    private $email ;
    private $password ;
    private $userName ;
    private $role ;
    private $id ;

    public function __construct($email, $password, $userName = '', $role = '', $id = '') {
        $this->email = $email;
        $this->password = $password;
        $this->userName = $userName;
        $this->role = $role;
        $this->id = $id;
        
    }
}





?>