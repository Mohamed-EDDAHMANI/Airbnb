<?php 

namespace App\Core;
use App\Core\Controller;

class Redirect extends Controller{
    public static function redirectAfterLogin($user) {
        $role = $user->getRole();
        switch ($role) {
            case 'admin':
                $controller = new Controller();
                $controller->view('admin/dashboard');
                break;
            case 'proprietaire':
                header('Location: /proprietaire');
                break;
            case 'voyageur':
                header('Location: /home');
                break;
            
            default:
                # code...
                break;
        }
        return ;
    }

    public static function redirectToSamePage() {
        $url = $_SERVER['REQUEST_URI'];
        header('Location: '.$url.'');
        
    }
}






?>