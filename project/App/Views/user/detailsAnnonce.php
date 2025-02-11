<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'annonce - Airbnb</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.7/swiper-bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.7/swiper-bundle.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <!-- Nav -->
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

    <main class="max-w-7xl mx-auto px-4 py-8">
        <!-- Gallery -->
        <!-- <div class="swiper mainSwiper mb-8 rounded-2xl overflow-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-[60vh]">
                    <img src="../assets/images/1.jpg" alt="Property" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide h-[60vh]">
                    <img src="../assets/images/2.jpg" alt="Kitchen" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide h-[60vh]">
                    <img src="../../../public/assets/images/3.jpg" alt="Bedroom" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div> -->

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Header -->
                <div class="border-b pb-6 mb-6">
                    <h1 class="text-3xl font-semibold mb-2">Luxueux Appartement avec Vue Panoramique</h1>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="flex items-center">
                                <i class="fas fa-star text-yellow-500 mr-1"></i>
                                <span class="font-medium">4.97</span>
                                <span class="mx-1">·</span>
                                <a href="#reviews" class="underline">286 commentaires</a>
                                <span class="mx-1">·</span>
                                <span>Superhost</span>
                            </span>
                            <p class="text-gray-600">Paris, Île-de-France, France</p>
                        </div>
                    </div>
                </div>

                <!-- Host Info -->
                <div class="flex items-center justify-between border-b pb-6 mb-6">
                    <div class="flex items-center space-x-4">
                        <img src="../assets/images/1.jpg" alt="Host" class="w-14 h-14 rounded-full">
                        <div>
                            <h3 class="font-medium">Logement proposé par Marie</h3>
                            <p class="text-gray-600">Membre depuis 2019</p>
                        </div>
                    </div>
                    <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">
                        Contacter l'hôte
                    </button>
                </div>

                <!-- Features -->
                <div class="border-b pb-6 mb-6">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-home text-2xl"></i>
                            <div>
                                <h3 class="font-medium">Logement entier</h3>
                                <p class="text-gray-600">Vous aurez le logement pour vous</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-broom text-2xl"></i>
                            <div>
                                <h3 class="font-medium">Propre et rangé</h3>
                                <p class="text-gray-600">17 voyageurs récents ont salué la propreté</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-key text-2xl"></i>
                            <div>
                                <h3 class="font-medium">Arrivée autonome</h3>
                                <p class="text-gray-600">Entrée dans les lieux avec boîte à clé sécurisée</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-calendar text-2xl"></i>
                            <div>
                                <h3 class="font-medium">Annulation gratuite</h3>
                                <p class="text-gray-600">Avant le 20 mars</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="border-b pb-6 mb-6">
                    <h2 class="text-2xl font-semibold mb-4">À propos de ce logement</h2>
                    <p class="text-gray-600 mb-4">
                        Magnifique appartement de 85m² situé au cœur de Paris, offrant une vue imprenable sur la ville.
                        Récemment rénové avec des matériaux haut de gamme, cet espace lumineux combine élégance
                        parisienne
                        et confort moderne.
                    </p>
                    <button class="text-black underline font-medium">En savoir plus</button>
                </div>

                <!-- Amenities -->
                <div class="border-b pb-6 mb-6">
                    <h2 class="text-2xl font-semibold mb-6">Ce que propose ce logement</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-wifi"></i>
                            <span>Wifi</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-tv"></i>
                            <span>TV avec Netflix</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-snowflake"></i>
                            <span>Climatisation</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-washer"></i>
                            <span>Lave-linge</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-utensils"></i>
                            <span>Cuisine équipée</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-shower"></i>
                            <span>Salle de bain privée</span>
                        </div>
                    </div>
                    <button class="mt-6 px-6 py-2 border rounded-lg hover:bg-gray-50">
                        Voir les 12 équipements
                    </button>
                </div>

                <!-- Reviews -->
                <div id="reviews" class="border-b pb-6 mb-6">
                    <div class="flex items-center space-x-2 mb-6">
                        <i class="fas fa-star text-yellow-500"></i>
                        <span class="text-2xl font-semibold">4.97</span>
                        <span class="text-gray-600">· 286 commentaires</span>
                    </div>

                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span>Propreté</span>
                                <div class="flex items-center">
                                    <div class="w-32 h-1 bg-gray-200 rounded">
                                        <div class="w-[98%] h-full bg-black rounded"></div>
                                    </div>
                                    <span class="ml-2">4.9</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-2">
                                <span>Communication</span>
                                <div class="flex items-center">
                                    <div class="w-32 h-1 bg-gray-200 rounded">
                                        <div class="w-[96%] h-full bg-black rounded"></div>
                                    </div>
                                    <span class="ml-2">4.8</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Arrivée</span>
                                <div class="flex items-center">
                                    <div class="w-32 h-1 bg-gray-200 rounded">
                                        <div class="w-full h-full bg-black rounded"></div>
                                    </div>
                                    <span class="ml-2">5.0</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span>Précision</span>
                                <div class="flex items-center">
                                    <div class="w-32 h-1 bg-gray-200 rounded">
                                        <div class="w-[98%] h-full bg-black rounded"></div>
                                    </div>
                                    <span class="ml-2">4.9</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-2">
                                <span>Emplacement</span>
                                <div class="flex items-center">
                                    <div class="w-32 h-1 bg-gray-200 rounded">
                                        <div class="w-[96%] h-full bg-black rounded"></div>
                                    </div>
                                    <span class="ml-2">4.8</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Rapport qualité-prix</span>
                                <div class="flex items-center">
                                    <div class="w-32 h-1 bg-gray-200 rounded">
                                        <div class="w-[94%] h-full bg-black rounded"></div>
                                    </div>
                                    <span class="ml-2">4.7</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Individual Reviews -->
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-center space-x-4 mb-4">
                                <img src="../assets/images/2.jpg" alt="Reviewer" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-medium">Sophie</h4>
                                    <p class="text-gray-600">mars 2024</p>
                                </div>
                            </div>
                            <p>Superbe appartement, très bien situé et parfaitement équipé. La vue est magnifique et
                                Marie est une hôte très attentionnée. Je recommande vivement !</p>
                        </div>

                        <div>
                            <div class="flex items-center space-x-4 mb-4">
                                <img src="../assets/images/3.jpg" alt="Reviewer" class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-medium">Thomas</h4>
                                    <p class="text-gray-600">février 2024</p>
                                </div>
                            </div>
                            <p>Emplacement idéal, proche de tout. L'appartement est très propre et confortable.
                                La communication avec Marie était excellente.</p>
                        </div>
                    </div>

                    <button class="mt-6 px-6 py-2 border rounded-lg hover:bg-gray-50">
                        Afficher les 286 commentaires
                    </button>
                </div>
                <div class="swiper mainSwiper mb-8 rounded-2xl overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide h-[60vh]">
                            <img src="../assets/images/1.jpg" alt="Property" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide h-[60vh]">
                            <img src="../assets/images/2.jpg" alt="Kitchen" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide h-[60vh]">
                            <img src="../../../public/assets/images/3.jpg" alt="Bedroom"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <!-- Booking Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    <div class="bg-white p-6 rounded-xl shadow-lg border">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <span class="text-2xl font-semibold">189 €</span>
                                <span class="text-gray-600"> par jour</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-500 mr-1"></i>
                                <span>4.97</span>
                                <span class="mx-1">·</span>
                                <a href="#reviews" class="underline">286 commentaires</a>
                            </div>
                        </div>

                        <form class="space-y-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-1">Arrivée</label>
                                    <input type="date"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-red-500 focus:border-red-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Départ</label>
                                    <input type="date"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-red-500 focus:border-red-500">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-1">Voyageurs</label>
                                <select
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-red-500 focus:border-red-500">
                                    <option>1 voyageur</option>
                                    <option>2 voyageurs</option>
                                    <option>3 voyageurs</option>
                                    <option>4 voyageurs</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span>189 € x 7 nuits</span>
                                    <span>1 323 €</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Frais de ménage</span>
                                    <span>75 €</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Frais de service</span>
                                    <span>198 €</span>
                                </div>
                                <div class="pt-4 border-t flex justify-between font-semibold">
                                    <span>Total</span>
                                    <span>1 596 €</span>
                                </div>
                            </div>

                            <button type="submit" class="w-full bg-red-500 text-white py-3 rounded-lg hover:bg-red-600">
                                Réserver
                            </button>
                        </form>

                        <p class="text-center text-gray-600 text-sm mt-4">
                            Aucun montant ne vous sera débité pour le moment
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </main>

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
        // Initialisation de Swiper
        const swiper = new Swiper('.mainSwiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });

        // Calcul dynamique du prix total
        function updateTotal() {
            const pricePerNight = 189;
            const nights = 7; // À calculer à partir des dates sélectionnées
            const cleaningFee = 75;
            const serviceFee = Math.round(pricePerNight * nights * 0.15);
            return (pricePerNight * nights) + cleaningFee + serviceFee;
        }

        // Gestion des dates
        const dateInputs = document.querySelectorAll('input[type="date"]');
        dateInputs.forEach(input => {
            input.addEventListener('change', () => {
                // Mettre à jour le total lors du changement de dates
                const total = updateTotal();
                document.querySelector('.font-semibold span:last-child').textContent = `${total} €`;
            });
        });
    </script>
</body>

</html>