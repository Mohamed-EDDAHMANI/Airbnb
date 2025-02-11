<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - Style Airbnb</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.7/swiper-bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.7/swiper-bundle.min.css" rel="stylesheet">
    <style>
        .swiper {
            width: 100%;
            height: 300px;
            /* Adjust as needed */
        }

        .swiper-slide {
            text-align: center;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="text-red-500 text-2xl font-bold">
                    <i class="fab fa-airbnb"></i>
                    airbnb
                </a>

                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <button class="hover:bg-gray-100 px-4 py-2 rounded-full">
                        List your property
                    </button>
                    <button class="hover:bg-gray-100 p-2 rounded-full">
                        <i class="fas fa-globe"></i>
                    </button>
                    <div class="relative">
                        <button id="userMenuBtn"
                            class="flex items-center border rounded-full p-2 hover:shadow-md focus:outline-none">
                            <i class="fas fa-bars mx-2"></i>
                            <i class="fas fa-user-circle text-2xl text-gray-600"></i>
                        </button>

                        <!-- User Dropdown Menu -->
                        <div id="userMenu"
                            class="hidden absolute right-0 mt-2 bg-white rounded-xl shadow-lg border p-4 w-64 z-50">
                            <div class="space-y-3">
                                <a href="#" class="block hover:bg-gray-100 px-4 py-2 rounded-lg font-medium">Sign up</a>
                                <a href="#" class="block hover:bg-gray-100 px-4 py-2 rounded-lg"
                                    onclick="openLoginModal()">Log in</a>
                                <hr>
                                <a href="#" class="block hover:bg-gray-100 px-4 py-2 rounded-lg">My Annonce</a>
                                <a href="#" class="block hover:bg-gray-100 px-4 py-2 rounded-lg">Help</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div id="loginModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
        <div class="fixed inset-0 flex items-center justify-center">
            <div class="bg-white rounded-2xl p-8 max-w-md w-full">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold">Log in</h2>
                    <button onclick="closeLoginModal()" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-red-500 focus:border-red-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-red-500 focus:border-red-500" required>
                    </div>
                    <button type="submit"
                        class="w-full bg-red-500 text-white py-3 rounded-lg hover:bg-red-600 focus:outline-none">
                        Log in
                    </button>
                </form>
                <div class="mt-4 text-center">
                    <a href="#" class="text-red-500 hover:underline">Forgot password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="max-w-7xl mx-auto px-4 py-8">
    <div class="flex items-center justify-between bg-white rounded-full shadow-lg border p-2 mb-8">
            <div class="flex-1 px-4">
                <label class="block text-sm font-medium">Location</label>
                <div class="flex items-center">
                    <i class="fas fa-search text-gray-400 mr-2"></i>
                    <input type="text" placeholder="Search destination" class="w-full focus:outline-none">
                </div>
            </div>

            <div class="h-8 w-px bg-gray-200"></div>

            <div class="flex-1 px-4">
                <label class="block text-sm font-medium">Arrival</label>
                <input type="text" id="arrivalDate" class="w-full focus:outline-none">
            </div>

            <div class="h-8 w-px bg-gray-200"></div>

            <div class="flex-1 px-4">
                <label class="block text-sm font-medium">Departure</label>
                <input type="text" id="departureDate" class="w-full focus:outline-none">
            </div>

            <div class="h-8 w-px bg-gray-200"></div>

            <div class="flex-1 px-4">
                <label class="block text-sm font-medium">Travelers</label>
                <div class="flex items-center">
                    <i class="fas fa-user text-gray-400 mr-2"></i>
                    <select class="w-full focus:outline-none">
                        <option>1 traveler</option>
                        <option>2 travelers</option>
                        <option>3 travelers</option>
                        <option>4+ travelers</option>
                    </select>
                </div>
            </div>

            <button class="bg-red-500 text-white px-6 py-3 rounded-full hover:bg-red-600 focus:outline-none">
                <i class="fas fa-search mr-2"></i>
                Search
            </button>
        </div>

        <!-- Filters -->
        <div class="flex space-x-4 mb-8 overflow-x-auto pb-4">
            <button class="px-4 py-2 border rounded-full hover:border-black flex-shrink-0 focus:outline-none">
                Total price
            </button>
            <button class="px-4 py-2 border rounded-full hover:border-black flex-shrink-0 focus:outline-none">
                Property type
            </button>
            <button class="px-4 py-2 border rounded-full hover:border-black flex-shrink-0 focus:outline-none">
                Bedrooms and beds
            </button>
            <button class="px-4 py-2 border rounded-full hover:border-black flex-shrink-0 focus:outline-none">
                Type of property
            </button>
            <button class="px-4 py-2 border rounded-full hover:border-black flex-shrink-0 focus:outline-none">
                More filters
            </button>
        </div>

        <!-- Results Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Property Card (Repeated) -->
            <a href="/detailsAnnonce"
                class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <!-- Image Carousel -->
                <div class="relative h-48">
                    <img src="../assets/images/1.jpg" alt="Property" class="w-full h-full object-cover">
                    <button
                        class="absolute left-2 top-1/2 -translate-y-1/2 p-1 rounded-full bg-white/80 hover:bg-white focus:outline-none">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button
                        class="absolute right-2 top-1/2 -translate-y-1/2 p-1 rounded-full bg-white/80 hover:bg-white focus:outline-none">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <button class="absolute top-2 right-2 p-2 rounded-full hover:bg-white/80 focus:outline-none"
                        onclick="toggleFavorite(this)">
                        <i class="far fa-heart text-white text-xl"></i>
                    </button>
                </div>
                <!-- Information -->
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-medium">Stunning apartment in the heart of Paris</h3>
                        <div class="flex items-center">
                            <i class="fas fa-star text-sm mr-1"></i>
                            <span>4.9</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm">2 km from center</p>
                    <p class="text-gray-600 text-sm">March 12-19</p>
                    <p class="mt-2">
                        <span class="font-medium">$129</span>
                        <span class="text-gray-600"> per night</span>
                    </p>
                </div>
            </a>

            <!-- Repeat Card for More Results -->
            <a href="/detailsAnnonce"
                class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="relative h-48">
                    <img src="../assets/images/2.jpg" alt="Property" class="w-full h-full object-cover">
                    <button
                        class="absolute left-2 top-1/2 -translate-y-1/2 p-1 rounded-full bg-white/80 hover:bg-white focus:outline-none">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button
                        class="absolute right-2 top-1/2 -translate-y-1/2 p-1 rounded-full bg-white/80 hover:bg-white focus:outline-none">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <button class="absolute top-2 right-2 p-2 rounded-full hover:bg-white/80 focus:outline-none"
                        onclick="toggleFavorite(this)">
                        <i class="far fa-heart text-white text-xl"></i>
                    </button>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-medium">Design loft in Montmartre</h3>
                        <div class="flex items-center">
                            <i class="fas fa-star text-sm mr-1"></i>
                            <span>4.8</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm">Montmartre</p>
                    <p class="text-gray-600 text-sm">March 15-22</p>
                    <p class="mt-2">
                        <span class="font-medium">$159</span>
                        <span class="text-gray-600"> per night</span>
                    </p>
                </div>
            </a>

            <!-- More Cards... -->
            <a href="/detailsAnnonce" onclick="openPropertyModal()"
                class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <!-- Image Carousel -->
                <div class="relative h-48">
                    <img src="../assets/images/3.jpg" alt="Property" class="w-full h-full object-cover">
                    <button
                        class="absolute left-2 top-1/2 -translate-y-1/2 p-1 rounded-full bg-white/80 hover:bg-white focus:outline-none">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button
                        class="absolute right-2 top-1/2 -translate-y-1/2 p-1 rounded-full bg-white/80 hover:bg-white focus:outline-none">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <button class="absolute top-2 right-2 p-2 rounded-full hover:bg-white/80 focus:outline-none"
                        onclick="toggleFavorite(this)">
                        <i class="far fa-heart text-white text-xl"></i>
                    </button>
                </div>
                <!-- Information -->
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-medium">Luxury Villa with Pool</h3>
                        <div class="flex items-center">
                            <i class="fas fa-star text-sm mr-1"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm">Beachfront</p>
                    <p class="text-gray-600 text-sm">April 1-8</p>
                    <p class="mt-2">
                        <span class="font-medium">$299</span>
                        <span class="text-gray-600"> per night</span>
                    </p>
                </div>
            </a>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2">
                <button class="px-3 py-2 rounded-lg hover:bg-gray-100 focus:outline-none">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="px-3 py-2 rounded-lg hover:bg-gray-100 focus:outline-none">1</button>
                <button class="px-3 py-2 bg-gray-900 text-white rounded-lg focus:outline-none">2</button>
                <button class="px-3 py-2 rounded-lg hover:bg-gray-100 focus:outline-none">3</button>
                <button class="px-3 py-2 rounded-lg hover:bg-gray-100 focus:outline-none">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </nav>
        </div>
    </div>

    <!-- Property Details Modal -->
    <div id="propertyModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20">
            <div class="bg-white rounded-2xl max-w-4xl w-full">
                <!-- Image Gallery -->
                <div class="swiper propertySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../assets/images/1.jpg" alt="Photo 1" class="w-full h-96 object-cover">
                        </div>
                        <div class="swiper-slide">
                            <img src="../assets/images/2.jpg" alt="Photo 2" class="w-full h-96 object-cover">
                        </div>
                        <div class="swiper-slide">
                            <img src="../assets/images/3.jpg" alt="Photo 3" class="w-full h-96 object-cover">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <!-- Property Information -->
                <div class="p-8">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <h2 class="text-2xl font-semibold mb-2">Stunning apartment in the heart of Paris</h2>
                            <p class="text-gray-600">2 km from center · 4.9 ★ · Superhost</p>
                        </div>
                        <button
                            class="flex items-center space-x-2 text-gray-600 hover:text-gray-900 focus:outline-none">
                            <i class="far fa-heart text-xl"></i>
                            <span>Save</span>
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold mb-3">The Space</h3>
                                <p class="text-gray-600">Beautifully renovated apartment with stunning city views.
                                    Equipped kitchen, bright living room, and comfortable bedroom.</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-lg font-semibold mb-3">Amenities</h3>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-wifi"></i>
                                        <span>Wifi</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-tv"></i>
                                        <span>TV</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-snowflake"></i>
                                        <span>Air conditioning</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-utensils"></i>
                                        <span>Kitchen</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold mb-3">Price</h3>
                                <p class="text-gray-600">$129 per night</p>
                            </div>

                            <div>
                                <button
                                    class="w-full bg-red-500 text-white py-3 rounded-lg hover:bg-red-600 focus:outline-none">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <button onclick="closePropertyModal()"
                        class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 focus:outline-none">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Categories -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Explorez par type de propriété</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img src="../assets/images/1.jpg" alt="Maisons de luxe" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold mb-2">Maisons de luxe</h3>
                        <p class="text-gray-600">Des propriétés d'exception</p>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img src="../assets/images/2.jpg" alt="Appartements" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold mb-2">Appartements</h3>
                        <p class="text-gray-600">En plein cœur de la ville</p>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img src="../assets/images/3.jpg" alt="Villas" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold mb-2">Villas</h3>
                        <p class="text-gray-600">Avec piscine privée</p>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img src="../assets/images/2.jpg" alt="Chalets" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold mb-2">Chalets</h3>
                        <p class="text-gray-600">En montagne</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Destinations -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Destinations populaires</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="relative rounded-xl overflow-hidden shadow-lg group">
                    <img src="../assets/images/3.jpg" alt="Paris" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent">
                        <div class="absolute bottom-0 p-6">
                            <h3 class="text-white text-2xl font-bold mb-2">Paris</h3>
                            <p class="text-white/80">À partir de 100€/nuit</p>
                        </div>
                    </div>
                </div>
                <!-- [Add more destination cards] -->
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Nos Services Premium</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-concierge-bell text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="font-bold mb-3">Conciergerie 24/7</h3>
                    <p class="text-gray-600">Assistance personnalisée tout au long de votre séjour</p>
                </div>
                <!-- [Add more service cards] -->
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Ce que disent nos clients</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/50/50" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Marie Dupont</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Une expérience incroyable ! La maison était parfaite et le service impeccable."</p>
                </div>
                <!-- [Add more testimonial cards] -->
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Restez informé</h2>
            <p class="mb-8">Recevez nos meilleures offres et nouveautés</p>
            <form class="max-w-md mx-auto flex gap-4">
                <input type="email" placeholder="Votre email" class="flex-1 px-4 py-3 rounded-lg text-gray-900">
                <button class="bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100">
                    S'inscrire
                </button>
            </form>
        </div>
    </section>

    <!-- Original Search Results Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <!-- [Search filters and results grid content remains the same] -->
        </div>
    </section>

    <!-- Mobile App Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold mb-6">Téléchargez notre application</h2>
                    <p class="text-gray-600 mb-8">Gérez vos réservations, communiquez avec les hôtes et découvrez de nouvelles propriétés, tout cela depuis votre smartphone.</p>
                    <div class="flex gap-4">
                        <button class="bg-black text-white px-6 py-3 rounded-lg flex items-center gap-2">
                            <i class="fab fa-apple text-2xl"></i>
                            <div class="text-left">
                                <div class="text-xs">Télécharger sur</div>
                                <div class="font-medium">App Store</div>
                            </div>
                        </button>
                        <button class="bg-black text-white px-6 py-3 rounded-lg flex items-center gap-2">
                            <i class="fab fa-google-play text-2xl"></i>
                            <div class="text-left">
                                <div class="text-xs">Disponible sur</div>
                                <div class="font-medium">Google Play</div>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="flex-1">
                    <img src="/api/placeholder/400/600" alt="Mobile App" class="w-full max-w-md mx-auto">
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t mt-12">
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
                        <span>DH MAD</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Flatpickr
        flatpickr("#arrivalDate", {
            mode: "single",
            dateFormat: "Y-m-d",
        });

        flatpickr("#departureDate", {
            mode: "single",
            dateFormat: "Y-m-d",
        });
        // User Menu Toggle
        document.getElementById('userMenuBtn').addEventListener('click', function () {
            document.getElementById('userMenu').classList.toggle('hidden');
        });

        // Login Modal Functions
        function openLoginModal() {
            document.getElementById('loginModal').classList.remove('hidden');
        }

        function closeLoginModal() {
            document.getElementById('loginModal').classList.add('hidden');
        }
        // Property Modal Functions
        function openPropertyModal() {
            document.getElementById('propertyModal').classList.remove('hidden');
            // Initialize Swiper when the modal opens
            const swiper = new Swiper('.propertySwiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        }

        function closePropertyModal() {
            document.getElementById('propertyModal').classList.add('hidden');
        }
        // Favorite Button Toggle
        function toggleFavorite(button) {
            const icon = button.querySelector('i');
            icon.classList.toggle('far');
            icon.classList.toggle('fas');
            icon.classList.toggle('text-red-500'); // Add red color when favorited
        }
    </script>

</body>
</html>