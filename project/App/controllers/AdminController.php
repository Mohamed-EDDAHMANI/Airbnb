<?php
namespace App\Controllers;
use App\Models\PopulairePropritaireModel;
use App\Models\DeclarationModel;
use App\Models\StatisticsModel;
use App\Models\RevenuxModel;
use App\Models\AnnonceModel;
use App\Models\UserModel;
use App\Core\Controller;
use App\Core\Database;

class AdminController extends Controller {
    
    private $populairePropritaireModel;
    private $DeclarationModel;
    private $statisticsModel;
    private $revenuxModel;
    private $annonceModel;
    private $userModel;
    private $conn;

    public function __construct(){
        $this->populairePropritaireModel = new PopulairePropritaireModel($this->conn);
        $this->statisticsModel = new StatisticsModel($this->conn);
        $this->revenuxModel = new RevenuxModel($this->conn);
        $this->annonceModel = new AnnonceModel($this->conn);
        $this->DeclarationModel = new DeclarationModel();
        $this->userModel = new userModel();
        $this->conn = new Database();
    }
    public function Dashboard(){
        $this->view('admin/dashboard');
    }
    public function getAllUsers() {
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();
        $deletedUsers = $userModel->getDeletedUsers();
        $this->view('admin/proprelated/users', ['users' => $users, 
                                                'deletedUsers' => $deletedUsers,
                                               ]);
    }   
        public function toggleUserStatus(): void {
        if (isset($_POST['id'])) {
            $id = intval($_POST['id']);
            $this->userModel->toggleUserStatus($id);
            header('Location: /admin/');
        } else {
            echo "Invalid user ID.";
        }
        exit;
    }
    public function deleteUser(): void {
        if (isset($_POST['id'])) {
            $id = intval($_POST['id']);
            $result = $this->userModel->deleteUser($id);
            if ($result) {
                header('Location: /admin');
            } else {
                header('Location: /admin');
            }
        } else {
            header('Location: /admin/users?error=Invalid user ID');
        }
        exit;
    }
    public function permanentDeleteUser(): void {
        if (isset($_POST['id'])) {
            $id = intval($_POST['id']);
            $result = $this->userModel->permanentDeleteUser($id);
            if ($result) {
                header('Location: /admin');
            } else {
                header('Location: /admin');
            }
        } else {
            header('Location: /admin/users?error=Invalid user ID');
        }
        exit;
    }
     public function restoreUser(): void {
        if (isset($_POST['id'])) {
            $id = intval($_POST['id']);
            $this->userModel->restoreUser($id);
            header('Location: /admin');
        } else {
            echo "Invalid user ID.";
        }
        exit;
    }
    public function getAllAnnonces() {
        $annonces = $this->annonceModel->getAllAnnonces();
        $this->view('admin/proprelated/annonces', ['annonces' => $annonces]);
    }
    public function getStatistics() {
        $this->view('admin/proprelated/statistics');
    }
    public function getPopulairePropritaire() {
        $Owners=$this->populairePropritaireModel->getAllOwners();
        $this->view('admin/proprelated/populaire_propritaire' , ['Owners' => $Owners]);
    }
    public function getRevenux() {
        $Revenux=$this->revenuxModel->getRevenux();
        $this->view('admin/proprelated/revenus' , ['Revenux' => $Revenux]);
    }
    public function validationAnnonce(): void {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $this->annonceModel->validateAnnonce($id);
            $this->view('/admin/proprelated/annonces');
        }
    }
    public function deleteAnnonce(int $id): void {
        $result = $this->annonceModel->deleteAnnonceById($id);
        if ($result) {
            header('Location: /admin/annonces?success=succès');
        } else {
            header('Location: /admin/annonces?error=Échec');
        }
        exit;
    }    
    public function deleteCommentaires(): void {
        if (isset($_POST['commentaire_id'])) {
            $commentaireId = $_POST['commentaire_id'];
            $result = $this->annonceModel->deleteCommentaireById($commentaireId);
            if ($result) {
                header('Location: /admin/statistiques?success=succès');
            } else {
                header('Location: /admin/statistiques?error=Échec');
            }
        }exit;
    }
    public function gestionLitige(): void {
        if (isset($_POST['litige_id'])) {
            $litigeId = $_POST['litige_id'];
            $result = $this->DeclarationModel->resoudreLitige($litigeId);
            if ($result) {
                header('Location: /admin/statistiques?success=succès');
            } else {
                header('Location: /admin/statistiques?error=Échec');
            }
        } exit;
    }
}