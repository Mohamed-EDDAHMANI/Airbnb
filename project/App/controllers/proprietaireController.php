<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\UserModel;
use App\Core\Sessions;
use App\Core\Redirect;
use App\Core\ErrorsHandling;
use App\Core\Validation;
use App\Classes\User;
use Dotenv\Dotenv;

use Google\Client;
use Google\Service\Oauth2 as Google_Service_Oauth2;


class proprietaireController extends Controller
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function proprietaireDashboard()
    {
        // $authUrl = $this->proprietaireDashboard();
        $this->view('proprietaire/dashboard');
    }

}