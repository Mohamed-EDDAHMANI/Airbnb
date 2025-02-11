
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réservation Airbnb</title>
    <style>
        .hidden { display: none; }
        .booking-form { max-width: 400px; margin: auto; }
        .error { color: red; }
    </style>
</head>
<body>
    <div id="bookingContainer">
        <button id="showBookingBtn">Vérifier la disponibilité</button>
        
        <form id="reservationForm" class="booking-form hidden">
            <h2>Réserver</h2>
            <div>
                <label>Prix: 129€ par nuit</label>
            </div>
            
            <div>
                <label for="arrival">Arrivée</label>
                <input 
                    type="date" 
                    id="arrival" 
                    name="arrival" 
                    required
                >
            </div>
            
            <div>
                <label for="departure">Départ</label>
                <input 
                    type="date" 
                    id="departure" 
                    name="departure" 
                    required
                >
            </div>
            
            <div>
                <label for="guests">Voyageurs</label>
                <select id="guests" name="guests">
                    <option value="1">1 voyageur</option>
                    <option value="2">2 voyageurs</option>
                    <option value="3">3 voyageurs</option>
                    <option value="4">4+ voyageurs</option>
                </select>
            </div>
            
            <div id="errorMessage" class="error"></div>
            
            <button type="submit">Réserver</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showBookingBtn = document.getElementById('showBookingBtn');
            const reservationForm = document.getElementById('reservationForm');
            const arrivalInput = document.getElementById('arrival');
            const departureInput = document.getElementById('departure');
            const errorMessage = document.getElementById('errorMessage');

            // Afficher le formulaire de réservation
            showBookingBtn.addEventListener('click', function() {
                showBookingBtn.style.display = 'none';
                reservationForm.classList.remove('hidden');
            });

            // Validation des dates
            function setMinDates() {
                const today = new Date().toISOString().split('T')[0];
                arrivalInput.min = today;
                departureInput.min = arrivalInput.value || today;
            }

            arrivalInput.addEventListener('change', setMinDates);
            departureInput.addEventListener('change', setMinDates);

            // Soumission du formulaire
            reservationForm.addEventListener('submit', function(e) {
                e.preventDefault();
                errorMessage.textContent = '';

                // Validation simple
                if (!arrivalInput.value || !departureInput.value) {
                    errorMessage.textContent = 'Veuillez sélectionner les dates';
                    return;
                }

                const formData = {
                    arrival: arrivalInput.value,
                    departure: departureInput.value,
                    guests: document.getElementById('guests').value,
                    property_id: '123'
                };

                // Simulation d'envoi de réservation
                fetch('/make_reservation', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(formData)
                })
                .then(response => {
                    if (response.ok) {
                        alert('Réservation réussie!');
                        reservationForm.reset();
                    } else {
                        errorMessage.textContent = 'Erreur lors de la réservation';
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    errorMessage.textContent = 'Erreur de connexion';
                });
            });
        });
    </script>
</body>
</html>