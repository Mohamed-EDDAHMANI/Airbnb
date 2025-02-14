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


class AuthController extends Controller
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function getLoginPage()
    {
        $authUrl = $this->generateGoogleURL();
        $this->view('auth/login', $authUrl);
    }

    public function getSingUpPage()
    {
        $authUrl = $this->generateGoogleURL();
        $this->view('auth/singUp', $authUrl);
    }


    public function login($user = '')
    {
        if (!$user) {
            $user = new User($_POST['email'], $_POST['password']);
        }
        $result = $this->userModel->findUserByEmailPassword($user);
        if ($result instanceof User) {
            Sessions::createUserSession($result);
            $this->userModel->connectUser($result);
            Redirect::redirectAfterLogin($result);
        } else {
            ErrorsHandling::handlError('invalid Email or Password ');
            Redirect::redirectToSamePage();
            // return false;
        }
    }

    public function singUp()
    {
        $name = $_POST['firstName'] . ' ' . $_POST['lastName'];
        $user = new User($_POST['email'], $_POST['password'], $name, $_POST['role'], '');
        $result = Validation::valideSingUp($user);

        if (!$result) {
            $this->getSingUpPage();
            exit;
        }

        //check if already has an account
        $isCreated = $this->userModel->findUserByEmail($user);
        if ($isCreated) {
            ErrorsHandling::handlError('Email Alraidy Exist');
            $this->getSingUpPage();
            exit;
        }

        // Handle image upload first
        if (isset($_FILES['pic'])) {
            $uploadResult = $this->uploadImage('pic', 'uploads/profiles');
            if ($uploadResult['status'] === true) {
                $picPath = $uploadResult['body'];
                $user = new User($_POST['email'], $_POST['password'], $name, $_POST['role'], '', $picPath);
            } else {
                ErrorsHandling::handlError($uploadResult['body']);
                $this->getSingUpPage();
                exit;
            }
        } else {
            ErrorsHandling::handlError('Picture file is requiared!!');
            $this->getSingUpPage();
            exit;
        }

        $isCreated = $this->userModel->createNewUser($user);
        if ($isCreated) {
            $this->getLoginPage();
            exit;
        } else {
            ErrorsHandling::handlError('Error creating account');
            $this->getSingUpPage();
            exit;
        }
    }

    public function singUpGoogle()
    {
        $user = new User($_POST['email'], $_POST['password'], $_POST['name'], $_POST['role'], '');

        // Handle image upload first
        if (isset($_FILES['pic'])) {
            $uploadResult = $this->uploadImage('pic', 'uploads/profiles');
            if ($uploadResult['status'] === true) {
                $picPath = $uploadResult['body'];
                $user = new User($_POST['email'], $_POST['password'], $_POST['name'], $_POST['role'], '', $picPath);
            } else {
                ErrorsHandling::handlError($uploadResult['body']);
                $this->getSingUpPage();
                exit;
            }
        } else {
            ErrorsHandling::handlError('Picture file is requiared!!');
            $this->getSingUpPage();
            exit;
        }

        $isCreated = $this->userModel->createNewUser($user);
        if ($isCreated) {
            $this->getLoginPage();
            exit;
        } else {
            ErrorsHandling::handlError('Error creating account');
            $this->getSingUpPage();
            exit;
        }
    }

    public function uploadImage(
        string $inputName,
        string $targetDirectory = 'uploads', // Relative to App/Views/assiet
        int $maxFileSize = 2097152
    ) {

        // 1. Construct the absolute path to the target directory
        $baseDirectory = '../../public/uploads';  // Assumes this function is in a class within App directory. Use dirname(__FILE__) if not.
        $absoluteTargetDirectory = $baseDirectory . '/' . $targetDirectory;

        // Error Handling and File Validations (steps 1-4)
        // 1.  Check if a file was actually uploaded
        if (!isset($_FILES[$inputName]) || $_FILES[$inputName]['error'] === UPLOAD_ERR_NO_FILE) {
            return ['body' => 'Error: No file was uploaded.', 'status' => false];
        }

        // 2. Handle any upload errors reported by PHP
        if ($_FILES[$inputName]['error'] !== UPLOAD_ERR_OK) {
            switch ($_FILES[$inputName]['error']) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    return ['body' => 'Error: File size exceeds the maximum allowed.', 'status' => false];
                case UPLOAD_ERR_PARTIAL:
                    return ['body' => 'Error: File was only partially uploaded.', 'status' => false];
                case UPLOAD_ERR_NO_TMP_DIR:
                    return ['body' => 'Error: Missing a temporary folder.', 'status' => false];
                case UPLOAD_ERR_CANT_WRITE:
                    return ['body' => 'Error: Failed to write file to disk.', 'status' => false];
                case UPLOAD_ERR_EXTENSION:
                    return ['body' => 'Error: File upload stopped by extension.', 'status' => false];
                default:
                    return ['body' => 'Error: An unknown error occurred during upload.', 'status' => false];
            }
        }

        // 3.  Sanitize and Validate Filename & Extension
        $fileName = basename($_FILES[$inputName]['name']); // Get the original file name
        // $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $targetFile = $absoluteTargetDirectory . '/' . $fileName;


        // 4. Check File Size
        if ($_FILES[$inputName]['size'] > $maxFileSize) {
            return ['body' => 'Error: File size exceeds the maximum allowed.', 'status' => false];
        }

        // 5. Create the target directory if it doesn't exist
        if (!is_dir($absoluteTargetDirectory)) {
            if (!mkdir($absoluteTargetDirectory, 0777, true)) {
                return ['body' => 'Error: Failed to create the target directory.', 'status' => false];
            }
        }

        // 6. Move the uploaded file to its final destination
        if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $targetFile)) {
            return ['body' => str_replace(dirname(__DIR__) . '/Views/assiet/', '', $targetFile), 'status' => true];
        } else {
            return ['body' => 'Error Uploade.', 'status' => false];
        }
    }


    public function authGoogle(): void
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__) . '/../');
        $dotenv->load();
        $clientID = $_ENV['GOOGLE_CLIENT_ID'];
        $clientSecret = $_ENV['GOOGLE_CLIENT_SECRET'];
        $redirectUri = $_ENV['REDIRECTURL'];

        // Create Google Client
        $client = new Client;
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");

        if (!isset($_GET["code"])) {
            die("Error: No authorization code received.");
        }

        $token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

        if (isset($token['error'])) {
            die("Google OAuth Error: " . $token['error']);
        }

        if (!isset($token['access_token'])) {
            die("Error: Access token not received.");
        }

        $client->setAccessToken($token['access_token']);
        $google_oauth = new Google_Service_Oauth2($client);

        $google_account_info = $google_oauth->userinfo->get();
        $name = $google_account_info->name;
        $email = $google_account_info->email;
        $password = $google_account_info->id;
        $user = new User($email, $password, $name, '', '');

        //check if already has an account
        $ifHasAccount = $this->userModel->findUserByEmail($user = new User($email, $password));
        if ($ifHasAccount instanceof User) {
            $this->login($ifHasAccount);
        } else {
            $user = [
                'name' => $name,
                'email' => $email
            ];
            $this->view('auth/form', $user);

        }
    }

    public function generateGoogleURL()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__) . '/../');
        $dotenv->load();
        // Google OAuth credentials
        $clientID = $_ENV['CLIENTID'];
        $clientSecret = $_ENV['CLIENTSECRET'];
        $redirectUri = $_ENV['REDIRECTURL'];

        // Create Google Client
        $client = new Client;
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");

        return $client->createAuthUrl();
    }
}