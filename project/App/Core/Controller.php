<?php
namespace App\Core;

class Controller {
    protected function view($view, $data = []) {
        // extract($data);
        include dirname(__DIR__)."/Views/$view.php";

    }

}
