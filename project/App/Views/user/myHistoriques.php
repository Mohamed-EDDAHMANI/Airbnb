<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des Réservations - Airbnb</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
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
                <!-- <div class="hidden md:flex items-center space-x-8">
                    <a href="#featured" class="text-gray-600 hover:text-gray-900">Découvrir</a>
                    <a href="#destinations" class="text-gray-600 hover:text-gray-900">Destinations</a>
                    <a href="#experiences" class="text-gray-600 hover:text-gray-900">Expériences</a>
                    <a href="#contact" class="text-gray-600 hover:text-gray-900">Contact</a>
                    <a href="#about" class="text-gray-600 hover:text-gray-900">À propos</a>
                </div> -->

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

    <!-- Main Content -->
    <main class="pt-20 pb-12 px-4 max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="mb-8">
            <br>
            <h1 class="text-3xl font-bold mb-4">Historique des Réservations</h1>
            <div class="flex flex-wrap items-center justify-between gap-4">
                <!-- Filters -->
                <div class="flex flex-wrap gap-4">
                    <select
                        class="px-4 py-2 border rounded-full hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-[#FF385C]">
                        <option value="">Toutes les dates</option>
                        <option value="last-3-months">3 derniers mois</option>
                        <option value="last-6-months">6 derniers mois</option>
                        <option value="last-year">Année dernière</option>
                    </select>
                    <select
                        class="px-4 py-2 border rounded-full hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-[#FF385C]">
                        <option value="">Tous les statuts</option>
                        <option value="completed">Terminé</option>
                        <option value="cancelled">Annulé</option>
                        <option value="upcoming">À venir</option>
                    </select>
                </div>
                <!-- Export Button -->
                <button
                    class="px-6 py-2 bg-[#FF385C] text-white rounded-full hover:bg-[#FF385C]/90 transition-colors flex items-center gap-2">
                    <i class="fas fa-download"></i>
                    Exporter
                </button>
            </div>
        </div>

        <!-- Reservations Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Reservation Card 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="../../../public/assets/images/1.jpg" alt="Villa de Luxe" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-bold text-lg mb-1">Villa de Luxe avec Piscine</h3>
                            <p class="text-gray-600">Cannes, France</p>
                        </div>
                        <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Terminé</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar mr-2"></i>
                            <span>15 - 22 Jan 2024</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-user-friends mr-2"></i>
                            <span>4 voyageurs</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-euro-sign mr-2"></i>
                            <span>1,500 €</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button
                            class="flex-1 px-4 py-2 border border-[#FF385C] text-[#FF385C] rounded-lg hover:bg-[#FF385C] hover:text-white transition-colors">
                            Réserver à nouveau
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            <i class="fas fa-receipt"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Reservation Card 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="../../../public/assets/images/2.jpg" alt="Appartement Moderne" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-bold text-lg mb-1">Appartement Moderne</h3>
                            <p class="text-gray-600">Paris, France</p>
                        </div>
                        <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">Annulé</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar mr-2"></i>
                            <span>5 - 10 Déc 2023</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-user-friends mr-2"></i>
                            <span>2 voyageurs</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-euro-sign mr-2"></i>
                            <span>800 €</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button
                            class="flex-1 px-4 py-2 border border-[#FF385C] text-[#FF385C] rounded-lg hover:bg-[#FF385C] hover:text-white transition-colors">
                            Réserver à nouveau
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            <i class="fas fa-receipt"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Reservation Card 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="../../../public/assets/images/3.jpg" alt="Chalet en Montagne" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-bold text-lg mb-1">Chalet en Montagne</h3>
                            <p class="text-gray-600">Chamonix, France</p>
                        </div>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">À venir</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-calendar mr-2"></i>
                            <span>1 - 8 Mar 2024</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-user-friends mr-2"></i>
                            <span>6 voyageurs</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-euro-sign mr-2"></i>
                            <span>2,200 €</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button
                            class="flex-1 px-4 py-2 bg-[#FF385C] text-white rounded-lg hover:bg-[#FF385C]/90 transition-colors">
                            Modifier
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            <i class="fas fa-receipt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <nav class="flex items-center gap-2">
                <button class="p-2 border rounded-full hover:bg-gray-50 disabled:opacity-50" disabled>
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-[#FF385C] text-white">1</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-50">2</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-50">3</button>
                <button class="p-2 border rounded-full hover:bg-gray-50">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </nav>
        </div>
    </main>

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

    <!-- Bibliothèque jsPDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<!-- Bibliothèque html2canvas pour la capture d'écran (optionnel) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
class PDFGenerator {
    constructor() {
        this.initializeEventListeners();
    }

    initializeEventListeners() {
        const receiptButtons = document.querySelectorAll('.fa-receipt');
        receiptButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const reservationCard = e.target.closest('.bg-white.rounded-xl');
                if (reservationCard) {
                    this.generateReservationPDF(reservationCard);
                }
            });
        });
    }

    async generateReservationPDF(reservationCard) {
        try {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF('p', 'mm', 'a4');
            
            const pageWidth = 210;
            const pageHeight = 297;
            const margin = 10;

            const airbnbPink = [255, 56, 92];
            const lightGray = [150, 150, 150];

            doc.setFillColor(...airbnbPink);
            doc.rect(0, 0, pageWidth, 30, 'F');
            doc.setTextColor(255, 255, 255);
            doc.setFontSize(16);
            doc.setFont('helvetica', 'bold');
            doc.text('Airbnb - Détails de Réservation', pageWidth / 2, 20, { align: 'center' });

            const propertyName = reservationCard.querySelector('h3').textContent;
            const propertyLocation = reservationCard.querySelector('p.text-gray-600').textContent;
            const dates = reservationCard.querySelector('.flex.items-center:nth-child(1) span').textContent;
            const guests = reservationCard.querySelector('.flex.items-center:nth-child(2) span').textContent;
            const price = reservationCard.querySelector('.flex.items-center:nth-child(3) span').textContent;
            const status = reservationCard.querySelector('span[class*="px-3 py-1"]').textContent;

            const propertyImage = reservationCard.querySelector('img');
            
            doc.setFont('helvetica', 'normal');
            doc.setTextColor(0, 0, 0);

            if (propertyImage) {
                try {
                    const imgData = await this.getBase64Image(propertyImage.src);
                    doc.addImage(imgData, 'JPEG', margin, 40, pageWidth - 2*margin, 80, '', 'FAST');
                } catch (imgError) {
                    console.warn('Impossible de charger l\'image:', imgError);
                }
            }

            let yPos = 130;
            doc.setFontSize(14);
            doc.setTextColor(...airbnbPink);
            doc.text(propertyName, pageWidth / 2, yPos, { align: 'center' });

            doc.setFontSize(10);
            doc.setTextColor(0, 0, 0);
            yPos += 10;
            doc.text(`Localisation: ${propertyLocation}`, margin, yPos);
            yPos += 8;
            doc.text(`Dates: ${dates}`, margin, yPos);
            yPos += 8;
            doc.text(`Nombre de voyageurs: ${guests}`, margin, yPos);
            yPos += 8;
            doc.text(`Prix total: ${price}`, margin, yPos);
            yPos += 8;
            doc.text(`Statut: ${status}`, margin, yPos);

            yPos += 15;
            doc.setFillColor(240, 240, 240);
            doc.rect(margin, yPos, pageWidth - 2*margin, 30, 'F');
            doc.setTextColor(0, 0, 0);
            doc.setFontSize(9);
            
            yPos += 10;
            doc.text('Informations supplémentaires:', margin, yPos);
            yPos += 8;
            doc.text('- Réservation effectuée via Airbnb', margin + 5, yPos);
            yPos += 6;
            doc.text('- Politique d\'annulation applicable', margin + 5, yPos);

            doc.setLineWidth(0.5);
            doc.setDrawColor(...lightGray);
            doc.line(margin, pageHeight - 20, pageWidth - margin, pageHeight - 20);
            
            doc.setFontSize(8);
            doc.setTextColor(...lightGray);
            doc.text('Généré par Airbnb', margin, pageHeight - 10);
            doc.text(new Date().toLocaleDateString(), pageWidth - margin, pageHeight - 10, { align: 'right' });

            doc.save(`Reservation_${propertyName.replace(/\s+/g, '_')}.pdf`);

            NotificationManager.show('PDF téléchargé avec succès !');

        } catch (error) {
            console.error('Erreur lors de la génération du PDF:', error);
            NotificationManager.show('Erreur lors du téléchargement du PDF', 'error');
        }
    }

    getBase64Image(imgUrl) {
        return new Promise((resolve, reject) => {
            const img = new Image();
            img.crossOrigin = 'Anonymous'; 
            img.onload = () => {
                const canvas = document.createElement('canvas');
                canvas.width = img.width;
                canvas.height = img.height;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(img, 0, 0);
                const dataURL = canvas.toDataURL('image/jpeg');
                resolve(dataURL);
            };
            img.onerror = reject;
            img.src = imgUrl;
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    window.pdfGenerator = new PDFGenerator();
});
</script>  
</body>

</html>