<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Classes\User;

class AuthController extends Controller {
    private $userModel;

    public function __construct(){
        $this->userModel = new userModel();
    }

    public function getLoginPage(): void {
        // require  __DIR__ . '/../Views/auth/login.php';
        $this->view('auth/login', );
    }
    public function postLoginPage(): void {
        $user = new User($_POST['email'], $_POST['password']);
    }
}