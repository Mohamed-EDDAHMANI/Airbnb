<?php
namespace App\Core;

class Controller {
    protected function view($view, $data = []) {
        extract($data);
        
        require dirname(__DIR__) . "/views/$view.php";
    }
}
