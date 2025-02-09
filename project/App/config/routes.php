<?php
use App\Controllers\DashboardController;

$routes = [
    '/' => 'HomeController@index',
    '/admin/dashboard' => 'DashboardController@index',
];