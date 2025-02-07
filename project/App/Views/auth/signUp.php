<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  
</head>
<body class="bg-white">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            <form class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4" method="POST" action="signup_process.php">
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Créer un compte</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fullName">Nom complet</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fullName" name="fullName" type="text" placeholder="Nom complet" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Mot de passe</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Mot de passe" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="role">Vous êtes</label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="role" name="role">
                        <option value="voyageur">Voyageur</option>
                        <option value="proprietaire">Propriétaire</option>
                    </select>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-[#FF385C] hover:bg-[#E31C5F] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        S'inscrire
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-[#FF385C] hover:text-[#E31C5F]" href="login.php">
                        Se connecter
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>