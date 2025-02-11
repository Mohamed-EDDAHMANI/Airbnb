<?php
require dirname(__DIR__) . '/../../vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__).'/../../');
$dotenv->load();

$stripe_key_secret = $_ENV['STRIPE_SECRET_KEY'];
\Stripe\Stripe::setApiKey($stripe_key_secret);

$success_url = 'http://localhost';
$cancel_url = 'http://localhost/cancel';


$checkout_session = \Stripe\Checkout\Session::create([
    'mode' => 'payment',
    'success_url' => $success_url,
    'cancel_url' => $cancel_url,
    'line_items' => [[
        'quantity' => 1,
        'price_data' => [
            'currency' => 'usd',
            'unit_amount' => 2000,
            'product_data' => [
                'name' => 'dwayerzman',
                'description' => 'dar mazyana khas 4i li skon fiha '
            ],
        ],
    ]],
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
exit(); 

