}

function createMessageElement(text, sender) {
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${sender}`;

    const now = new Date();
    const timeString = now.toLocaleTimeString('fr-FR', {
        hour: '2-digit',
        minute: '2-digit'
    });

    const headerText = sender === 'traveler' ? `Voyageur - ${timeString}` : `Propriétaire - ${timeString}`;

    messageDiv.innerHTML = `
        <div class="message-header">${headerText}</div>
        <div>${escapeHTML(text)}</div>
    `;

    return messageDiv;
}

function simulateOwnerReply(travelerMessage) {
    // Show typing indicator
    typingIndicator.style.display = 'flex';

    const replies = {
        'bonjour': [
            'Bonjour! Comment puis-je vous aider aujourd\'hui?',
            'Bienvenue! Je suis ravi de discuter de cette location.'
        ],
        'heure': [
            'L\'enregistrement est possible à partir de 14h.',
            'Vous pouvez arriver à partir de 14h pour l\'enregistrement.'
        ],
        'clés': [
            'Je vous enverrai les instructions pour récupérer les clés par e-mail.',
            'Les détails pour la récupération des clés vous seront communiqués très prochainement.'
        ],
        'parking': [
            'Un parking est disponible gratuitement pour les locataires.',
            'Un espace de stationnement est inclus avec la location.'
        ],
        'wifi': [
            'Le code Wi-Fi sera fourni lors de votre arrivée.',
            'Un accès Wi-Fi haut débit est disponible dans l\'appartement.'
        ],
        'petit-déjeuner': [
            'Le petit-déjeuner est inclus dans la réservation.',
            'Un petit-déjeuner continental vous sera servi chaque matin.'
        ],
        'annulation': [
            'La politique d\'annulation est flexible jusqu\'à 48h avant l\'arrivée.',
            'Vous pouvez annuler gratuitement jusqu\'à 48h avant votre arrivée.'
        ],
        'check-out': [
            'L\'heure de départ est fixée à 11h.',
            'Merci de libérer l\'appartement avant 11h le jour de votre départ.'
        ],
        'default': [
            'Merci pour votre message. Je vais y répondre dans les meilleurs délais.',
            'Je suis à votre écoute. Comment puis-je vous aider?'
        ]
    };

    const replyKey = Object.keys(replies).find(key =>
        travelerMessage.toLowerCase().includes(key)
    ) || 'default';

    // Randomly select a reply from the possible options
    const replyOptions = replies[replyKey];
    const replyText = replyOptions[Math.floor(Math.random() * replyOptions.length)];

    // Simulate typing delay
    setTimeout(() => {
        // Hide typing indicator
        typingIndicator.style.display = 'none';

        // Add owner message
        addMessageToChat(replyText, 'owner');
    }, 1500);
}

// Escape HTML to prevent XSS
function escapeHTML(str) {
    return str.replace(/[&<>'"]/g,
        tag => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            "'": '&#39;',
            '"': '&quot;'
        }[tag] || tag));
}

// Initial state
sendButton.disabled = true;

// Welcome message simulation
function simulateWelcomeMessage() {
    const welcomeMessages = [
        'Je suis ravi de vous accueillir dans mon logement à Paris!',
        'N\'hésitez pas à me poser toutes vos questions sur la réservation ou le logement.',
        'Je serai disponible pour vous aider à tout moment.',
        'Bienvenue! Je suis à votre disposition pour rendre votre séjour inoubliable.'
    ];

    const randomMessage = welcomeMessages[Math.floor(Math.random() * welcomeMessages.length)];
    
    setTimeout(() => {
        addMessageToChat(randomMessage, 'owner');
    }, 2000);
}

// Conversation search functionality
const searchInput = document.querySelector('.search-input');
const conversationItems = document.querySelectorAll('.conversation-item');

searchInput.addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();

    conversationItems.forEach(item => {
        const name = item.querySelector('.conversation-name').textContent.toLowerCase();
        const preview = item.querySelector('.conversation-preview').textContent.toLowerCase();
        
        if (name.includes(searchTerm) || preview.includes(searchTerm)) {
            item.style.display = 'flex';
        } else {
            item.style.display = 'none';
        }
    });
});

// Call welcome message on page load
simulateWelcomeMessage();
});
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat Location - Propriétés</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<style>
:root {
--primary-color: #FF385C;
--primary-color-dark: #E61E4D;
--background-color: #F3F4F6;
--white: #FFFFFF;
--text-color: #1F2937;
--text-color-light: #6B7280;
--border-color: #E5E7EB;
--shadow-color: rgba(0, 0, 0, 0.1);
--traveler-bg: #FFE5E5;
--owner-bg: #E6F2FF;
}

* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
background-color: var(--background-color);
color: var(--text-color);
line-height: 1.6;
}

.container {
display: flex;
max-width: 1400px;
margin: 0 auto;
height: 100vh;
background-color: var(--white);
box-shadow: 0 4px 6px var(--shadow-color);
}

/* Conversations Sidebar */
.conversations-sidebar {
width: 350px;
border-right: 1px solid var(--border-color);
background-color: var(--white);
display: flex;
flex-direction: column;
}

.sidebar-header {
display: flex;
justify-content: space-between;
align-items: center;
padding: 20px;
background-color: var(--primary-color);
color: var(--white);
}

.sidebar-header h2 {
font-size: 1.25rem;
font-weight: 600;
display: flex;
align-items: center;
gap: 10px;
}

.search-container {
padding: 15px;
border-bottom: 1px solid var(--border-color);
}

.search-input {
width: 100%;
padding: 10px;
border: 1px solid var(--border-color);
border-radius: 25px;
font-size: 0.9rem;
transition: border-color 0.3s ease;
}

.search-input:focus {
outline: none;
border-color: var(--primary-color);
box-shadow: 0 0 0 2px rgba(255, 56, 92, 0.2);
}

.conversations-list {
flex-grow: 1;
overflow-y: auto;
}

.conversation-item {
display: flex;
align-items: center;
padding: 15px;
border-bottom: 1px solid var(--border-color);
cursor: pointer;
transition: background-color 0.3s ease;
}

.conversation-item:hover {
background-color: var(--background-color);
}

.conversation-item.active {
background-color: var(--primary-color);
color: var(--white);
}

.conversation-avatar {
width: 50px;
height: 50px;
border-radius: 50%;
margin-right: 15px;
object-fit: cover;
}

.conversation-details {
flex-grow: 1;
}

.conversation-name {
font-weight: 600;
margin-bottom: 5px;
}

.conversation-preview {
font-size: 0.8rem;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}

.conversation-time {
font-size: 0.7rem;
}

/* Chat Window */
.chat-window {
flex-grow: 1;
display: flex;
flex-direction: column;
}

.chat-header {
display: flex;
justify-content: space-between;
align-items: center;
padding: 20px;
border-bottom: 1px solid var(--border-color);
}

.chat-header-info {
display: flex;
align-items: center;
}

.chat-header-avatar {
width: 45px;
height: 45px;
border-radius: 50%;
margin-right: 15px;
object-fit: cover;
}

.chat-header-details h3 {
font-weight: 600;
}

.chat-header-details p {
font-size: 0.8rem;
}

.chat-header-actions {
display: flex;
gap: 15px;
color: var(--primary-color);
}

.chat-header-actions i {
cursor: pointer;
transition: color 0.3s ease;
}

.chat-header-actions i:hover {
color: var(--primary-color-dark);
}

.chat-messages {
flex-grow: 1;
overflow-y: auto;
padding: 20px;
background-color: var(--background-color);
display: flex;
flex-direction: column;
}

.message {
max-width: 70%;
margin-bottom: 15px;
padding: 12px 15px;
border-radius: 12px;
clear: both;
position: relative;
animation: fadeIn 0.3s ease;
}

.message.traveler {
background-color: var(--traveler-bg);
align-self: flex-end;
border-bottom-right-radius: 0;
}

.message.owner {
background-color: var(--owner-bg);
align-self: flex-start;
border-bottom-left-radius: 0;
}

.message-header {
display: flex;
justify-content: space-between;
margin-bottom: 5px;
font-size: 0.7rem;
}

.typing-indicator {
display: flex;
align-items: center;
gap: 5px;
font-size: 0.8rem;
padding: 0 20px 10px;
}

.typing-indicator span {
width: 6px;
height: 6px;
background-color: var(--primary-color);
border-radius: 50%;
animation: typingDots 1.4s infinite;
display: inline-block;
}

.typing-indicator span:nth-child(2) {
animation-delay: 0.2s;
}

.typing-indicator span:nth-child(3) {
animation-delay: 0.4s;
}

@keyframes typingDots {
0%, 60%, 100% { opacity: 0.2; }
30% { opacity: 1; }
}

@keyframes fadeIn {
from { opacity: 0; transform: translateY(10px); }
to { opacity: 1; transform: translateY(0); }
}

.property-details {
background-color: var(--white);
border: 1px solid var(--border-color);
border-radius: 8px;
padding: 15px;
margin: 15px;
}

.chat-input {
display: flex;
padding: 15px;
background-color: var(--white);
border-top: 1px solid var(--border-color);
}

.chat-input input {
flex-grow: 1;
padding: 12px;
border: 1px solid var(--border-color);
border-radius: 25px;
margin-right: 10px;
transition: border-color 0.3s ease;
}

.chat-input input:focus {
outline: none;
border-color: var(--primary-color);
box-shadow: 0 0 0 2px rgba(255, 56, 92, 0.2);
}

.chat-input button {
padding: 12px 20px;
background-color: var(--primary-color);
color: var(--white);
border: none;
border-radius: 25px;
cursor: pointer;
transition: background-color 0.3s ease;
display: flex;
align-items: center;
gap: 8px;
}

.chat-input button:hover {
background-color: var(--primary-color-dark);
}

.chat-input button:disabled {
background-color: #b0b0b0;
cursor: not-allowed;
}

@media (max-width: 1024px) {
.container {
    flex-direction: column;
}

.conversations-sidebar {
    width: 100%;
    max-height: 300px;
}
}
</style>
</head>
<body>
<div class="container">
<!-- Conversations Sidebar -->
<div class="conversations-sidebar">
<div class="sidebar-header">
    <h2>
        <i class="fas fa-comments"></i>
        Mes Conversations
    </h2>
    <i class="fas fa-edit"></i>
</div>

<div class="search-container">
    <input type="text" class="search-input" placeholder="Rechercher une conversation...">
</div>

<div class="conversations-list">
    <div class="conversation-item active">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Avatar" class="conversation-avatar">
        <div class="conversation-details">
            <div class="conversation-name">Marie Dupont</div>
            <div class="conversation-preview">Je suis intéressé par votre propriété...</div>
        </div>
        <div class="conversation-time">10:30</div>
    </div>

    <div class="conversation-item">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Avatar" class="conversation-avatar">
        <div class="conversation-details">
            <div class="conversation-name">Jean Martin</div>
            <div class="conversation-preview">Des questions sur les dates de...</div>
        </div>
        <div class="conversation-time">Hier</div>
    </div>

    <div class="conversation-item">
        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Avatar" class="conversation-avatar">
        <div class="conversation-details">
            <div class="conversation-name">Sophie Leroy</div>
            <div class="conversation-preview">Confirmation de la réservation</div>
        </div>
        <div class="conversation-time">12 Juin</div>
    </div>
</div>
</div>

<!-- Chat Window -->
<div class="chat-window">
<div class="chat-header">
    <div class="chat-header-info">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Avatar" class="chat-header-avatar">
        <div class="chat-header-details">
            <h3>Marie Dupont</h3>
            <p>Dernière activité il y a 5 minutes</p>
        </div>
    </div>
    <div class="chat-header-actions">
        <i class="fas fa-phone" title="Appeler"></i>
        <i class="fas fa-video" title="Appel vidéo"></i>
        <i class="fas fa-ellipsis-v" title="Plus d'options"></i>
    </div>
</div>

<div class="chat-messages" id="chatMessages">
    <div class="message owner">
        <div class="message-header">Propriétaire - 10:30</div>
        <div>Bonjour, bienvenue pour votre réservation! Je suis à votre disposition pour toute question.</div>
    </div>
</div>

<div class="typing-indicator" id="typingIndicator" style="display: none;">
    <span></span>
    <span></span>
    <span></span>
    Le propriétaire est en train d'écrire...
</div>

<div class="property-details">
    <h4>Détails de la Propriété</h4>
    <p><strong>Adresse:</strong> 15 Rue de la Paix, 75008 Paris</p>
    <p><strong>Type:</strong> Appartement 2 chambres</p>
    <p><strong>Superficie:</strong> 80m²</p>
    <p><strong>Prix:</strong> 250€ / nuit</p>
</div>

<div class="chat-input">
    <input type="text" id="messageInput" placeholder="Écrivez votre message..." maxlength="500">
    <button id="sendButton">
        <i class="fas fa-paper-plane"></i>
        Envoyer
    </button>
</div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const chatMessages = document.getElementById('chatMessages');
    const messageInput = document.getElementById('messageInput');
    const sendButton = document.getElementById('sendButton');
    const typingIndicator = document.getElementById('typingIndicator');
    const conversationItems = document.querySelectorAll('.conversation-item');

    // Gestionnaire de conversations
    conversationItems.forEach(item => {
        item.addEventListener('click', () => {
            // Retire la classe active de tous les éléments
            conversationItems.forEach(i => i.classList.remove('active'));
            // Ajoute la classe active à l'élément cliqué
            item.classList.add('active');
            
            // Met à jour l'en-tête du chat
            updateChatHeader(item);
            
            // Vide le chat actuel
            chatMessages.innerHTML = '';
            
            // Simule un nouveau message de bienvenue
            simulateWelcomeMessage();
        });
    });

    // Fonction pour mettre à jour l'en-tête du chat
    function updateChatHeader(conversationItem) {
        const avatar = conversationItem.querySelector('.conversation-avatar').src;
        const name = conversationItem.querySelector('.conversation-name').textContent;
        
        document.querySelector('.chat-header-avatar').src = avatar;
        document.querySelector('.chat-header-details h3').textContent = name;
        document.querySelector('.chat-header-details p').textContent = 'Dernière activité il y a 5 minutes';
    }

    // Système de notifications
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.textContent = message;
        document.body.appendChild(notification);

        setTimeout(() => {
            notification.classList.add('show');
            setTimeout(() => {
                notification.classList.remove('show');
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }, 100);
    }

    // Système de réponses automatiques avancé
    function generateAutoReply(message) {
        const keywords = {
            'prix': ['Le prix est de 250€ par nuit, tout compris.', 'La tarification est de 250€ la nuitée.'],
            'réservation': ['Pour réserver, il suffit de cliquer sur le bouton "Réserver" en haut de la page.', 
                           'Je peux vous aider avec le processus de réservation.'],
            'services': ['Nous offrons le Wi-Fi, le petit-déjeuner et un service de ménage quotidien.',
                        'Parmi nos services : Wi-Fi gratuit, petit-déjeuner inclus et ménage quotidien.'],
            'localisation': ['L\'appartement est situé en plein cœur de Paris, dans le 8ème arrondissement.',
                           'Nous sommes idéalement situés, à 5 minutes à pied des Champs-Élysées.'],
            'transport': ['La station de métro la plus proche est à 3 minutes à pied.',
                         'Vous avez accès aux lignes 1, 8 et 12 du métro à proximité.']
        };

        // Recherche de mots-clés dans le message
        for (const [key, responses] of Object.entries(keywords)) {
            if (message.toLowerCase().includes(key)) {
                return responses[Math.floor(Math.random() * responses.length)];
            }
        }

        // Réponse par défaut si aucun mot-clé n'est trouvé
        const defaultResponses = [
            'Je suis là pour répondre à toutes vos questions.',
            'N\'hésitez pas à me poser d\'autres questions.',
            'Je peux vous aider à planifier votre séjour.',
            'Avez-vous d\'autres questions sur l\'appartement ?'
        ];

        return defaultResponses[Math.floor(Math.random() * defaultResponses.length)];
    }

    // Système de sauvegarde des messages
    const messageHistory = {
        messages: [],
        addMessage(text, sender, timestamp) {
            this.messages.push({ text, sender, timestamp });
            this.saveToLocalStorage();
        },
        saveToLocalStorage() {
            localStorage.setItem('chatHistory', JSON.stringify(this.messages));
        },
        loadFromLocalStorage() {
            const saved = localStorage.getItem('chatHistory');
            if (saved) {
                this.messages = JSON.parse(saved);
                return true;
            }
            return false;
        },
        clearHistory() {
            this.messages = [];
            localStorage.removeItem('chatHistory');
        }
    };

    // Événements pour le chat
    messageInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            sendMessage();
        }
    });

    messageInput.addEventListener('input', () => {
        sendButton.disabled = messageInput.value.trim() === '';
    });

    sendButton.addEventListener('click', sendMessage);

    // Gestion des pièces jointes
    const attachmentButton = document.createElement('button');
    attachmentButton.innerHTML = '<i class="fas fa-paperclip"></i>';
    attachmentButton.className = 'attachment-button';
    document.querySelector('.chat-input').insertBefore(attachmentButton, messageInput);

    // Fonction pour gérer les pièces jointes
    function handleAttachment() {
        const fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.accept = 'image/*,.pdf,.doc,.docx';
        fileInput.multiple = true;

        fileInput.addEventListener('change', async (e) => {
            const files = Array.from(e.target.files);
            for (const file of files) {
                if (file.size > 5 * 1024 * 1024) { // 5MB limit
                    showNotification('Le fichier est trop volumineux (max 5MB)');
                    continue;
                }

                await handleFileUpload(file);
            }
        });

        fileInput.click();
    }

    // Gestion du téléchargement des fichiers
    async function handleFileUpload(file) {
        try {
            const reader = new FileReader();
            reader.onload = async (e) => {
                const filePreview = createFilePreview(file);
                chatMessages.appendChild(filePreview);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                
                // Simuler une réponse pour les fichiers
                setTimeout(() => {
                    const response = `J'ai bien reçu votre fichier "${file.name}". Je vais l'examiner.`;
                    addMessageToChat(response, 'owner');
                }, 1500);
            };
            
            if (file.type.startsWith('image/')) {
                reader.readAsDataURL(file);
            } else {
                reader.readAsText(file);
            }
        } catch (error) {
            console.error('Erreur lors du téléchargement:', error);
            showNotification('Erreur lors du téléchargement du fichier');
        }
    }

    // Créer un aperçu de fichier
    function createFilePreview(file) {
        const previewDiv = document.createElement('div');
        previewDiv.className = 'message traveler file-message';

        const fileIcon = document.createElement('i');
        fileIcon.className = file.type.startsWith('image/') ? 'fas fa-image' : 'fas fa-file';

        const fileName = document.createElement('span');
        fileName.textContent = file.name;

        const fileSize = document.createElement('span');
        fileSize.textContent = formatFileSize(file.size);

        previewDiv.appendChild(fileIcon);
        previewDiv.appendChild(fileName);
        previewDiv.appendChild(fileSize);

        return previewDiv;
    }

    // Formater la taille du fichier
    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    // Modération automatique des messages
    function moderateMessage(text) {
        const forbiddenWords = ['spam', 'arnaque', 'illegal'];
        let moderatedText = text;

        forbiddenWords.forEach(word => {
            const regex = new RegExp(word, 'gi');
            moderatedText = moderatedText.replace(regex, '***');
        });

        return moderatedText;
    }

    // Système de suggestions de réponse
    function addQuickReplies() {
        const quickRepliesContainer = document.createElement('div');
        quickRepliesContainer.className = 'quick-replies';
        
        const commonReplies = [
            'Merci beaucoup !',
            'D\'accord, je comprends.',
            'Pouvez-vous me donner plus de détails ?',
            'Quelle est l\'adresse exacte ?'
        ];

        commonReplies.forEach(reply => {
            const button = document.createElement('button');
            button.className = 'quick-reply-button';
            button.textContent = reply;
            button.addEventListener('click', () => {
                messageInput.value = reply;
                sendButton.disabled = false;
            });
            quickRepliesContainer.appendChild(button);
        });

        document.querySelector('.chat-input').insertBefore(quickRepliesContainer, messageInput);
    }

    // Système de lecture/non-lecture des messages
    function updateMessageStatus(messageElement, status) {
        const statusDiv = document.createElement('div');
        statusDiv.className = 'message-status';
        statusDiv.innerHTML = status === 'read' ? 
            '<i class="fas fa-check-double"></i> Lu' : 
            '<i class="fas fa-check"></i> Envoyé';
        messageElement.appendChild(statusDiv);
    }

    // Ajout des gestionnaires d'événements pour les nouvelles fonctionnalités
    attachmentButton.addEventListener('click', handleAttachment);
    addQuickReplies();

    // Initialisation
    messageHistory.loadFromLocalStorage();
    simulateWelcomeMessage();
});