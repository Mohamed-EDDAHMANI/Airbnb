<?php
namespace App\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller {
    protected $twig;

    public function __construct() {
        $loader = new FilesystemLoader(__DIR__ . '/../Views');
        $this->twig = new Environment($loader);
    }
    protected function render($template, $data = []) {
        echo $this->twig->render($template, $data);
    }
}