<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\UserModel;


class AdminController extends Controller {
    private $userModel;

    public function __construct(){
        $this->userModel = new userModel();
    }

    public function admin(){
        require_once __DIR__ . "/../Views/admin/dashboard.php";
    }    
    public function getAllUsers(){
        var_dump("create");
        exit;
    }
    public function deleteuser(){
        var_dump("create");
        exit;
    }
}