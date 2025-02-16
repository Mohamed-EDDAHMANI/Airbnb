<?php
require dirname(__DIR__) . '/../../vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__) . '/../../');
$dotenv->load();

$stripe_key_secret = $_ENV['STRIPE_SECRET_KEY'];
\Stripe\Stripe::setApiKey($stripe_key_secret);

if (!isset($_POST['bookingData'])) {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Erreur de réservation</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
            <h2 class="text-2xl font-bold text-red-600 mb-4">Erreur de réservation</h2>
            <p class="text-gray-600 mb-6">Les données de réservation sont manquantes ou invalides.</p>
            <a href="javascript:history.back()" 
               class="block w-full text-center bg-[#FF385C] text-white py-3 rounded-lg font-medium hover:bg-[#FF385C]/90 transition-colors">
                Retour à la réservation
            </a>
        </div>
    </body>
    </html>
    <?php
    exit();
}

try {
    $bookingData = json_decode($_POST['bookingData'], true);
    
    if (!$bookingData || !isset($bookingData['total']) || $bookingData['total'] <= 0) {
        throw new Exception('Données de réservation invalides');
    }

    $checkout_session = \Stripe\Checkout\Session::create([
        'mode' => 'payment',
        'success_url' => 'http://localhost/success',
        'cancel_url' => 'http://localhost/cancel',
        'line_items' => [[
            'quantity' => 1,
            'price_data' => [
                'currency' => 'mad',
                'unit_amount' => (int)($bookingData['total'] * 100),
                'product_data' => [
                    'name' => 'Réservation Villa de Luxe',
                    'description' => sprintf(
                        "Arrivée: %s, Départ: %s, Voyageurs: %d",
                        $bookingData['arrivalDate'],
                        $bookingData['departureDate'],
                        $bookingData['guests']
                    )
                ],
            ],
        ]]
    ]);

    header("HTTP/1.1 303 See Other");
    header("Location: " . $checkout_session->url);
    exit();

} catch (Exception $e) {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Erreur de paiement</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
            <h2 class="text-2xl font-bold text-red-600 mb-4">Erreur de paiement</h2>
            <p class="text-gray-600 mb-6">Une erreur est survenue lors du traitement de votre paiement. Veuillez réessayer.</p>
            <a href="javascript:history.back()" 
               class="block w-full text-center bg-[#FF385C] text-white py-3 rounded-lg font-medium hover:bg-[#FF385C]/90 transition-colors">
                Retour à la réservation
            </a>
        </div>
    </body>
    </html>
    <?php
    exit();
}
?>