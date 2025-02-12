<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa de Luxe avec Piscine à Cannes - MaisonLocation</title>
    <meta name="description" content="Superbe villa avec piscine privée à louer à Cannes. 4 chambres, 3 salles de bain, vue mer. Réservez dès maintenant!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <style>
        .swiper {
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navigation (Vous l'avez déjà) -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
      <!-- Votre code de navigation ici -->
      <div class="max-w-7xl mx-auto px-4 py-3">
          <!-- ... (Votre code de navigation existant) ... -->
      </div>
    </nav>

    <main class="mt-20">

        <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">

            <!-- Image Carousel -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/api/placeholder/800/600" alt="Villa à Cannes - Photo 1" class="w-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="/api/placeholder/800/600" alt="Villa à Cannes - Photo 2" class="w-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="/api/placeholder/800/600" alt="Villa à Cannes - Piscine" class="w-full object-cover">
                    </div>
                    <!-- Ajoutez plus de slides avec vos images -->
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <!-- Content Section -->
            <div class="p-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Villa de Luxe avec Piscine Privée - Cannes</h1>

                <div class="flex items-center space-x-4 mb-4">
                    <span class="text-gray-600"><i class="fas fa-map-marker-alt mr-2"></i> Cannes, France</span>
                    <span class="text-gray-600"><i class="fas fa-bed mr-2"></i> 4 Chambres</span>
                    <span class="text-gray-600"><i class="fas fa-bath mr-2"></i> 3 Salles de Bain</span>
                    <span class="text-gray-600"><i class="fas fa-users mr-2"></i> Max. 8 Personnes</span>
                </div>

                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-700 mb-2">Description</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Profitez d'un séjour inoubliable dans cette magnifique villa située à Cannes.  Avec sa piscine privée, ses vastes terrasses et sa vue imprenable sur la mer, cette propriété est idéale pour des vacances en famille ou entre amis.  La villa est entièrement équipée avec des meubles de haute qualité et des équipements modernes pour assurer votre confort.
                    </p>
                </div>

                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-700 mb-2">Équipements</h2>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Piscine Privée</li>
                        <li>Wifi Gratuit</li>
                        <li>Climatisation</li>
                        <li>Cuisine Entièrement Équipée</li>
                        <li>Barbecue</li>
                        <li>Parking Privé</li>
                        <li>Linge de Maison Fourni</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-700 mb-2">Disponibilités et Prix</h2>
                    <p class="text-gray-700">Prix par nuit: <span class="font-bold text-red-500">550€</span></p>
                    <!-- Ajout d'un calendrier ici -->
                </div>

                <div>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline" type="button">
                        Réserver Maintenant
                    </button>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline" type="button">
                        Contacter l'Hôte
                    </button>
                </div>

            </div>
        </div>

        <!-- Similar Listings (peut être implémenté plus tard) -->
        <!-- Section pour afficher des annonces similaires -->

    </main>

    <footer class="bg-gray-200 py-4 text-center text-gray-600 mt-8">
        <p>© 2025 MaisonLocation. Tous droits réservés.</p>
    </footer>

<script>
  var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>

</body>
</html>
