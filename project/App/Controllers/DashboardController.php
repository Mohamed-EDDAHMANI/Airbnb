<?php
namespace App\Controllers;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

class DashboardController {
    public function index() {
        $loader = new FilesystemLoader(__DIR__ . '/../Views/');
        $twig = new Environment($loader);
        $twig->addFunction(new TwigFunction('FmyOwn', function($path){return '/Views/' . ltrim($path, '/');}
        ));
        echo $twig->render('admin/dashboard.twig', [
            'title' => 'Admin Dashboard',
            'username' => 'John Doe'
        ]);
    }
}