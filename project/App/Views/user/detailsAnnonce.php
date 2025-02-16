<?php
// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Récupération des données
//     $property_id = isset($_POST['property_id']) ? htmlspecialchars($_POST['property_id']) : null;
//     $category_id = isset($_POST['category_id']) ? htmlspecialchars($_POST['category_id']) : null;

//     if ($property_id) {
//         // Détails d'une propriété spécifique
//         $title = htmlspecialchars($_POST['title']);
//         $location = htmlspecialchars($_POST['location']);
//         $price = htmlspecialchars($_POST['price']);
//         $rating = htmlspecialchars($_POST['rating']);
//         $bedrooms = htmlspecialchars($_POST['bedrooms']);
//         $bathrooms = htmlspecialchars($_POST['bathrooms']);
//         $image = htmlspecialchars($_POST['image']);
//         $photos_count = htmlspecialchars($_POST['photos_count']);
//         $has_virtual_tour = htmlspecialchars($_POST['has_virtual_tour']);
//     } 
//     elseif ($category_id) {
//         // Détails d'une catégorie
//         $category_name = htmlspecialchars($_POST['category_name']);
//         $price_from = htmlspecialchars($_POST['price_from']);
//         $image = htmlspecialchars($_POST['image']);
//     }
//     else {
//         // Redirection si aucune donnée valide
//         header("Location: /");
//         exit();
//     }
// } else {
//     // Redirection si accès direct
//     header("Location: /");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb - Luxueux Appartement avec Vue Panoramique</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF385C;
        }

        .text-primary {
            color: var(--primary-color);
        }

        .bg-primary {
            background-color: var(--primary-color);
        }

        .hover\:bg-primary-dark:hover {
            background-color: #E31C5F;
        }

        .border-primary {
            border-color: var(--primary-color);
        }

        .image-gallery {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 16px;
            height: 450px;
        }

        .image-gallery-main {
            grid-row: span 2;
        }

        .image-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

        .image-gallery img:hover {
            transform: scale(1.02);
        }

        .amenity-item {
            transition: all 0.3s ease;
        }

        .amenity-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .date-picker-custom {
            background-color: white;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            padding: 0.5rem;
            width: 100%;
        }

        .price-animation {
            animation: priceUpdate 0.3s ease;
        }

        @keyframes priceUpdate {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .loading-spinner {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="bg-gray-50 font-sans antialiased">
    <!-- Header -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <a href="/" class="text-[#FF385C] text-2xl font-bold flex items-center space-x-2" aria-label="Homepage">
                    <svg class="mx-auto h-8 w-auto" viewBox="0 0 1991.3 2159.5" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1851.5 1841.1c-230.9-183.9-454.5-357.5-656.4-524.5-93.6-77.4-178.1-156.4-247.1-247.6-48.9-65.4-88.9-136.4-114.5-212.7-32.5-96.5-43.6-197.4-35.8-298.5 9.2-117.3 48.4-230.8 113.5-325.4 90.5-129.8 230.4-224.3 387.4-255.5 76.6-15.7 156.9-16.5 234.5-2.2 87.4 16.1 170.2 54.4 239.8 112.5 56.1 46.7 103.4 104.5 137.9 168.6 20.4 37.8 36.3 77.7 47.5 118.5 15.3 56.1 22.8 114.2 22.4 172.4-.6 102.8-24.7 204.9-69.1 297.5-44.8 93.5-109.1 176.9-187.5 244.7 27.9 52.6 63.9 100.7 104.7 142.7 42.5 44.1 89.9 83.1 138.4 119.5 185.9 139.9 386.6 256.6 572.5 395.1 18.5 13.6 30.5 34.5 32.6 57.1 2.1 22.6-5.9 45-22.1 61l-210.9 210.9c-16.9 16.9-42.1 23.4-65.4 16.7-23.3-6.7-42.1-24.4-49.9-47.4z"
                            fill="#FF385C" />
                        <path
                            d="M1406.9 1144.7c36.9-52.6 66.1-109.5 86.5-169.1 40.8-118.2 47.5-247.3 19.4-370.4-27.5-120.1-87.5-230.4-175.9-316.4-76.1-74.5-172.6-127.4-275.8-153.9-131.6-33.7-272.9-19.5-398.3 41.4-102.5 49.5-190.5 127.4-253.1 223.1-64.5 98.7-99.6 214.1-100.2 331.5-.6 117.3 33.1 233.4 96.5 332.5 44.6 69.7 103.4 129.5 170.6 175.5 38.1 25.8 78.5 47.5 121 64.8 48.9-48.3 93.1-100.5 130.6-156.2-75.1-34.5-139.7-87.5-187.5-155.1-64.5-92-94.8-204.1-86-316.4 8.8-112.3 54.4-220.3 129.5-303.8 85.9-96.5 210.3-151.7 338.7-151.7 128.4 0 252.8 55.2 338.7 151.7 75.1 83.5 120.7 191.5 129.5 303.8 8.8 112.3-21.5 224.4-86 316.4-47.8 67.6-112.4 120.6-187.5 155.1 37.5 55.7 81.7 107.9 130.6 156.2 42.5-17.3 82.9-39 121-64.8 67.2-46 126-105.8 170.6-175.5z"
                            fill="#fff" />
                    </svg>
                    <span>Airbnb</span>
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="#destinations" class="text-gray-600 hover:text-gray-900">Destinations</a>
                    <a href="#experiences" class="text-gray-600 hover:text-gray-900">Expériences</a>
                    <a href="#contact" class="text-gray-600 hover:text-gray-900">Contact</a>
                    <a href="#about" class="text-gray-600 hover:text-gray-900">À propos</a>
                </div>

                <div class="flex items-center space-x-4">
                    <button class="hidden md:block hover:bg-gray-100 px-4 py-2 rounded-full border border-gray-300"
                        aria-label="Become a host">
                        Devenir hôte
                    </button>
                    <button class="hover:bg-gray-100 p-2 rounded-full" aria-label="Change language">
                        <i class="fas fa-globe"></i>
                    </button>
                    <div class="relative">
                        <button id="userMenuBtn"
                            class="flex items-center space-x-2 border rounded-full p-2 hover:shadow-md"
                            aria-label="Open user menu">
                            <i class="fas fa-bars"></i>
                            <i class="fas fa-user-circle text-2xl text-gray-600"></i>
                        </button>
                        <div id="userMenu"
                            class="hidden absolute right-0 mt-2 bg-white rounded-xl shadow-xl border p-4 w-64">
                            <div class="space-y-3">
                                <a href="#" class="block hover:bg-gray-100 px-4 py-2 rounded-lg font-medium">
                                    <i class="fas fa-user-plus mr-2"></i> S'inscrire
                                </a>
                                <a href="#" class="block hover:bg-gray-100 px-4 py-2 rounded-lg"
                                    onclick="openLoginModal()">
                                    <i class="fas fa-sign-in-alt mr-2"></i> Se connecter
                                </a>
                                <hr>
                                <a href="/myHistoriques" class="block hover:bg-gray-100 px-4 py-2 rounded-lg">
                                    <i class="fas fa-home mr-2"></i> MyHistoriques
                                </a>
                                <a href="#" class="block hover:bg-gray-100 px-4 py-2 rounded-lg">
                                    <i class="fas fa-heart mr-2"></i> Favoris
                                </a>
                                <a href="#" class="block hover:bg-gray-100 px-4 py-2 rounded-lg">
                                    <i class="fas fa-question-circle mr-2"></i> Aide
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto py-8 px-4 max-w-7xl">
        <div class="mb-6">
            <br>
            <br>
            <br>
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Luxueux Appartement avec Vue Panoramique</h1>
            <div class="flex items-center text-gray-600 space-x-4">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt text-primary"></i>
                    <span>Paris, Le Marais, France</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-star text-primary"></i>
                    <span>4.97 (286 avis)</span>
                </div>
            </div>
        </div>

        <!-- Image Gallery -->
        <div class="image-gallery mb-8" id="imageGallery">
            <div class="image-gallery-main">
                <img src="../../../assets/images/3.jpg" alt="Vue principale" class="cursor-pointer">
            </div>
            <div>
                <img src="../../../assets/images/4.jpg" alt="Salon" class="cursor-pointer">
            </div>
            <div>
                <img src="../../../assets/images/5.jpg" alt="Chambre" class="cursor-pointer">
            </div>
            <div>
                <img src="../../../assets/images/8.jpg" alt="Salon" class="cursor-pointer">
            </div>
            <div>
                <img src="../../../assets/images/9.jpg" alt="Chambre" class="cursor-pointer">
            </div>
        </div>

        <!-- Property Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column -->
            <div class="lg:col-span-2">
                <!-- Property Overview -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold mb-4">Appartement entier</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-white p-4 rounded-xl shadow-md text-center hover:shadow-lg transition-shadow">
                            <i class="fas fa-users text-2xl mb-2 text-primary"></i>
                            <p class="font-medium">6 voyageurs</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl shadow-md text-center hover:shadow-lg transition-shadow">
                            <i class="fas fa-bed text-2xl mb-2 text-primary"></i>
                            <p class="font-medium">3 chambres</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl shadow-md text-center hover:shadow-lg transition-shadow">
                            <i class="fas fa-bath text-2xl mb-2 text-primary"></i>
                            <p class="font-medium">2 salles de bain</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl shadow-md text-center hover:shadow-lg transition-shadow">
                            <i class="fas fa-expand text-2xl mb-2 text-primary"></i>
                            <p class="font-medium">85m²</p>
                        </div>
                    </div>
                </section>

                <!-- Description -->
                <section class="mb-8 border-t pt-6">
                    <h2 class="text-2xl font-bold mb-4">Description</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Magnifique appartement de 85m² situé au cœur de Paris, offrant une vue imprenable sur la ville.
                        Récemment rénové avec des matériaux haut de gamme, cet espace lumineux combine élégance
                        parisienne et confort moderne. Idéal pour les familles ou groupes d'amis cherchant une
                        expérience parisienne authentique et luxueuse.
                    </p>
                </section>

                <!-- Amenities -->
                <section class="mb-8 border-t pt-6">
                    <h2 class="text-2xl font-bold mb-4">Équipements</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4" id="amenitiesGrid"></div>
                </section>

                <!-- Location -->
                <section class="border-t pt-6">
                    <h2 class="text-2xl font-bold mb-4">Autres Details :</h2>
                    <div class="mb-4">
                        <img src="../../../assets/images/6.jpg" alt="Carte" class="w-full h-96 object-cover rounded-xl">
                    </div>
                    <div class="grid grid-cols-2 gap-4" id="attractionsGrid"></div>
                </section>
            </div>

            <!-- Booking Column -->
            <div class="lg:sticky lg:top-8 h-fit">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <span class="text-2xl font-bold">450 DH</span>
                            <span class="text-gray-600">/nuit</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <span class="font-medium">4.9</span>
                            <span class="text-gray-600 ml-1">(128 avis)</span>
                        </div>
                    </div>

                    <form id="bookingForm" class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="arrivalDate"
                                    class="block text-sm font-medium text-gray-700 mb-1">Arrivée</label>
                                <input type="text" id="arrivalDate" name="arrivalDate"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#FF385C] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label for="departureDate"
                                    class="block text-sm font-medium text-gray-700 mb-1">Départ</label>
                                <input type="text" id="departureDate" name="departureDate"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#FF385C] focus:border-transparent"
                                    required>
                            </div>
                        </div>

                        <div>
                            <label for="guests" class="block text-sm font-medium text-gray-700 mb-1">Voyageurs</label>
                            <select id="guests" name="guests"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#FF385C] focus:border-transparent">
                                <option value="1">1 voyageur</option>
                                <option value="2">2 voyageurs</option>
                                <option value="3">3 voyageurs</option>
                                <option value="4">4 voyageurs</option>
                                <option value="5">5 voyageurs</option>
                                <option value="6">6 voyageurs</option>
                                <option value="7">7 voyageurs</option>
                                <option value="8">8 voyageurs</option>
                            </select>
                        </div>

                        <div class="border-t pt-4">
                            <div class="space-y-2" id="priceDetails">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">450 DH x <span id="nightsCount">0</span> nuits</span>
                                    <span id="subtotal">0 DH</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Frais de ménage</span>
                                    <span>80 DH</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Frais de service</span>
                                    <span id="serviceFee">0 DH</span>
                                </div>
                            </div>
                            <div class="border-t mt-4 pt-4 flex justify-between font-bold">
                                <span>Total</span>
                                <span id="totalPrice">0 DH</span>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full bg-[#FF385C] text-white py-3 rounded-lg font-medium hover:bg-[#FF385C]/90 transition-colors">
                            Réserver
                        </button>
                    </form>
                </div>

                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center space-x-4">
                        <img src="/api/placeholder/60/60" alt="Host" class="w-16 h-16 rounded-full">
                        <div>
                            <h3 class="font-bold">Pierre Dubois</h3>
                            <p class="text-gray-600">Hôte depuis 2019</p>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-star text-[#FF385C]"></i>
                            <span>4.9 sur 5 (128 avis)</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-medal text-[#FF385C]"></i>
                            <span>Superhôte</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-clock text-[#FF385C]"></i>
                            <span>Taux de réponse : 100%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Confirmation Modal -->
    <!-- <div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 hidden">
        <div class="bg-white rounded-xl p-6 max-w-md w-full">
            <div class="text-center">
                <i class="fas fa-check-circle text-6xl text-primary mb-4"></i>
                <h3 class="text-2xl font-bold mb-4">Réservation confirmée !</h3>
                <div class="bg-gray-100 p-4 rounded-xl mb-4">
                    <div class="flex items-center space-x-4">
                        <img src="../../../assets/images/3.jpg" alt="Appartement" class="w-24 h-24 object-cover rounded-lg">
                        <div class="text-left">
                            <h4 class="font-bold">Luxueux Appartement</h4>
                            <p class="text-gray-600" id="modalBookingDetails"></p>
                            <p class="text-primary font-bold mt-2" id="modalTotalPrice"></p>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="closeModalBtn" class="w-full border border-[#FF385C] text-[#FF385C] py-3 rounded-md transition-colors">
                        Fermer
                    </button>
                    <button class="w-full bg-primary text-white py-3 rounded-md hover:bg-primary-dark transition-colors">
                        <a href="/checkout">
                            continue payment
                        </a>
                    </button>
                </div>
                
            </div>
        </div>
    </div> -->

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-full p-4">
            <div class="loading-spinner w-12 h-12 border-4 border-primary border-t-transparent rounded-full"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Enhanced price calculation
        const NIGHTLY_RATE = 189;
        const CLEANING_FEE = 50;
        const SERVICE_FEE_PERCENTAGE = 0.12;

        // Datepicker initialization with enhanced configuration
        const datePickerConfig = {
            dateFormat: "Y-m-d",
            minDate: "today",
            locale: {
                firstDayOfWeek: 1,
                weekdays: {
                    shorthand: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
                    longhand: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"]
                },
                months: {
                    shorthand: ["Jan", "Fév", "Mar", "Avr", "Mai", "Juin", "Juil", "Août", "Sept", "Oct", "Nov", "Déc"],
                    longhand: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"]
                }
            },
            onChange: function (selectedDates, dateStr, instance) {
                if (instance.element.id === 'arrivalDate') {
                    departureDatePicker.set('minDate', dateStr);
                }
                updatePriceBreakdown();
                validateForm();
            }
        };

        const arrivalDatePicker = flatpickr("#arrivalDate", datePickerConfig);
        const departureDatePicker = flatpickr("#departureDate", datePickerConfig);

        // Guest select population with animation
        const guestSelect = document.getElementById('guestSelect');
        for (let i = 1; i <= 6; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = `${i} Voyageur${i > 1 ? 's' : ''}`;
            guestSelect.appendChild(option);
        }

        // Price calculation functions
        function calculateNights(arrival, departure) {
            if (!arrival || !departure) return 0;
            const oneDay = 24 * 60 * 60 * 1000;
            return Math.round((new Date(departure) - new Date(arrival)) / oneDay);
        }

        function calculateTotalPrice(nights) {
            const subtotal = nights * NIGHTLY_RATE;
            const serviceFee = Math.round(subtotal * SERVICE_FEE_PERCENTAGE);
            return {
                subtotal,
                serviceFee,
                total: subtotal + CLEANING_FEE + serviceFee
            };
        }

        function updatePriceBreakdown() {
            const arrival = document.getElementById('arrivalDate').value;
            const departure = document.getElementById('departureDate').value;
            const nights = calculateNights(arrival, departure);

            if (nights > 0) {
                const { subtotal, serviceFee, total } = calculateTotalPrice(nights);

                document.getElementById('nightCount').textContent = nights;
                document.getElementById('subtotal').textContent = `${subtotal}€`;
                document.getElementById('serviceFee').textContent = `${serviceFee}€`;
                document.getElementById('totalPrice').textContent = `${total}€`;

                document.getElementById('priceBreakdown').classList.remove('hidden');
                document.getElementById('totalPrice').classList.add('price-animation');
                setTimeout(() => {
                    document.getElementById('totalPrice').classList.remove('price-animation');
                }, 300);
            } else {
                document.getElementById('priceBreakdown').classList.add('hidden');
            }
        }

        // Form validation with visual feedback
        function validateForm() {
            const arrivalDate = document.getElementById('arrivalDate').value;
            const departureDate = document.getElementById('departureDate').value;
            const guestCount = document.getElementById('guestSelect').value;
            const bookButton = document.getElementById('bookButton');

            if (arrivalDate && departureDate && guestCount) {
                bookButton.disabled = false;
                bookButton.classList.remove('opacity-50');
                return true;
            } else {
                bookButton.disabled = true;
                bookButton.classList.add('opacity-50');
                return false;
            }
        }

        // Amenities with enhanced interaction
        const amenities = [
            {
                name: 'Wifi',
                description: 'Connexion internet haut débit',
                icon: 'fas fa-wifi'
            },
            {
                name: 'Cuisine équipée',
                description: 'Pour préparer vos repas',
                icon: 'fas fa-utensils'
            },
            {
                name: 'Télévision',
                description: 'Avec chaînes internationales',
                icon: 'fas fa-tv'
            },
            {
                name: 'Climatisation',
                description: 'Pour votre confort',
                icon: 'fas fa-wind'
            },
            {
                name: 'Lave-linge',
                description: 'Machine à laver dans l\'appartement',
                icon: 'fas fa-tshirt'
            },
            {
                name: 'Fer à repasser',
                description: 'Disponible sur demande',
                icon: 'fas fa-archive'
            }
        ];

        // Populate amenities with animation
        const amenitiesGrid = document.getElementById('amenitiesGrid');
        amenities.forEach((amenity, index) => {
            const amenityItem = document.createElement('div');
            amenityItem.classList.add(
                'amenity-item',
                'bg-white',
                'p-4',
                'rounded-xl',
                'shadow-md',
                'flex',
                'items-center',
                'space-x-4',
                'opacity-0',
                'transform',
                'translate-y-4'
            );

            amenityItem.innerHTML = `
                <div class="bg-pink-100 p-3 rounded-full">
                    <i class="${amenity.icon} text-primary text-xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800">${amenity.name}</h3>
                    <p class="text-gray-600 text-sm">${amenity.description}</p>
                </div>
            `;

            amenitiesGrid.appendChild(amenityItem);

            // Animate amenities appearance
            setTimeout(() => {
                amenityItem.classList.remove('opacity-0', 'translate-y-4');
                amenityItem.classList.add('transition-all', 'duration-500');
            }, index * 100);
        });

        // Attractions near the property
        const attractions = [
            {
                name: 'Tour Eiffel',
                distance: '5 km',
                icon: 'fas fa-monument'
            },
            {
                name: 'Musée du Louvre',
                distance: '2 km',
                icon: 'fas fa-university'
            },
            {
                name: 'Notre-Dame',
                distance: '3 km',
                icon: 'fas fa-church'
            },
            {
                name: 'Champs-Élysées',
                distance: '4 km',
                icon: 'fas fa-shopping-bag'
            }
        ];

        // Populate attractions with hover effects
        const attractionsGrid = document.getElementById('attractionsGrid');
        attractions.forEach(attraction => {
            const attractionItem = document.createElement('div');
            attractionItem.classList.add(
                'bg-white',
                'p-4',
                'rounded-xl',
                'shadow-md',
                'flex',
                'items-center',
                'space-x-4',
                'hover:shadow-lg',
                'transition-all',
                'duration-300',
                'transform',
                'hover:-translate-y-1'
            );

            attractionItem.innerHTML = `
                <div class="bg-pink-100 p-3 rounded-full">
                    <i class="${attraction.icon} text-primary text-xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800">${attraction.name}</h3>
                    <p class="text-gray-600 text-sm">${attraction.distance}</p>
                </div>
            `;

            attractionsGrid.appendChild(attractionItem);
        });

        // Enhanced booking form submission
        const bookingForm = document.getElementById('bookingForm');
        const confirmationModal = document.getElementById('confirmationModal');
        const modalBookingDetails = document.getElementById('modalBookingDetails');
        const modalTotalPrice = document.getElementById('modalTotalPrice');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const loadingOverlay = document.getElementById('loadingOverlay');

        bookingForm.addEventListener('submit', function (event) {
            event.preventDefault();
            if (!validateForm()) return;

            const arrivalDate = document.getElementById('arrivalDate').value;
            const departureDate = document.getElementById('departureDate').value;
            const guestCount = document.getElementById('guestSelect').value;
            const totalPrice = document.getElementById('totalPrice').textContent;

            loadingOverlay.classList.remove('hidden');

            // Simulate API call
            setTimeout(() => {
                loadingOverlay.classList.add('hidden');

                modalBookingDetails.textContent = `${arrivalDate} - ${departureDate} · ${guestCount} voyageur(s)`;
                modalTotalPrice.textContent = `Total: ${totalPrice}`;

                confirmationModal.classList.remove('hidden');
                confirmationModal.querySelector('.bg-white').classList.add('animate-bounce');

                setTimeout(() => {
                    confirmationModal.querySelector('.bg-white').classList.remove('animate-bounce');
                }, 1000);

                bookingForm.reset();
                document.getElementById('priceBreakdown').classList.add('hidden');
                validateForm();
            }, 1500);
        });

        // Modal handling
        closeModalBtn.addEventListener('click', () => {
            confirmationModal.classList.add('hidden');
        });

        confirmationModal.addEventListener('click', (event) => {
            if (event.target === confirmationModal) {
                confirmationModal.classList.add('hidden');
            }
        });

        // Image gallery interaction
        const imageGallery = document.getElementById('imageGallery');
        imageGallery.querySelectorAll('img').forEach(img => {
            img.addEventListener('click', function () {
                this.classList.toggle('scale-105');
                setTimeout(() => {
                    this.classList.remove('scale-105');
                }, 200);
            });
        });
    </script>
</body>

</html>