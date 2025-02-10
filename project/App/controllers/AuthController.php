<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\UserModel;
use App\Core\Sessions;
use App\Core\Redirect;
use App\Core\ErrorsHandling;
use App\Classes\User;

class AuthController extends Controller {

    private $userModel;

    public function __construct(){
        $this->userModel = new userModel();
    }

    public function getLoginPage(): void {
        $this->view('auth/login', );
    }

    public function postLoginPage(): void {
        $user = new User($_POST['email'], $_POST['password']);
        $result = $this->userModel->findUserByEmailPassword($user);
        if ($result instanceof User) {
            Sessions::createUserSession($result);
            Redirect::redirectAfterLogin($result);
        }else{
            ErrorsHandling::handlLoginError();
        }
    }
}