<?php

namespace App\Core;

class Sessions
{
    public static function createUserSession($user){
        $email = $user->getEmail();
        $userName = $user->getUserName();
        $role = $user->getRole();
        $id = $user->getId();
        $_SESSION['user'] = [
            'email'=> $email,
            'userName'=> $userName,
            'role'=> $role,
            'id'=> $id
        ];
        return;
    }
}
?>