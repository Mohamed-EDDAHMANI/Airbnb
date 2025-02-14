<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #FF385C;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #E31C5F;
        }
    </style>
</head>

<body class="bg-gray-50 antialiased">
    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- Left Side - Visual Section (Hidden on mobile) -->
        <div class="hidden lg:flex lg:w-1/2 bg-cover bg-center relative"
            style="background-image: url('/api/placeholder/1200/800');">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                <h1 class="text-4xl font-bold mb-4">Welcome Back</h1>
                <p class="text-xl">Discover amazing experiences around the world</p>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 lg:p-16">
            <div class="w-full max-w-md space-y-8">
                <!-- Logo and Title -->
                <div class="text-center">
                    <svg class="mx-auto h-12 w-auto" viewBox="0 0 1991.3 2159.5" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1851.5 1841.1c-230.9-183.9-454.5-357.5-656.4-524.5-93.6-77.4-178.1-156.4-247.1-247.6-48.9-65.4-88.9-136.4-114.5-212.7-32.5-96.5-43.6-197.4-35.8-298.5 9.2-117.3 48.4-230.8 113.5-325.4 90.5-129.8 230.4-224.3 387.4-255.5 76.6-15.7 156.9-16.5 234.5-2.2 87.4 16.1 170.2 54.4 239.8 112.5 56.1 46.7 103.4 104.5 137.9 168.6 20.4 37.8 36.3 77.7 47.5 118.5 15.3 56.1 22.8 114.2 22.4 172.4-.6 102.8-24.7 204.9-69.1 297.5-44.8 93.5-109.1 176.9-187.5 244.7 27.9 52.6 63.9 100.7 104.7 142.7 42.5 44.1 89.9 83.1 138.4 119.5 185.9 139.9 386.6 256.6 572.5 395.1 18.5 13.6 30.5 34.5 32.6 57.1 2.1 22.6-5.9 45-22.1 61l-210.9 210.9c-16.9 16.9-42.1 23.4-65.4 16.7-23.3-6.7-42.1-24.4-49.9-47.4z"
                            fill="#FF385C" />
                        <path
                            d="M1406.9 1144.7c36.9-52.6 66.1-109.5 86.5-169.1 40.8-118.2 47.5-247.3 19.4-370.4-27.5-120.1-87.5-230.4-175.9-316.4-76.1-74.5-172.6-127.4-275.8-153.9-131.6-33.7-272.9-19.5-398.3 41.4-102.5 49.5-190.5 127.4-253.1 223.1-64.5 98.7-99.6 214.1-100.2 331.5-.6 117.3 33.1 233.4 96.5 332.5 44.6 69.7 103.4 129.5 170.6 175.5 38.1 25.8 78.5 47.5 121 64.8 48.9-48.3 93.1-100.5 130.6-156.2-75.1-34.5-139.7-87.5-187.5-155.1-64.5-92-94.8-204.1-86-316.4 8.8-112.3 54.4-220.3 129.5-303.8 85.9-96.5 210.3-151.7 338.7-151.7 128.4 0 252.8 55.2 338.7 151.7 75.1 83.5 120.7 191.5 129.5 303.8 8.8 112.3-21.5 224.4-86 316.4-47.8 67.6-112.4 120.6-187.5 155.1 37.5 55.7 81.7 107.9 130.6 156.2 42.5-17.3 82.9-39 121-64.8 67.2-46 126-105.8 170.6-175.5z"
                            fill="#fff" />
                    </svg>
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                        Log in to Airbnb
                    </h2>
                </div>

                <!-- create secces message -->
                <?php if (isset($_SESSION['success']['message'])): ?>
                    <span
                        class="message bg-green-100 text-green-700 px-4 py-2 rounded-md flex items-center gap-2 font-medium shadow-sm border border-red-200 absolute top-4 left-1/2 transform -translate-x-1/2">
                        <!-- Optional: Add an error icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <p><?php echo $_SESSION['success']['message']; ?></p>
                        <?php unset($_SESSION['success']['message']); ?>
                    </span>
                <?php endif; ?>

                <!-- create error message -->
                <?php if (isset($_SESSION['error']['message'])): ?>
                    <span
                        class="message bg-red-100 text-red-700 px-4 py-2 rounded-md flex items-center gap-2 font-medium shadow-sm border border-red-200 absolute top-4 left-1/2 transform -translate-x-1/2">
                        <!-- Optional: Add an error icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <p><?php echo $_SESSION['error']['message']; ?></p>
                        <?php unset($_SESSION['error']['message']); ?>
                    </span>
                <?php endif; ?>

                <!-- Login Form -->
                <form action="/login" class="space-y-6" method="POST">
                    <div class="rounded-md shadow-sm space-y-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Email address
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-feather="mail" class="h-5 w-5 text-gray-400"></i>
                                </div>
                                <input id="email" name="email" type="email" required class="pl-10 block w-full px-3 py-2 border border-gray-300 
                                    placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none 
                                    focus:ring-2 focus:ring-[#FF385C] focus:border-[#FF385C] sm:text-sm"
                                    placeholder="you@example.com">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-feather="lock" class="h-5 w-5 text-gray-400"></i>
                                </div>
                                <input id="password" name="password" type="password" required class="pl-10 block w-full px-3 py-2 border border-gray-300 
                                    placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none 
                                    focus:ring-2 focus:ring-[#FF385C] focus:border-[#FF385C] sm:text-sm"
                                    placeholder="Your password">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <button type="button" id="toggle-password"
                                        class="text-gray-400 hover:text-gray-600">
                                        <i data-feather="eye" class="h-5 w-5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="h-4 w-4 text-[#FF385C] focus:ring-[#FF385C] border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-[#FF385C] hover:text-[#E31C5F]">
                                Forgot password?
                            </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent 
                            text-sm font-medium rounded-lg text-white bg-[#FF385C] 
                            hover:bg-[#E31C5F] focus:outline-none focus:ring-2 
                            focus:ring-offset-2 focus:ring-[#FF385C] transition duration-300 
                            ease-in-out transform hover:scale-105">
                            Log in
                        </button>
                    </div>
                </form>

                <!-- Divider -->
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">
                            Or continue with
                        </span>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <a href="<?= $data ?>" method="GET" class="w-full flex items-center justify-center px-4 py-2 
                            border border-gray-300 rounded-lg shadow-sm text-sm font-medium 
                            text-gray-700 bg-white hover:bg-gray-50 transition duration-300 
                            ease-in-out transform hover:scale-105">
                            <i data-feather="google" class="h-5 w-5 mr-2"></i>
                            Google
                        </a>
                    </div>
                    <div>
                        <button class="w-full flex items-center justify-center px-4 py-2 
                            border border-gray-300 rounded-lg shadow-sm text-sm font-medium 
                            text-gray-700 bg-white hover:bg-gray-50 transition duration-300 
                            ease-in-out transform hover:scale-105">
                            <i data-feather="facebook" class="h-5 w-5 mr-2"></i>
                            Facebook
                        </button>
                    </div>
                </div>

                <!-- Sign Up Link -->
                <div class="text-center">
                    <p class="mt-6 text-sm text-gray-600">
                        Don't have an account?
                        <a href="#" class="font-medium text-[#FF385C] hover:text-[#E31C5F]">
                            Sign up
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize Feather Icons
        feather.replace();

        // Password Toggle Visibility
        const passwordInput = document.getElementById('password');
        const togglePasswordBtn = document.getElementById('toggle-password');

        togglePasswordBtn.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle eye icon
            const icon = this.querySelector('i');
            icon.setAttribute('data-feather', type === 'password' ? 'eye' : 'eye-off');
            feather.replace();
        });

        const message = document.querySelector('.message');
        if (message) {
            setTimeout(() => {
                message.remove();
            }, 3000);
        }

    </script>
</body>

</html>