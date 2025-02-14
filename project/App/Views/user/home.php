<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Location de maisons et appartements partout en France. Trouvez le logement idéal pour vos vacances ou déplacements.">
    <title>Location de Maisons - Votre Chez-Vous Partout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.7/swiper-bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.7/swiper-bundle.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1920/1080');
            background-size: cover;
            background-position: center;
        }

        .category-card:hover .category-image {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        .swiper {
            width: 100%;
            height: 400px;
        }

        .property-card:hover .property-image {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }

        .animate-blob {
            animation: blobAnimation 7s infinite;
        }

        @keyframes blobAnimation {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            25% {
                transform: translate(20px, -10px) scale(1.1);
            }

            50% {
                transform: translate(0px, 20px) scale(0.9);
            }

            75% {
                transform: translate(-20px, -10px) scale(1.2);
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Enhanced Navigation Bar -->
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

                <!-- Enhanced Navigation Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#featured" class="text-gray-600 hover:text-gray-900">Découvrir</a>
                    <a href="#destinations" class="text-gray-600 hover:text-gray-900">Destinations</a>
                    <a href="#experiences" class="text-gray-600 hover:text-gray-900">Expériences</a>
                    <a href="#contact" class="text-gray-600 hover:text-gray-900">Contact</a>
                    <a href="#about" class="text-gray-600 hover:text-gray-900">À propos</a>
                </div>

                <!-- Enhanced User Menu -->
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
                        <!-- Enhanced Dropdown Menu -->
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
                                <a href="#" class="block hover:bg-gray-100 px-4 py-2 rounded-lg">
                                    <i class="fas fa-home mr-2"></i> Historique
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

    <!-- Enhanced Hero Section -->
    <section class="hero-section h-screen flex items-center justify-center text-white relative overflow-hidden">

        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="../../../assets/images/3.jpg" alt="Vue de logements"
                class="w-full h-full object-cover object-center" loading="lazy">
            <!-- <div class="absolute inset-0 bg-gradient-to-br from-gray-900/60 to-red-500/60"></div> -->
        </div>

        <div class="max-w-4xl mx-auto text-center px-4 relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in">
                Découvrez Votre Prochaine Aventure
            </h1>
            <p class="text-xl mb-8 animate-fade-in delay-100">
                Trouvez des locations uniques pour des séjours mémorables.
            </p>

            <!-- Enhanced Search Bar -->
            <div class="bg-white rounded-full shadow-xl p-2 md:p-3 lg:p-4 animate-fade-in delay-200">
                <form class="flex flex-wrap md:flex-nowrap items-center" action="#" method="GET">

                    <div class="w-full md:w-1/4 px-2 py-1">
                        <label for="destination" class="sr-only">Destination</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="fas fa-map-marker-alt text-gray-400"></i>
                            </div>
                            <input type="text" id="destination" name="destination"
                                class="block w-full pl-10 py-3 md:py-2 lg:py-3 text-gray-900 rounded-full border border-gray-300 focus:ring-red-500 focus:border-red-500 text-sm md:text-base"
                                placeholder="Où souhaitez-vous aller ?" required>
                        </div>
                    </div>

                    <div class="w-full md:w-1/4 px-2 py-1">
                        <label for="arrivalDate" class="sr-only">Arrivée</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="far fa-calendar-alt text-gray-400"></i>
                            </div>
                            <input type="text" id="arrivalDate" name="arrivalDate"
                                class="block w-full pl-10 py-3 md:py-2 lg:py-3 text-gray-900 rounded-full border border-gray-300 flatpickr-input focus:ring-red-500 focus:border-red-500 text-sm md:text-base"
                                placeholder="Date d'arrivée" readonly="readonly" required>
                        </div>
                    </div>

                    <div class="w-full md:w-1/4 px-2 py-1">
                        <label for="departureDate" class="sr-only">Départ</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="far fa-calendar-alt text-gray-400"></i>
                            </div>
                            <input type="text" id="departureDate" name="departureDate"
                                class="block w-full pl-10 py-3 md:py-2 lg:py-3 text-gray-900 rounded-full border border-gray-300 flatpickr-input focus:ring-red-500 focus:border-red-500 text-sm md:text-base"
                                placeholder="Date de départ" readonly="readonly" required>
                        </div>
                    </div>


                    <div class="w-full md:w-1/4 px-2 py-1">
                        <button type="submit"
                            class="w-full py-3 md:py-2 lg:py-3 px-4 rounded-full bg-[#FF385C] hover:bg-red-700 text-white font-semibold focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition-colors duration-200">
                            <i class="fas fa-search mr-2"></i> Rechercher
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce z-10">
            <a href="#featured" aria-label="Scroll to featured properties">
                <i class="fas fa-chevron-down text-3xl"></i>
            </a>
        </div>
    </section>

    <!-- Enhanced Categories Section -->
    <section id="featured" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Découvrez nos hébergements par catégorie</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Enhanced Category Cards -->
                <div class="category-card group cursor-pointer">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="relative h-64 overflow-hidden">
                            <img src="../../../assets/images/3.jpg" alt="Maisons de luxe"
                                class="category-image w-full h-full object-cover loading=" lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                                <div class="absolute bottom-0 p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">Maisons de luxe</h3>
                                    <p class="text-white/80">À partir de 500€/nuit</p>
                                    <button
                                        class="mt-4 bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors"
                                        aria-label="Explore Paris">
                                        Explorer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category-card group cursor-pointer">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="relative h-64 overflow-hidden">
                            <img src="../../../assets/images/3.jpg" alt="Appartements"
                                class="category-image w-full h-full object-cover loading=" lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                                <div class="absolute bottom-0 p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">Appartements</h3>
                                    <p class="text-white/80">À partir de 300€/nuit</p>
                                    <button
                                        class="mt-4 bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors"
                                        aria-label="Explore Paris">
                                        Explorer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category-card group cursor-pointer">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="relative h-64 overflow-hidden">
                            <img src="../../../assets/images/3.jpg" alt="Villas avec piscine"
                                class="category-image w-full h-full object-cover loading=" lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                                <div class="absolute bottom-0 p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">Villas avec piscine</h3>
                                    <p class="text-white/80">À partir de 700€/nuit</p>
                                    <button
                                        class="mt-4 bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors"
                                        aria-label="Explore Paris">
                                        Explorer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category-card group cursor-pointer">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <div class="relative h-64 overflow-hidden">
                            <img src="../../../assets/images/3.jpg" alt="Chalets"
                                class="category-image w-full h-full object-cover loading=" lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                                <div class="absolute bottom-0 p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">Chalets</h3>
                                    <p class="text-white/80">À partir de 400€/nuit</p>
                                    <button
                                        class="mt-4 bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors"
                                        aria-label="Explore Paris">
                                        Explorer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More category cards... -->
            </div>
        </div>
    </section>

    <!-- Enhanced Popular Destinations -->
    <!-- <section id="destinations" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Destinations populaires</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="relative rounded-xl overflow-hidden shadow-lg group cursor-pointer">
                    <img src="../../../assets/images/3.jpg" alt="Paris"
                        class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-300 loading="
                        lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent">
                        <div class="absolute bottom-0 p-6">
                            <h3 class="text-white text-2xl font-bold mb-2">Paris</h3>
                            <p class="text-white/80">Plus de 1000 propriétés</p>
                            <button
                                class="mt-4 bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors"
                                aria-label="Explore Paris">
                                Explorer
                            </button>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden shadow-lg group cursor-pointer">
                    <img src="../../../assets/images/3.jpg" alt="Nice"
                        class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-300 loading="
                        lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent">
                        <div class="absolute bottom-0 p-6">
                            <h3 class="text-white text-2xl font-bold mb-2">Nice</h3>
                            <p class="text-white/80">Plus de 800 propriétés</p>
                            <button
                                class="mt-4 bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors"
                                aria-label="Explore Nice">
                                Explorer
                            </button>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden shadow-lg group cursor-pointer">
                    <img src="../../../assets/images/3.jpg" alt="Lyon"
                        class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-300 loading="
                        lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent">
                        <div class="absolute bottom-0 p-6">
                            <h3 class="text-white text-2xl font-bold mb-2">Lyon</h3>
                            <p class="text-white/80">Plus de 600 propriétés</p>
                            <button
                                class="mt-4 bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors"
                                aria-label="Explore Lyon">
                                Explorer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Enhanced Featured Properties -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Propriétés en vedette</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Enhanced Property Card -->
                <div class="property-card group">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="relative">
                            <div class="relative h-64 overflow-hidden">
                                <img src="../../../assets/images/3.jpg" alt="Luxurious Villa"
                                    class="property-image w-full h-full object-cover loading=" lazy">
                            </div>
                            <button
                                class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white transition-colors"
                                onclick="toggleFavorite(this)" aria-label="Add to favorites">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                            <div class="absolute bottom-4 left-4 flex space-x-2">
                                <span class="px-3 py-1 bg-white/80 rounded-full text-sm font-medium">
                                    <i class="fas fa-camera mr-1"></i> 12 photos
                                </span>
                                <span class="px-3 py-1 bg-white/80 rounded-full text-sm font-medium">
                                    <i class="fas fa-video mr-1"></i> Visite virtuelle
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Villa de luxe avec piscine</h3>
                                    <p class="text-gray-600">Cannes, France</p>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span class="font-medium">4.9</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 mb-4 text-gray-600">
                                <span><i class="fas fa-bed mr-2"></i> 4 chambres</span>
                                <span><i class="fas fa-bath mr-2"></i> 3 salles de bain</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-2xl font-bold">450€</span>
                                    <span class="text-gray-600">/nuit</span>
                                </div>
                                <button
                                    class="bg-[#FF385C] text-white px-6 py-2 rounded-full hover:bg-[#EE496A] transition-colors"
                                    aria-label="Book now">
                                    Réserver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card group">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="relative">
                            <div class="relative h-64 overflow-hidden">
                                <img src="../../../assets/images/3.jpg" alt="Appartement Vue Mer"
                                    class="property-image w-full h-full object-cover loading=" lazy">
                            </div>
                            <button
                                class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white transition-colors"
                                onclick="toggleFavorite(this)" aria-label="Add to favorites">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                            <div class="absolute bottom-4 left-4 flex space-x-2">
                                <span class="px-3 py-1 bg-white/80 rounded-full text-sm font-medium">
                                    <i class="fas fa-camera mr-1"></i> 8 photos
                                </span>
                                <span class="px-3 py-1 bg-white/80 rounded-full text-sm font-medium">
                                    <i class="fas fa-video mr-1"></i> Visite virtuelle
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Appartement Vue Mer</h3>
                                    <p class="text-gray-600">Marseille, France</p>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span class="font-medium">4.7</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 mb-4 text-gray-600">
                                <span><i class="fas fa-bed mr-2"></i> 2 chambres</span>
                                <span><i class="fas fa-bath mr-2"></i> 1 salle de bain</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-2xl font-bold">280€</span>
                                    <span class="text-gray-600">/nuit</span>
                                </div>
                                <button
                                    class="bg-[#FF385C] text-white px-6 py-2 rounded-full hover:bg-[#FF385C] transition-colors"
                                    aria-label="Book now">
                                    Réserver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card group">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="relative">
                            <div class="relative h-64 overflow-hidden">
                                <img src="../../../assets/images/3.jpg" alt="Maison de Campagne"
                                    class="property-image w-full h-full object-cover loading=" lazy">
                            </div>
                            <button
                                class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white transition-colors"
                                onclick="toggleFavorite(this)" aria-label="Add to favorites">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                            <div class="absolute bottom-4 left-4 flex space-x-2">
                                <span class="px-3 py-1 bg-white/80 rounded-full text-sm font-medium">
                                    <i class="fas fa-camera mr-1"></i> 15 photos
                                </span>
                                <span class="px-3 py-1 bg-white/80 rounded-full text-sm font-medium">
                                    <i class="fas fa-video mr-1"></i> Visite virtuelle
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Maison de Campagne</h3>
                                    <p class="text-gray-600">Bordeaux, France</p>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span class="font-medium">4.8</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 mb-4 text-gray-600">
                                <span><i class="fas fa-bed mr-2"></i> 3 chambres</span>
                                <span><i class="fas fa-bath mr-2"></i> 2 salles de bain</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-2xl font-bold">350€</span>
                                    <span class="text-gray-600">/nuit</span>
                                </div>
                                <button
                                    class="bg-[#FF385C] text-white px-6 py-2 rounded-full hover:bg-[#FF385C] transition-colors"
                                    aria-label="Book now">
                                    Réserver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More property cards... -->
            </div>

            <!-- Property Filters -->
            <div class="flex items-center justify-center space-x-4 mt-12">
                <button class="px-6 py-2 border-2 border-gray-300 rounded-full hover:border-gray-900 transition-colors"
                    aria-label="Open filters">
                    <i class="fas fa-filter mr-2"></i>Filtres
                </button>
                <button class="px-6 py-2 border-2 border-gray-300 rounded-full hover:border-gray-900 transition-colors"
                    aria-label="Price range: 100€ - 1000€">
                    Prix: 100€ - 1000€
                </button>
                <button class="px-6 py-2 border-2 border-gray-300 rounded-full hover:border-gray-900 transition-colors"
                    aria-label="Minimum 2 bedrooms">
                    Chambres: 2+
                </button>
                <button class="px-6 py-2 border-2 border-gray-300 rounded-full hover:border-gray-900 transition-colors"
                    aria-label="Property type">
                    Type de logement
                </button>
            </div>
        </div>
    </section>

    <!-- Enhanced Experience Section -->
    <section id="experiences" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Expériences uniques</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Experience Card -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover:shadow-xl transition-shadow">
                    <div class="relative h-64">
                        <img src="../../../assets/images/3.jpg" alt="Experience"
                            class="w-full h-full object-cover loading=" lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Visite guidée de Paris</h3>
                        <p class="text-gray-600 mb-4">Découvrez les secrets de la ville lumière.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold">50€</span>
                            <button
                                class="bg-[#FF385C] text-white px-6 py-2 rounded-full hover:bg-[#FF385C] transition-colors"
                                aria-label="Book Paris guided tour">Réserver</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover:shadow-xl transition-shadow">
                    <div class="relative h-64">
                        <img src="../../../assets/images/3.jpg" alt="Experience"
                            class="w-full h-full object-cover loading=" lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Dégustation de vin à Bordeaux</h3>
                        <p class="text-gray-600 mb-4">Explorez les meilleurs vignobles de la région.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold">75€</span>
                            <button
                                class="bg-[#FF385C] text-white px-6 py-2 rounded-full hover:bg-[#FF385C] transition-colors"
                                aria-label="Book Bordeaux wine tasting">Réserver</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover:shadow-xl transition-shadow">
                    <div class="relative h-64">
                        <img src="../../../assets/images/3.jpg" alt="Experience"
                            class="w-full h-full object-cover loading=" lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Cours de cuisine provençale</h3>
                        <p class="text-gray-600 mb-4">Apprenez à cuisiner des plats traditionnels.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold">60€</span>
                            <button
                                class="bg-[#FF385C] text-white px-6 py-2 rounded-full hover:bg-[#FF385C] transition-colors"
                                aria-label="Book Provençal cooking class">Réserver</button>
                        </div>
                    </div>
                </div>
                <!-- More experience cards... -->
            </div>
        </div>
    </section>


    <!-- Enhanced Services Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Nos Services Premium</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-6 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-concierge-bell text-3xl text-red-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Conciergerie 24/7</h3>
                    <p class="text-gray-600">Notre équipe est disponible jour et nuit pour répondre à vos besoins</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-shield-alt text-3xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Réservation Sécurisée</h3>
                    <p class="text-gray-600">Paiement sécurisé et garantie de satisfaction</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-6 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-home text-3xl text-green-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Logements Vérifiés</h3>
                    <p class="text-gray-600">Chaque propriété est inspectée et certifiée par nos experts</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Reviews Section -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Ce que disent nos clients</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Review Card -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="/api/placeholder/50/50" alt="Client" class="w-14 h-14 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Sophie Martin</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Une expérience inoubliable ! La villa était exactement comme sur les
                        photos, et le service était impeccable."</p>
                    <p class="text-gray-500 text-sm">Séjour à Nice - Août 2024</p>
                </div>
                <!-- More review cards... -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="/api/placeholder/50/50" alt="Client" class="w-14 h-14 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Sophie Martin</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Une expérience inoubliable ! La villa était exactement comme sur les
                        photos, et le service était impeccable."</p>
                    <p class="text-gray-500 text-sm">Séjour à Nice - Août 2024</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="/api/placeholder/50/50" alt="Client" class="w-14 h-14 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Sophie Martin</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Une expérience inoubliable ! La villa était exactement comme sur les
                        photos, et le service était impeccable."</p>
                    <p class="text-gray-500 text-sm">Séjour à Nice - Août 2024</p>
                </div>
            </div>
            <div class="text-center mt-12">
                <button class="bg-white px-8 py-3 rounded-full shadow-lg hover:shadow-xl transition-shadow">
                    Voir plus d'avis
                </button>
            </div>
        </div>
    </section>

    <!-- Enhanced Mobile App Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold mb-6">Téléchargez notre application</h2>
                    <p class="text-gray-600 mb-8">Gérez vos réservations, communiquez avec les hôtes et découvrez de
                        nouvelles propriétés, tout cela depuis votre smartphone.</p>
                    <div class="flex gap-4">
                        <button
                            class="bg-black text-white px-6 py-3 rounded-xl flex items-center gap-2 hover:bg-gray-900 transition-colors">
                            <i class="fab fa-apple text-3xl"></i>
                            <div class="text-left">
                                <div class="text-xs">Télécharger sur</div>
                                <div class="font-medium">App Store</div>
                            </div>
                        </button>
                        <button
                            class="bg-black text-white px-6 py-3 rounded-xl flex items-center gap-2 hover:bg-gray-900 transition-colors">
                            <i class="fab fa-google-play text-3xl"></i>
                            <div class="text-left">
                                <div class="text-xs">Disponible sur</div>
                                <div class="font-medium">Google Play</div>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="flex-2">
                    <img src="../../../assets/images/3.jpg" alt="Mobile App"
                        class="w-full max-w-md mx-auto rounded-2xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <h4 class="text-xl font-bold mb-6">À propos</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Qui sommes-nous</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Carrières</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Presse</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6">Communauté</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Forum</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Devenir hôte</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Parrainage</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Événements</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6">Assistance</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Centre d'aide</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Sécurité</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition-colors">Annulation</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition-colors">COVID-19</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300 transition-colors">
                            <i class="fab fa-facebook-f text-2xl"></i>
                        </a>
                        <a href="#" class="hover:text-gray-300 transition-colors">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="#" class="hover:text-gray-300 transition-colors">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="hover:text-gray-300 transition-colors">
                            <i class="fab fa-linkedin-in text-2xl"></i>
                        </a>
                    </div>
                    <div class="mt-6">
                        <h5 class="font-bold mb-4">Moyens de paiement acceptés</h5>
                        <div class="flex space-x-4">
                            <i class="fab fa-cc-visa text-2xl"></i>
                            <i class="fab fa-cc-mastercard text-2xl"></i>
                            <i class="fab fa-cc-amex text-2xl"></i>
                            <i class="fab fa-cc-paypal text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm">
                    © 2025 MaisonLocation. Tous droits réservés.
                </div>
                <div class="flex items-center space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-gray-300 transition-colors">Confidentialité</a>
                    <a href="#" class="text-gray-400 hover:text-gray-300 transition-colors">Conditions</a>
                    <a href="#" class="text-gray-400 hover:text-gray-300 transition-colors">Plan du site</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modals and Scripts remain the same but enhanced -->

    <script>
        // Enhanced initialization code for Flatpickr
        flatpickr("#arrivalDate", {
            mode: "single",
            dateFormat: "Y-m-d",
            minDate: "today",
            showMonths: 2,
            onChange: function (selectedDates) {
                // Update minimum date for departure based on arrival
                const departurePickr = document.querySelector("#departureDate")._flatpickr;
                departurePickr.set("minDate", selectedDates[0]);
            }
        });

        // Enhanced User Menu Toggle with animation
        const userMenu = document.getElementById('userMenu');
        const userMenuBtn = document.getElementById('userMenuBtn');

        document.addEventListener('click', function (event) {
            if (!userMenuBtn.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu.classList.add('hidden');
            }
        });

        userMenuBtn.addEventListener('click', function (event) {
            event.stopPropagation();
            userMenu.classList.toggle('hidden');
        });

        // Enhanced Modal Functions
        function openLoginModal() {
            const modal = document.getElementById('loginModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            // Add animation
            const modalContent = modal.querySelector('.bg-white');
            modalContent.classList.add('animate-fade-in');
        }

        function closeLoginModal() {
            const modal = document.getElementById('loginModal');
            document.body.style.overflow = 'auto';
            modal.classList.add('hidden');
        }

        // Enhanced Property Modal Functions with Swiper
        function openPropertyModal() {
            const modal = document.getElementById('propertyModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            // Initialize Swiper with enhanced options
            new Swiper('.propertySwiper', {
                direction: 'horizontal',
                loop: true,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        }

        function closePropertyModal() {
            const modal = document.getElementById('propertyModal');
            document.body.style.overflow = 'auto';
            modal.classList.add('hidden');
        }

        // Enhanced Favorite Toggle with Animation
        function toggleFavorite(button) {
            const icon = button.querySelector('i');
            icon.classList.toggle('far');
            icon.classList.toggle('fas');

            // Add heart animation
            button.classList.add('scale-125');
            setTimeout(() => {
                button.classList.remove('scale-125');
            }, 200);

            if (icon.classList.contains('fas')) {
                icon.classList.add('text-red-500');
                // Show success message
                showNotification('Ajouté aux favoris !');
            } else {
                icon.classList.remove('text-red-500');
                // Show removal message
                showNotification('Retiré des favoris');
            }
        }

        // Notification System
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'fixed bottom-4 right-4 bg-gray-800 text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-0 opacity-100 transition-all duration-300';
            notification.textContent = message;

            document.body.appendChild(notification);

            // Animate out after 3 seconds
            setTimeout(() => {
                notification.classList.add('translate-y-full', 'opacity-0');
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }

        // Smooth Scroll for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const target = document.querySelector(targetId);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for Animations
        const animateOnScroll = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, {
            threshold: 0.1
        });

        // Add animation to sections
        document.querySelectorAll('section').forEach(section => {
            animateOnScroll.observe(section);
        });

        // Enhanced Search Functionality
        const searchInput = document.querySelector('input[placeholder="Où allez-vous ?"]');
        let searchTimeout;

        searchInput.addEventListener('input', function () {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                // Simulate search API call
                console.log('Searching for:', this.value);
                // Here you would typically make an API call for search suggestions
            }, 300);
        });

        // Initialize all tooltips
        const tooltipElements = document.querySelectorAll('[data-tooltip]');
        tooltipElements.forEach(element => {
            element.addEventListener('mouseenter', (e) => {
                const tooltip = document.createElement('div');
                tooltip.className = 'absolute bg-gray-900 text-white px-4 py-2 rounded text-sm z-50 transform -translate-y-full -translate-x-1/2 left-1/2 -top-2';
                tooltip.textContent = element.dataset.tooltip;
                element.appendChild(tooltip);
            });

            element.addEventListener('mouseleave', () => {
                const tooltip = element.querySelector('.absolute');
                if (tooltip) tooltip.remove();
            });
        });

        // Responsive Navigation
        const mobileMenuBtn = document.querySelector('#mobileMenuBtn');
        const mobileMenu = document.querySelector('#mobileMenu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Initialize date range picker
        function initializeDatePicker() {
            const arrivalDate = document.getElementById('arrivalDate');
            const departureDate = document.getElementById('departureDate');

            if (arrivalDate && departureDate) {
                const arrival = flatpickr(arrivalDate, {
                    minDate: "today",
                    onChange: function (selectedDates) {
                        departure.set('minDate', selectedDates[0]);
                    }
                });

                const departure = flatpickr(departureDate, {
                    minDate: arrivalDate.value || "today"
                });
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function () {
            initializeDatePicker();
        });

    </script>
</body>

</html>