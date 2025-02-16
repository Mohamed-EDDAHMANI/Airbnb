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
                <a href="/checkout" class="bg-green-600 text-white px-6 py-2 rounded-lg transition duration-300">
                    Coutinue Payment
                </a>
            </div>
            <br>
            <div class="flex justify-center space-x-4">
                <a href="/" class="bg-[#FF385C] text-white px-6 py-2 rounded-lg transition duration-300">
                    Return to Home
                </a>
            </div>

            <div class="mt-6 text-sm text-gray-500">
                <p>Redirecting in <span id="countdown">5</span> seconds...</p>
            </div>
        </div>
    </main>
    <br>
    <br>
    
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
        flatpickr("#arrivalDate", {
            mode: "single",
            dateFormat: "Y-m-d",
        });

        flatpickr("#departureDate", {
            mode: "single",
            dateFormat: "Y-m-d",
        });
        document.getElementById('userMenuBtn').addEventListener('click', function () {
            document.getElementById('userMenu').classList.toggle('hidden');
        });

        function openLoginModal() {
            document.getElementById('loginModal').classList.remove('hidden');
        }

        function closeLoginModal() {
            document.getElementById('loginModal').classList.add('hidden');
        }
        function openPropertyModal() {
            document.getElementById('propertyModal').classList.remove('hidden');
            const swiper = new Swiper('.propertySwiper', {
                direction: 'horizontal',
                loop: true,

                pagination: {
                    el: '.swiper-pagination',
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        }

        function closePropertyModal() {
            document.getElementById('propertyModal').classList.add('hidden');
        }
        function toggleFavorite(button) {
            const icon = button.querySelector('i');
            icon.classList.toggle('far');
            icon.classList.toggle('fas');
            icon.classList.toggle('text-[#FF385C]'); 
        }
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