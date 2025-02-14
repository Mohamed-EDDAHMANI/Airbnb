<?php

$router->get('/','UserController@gethomePage');
// ---- on the get home page (Page with Auth)
// $router->get('/home/listAnnonce','UserController@getAllAnnonce');
$router->get('/detailsAnnonce','UserController@detailsAnnonce');
$router->get('/reservation','UserController@getReservationPage');
$router->get('/reservation/reserver','UserController@reserver');
$router->get('/myReservations','UserController@myReservations');
$router->get('/myReservations/delete/{id}','UserController@reservationsDelete');
$router->get('/checkout','UserController@getpayementPage');
$router->get('/success','UserController@getSuccessPage');
$router->get('/cancel','UserController@getCancelPage');
$router->get('/pageAnnonces','UserController@getAllAnnoncePage');
$router->get('/conversation','UserController@getConversationPage');
$router->get('/myHistoriques','UserController@getHistoriquePage');
$router->get('/payementPage/payer','UserController@effectuerPayement');

//sans auth
$router->get('/index','UserController@getIndexPage');
// ---- on the get index page (Page without Auth)
// $router->get('/index/listAnnonce','UserController@listAnnonce');
$router->get('/index/getAllAnnonce','UserController@getAllAnnonce');
$router->get('/index/getTopAnnonce','UserController@getTopAnnonce');
$router->post('/index/getTopCommentaire','UserController@getTopCommentaire');

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

$router->get('login', 'AuthController@getLoginPage');
$router->post('login', 'AuthController@postLoginPage');

$router->get('singUp', 'AuthController@getSingUpPage');
$router->post('singUp', 'AuthController@postSingUpPage');

