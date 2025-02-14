<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxueux Appartement avec Vue Panoramique - MaisonLocation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.7/swiper-bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.7/swiper-bundle.min.css" rel="stylesheet">
    <style>
        .gallery-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            grid-template-rows: 250px 250px;
            gap: 8px;
        }

        .gallery-main {
            grid-row: 1 / -1;
        }

        .sticky-sidebar {
            position: sticky;
            top: 2rem;
        }

        .amenity-icon {
            transition: transform 0.2s;
        }

        .amenity-icon:hover {
            transform: scale(1.1);
        }

        .review-progress {
            transition: width 1s ease-in-out;
        }

        .image-gallery img {
            transition: transform 0.3s ease-in-out;
        }

        .image-gallery img:hover {
            transform: scale(1.05);
        }

        .social-share-button {
            transition: all 0.3s ease;
        }

        .social-share-button:hover {
            transform: translateY(-2px);
        }

        .sticky-nav {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.9);
        }

        .floating-booking-bar {
            transform: translateY(100%);
            transition: transform 0.3s ease-in-out;
        }

        .floating-booking-bar.visible {
            transform: translateY(0);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Enhanced Navigation -->
    <nav class="sticky-nav fixed w-full z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 py-4">
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
                <!-- Enhanced Search Bar -->
                <div class="hidden md:flex items-center space-x-4 bg-white rounded-full shadow px-4 py-2">
                    <input type="text" placeholder="Rechercher" class="w-64 focus:outline-none">
                    <button class="text-red-500 hover:text-red-600">
                        <i class="fas fa-search"></i>
                    </button>
                </div>

                <div class="flex items-center space-x-6">
                    <button class="hover:bg-gray-100 px-4 py-2 rounded-full flex items-center space-x-2">
                        <i class="fas fa-globe"></i>
                        <span>FR</span>
                    </button>
                    <div class="relative group">
                        <button
                            class="flex items-center space-x-2 border rounded-full p-2 hover:shadow-md transition-shadow">
                            <i class="fas fa-bars"></i>
                            <i class="fas fa-user-circle text-2xl"></i>
                        </button>
                        <!-- Enhanced Dropdown -->
                        <div
                            class="hidden group-hover:block absolute right-0 mt-2 w-64 bg-white rounded-xl shadow-lg border p-4">
                            <!-- [Previous dropdown content] -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-20">
        <!-- Enhanced Gallery Section -->
        <div class="max-w-7xl mx-auto px-4">
            <div class="relative gallery-grid rounded-xl overflow-hidden cursor-pointer mb-8">
                <div class="gallery-main relative group overflow-hidden">
                    <img src="../../../assets/images/2.jpg" alt="Main view" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <button
                            class="bg-white text-gray-800 px-6 py-2 rounded-lg shadow-lg transform translate-y-4 group-hover:translate-y-0 transition-transform">
                            Voir toutes les photos
                        </button>
                    </div>
                </div>
                <img src="../../../assets/images/2.jpg" alt="Second view" class="w-full h-full object-cover">
                <img src="../../../assets/images/2.jpg" alt="Third view" class="w-full h-full object-cover">
                <img src="../../../assets/images/2.jpg" alt="Fourth view" class="w-full h-full object-cover">
                <img src="../../../assets/images/2.jpg" alt="Fifth view" class="w-full h-full object-cover">
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Enhanced Header Section -->
                    <div class="mb-8">
                        <div class="flex justify-between items-start">
                            <div>
                                <h1 class="text-3xl font-bold mb-2">Luxueux Appartement avec Vue Panoramique</h1>
                                <div class="flex items-center space-x-4 text-gray-600">
                                    <span class="flex items-center">
                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                        4.97
                                    </span>
                                    <span>·</span>
                                    <a href="#reviews" class="hover:underline">286 avis</a>
                                    <span>·</span>
                                    <span class="flex items-center">
                                        <i class="fas fa-award text-red-500 mr-1"></i>
                                        Superhost
                                    </span>
                                    <span>·</span>
                                    <span class="flex items-center">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        Paris, France
                                    </span>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <button
                                    class="flex items-center space-x-2 px-4 py-2 rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="far fa-heart"></i>
                                    <span>Sauvegarder</span>
                                </button>
                                <button
                                    class="flex items-center space-x-2 px-4 py-2 rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-share"></i>
                                    <span>Partager</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Features Section -->
                    <div class="grid grid-cols-2 gap-8 mb-12">
                        <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                            <i class="fas fa-users text-2xl text-gray-600"></i>
                            <div>
                                <h3 class="font-medium">6 voyageurs</h3>
                                <p class="text-gray-600">Idéal pour les familles</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                            <i class="fas fa-bed text-2xl text-gray-600"></i>
                            <div>
                                <h3 class="font-medium">3 chambres</h3>
                                <p class="text-gray-600">Lits king size</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                            <i class="fas fa-bath text-2xl text-gray-600"></i>
                            <div>
                                <h3 class="font-medium">2 salles de bain</h3>
                                <p class="text-gray-600">Récemment rénovées</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                            <i class="fas fa-ruler-combined text-2xl text-gray-600"></i>
                            <div>
                                <h3 class="font-medium">85 m²</h3>
                                <p class="text-gray-600">Espace spacieux</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Host Section -->
                    <div class="border-t border-b py-8 mb-12">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="relative">
                                    <img src="../../../assets/images/2.jpg" alt="Host" class="w-16 h-16 rounded-full">
                                    <div
                                        class="absolute -bottom-1 -right-1 bg-green-500 w-4 h-4 rounded-full border-2 border-white">
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-medium">Hébergé par Marie</h3>
                                    <p class="text-gray-600">Superhost · 245 locations · Membre depuis 2019</p>
                                </div>
                            </div>
                            <button
                                class="px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors">
                                Contacter l'hôte
                            </button>
                        </div>
                        <div class="mt-6 grid grid-cols-2 gap-4">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span>Identité vérifiée</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-medal text-yellow-500"></i>
                                <span>Superhost expérimenté</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-clock text-blue-500"></i>
                                <span>Taux de réponse: 100%</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-bolt text-purple-500"></i>
                                <span>Temps de réponse: &lt; 1h</span>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Description Section -->
                    <div class="mb-12">
                        <h2 class="text-2xl font-bold mb-6">À propos de ce logement</h2>
                        <div class="prose max-w-none text-gray-600">
                            <p class="mb-4">
                                Découvrez ce magnifique appartement de 85m² situé au cœur de Paris, offrant une vue
                                imprenable sur la ville.
                                Récemment rénové avec des matériaux haut de gamme, cet espace lumineux combine élégance
                                parisienne et confort moderne.
                            </p>
                            <p class="mb-4">
                                L'appartement dispose de trois chambres spacieuses, chacune avec sa propre atmosphère
                                unique.
                                La cuisine entièrement équipée vous permettra de préparer de délicieux repas tout en
                                profitant de la vue sur les toits de Paris.
                            </p>
                            <div id="readMore" class="hidden">
                                <p class="mb-4">
                                    Le salon spacieux est baigné de lumière naturelle grâce à ses grandes fenêtres et
                                    offre un espace parfait pour se détendre
                                    après une journée de découverte de la ville. Les deux salles de bain modernes sont
                                    équipées de douches à l'italienne et
                                    de produits de toilette haut de gamme.
                                </p>
                                <p class="mb-4">
                                    Situé dans un quartier historique, vous serez à quelques pas des meilleurs
                                    restaurants, cafés et boutiques de Paris.
                                    La station de métro la plus proche est à 3 minutes à pied, vous permettant
                                    d'explorer facilement toute la ville.
                                </p>
                            </div>
                            <button onclick="toggleReadMore()" class="text-red-500 font-medium hover:underline">
                                Afficher plus <i class="fas fa-chevron-down ml-1"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Enhanced Amenities Section -->
                    <div id="amenities" class="mb-12">
                        <h2 class="text-2xl font-bold mb-6">Équipements</h2>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="space-y-6">
                                <div
                                    class="flex items-center space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center">
                                        <i class="fas fa-wifi text-xl text-gray-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium">Wifi Haut Débit</h3>
                                        <p class="text-gray-600">500 Mbps</p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center">
                                        <i class="fas fa-tv text-xl text-gray-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium">Smart TV 4K</h3>
                                        <p class="text-gray-600">Netflix & Prime inclus</p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center">
                                        <i class="fas fa-snowflake text-xl text-gray-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium">Climatisation</h3>
                                        <p class="text-gray-600">Contrôle individuel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-6">
                                <div
                                    class="flex items-center space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center">
                                        <i class="fas fa-utensils text-xl text-gray-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium">Cuisine Équipée</h3>
                                        <p class="text-gray-600">Tout le nécessaire</p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center">
                                        <i class="fas fa-parking text-xl text-gray-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium">Parking Privé</h3>
                                        <p class="text-gray-600">Sécurisé & Couvert</p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center">
                                        <i class="fas fa-dumbbell text-xl text-gray-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium">Salle de Sport</h3>
                                        <p class="text-gray-600">Accès gratuit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="mt-8 px-6 py-3 border border-gray-900 rounded-lg hover:bg-gray-50 transition-colors">
                            Voir tous les équipements (24)
                        </button>
                    </div>

                    <!-- Enhanced Location Section -->
                    <div id="location" class="mb-12">
                        <h2 class="text-2xl font-bold mb-6">Emplacement</h2>
                        <div class="relative h-96 rounded-xl overflow-hidden mb-6">
                            <img src="../../../assets/images/2.jpg" alt="Map" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                            <button
                                class="absolute bottom-4 right-4 bg-white px-6 py-3 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                                Voir sur la carte
                            </button>
                        </div>
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <h3 class="font-medium mb-4">Quartier</h3>
                                <p class="text-gray-600 mb-4">
                                    Situé dans le quartier du Marais, l'un des plus charmants de Paris, vous serez
                                    entouré
                                    d'histoire et de culture. Les rues pavées regorgent de boutiques tendance, de
                                    galeries d'art
                                    et de cafés traditionnels.
                                </p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-walking text-gray-400"></i>
                                        <span>5 min à pied du métro Saint-Paul</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-store text-gray-400"></i>
                                        <span>Nombreux commerces à proximité</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-utensils text-gray-400"></i>
                                        <span>Restaurants étoilés dans le quartier</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-medium mb-4">Points d'intérêt à proximité</h3>
                                <ul class="space-y-4">
                                    <li class="flex justify-between items-center">
                                        <span>Place des Vosges</span>
                                        <span class="text-gray-600">5 min à pied</span>
                                    </li>
                                    <li class="flex justify-between items-center">
                                        <span>Musée Picasso</span>
                                        <span class="text-gray-600">8 min à pied</span>
                                    </li>
                                    <li class="flex justify-between items-center">
                                        <span>Notre-Dame</span>
                                        <span class="text-gray-600">15 min à pied</span>
                                    </li>
                                    <li class="flex justify-between items-center">
                                        <span>Centre Pompidou</span>
                                        <span class="text-gray-600">12 min à pied</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Reviews Section -->
                    <div id="reviews" class="mb-12">
                        <div class="flex items-center space-x-4 mb-8">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-2xl mr-2"></i>
                                <span class="text-3xl font-bold">4.97</span>
                            </div>
                            <div class="text-gray-600">
                                <span class="font-medium">286 avis</span>
                                <span class="mx-2">·</span>
                                <span>Superhost</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-8 mb-8">
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <span class="w-24">Propreté</span>
                                    <div class="flex-1 bg-gray-200 h-2 rounded-full">
                                        <div class="bg-gray-900 h-2 rounded-full" style="width: 98%"></div>
                                    </div>
                                    <span class="w-8 text-right">4.9</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <span class="w-24">Précision</span>
                                    <div class="flex-1 bg-gray-200 h-2 rounded-full">
                                        <div class="bg-gray-900 h-2 rounded-full" style="width: 95%"></div>
                                    </div>
                                    <span class="w-8 text-right">4.8</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <span class="w-24">Communication</span>
                                    <div class="flex-1 bg-gray-200 h-2 rounded-full">
                                        <div class="bg-gray-900 h-2 rounded-full" style="width: 100%"></div>
                                    </div>
                                    <span class="w-8 text-right">5.0</span>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <span class="w-24">Arrivée</span>
                                    <div class="flex-1 bg-gray-200 h-2 rounded-full">
                                        <div class="bg-gray-900 h-2 rounded-full" style="width: 97%"></div>
                                    </div>
                                    <span class="w-8 text-right">4.9</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <span class="w-24">Qualité-prix</span>
                                    <div class="flex-1 bg-gray-200 h-2 rounded-full">
                                        <div class="bg-gray-900 h-2 rounded-full" style="width: 93%"></div>
                                    </div>
                                    <span class="w-8 text-right">4.7</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <span class="w-24">Emplacement</span>
                                    <div class="flex-1 bg-gray-200 h-2 rounded-full">
                                        <div class="bg-gray-900 h-2 rounded-full" style="width: 98%"></div>
                                    </div>
                                    <span class="w-8 text-right">4.9</span>
                                </div>
                            </div>
                        </div>

                        <!-- Individual Reviews -->
                        <div class="grid grid-cols-2 gap-8">
                            <div class="space-y-6">
                                <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                                    <div class="flex items-center space-x-4 mb-4">
                                        <img src="../../../assets/images/2.jpg" alt="Sophie"
                                            class="w-12 h-12 rounded-full">
                                        <div>
                                            <h4 class="font-medium">Sophie</h4>
                                            <p class="text-gray-600 text-sm">Mars 2024</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600">
                                        Un séjour parfait ! L'appartement est magnifique, très bien équipé et idéalement
                                        situé.
                                        Marie est une hôte exceptionnelle, très attentionnée et réactive. Je recommande
                                        vivement !
                                    </p>
                                </div>
                            </div>
                            <div class="space-y-6">
                                <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                                    <div class="flex items-center space-x-4 mb-4">
                                        <img src="../../../assets/images/2.jpg" alt="Thomas"
                                            class="w-12 h-12 rounded-full">
                                        <div>
                                            <h4 class="font-medium">Thomas</h4>
                                            <p class="text-gray-600 text-sm">Février 2024</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600">
                                        Superbe appartement avec une vue incroyable sur Paris. La décoration est soignée
                                        et l'emplacement est parfait pour découvrir la ville. Marie nous a donné
                                        d'excellents
                                        conseils pour les restaurants du quartier.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <button
                            class="mt-8 w-full py-4 border border-gray-900 rounded-lg hover:bg-gray-50 transition-colors">
                            Afficher les 286 commentaires
                        </button>
                    </div>

                    <!-- Règles de la maison -->
                    <div class="mb-12">
                        <h2 class="text-2xl font-bold mb-6">Règles de la maison</h2>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <i class="fas fa-clock text-gray-400"></i>
                                    <div>
                                        <h3 class="font-medium">Arrivée : 15:00 - 22:00</h3>
                                        <p class="text-gray-600">Départ : 11:00</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <i class="fas fa-smoking-ban text-gray-400"></i>
                                    <span>Non-fumeur</span>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <i class="fas fa-paw text-gray-400"></i>
                                    <span>Pas d'animaux</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <i class="fas fa-music text-gray-400"></i>
                                    <span>Pas de fête ni de soirée</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Booking Sidebar -->
                <div class="lg:col-span-1">
                    <div class="sticky-sidebar">
                        <div class="bg-white p-6 rounded-xl shadow-lg border">
                            <div class="flex justify-between items-start mb-6">
                                <div>
                                    <span class="text-2xl font-bold">189 €</span>
                                    <span class="text-gray-600"> par nuit</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span class="font-medium">4.97</span>
                                    <span class="mx-1 text-gray-600">·</span>
                                    <a href="#reviews" class="text-gray-600 hover:underline">286 avis</a>
                                </div>
                            </div>

                            <!-- Enhanced Booking Form -->
                            <form class="space-y-4">
                                <div class="border rounded-xl overflow-hidden">
                                    <div class="grid grid-cols-2 divide-x">
                                        <div class="p-3">
                                            <label class="block text-xs font-medium">ARRIVÉE</label>
                                            <input type="text" id="check-in" class="w-full focus:outline-none"
                                                placeholder="Ajouter une date">
                                        </div>
                                        <div class="p-3">
                                            <label class="block text-xs font-medium">DÉPART</label>
                                            <input type="text" id="check-out" class="w-full focus:outline-none"
                                                placeholder="Ajouter une date">
                                        </div>
                                    </div>
                                    <div class="border-t p-3">
                                        <label class="block text-xs font-medium">VOYAGEURS</label>
                                        <select class="w-full focus:outline-none">
                                            <option>1 voyageur</option>
                                            <option>2 voyageurs</option>
                                            <option>3 voyageurs</option>
                                            <option>4 voyageurs</option>
                                            <option>5 voyageurs</option>
                                            <option>6 voyageurs</option>
                                        </select>
                                    </div>
                                </div>

                                <button
                                    class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-4 rounded-lg hover:from-red-600 hover:to-red-700 transition-colors">
                                    <a href="/checkout" class="mt-4">
                                        Réserver
                                    </a>
                                </button>

                                <p class="text-center text-gray-600 text-sm">
                                    Aucun montant ne sera débité pour le moment
                                </p>

                                <!-- Prix détaillé -->
                                <div class="space-y-3 pt-4">
                                    <div class="flex justify-between">
                                        <span class="underline">189 € x 7 nuits</span>
                                        <span>1 323 €</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="underline">Frais de ménage</span>
                                        <span>75 €</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="underline">Frais de service</span>
                                        <span>198 €</span>
                                    </div>
                                    <div class="pt-4 border-t flex justify-between font-bold">
                                        <span>Total</span>
                                        <span>1 596 €</span>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Signaler l'annonce -->
                        <button class="mt-4 w-full text-center text-gray-600 hover:underline">
                            <i class="fas fa-flag mr-2"></i>
                            Signaler cette annonce
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Enhanced Sticky Booking Bar (Mobile) -->
    <div class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t shadow-lg p-4 floating-booking-bar">
        <div class="flex justify-between items-center">
            <div>
                <span class="text-xl font-bold">189 €</span>
                <span class="text-gray-600"> par nuit</span>
            </div>
            <button class="bg-red-500 text-white px-6 py-3 rounded-lg hover:bg-red-600 transition-colors">
                Réserver
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="font-medium mb-4">Assistance</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:underline">Centre d'aide</a></li>
                        <li><a href="#" class="hover:underline">Informations de sécurité</a></li>
                        <li><a href="#" class="hover:underline">Options d'annulation</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-4">Communauté</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:underline">Airbnb.org</a></li>
                        <li><a href="#" class="hover:underline">Lutte contre la discrimination</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-4">Accueil</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:underline">Héberger des voyageurs</a></li>
                        <li><a href="#" class="hover:underline">Forum de la communauté</a></li>
                        <li><a href="#" class="hover:underline">Hébergement responsable</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-4">À propos</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:underline">Newsroom</a></li>
                        <li><a href="#" class="hover:underline">Nouvelles fonctionnalités</a></li>
                        <li><a href="#" class="hover:underline">Carrières</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t mt-8 pt-8 flex justify-between items-center">
                <div class="text-gray-600">
                    © 2025 Airbnb, Inc. · Confidentialité · Conditions générales
                </div>
                <div class="flex items-center space-x-6">
                    <div class="flex items-center">
                        <i class="fas fa-globe mr-2"></i>
                        <span>Français (FR)</span>
                    </div>
                    <div>
                        <span>EUR</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Initialize Flatpickr
        flatpickr("#check-in", {
            minDate: "today",
            dateFormat: "d/m/Y",
            onChange: function (selectedDates) {
                checkOut.set("minDate", selectedDates[0]);
            }
        });

        const checkOut = flatpickr("#check-out", {
            dateFormat: "d/m/Y",
        });

        // Sticky Navigation
        window.addEventListener('scroll', function () {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('shadow-md');
            } else {
                nav.classList.remove('shadow-md');
            }
        });

        // Toggle Read More
        function toggleReadMore() {
            const readMore = document.getElementById('readMore');
            const button = readMore.nextElementSibling;

            if (readMore.classList.contains('hidden')) {
                readMore.classList.remove('hidden');
                button.innerHTML = 'Afficher moins <i class="fas fa-chevron-up ml-1"></i>';
            } else {
                readMore.classList.add('hidden');
                button.innerHTML = 'Afficher plus <i class="fas fa-chevron-down ml-1"></i>';
            }
        }

        // Mobile Booking Bar
        const showBookingBar = () => {
            const bar = document.querySelector('.floating-booking-bar');
            if (window.scrollY > 700) {
                bar.classList.add('visible');
            } else {
                bar.classList.remove('visible');
            }
        };

        window.addEventListener('scroll', showBookingBar);

        // Initialize Swiper for gallery
        new Swiper('.mainSwiper', {
            loop: true,
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

        // Dynamic price calculation
        function updatePrice() {
            const basePrice = 189;
            const nights = 7; // Calculate from selected dates
            const cleaningFee = 75;
            const serviceFee = Math.round(basePrice * nights * 0.15);
            const total = (basePrice * nights) + cleaningFee + serviceFee;

            // Update DOM elements
            document.querySelector('[data-total]').textContent = `${total} €`;
        }
    </script>
</body>

</html>