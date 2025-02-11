<?php

$router->get('/home','HomeController@gethomePage');
// ---- on the get home page (Page with Auth)
// $router->get('/home/listAnnonce','HomeController@getAllAnnonce');
$router->get('/detailsAnnonce','HomeController@detailsAnnonce');
$router->get('/reservationPage','HomeController@getReservationPage');
$router->get('/reservationPage/reserve','HomeController@reserve');
$router->get('/myReservations','HomeController@myReservations');
$router->get('/myReservations/delete/{id}','HomeController@reservationsDelete');
$router->get('/payementPage','HomeController@getpayementPage');
$router->get('/payementPage/payer','HomeController@effectuerPayement');

//sans auth
$router->get('/index','HomeController@getIndexPage');
// ---- on the get index page (Page without Auth)
// $router->get('/index/listAnnonce','HomeController@listAnnonce');
$router->get('/index/getAllAnnonce','HomeController@getAllAnnonce');
$router->get('/index/getTopAnnonce','HomeController@getTopAnnonce');
$router->post('/index/getTopCommentaire','HomeController@getTopCommentaire');

$router->get('/admin', 'AdminController@adminDashboard');
$router->get('/admin/users', 'AdminController@getAllUsers');
$router->get('/admin/getAnnonces', 'AdminController@getAllAnnonces');
$router->get('/admin/statistiques', controller: 'AdminController@getStatistiques');
$router->get('/admin/getPopulairePropritaire', 'AdminController@getPopulairePropritaire');
$router->get('/admin/getRevenux', 'AdminController@getRevenux');
$router->post('/admin/validationAnnonce', 'AdminController@validationAnnonce');
$router->post('/admin/validationUser', 'AdminController@validationUser');
$router->post('/admin/delete/{id}', 'AdminController@deleteAnnonce');
$router->post('/admin/deleteCommentaires', 'AdminController@deleteCommentaires');
$router->post('/admin/gestionLitige', 'AdminController@gestionLitige');

$router->get(route: '/proprietaire', controller: 'proprietaireController@proprietaireDashboard');
$router->get(route: '/myAnnonces', controller: 'proprietaireController@getMyAnnonces');
$router->get(route: '/getAnnonceByid/{id}', controller: 'proprietaireController@getAnnonceByid');
$router->get(route: '/getReservations', controller: 'proprietaireController@getReservations');
$router->post('/createAnnonce', 'proprietaireController@createAnnonce');
$router->post('/deleteAnnonce/{id}', 'proprietaireController@deleteAnnonce');
$router->post('/UpdateAnnonce/{id}', 'proprietaireController@UpdateAnnonce');

$router->get('/login', 'AuthController@getLoginPage');
$router->post('/login', 'AuthController@postLoginPage');
$router->get('/login/google', 'AuthController@postLoginWithGoogle');

$router->get('/singUp', 'AuthController@getSingUpPage');
$router->post('/singUp', 'AuthController@postSingUpPage');

