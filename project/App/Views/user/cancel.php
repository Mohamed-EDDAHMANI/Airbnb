<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Cancelled</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.7/swiper-bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.7/swiper-bundle.min.css" rel="stylesheet">
    <style>
        .custom-bg {
            background: linear-gradient(135deg, rgb(255, 103, 76) 0%, #fda085 100%);
        }
    </style>
</head>

<body class="min-h-screen items-center justify-center bg-[#FF385C]">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="text-[#FF385C] text-2xl font-bold">
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
    <main class="flex justify-center w-full pt-12">
        <div class="bg-white p-8 rounded-xl shadow-2xl text-center max-w-md w-full">
            <svg class="mx-auto mb-6 w-24 h-24 text-[#FF385C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>

            <h1 class="text-3xl font-bold text-[#FF385C] mb-4">Payment Cancelled</h1>

            <p class="text-gray-600 mb-6">Your payment transaction has been cancelled. You will be redirected to the
                home page shortly.</p>

            <div class="flex justify-center space-x-4">
                <a href="/checkout"
                    class="bg-green-600 text-white px-6 py-2 rounded-lg transition duration-300">
                    Coutinue Payment
                </a>
            </div>
            <br>
            <div class="flex justify-center space-x-4">
                <a href="/"
                    class="bg-[#FF385C] text-white px-6 py-2 rounded-lg transition duration-300">
                    Return to Home
                </a>
            </div>

            <div class="mt-6 text-sm text-gray-500">
                <p>Redirecting in <span id="countdown">5</span> seconds...</p>
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
            icon.classList.toggle('text-[#FF385C]'); // Add red color when favorited
        }
        // Countdown timer
        const countdownElement = document.getElementById('countdown');
        let countdown = 5;

        const countdownInterval = setInterval(() => {
            countdown--;
            countdownElement.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(countdownInterval);
                window.location.href = "/";
            }
        }, 2000);
    </script>
</body>

</html>