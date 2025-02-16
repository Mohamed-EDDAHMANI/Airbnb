<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - Villa de Luxe avec Piscine</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF385C;
            --secondary-color: #E31C5F;
        }

        .image-gallery {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            grid-template-rows: repeat(2, 1fr);
            gap: 16px;
            height: 500px;
        }

        .image-gallery-main {
            grid-row: span 2;
        }

        .image-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
            transition: all 0.3s ease;
            filter: brightness(0.9);
        }

        .image-gallery img:hover {
            filter: brightness(1);
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gradient-bg {
            background: linear-gradient(45deg, #FF385C, #E31C5F);
            background-size: 200% 200%;
            animation: gradientBG 10s ease infinite;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 4px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-reveal {
            animation: fadeInUp 0.6s ease forwards;
            opacity: 0;
        }
    </style>
</head>

<body class="bg-gray-50">

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
                                <a href="/signUp" class="block hover:bg-gray-100 px-4 py-2 rounded-lg font-medium">
                                    <i class="fas fa-user-plus mr-2"></i> S'inscrire
                                </a>
                                <a href="Login" class="block hover:bg-gray-100 px-4 py-2 rounded-lg"
                                    onclick="openLoginModal()">
                                    <i class="fas fa-sign-in-alt mr-2"></i> Se connecter
                                </a>
                                <hr>
                                <a href="/myHistoriques" class="block hover:bg-gray-100 px-4 py-2 rounded-lg">
                                    <i class="fas fa-home mr-2"></i> MyHistoriques
                                </a>
                                <a href="myFavorite" class="block hover:bg-gray-100 px-4 py-2 rounded-lg">
                                    <i class="fas fa-heart mr-2"></i> Favoris
                                </a>
                                <a href="Help" class="block hover:bg-gray-100 px-4 py-2 rounded-lg">
                                    <i class="fas fa-question-circle mr-2"></i> Aide
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="mb-6 pt-16">
            <div class="animate-reveal">
                <h1 class="text-4xl font-bold text-gray-900 mb-4 flex items-center">
                    Luxueux Appartement avec Vue Panoramique
                    <span class="ml-3 bg-[#FF385C] text-white text-sm px-3 py-1 rounded-full">Exclusif</span>
                </h1>
                <div class="flex items-center text-gray-600 space-x-4">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-map-marker-alt text-[#FF385C]"></i>
                        <span>Paris, Le Marais, France</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-star text-yellow-400"></i>
                        <span>4.97 (286 avis)</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-medal text-green-500"></i>
                        <span>Superhôte</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-gallery mb-8 animate-reveal" id="imageGallery">
            <div class="image-gallery-main relative group cursor-pointer">
                <img src="../../../assets/images/3.jpg" alt="Vue principale"
                    class="w-full h-full object-cover rounded-xl">
                <div
                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300 flex items-center justify-center">
                    <span
                        class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-[#FF385C] px-4 py-2 rounded-full">
                        Agrandir
                    </span>
                </div>
            </div>
            <div class="relative group cursor-pointer">
                <img src="../../../assets/images/4.jpg" alt="Salon" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="relative group cursor-pointer">
                <img src="../../../assets/images/5.jpg" alt="Chambre" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="relative group cursor-pointer">
                <img src="../../../assets/images/8.jpg" alt="Salon" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="relative group cursor-pointer">
                <img src="../../../assets/images/9.jpg" alt="Chambre" class="w-full h-full object-cover rounded-xl">
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="space-y-8 animate-reveal">
                <section class="bg-white rounded-xl shadow-md p-6 hover-lift">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-home text-[#FF385C] mr-3"></i>
                        Appartement entier
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-gray-100 p-4 rounded-xl text-center hover:bg-gray-200 transition">
                            <i class="fas fa-users text-2xl mb-2 text-[#FF385C]"></i>
                            <p class="font-medium">6 voyageurs</p>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-xl text-center hover:bg-gray-200 transition">
                            <i class="fas fa-bed text-2xl mb-2 text-[#FF385C]"></i>
                            <p class="font-medium">3 chambres</p>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-xl text-center hover:bg-gray-200 transition">
                            <i class="fas fa-bath text-2xl mb-2 text-[#FF385C]"></i>
                            <p class="font-medium">2 salles de bain</p>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-xl text-center hover:bg-gray-200 transition">
                            <i class="fas fa-expand text-2xl mb-2 text-[#FF385C]"></i>
                            <p class="font-medium">85m²</p>
                        </div>
                    </div>
                </section>

                <section class="bg-white rounded-xl shadow-md p-6 hover-lift">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-info-circle text-[#FF385C] mr-3"></i>
                        Description
                    </h2>
                    <p class="text-gray-700 leading-relaxed">
                        Magnifique appartement de 85m² situé au cœur de Paris, offrant une vue imprenable sur la ville.
                        Récemment rénové avec des matériaux haut de gamme, cet espace lumineux combine élégance
                        parisienne
                        et confort moderne. Idéal pour les familles ou groupes d'amis cherchant une expérience
                        parisienne
                        authentique et luxueuse.
                    </p>
                    <div class="mt-4 flex space-x-2">
                        <span class="bg-[#FF385C]/10 text-[#FF385C] px-3 py-1 rounded-full text-sm">Design
                            moderne</span>
                        <span class="bg-[#FF385C]/10 text-[#FF385C] px-3 py-1 rounded-full text-sm">Vue
                            panoramique</span>
                    </div>
                </section>

                <section class="bg-white rounded-xl shadow-md p-6 hover-lift">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-utensils text-[#FF385C] mr-3"></i>
                        Équipements
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4" id="amenitiesGrid">
                        <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded-lg">
                            <i class="fas fa-wifi text-[#FF385C]"></i>
                            <span>Wi-Fi gratuit</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded-lg">
                            <i class="fas fa-coffee text-[#FF385C]"></i>
                            <span>Machine à café</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded-lg">
                            <i class="fas fa-tv text-[#FF385C]"></i>
                            <span>TV intelligente</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded-lg">
                            <i class="fas fa-wind text-[#FF385C]"></i>
                            <span>Climatisation</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded-lg">
                            <i class="fas fa-swimming-pool text-[#FF385C]"></i>
                            <span>Accès piscine</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded-lg">
                            <i class="fas fa-parking text-[#FF385C]"></i>
                            <span>Parking gratuit</span>
                        </div>
                    </div>
                </section>

                <section class="bg-white rounded-xl shadow-md p-6 hover-lift">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-map-marker-alt text-[#FF385C] mr-3"></i>
                        Localisation & Attractions
                    </h2>
                    <div class="mb-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6749.066418329984!2d-8.518469!3d32.243733!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefdd4fcbbdbc1%3A0x846cbd9f328a7bdb!2sYouCode.!5e0!3m2!1sen!2sus!4v1739746457173!5m2!1sen!2sus"
                            width="560" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="grid grid-cols-2 gap-4" id="attractionsGrid">
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <h3 class="font-semibold mb-2">Monuments à proximité</h3>
                            <ul class="space-y-1 text-sm">
                                <li>• Tour Eiffel (15 min)</li>
                                <li>• Louvre (10 min)</li>
                                <li>• Notre-Dame (5 min)</li>
                            </ul>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <h3 class="font-semibold mb-2">Transports</h3>
                            <ul class="space-y-1 text-sm">
                                <li>• Métro Saint-Michel (2 min)</li>
                                <li>• RER Châtelet (5 min)</li>
                                <li>• Station de vélos</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

            <div class="lg:sticky lg:top-8 space-y-6 animate-reveal">
                <div class="bg-white rounded-xl shadow-lg p-6 hover-lift">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <span class="text-3xl font-bold text-[#FF385C]">450 DH</span>
                            <span class="text-gray-600">/nuit</span>
                        </div>
                        <div class="flex items-center bg-green-50 px-3 py-2 rounded-full">
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

                <div class="bg-white rounded-xl shadow-lg p-6 hover-lift">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="relative">
                            <img src="../../../assets/images/profile.jpg" alt="Host"
                                class="w-20 h-20 rounded-full border-4 border-[#FF385C]/20">
                            <span
                                class="absolute bottom-0 right-0 w-5 h-5 bg-green-500 rounded-full border-2 border-white"></span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Mohammed ENNAIM</h3>
                            <p class="text-gray-600">Hôte depuis 2025</p>
                        </div>
                    </div>
                    <div class="space-y-3 bg-gray-100 rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span>4.9 sur 5</span>
                            </div>
                            <span class="text-sm text-gray-600">(128 avis)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-medal text-[#FF385C]"></i>
                                <span>Superhôte</span>
                            </div>
                            <span class="text-sm text-gray-600">Hautement recommandé</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-clock text-green-500"></i>
                                <span>Taux de réponse</span>
                            </div>
                            <span class="text-sm text-gray-600">100%</span>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <button
                            class="w-full bg-[#FF385C] text-white py-3 rounded-lg font-medium hover:bg-[#E31C5F] transition-colors flex items-center justify-center space-x-2">
                            <i class="fas fa-comment-dots"></i>
                            <span>Contacter l'hôte</span>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 hover-lift">
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-shield-alt text-green-500 mr-3"></i>
                        Tranquillité et support
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Annulation gratuite</h4>
                                <p class="text-sm text-gray-600">Jusqu'à 48h avant l'arrivée</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-lock text-[#FF385C] mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Paiement sécurisé</h4>
                                <p class="text-sm text-gray-600">Transactions cryptées et protégées</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-headset text-blue-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Support 24/7</h4>
                                <p class="text-sm text-gray-600">Assistance à tout moment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white border-t">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="font-medium mb-4 text-gray-900">Assistance</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:text-[#FF385C] transition">Centre d'aide</a></li>
                        <li><a href="#" class="hover:text-[#FF385C] transition">Informations de sécurité</a></li>
                        <li><a href="#" class="hover:text-[#FF385C] transition">Options d'annulation</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-4 text-gray-900">Communauté</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:text-[#FF385C] transition">Airbnb.org</a></li>
                        <li><a href="#" class="hover:text-[#FF385C] transition">Lutte contre la discrimination</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-4 text-gray-900">Accueil</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:text-[#FF385C] transition">Héberger des voyageurs</a></li>
                        <li><a href="#" class="hover:text-[#FF385C] transition">Forum de la communauté</a></li>
                        <li><a href="#" class="hover:text-[#FF385C] transition">Hébergement responsable</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-4 text-gray-900">À propos</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:text-[#FF385C] transition">Newsroom</a></li>
                        <li><a href="#" class="hover:text-[#FF385C] transition">Nouvelles fonctionnalités</a></li>
                        <li><a href="#" class="hover:text-[#FF385C] transition">Carrières</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="border-t mt-8 pt-8 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-gray-600 text-center md:text-left">
                    © 2025 Airbnb, Inc. ·
                    <a href="#" class="hover:text-[#FF385C] transition">Confidentialité</a> ·
                    <a href="#" class="hover:text-[#FF385C] transition">Conditions générales</a>
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

    <div id="imageModal"
        class="hidden fixed inset-0 z-[100] bg-black bg-opacity-80 flex items-center justify-center p-4">
        < class="max-w-6xl w-full relative">
            <button class="absolute -top-10 right-0 text-white text-3xl" onclick="closeImageModal()">
                &times;
            </button>
            <img id="modalImage" src="" alt="Agrandie" class="w-full h-full object-contain">
    </div>

    <script>
        function openImageModal(src) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = src;
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        document.querySelectorAll('#imageGallery img').forEach(img => {
            img.addEventListener('click', () => openImageModal(img.src));
        });

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

        function openLoginModal() {
            const modal = document.getElementById('loginModal');
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';

                const modalContent = modal.querySelector('.bg-white');
                if (modalContent) {
                    modalContent.classList.add('animate-fade-in');
                }
            }
        }

        function closeLoginModal() {
            const modal = document.getElementById('loginModal');
            if (modal) {
                document.body.style.overflow = 'auto';
                modal.classList.add('hidden');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            const CONFIG = {
                nightlyRate: 450,
                cleaningFee: 80,
                serviceFeePct: 0.12,
                maxGuests: 8,
                minStay: 2,
                maxStay: 14
            };

            const state = {
                selectedDates: {
                    arrival: null,
                    departure: null
                },
                guests: 1,
                prices: {
                    nights: 0,
                    subtotal: 0,
                    serviceFee: 0,
                    total: 0
                }
            };

            const arrivalPicker = flatpickr("#arrivalDate", {
                dateFormat: "d/m/Y",
                minDate: "today",
                maxDate: new Date().fp_incr(365),
                locale: "fr",
                disableMobile: true,
                onChange: function (selectedDates) {
                    state.selectedDates.arrival = selectedDates[0];
                    departurePicker.set("minDate", selectedDates[0].fp_incr(CONFIG.minStay - 1));
                    departurePicker.set("maxDate", selectedDates[0].fp_incr(CONFIG.maxStay - 1));
                    updateUI();
                }
            });

            const departurePicker = flatpickr("#departureDate", {
                dateFormat: "d/m/Y",
                locale: "fr",
                disableMobile: true,
                onChange: function (selectedDates) {
                    state.selectedDates.departure = selectedDates[0];
                    updateUI();
                }
            });

            document.getElementById('guests').addEventListener('change', function (e) {
                state.guests = parseInt(e.target.value);
                updateUI();
            });

            function calculatePrices() {
                if (!state.selectedDates.arrival || !state.selectedDates.departure) {
                    return {
                        nights: 0,
                        subtotal: 0,
                        serviceFee: 0,
                        total: 0
                    };
                }

                const nights = Math.ceil(
                    (state.selectedDates.departure - state.selectedDates.arrival) / (1000 * 60 * 60 * 24)
                );
                const subtotal = nights * CONFIG.nightlyRate;
                const serviceFee = Math.round(subtotal * CONFIG.serviceFeePct);
                const total = subtotal + CONFIG.cleaningFee + serviceFee;

                return {
                    nights,
                    subtotal,
                    serviceFee,
                    total
                };
            }

            function updateUI() {
                const prices = calculatePrices();

                document.getElementById('nightsCount').textContent = prices.nights;
                document.getElementById('subtotal').textContent = `${prices.subtotal} DH`;
                document.getElementById('serviceFee').textContent = `${prices.serviceFee} DH`;
                document.getElementById('totalPrice').textContent = `${prices.total} DH`;

                const submitButton = document.querySelector('button[type="submit"]');
                const isValidBooking = prices.nights >= CONFIG.minStay &&
                    prices.nights <= CONFIG.maxStay &&
                    state.guests > 0 &&
                    state.guests <= CONFIG.maxGuests;

                submitButton.disabled = !isValidBooking;
                submitButton.classList.toggle('opacity-50', !isValidBooking);

                updateBookingMessages(prices.nights);
                state.prices = prices;
            }

            function updateBookingMessages(nights) {
                const existingMessages = document.querySelector('.booking-messages');
                if (existingMessages) {
                    existingMessages.remove();
                }

                const messagesContainer = document.createElement('div');
                messagesContainer.className = 'booking-messages space-y-2 mt-4 text-sm';

                if (nights < CONFIG.minStay) {
                    addMessage(messagesContainer,
                        `Séjour minimum de ${CONFIG.minStay} nuits requis.`,
                        'text-red-600');
                }
                if (nights > CONFIG.maxStay) {
                    addMessage(messagesContainer,
                        `Séjour maximum de ${CONFIG.maxStay} nuits autorisé.`,
                        'text-red-600');
                }
                if (state.guests > CONFIG.maxGuests) {
                    addMessage(messagesContainer,
                        `Maximum ${CONFIG.maxGuests} voyageurs autorisés.`,
                        'text-red-600');
                }
                if (nights >= CONFIG.minStay && nights <= CONFIG.maxStay) {
                    const reduction = nights >= 7 ? '10% de réduction appliquée pour les séjours d\'une semaine ou plus!' : '';
                    addMessage(messagesContainer,
                        `Dates disponibles! ${reduction}`,
                        'text-green-600');
                }

                document.getElementById('bookingForm').appendChild(messagesContainer);
            }

            function addMessage(container, text, className) {
                const message = document.createElement('p');
                message.className = className;
                message.textContent = text;
                container.appendChild(message);
            }

            document.getElementById('bookingForm').addEventListener('submit', async function (e) {
                e.preventDefault();

                if (!state.selectedDates.arrival || !state.selectedDates.departure) {
                    alert('Veuillez sélectionner des dates de séjour valides.');
                    return;
                }

                try {
                    const submitButton = this.querySelector('button[type="submit"]');
                    const originalText = submitButton.textContent;

                    submitButton.disabled = true;
                    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Traitement en cours...';

                    const prices = calculatePrices();
                    const bookingData = {
                        arrivalDate: state.selectedDates.arrival.toLocaleDateString('fr-FR'),
                        departureDate: state.selectedDates.departure.toLocaleDateString('fr-FR'),
                        guests: state.guests,
                        nights: prices.nights,
                        subtotal: prices.subtotal,
                        serviceFee: prices.serviceFee,
                        cleaningFee: CONFIG.cleaningFee,
                        total: prices.total
                    };

                    const confirmationModal = document.createElement('div');
                    confirmationModal.className = 'fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center p-4';
                    confirmationModal.innerHTML = `
                <div class="bg-white rounded-xl p-6 max-w-md w-full">
                    <h3 class="text-xl font-bold mb-4 text-center">Confirmation de réservation</h3>
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between">
                            <span>Arrivée:</span>
                            <strong>${bookingData.arrivalDate}</strong>
                        </div>
                        <div class="flex justify-between">
                            <span>Départ:</span>
                            <strong>${bookingData.departureDate}</strong>
                        </div>
                        <div class="flex justify-between">
                            <span>Nombre de nuits:</span>
                            <strong>${bookingData.nights}</strong>
                        </div>
                        <div class="flex justify-between">
                            <span>Voyageurs:</span>
                            <strong>${bookingData.guests}</strong>
                        </div>
                        <hr>
                        <div class="flex justify-between">
                            <span>Sous-total:</span>
                            <strong>${bookingData.subtotal} DH</strong>
                        </div>
                        <div class="flex justify-between">
                            <span>Frais de service:</span>
                            <strong>${bookingData.serviceFee} DH</strong>
                        </div>
                        <div class="flex justify-between">
                            <span>Frais de ménage:</span>
                            <strong>${bookingData.cleaningFee} DH</strong>
                        </div>
                        <div class="flex justify-between font-bold text-[#FF385C]">
                            <span>Total:</span>
                            <strong>${bookingData.total} DH</strong>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4">
                        <button id="cancelBooking" class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded">
                            Annuler
                        </button>
                        <button id="confirmBooking" class="px-4 py-2 bg-[#FF385C] text-white rounded hover:bg-[#FF385C]/90">
                            <a href='/checkout'>
                                Confirmer et Payer
                            </a>
                        </button>
                    </div>
                </div>
            `;

                    document.body.appendChild(confirmationModal);

                    document.getElementById('cancelBooking').addEventListener('click', () => {
                        confirmationModal.remove();
                        submitButton.disabled = false;
                        submitButton.textContent = originalText;
                    });

                    document.getElementById('confirmBooking').addEventListener('click', () => {
                        const checkoutForm = document.createElement('form');
                        checkoutForm.method = 'POST';
                        const bookingDataInput = document.createElement('input');
                        bookingDataInput.type = 'hidden';
                        bookingDataInput.name = 'bookingData';
                        bookingDataInput.value = JSON.stringify(bookingData);

                        checkoutForm.appendChild(bookingDataInput);
                        document.body.appendChild(checkoutForm);
                        checkoutForm.submit();
                    });

                } catch (error) {
                    console.error('Booking submission error:', error);
                    alert('Une erreur est survenue. Veuillez réessayer.');
                    submitButton.disabled = false;
                    submitButton.textContent = originalText;
                }
            });
            updateUI();
        });
    </script>
</body>

</html>