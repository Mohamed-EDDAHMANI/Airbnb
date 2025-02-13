<?php
namespace App\Core;

class Controller {
    protected function view($view, $data = []) {
        extract($data);
        require __DIR__ . "/../Views/$view.php";
    }
    protected function viewAdmin($view) {
        require __DIR__ . "/../Views/admin/proprelated/$view.php";
    }
    protected function redirect(string $url): void {
        header("Location: $url");
        exit;
    }
}