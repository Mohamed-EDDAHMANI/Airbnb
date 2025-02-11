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
                $controller = new Controller();
                $controller->view('proprietaire/dashboard');
                break;
            case 'voyageur':
                $controller = new Controller();
                $controller->view('admin/dashboard');
                break;
            
            default:
                # code...
                break;
        }
        return ;
    }
}






?>