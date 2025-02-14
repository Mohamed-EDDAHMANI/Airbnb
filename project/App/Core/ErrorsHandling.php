<?php 

namespace App\Core;

class ErrorsHandling {
    public static function handlError($message) {
        $_SESSION['error'] = [
            'message'=> $message
        ];
        return ;
    }
}






?>