<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\HomeModel;
use App\Core\Sessions;
use App\Core\Redirect;
use App\Core\ErrorsHandling;
use App\Classes\User;

class UserController extends Controller {

    private $userModel;

    public function __construct(){
        $this->userModel = new HomeModel();
    }

    public function getHomePage(): void {
        $this->view('user/home', );
    }

    public function getReservationPage(): void {
        $this->view('user/reservation', );
    }

    public function detailsAnnonce(): void {
        $this->view('user/detailsAnnonce', );
    }

    public function getpayementPage() {
        $this->view('user/checkout');
    }
    
    public function getSuccessPage() {
        $this->view('user/success');
    }
    public function getCancelPage() {
        $this->view('user/cancel');
    }

    public function getAllAnnoncePage() {
        $this->view('user/listAnnonce');
    }
    public function getConversationPage() {
        $this->view('user/conversation');
    }
    public function getHistoriquePage() {
        $this->view('user/myHistoriques');
    }

}