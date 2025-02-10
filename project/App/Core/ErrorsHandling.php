<?php 

namespace App\Core;

class ErrorsHandling {
    public static function handlLoginError() {
        $_SESSION['error'] = [
            'message'=> 'invalid Email or Password '
        ];
        return ;
    }
}






?>