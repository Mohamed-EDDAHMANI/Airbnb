<?php

namespace App\Core;

class Sessions
{
    public static function createUserSession($user){
        $email = $user->getEmail();
        $name = $user->getName();
        $role = $user->getRole();
        $id = $user->getId();
        $pic = $user->getPic();
    
        $_SESSION['user'] = [
            'email'=> $email,
            'name'=> $name,
            'role'=> $role,
            'id'=> $id,
            'pic'=> $pic
        ];
        return;
    }
}
?>