<?php
namespace App\Controllers;

use App\Core\Controller;

class AdminController extends Controller {
    private $userModel;

    public function __construct(){
        $this->userModel = new userModel();
    }

    public function admin(): void {
        $this->view('admin/dashboard/', );
    }
    public function getAllUsers(): void {
        var_dump("create");
        exit;
    }
    public function deleteuser(): void {
        var_dump("create");
        exit;
    }
}