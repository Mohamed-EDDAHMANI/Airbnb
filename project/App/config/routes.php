<?php

$router->get('listAnnonce','HomeController@getAllAnnonce');
$router->get('home','HomeController@getTopAnnonce');
$router->post('home','HomeController@getTopCommentaire');

$router->get('/admin/users', 'AdminController@getAllUsers');
$router->get('/admin/delete/{id}', 'AdminController@getAllAnnonces');
$router->get('admin', 'AdminController@getStatistiques');
$router->get('admin', 'AdminController@getPopulairePropritaire');
$router->get('admin', 'AdminController@getRevenux');
$router->post('admin', 'AdminController@validationAnnonce');
$router->post('admin', 'AdminController@validationUser');
$router->post('admin', 'AdminController@deleteAnnonce');
$router->post('admin', 'AdminController@deleteCommentaires');
$router->post('admin', 'AdminController@gestionLitige');

$router->get('proprietaire', 'proprietaireController@');
$router->post('proprietaire', 'proprietaireController');

$router->get('login', 'AuthController@getLoginPage');
$router->post('login', 'AuthController@postLoginPage');

$router->get('singUp', 'AuthController@getSingUpPage');
$router->post('singUp', 'AuthController@postSingUpPage');