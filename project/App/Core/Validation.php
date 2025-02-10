<?php
namespace App\Core;

class Validation
{
    public static function valideSingUp($user)
    {
        $email = $user->getEmail();
        $password = $user->getPassword();
        $userName = $user->getUserName();
        $role = $user->getRole();
        $passwordPattern = "/^.{4,}$/";
        $usernamePattern = "/^[a-zA-Z]+(\s[a-zA-Z]+)?$/";
        $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/";
        $rolePattern = "/^.+$/";

        if (!preg_match($emailPattern, $email)) {
            $_SESSION['error'] = ['message' => "Invalid email format."] ;
            return false;
        }

        if (!preg_match($passwordPattern, $password)) {
            $_SESSION['error'] = ['message' => "Password must be at least 4 characters long."] ;
            return false;
        }

        if (!preg_match($usernamePattern, $userName)) {
            $_SESSION['error'] = ['message' => "Username should consist of one or two words with no numbers."] ;
            return false;
        }

        if (!preg_match($rolePattern, $role)) {
            $_SESSION['error'] = ['message' => "Role cannot be empty."] ;
            return false;
        }

        return true;
    }
}