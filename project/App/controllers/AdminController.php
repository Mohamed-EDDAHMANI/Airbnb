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
        require_once __DIR__ . "/../Views/admin/dashboard.php";
    }    
    public function getAllUsers(): void {
        $users = $this->userModel->getAllUsers();
        $this->view('admin/users', [
            'title' => 'All Users',
            'users' => $users
        ]);
    }
    public function getAllAnnonces(): void {
        $annonces = $this->annonceModel->getAllAnnonces();
        $this->view('admin/annonces', [
            'title' => 'All Annonces',
            'annonces' => $annonces
        ]);
    }
    public function getStatistics(): void {
        $statistics = $this->statisticsModel->getStatistics();
        $this->view('admin/statistiques', [
            'title' => 'Statistics',
            'statistics' => $statistics
        ]);
    }
    public function getPopulairePropritaire(): void {
        $popularOwners = $this->populairePropritaireModel->getPopularOwners();
            $this->view('admin/populaire_propritaire', [
            'title' => 'Popular Owners',
            'owners' => $popularOwners
        ]);
    }
    public function getRevenux(): void {
        $revenus = $this->revenuxModel->getRevenues();
        $this->view('admin/revenus', [
            'title' => 'Revenues',
            'revenus' => $revenus
        ]);
    }
    public function validationAnnonce(): void {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $this->annonceModel->validateAnnonce($id);
            $this->redirect('/admin/getAllAnnonces');
        }
    }
    public function validationUser(): void {
        if (isset($_POST['id'])) {
            $id = intval($_POST['id']);
            $this->userModel->validateUser($id);
            echo "User validation status updated successfully.";
        } else {
            echo "Invalid user ID.";
        }
    }
    public function deleteAnnonce(int $id): void {
        $result = $this->annonceModel->deleteAnnonceById($id);
        if ($result) {
            header('Location: /admin/getAllAnnonces?success=succès');
        } else {
            header('Location: /admin/getAllAnnonces?error=Échec');
        }
        exit;
    }    
    public function deleteCommentaires(): void {
        if (isset($_POST['commentaire_id'])) {
            $commentaireId = $_POST['commentaire_id'];
            $result = $this->annonceModel->deleteCommentaireById($commentaireId);
            if ($result) {
                header('Location: /admin/getStatistiques?success=succès');
            } else {
                header('Location: /admin/getStatistiques?error=Échec');
            }
        }exit;
    }
    public function gestionLitige(): void {
        if (isset($_POST['litige_id'])) {
            $litigeId = $_POST['litige_id'];
            $result = $this->DeclarationModel->resoudreLitige($litigeId);
            if ($result) {
                header('Location: /admin/getStatistiques?success=succès');
            } else {
                header('Location: /admin/getStatistiques?error=Échec');
            }
        } exit;
    }
}