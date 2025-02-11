<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
    <style>
        .role-card {
            transition: all 0.3s ease;
        }
        .role-card.selected {
            border-color: #FF385C;
            box-shadow: 0 0 0 3px rgba(255, 56, 92, 0.2);
        }
        #profileImagePreview {
            max-width: 200px;
            max-height: 200px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center px-4 py-8">
    <div class="w-full max-w-2xl bg-white shadow-2xl rounded-2xl p-8">
        <div class="text-center mb-8">
            <svg class="mx-auto h-16 w-auto" viewBox="0 0 1991.3 2159.5" xmlns="http://www.w3.org/2000/svg">
                <path d="M1851.5 1841.1c-230.9-183.9-454.5-357.5-656.4-524.5-93.6-77.4-178.1-156.4-247.1-247.6-48.9-65.4-88.9-136.4-114.5-212.7-32.5-96.5-43.6-197.4-35.8-298.5 9.2-117.3 48.4-230.8 113.5-325.4 90.5-129.8 230.4-224.3 387.4-255.5 76.6-15.7 156.9-16.5 234.5-2.2 87.4 16.1 170.2 54.4 239.8 112.5 56.1 46.7 103.4 104.5 137.9 168.6 20.4 37.8 36.3 77.7 47.5 118.5 15.3 56.1 22.8 114.2 22.4 172.4-.6 102.8-24.7 204.9-69.1 297.5-44.8 93.5-109.1 176.9-187.5 244.7 27.9 52.6 63.9 100.7 104.7 142.7 42.5 44.1 89.9 83.1 138.4 119.5 185.9 139.9 386.6 256.6 572.5 395.1 18.5 13.6 30.5 34.5 32.6 57.1 2.1 22.6-5.9 45-22.1 61l-210.9 210.9c-16.9 16.9-42.1 23.4-65.4 16.7-23.3-6.7-42.1-24.4-49.9-47.4z" fill="#FF385C"/>
                <path d="M1406.9 1144.7c36.9-52.6 66.1-109.5 86.5-169.1 40.8-118.2 47.5-247.3 19.4-370.4-27.5-120.1-87.5-230.4-175.9-316.4-76.1-74.5-172.6-127.4-275.8-153.9-131.6-33.7-272.9-19.5-398.3 41.4-102.5 49.5-190.5 127.4-253.1 223.1-64.5 98.7-99.6 214.1-100.2 331.5-.6 117.3 33.1 233.4 96.5 332.5 44.6 69.7 103.4 129.5 170.6 175.5 38.1 25.8 78.5 47.5 121 64.8 48.9-48.3 93.1-100.5 130.6-156.2-75.1-34.5-139.7-87.5-187.5-155.1-64.5-92-94.8-204.1-86-316.4 8.8-112.3 54.4-220.3 129.5-303.8 85.9-96.5 210.3-151.7 338.7-151.7 128.4 0 252.8 55.2 338.7 151.7 75.1 83.5 120.7 191.5 129.5 303.8 8.8 112.3-21.5 224.4-86 316.4-47.8 67.6-112.4 120.6-187.5 155.1 37.5 55.7 81.7 107.9 130.6 156.2 42.5-17.3 82.9-39 121-64.8 67.2-46 126-105.8 170.6-175.5z" fill="#fff"/>
            </svg>
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Create Your Account</h2>
        </div>

        <form id="signupForm" class="space-y-6">
            <!-- Role Selection -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Select Your Role</h3>
                <div class="grid grid-cols-2 gap-6">
                    <div class="role-card border-2 border-gray-300 rounded-xl p-6 cursor-pointer hover:border-[#FF385C] transition" data-role="voyageur">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <h4 class="mt-4 font-semibold text-gray-700">Voyageur</h4>
                            <p class="text-sm text-gray-500 mt-2">Looking to explore and book stays</p>
                        </div>
                    </div>
                    <div class="role-card border-2 border-gray-300 rounded-xl p-6 cursor-pointer hover:border-[#FF385C] transition" data-role="proprietaire">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                            <h4 class="mt-4 font-semibold text-gray-700">Propriétaire</h4>
                            <p class="text-sm text-gray-500 mt-2">Host and manage your property</p>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="selectedRole" name="role" required>
            </div>

            <!-- Profile Picture Upload -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Profile Picture</h3>
                <div class="flex items-center space-x-6">
                    <div class="shrink-0">
                        <img id="profileImagePreview" class="h-24 w-24 object-cover rounded-full" src="" alt="Profile preview" style="display:none;"/>
                    </div>
                    <label class="block">
                        <span class="sr-only">Choose profile photo</span>
                        <input type="file" id="profileImageUpload" accept="image/*" 
                            class="block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-[#FF385C]/10 file:text-[#FF385C]
                            hover:file:bg-[#FF385C]/20
                            cursor-pointer"/>
                    </label>
                </div>
                <div id="imageCropperModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
                    <div class="bg-white p-6 rounded-xl max-w-2xl w-full">
                        <div class="flex justify-between items-center mb-4">
                            <h4 class="text-xl font-semibold">Crop Your Profile Picture</h4>
                            <button type="button" id="closeCropperBtn" class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mb-4">
                            <img id="imageToCrop" src="" alt="Image to crop" class="max-w-full"/>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <button type="button" id="cancelCropBtn" class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">Cancel</button>
                            <button type="button" id="cropImageBtn" class="px-4 py-2 bg-[#FF385C] text-white rounded-lg hover:bg-[#E31C5F]">Crop</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personal Information -->
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                    <input type="text" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                        focus:ring-2 focus:ring-[#FF385C] focus:border-transparent"/>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                    <input type="text" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                        focus:ring-2 focus:ring-[#FF385C] focus:border-transparent"/>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                        focus:ring-2 focus:ring-[#FF385C] focus:border-transparent"/>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                        focus:ring-2 focus:ring-[#FF385C] focus:border-transparent"/>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit" 
                    class="w-full py-3 bg-[#FF385C] text-white rounded-lg 
                    hover:bg-[#E31C5F] transition duration-300 
                    transform hover:scale-105 focus:outline-none 
                    focus:ring-2 focus:ring-[#FF385C] focus:ring-opacity-50">
                    Create Account
                </button>
            </div>
        </form>
    </div>

    <script>
        // Role Selection
        const roleCards = document.querySelectorAll('.role-card');
        const selectedRoleInput = document.getElementById('selectedRole');

        roleCards.forEach(card => {
            card.addEventListener('click', () => {
                // Remove selected class from all cards
                roleCards.forEach(c => c.classList.remove('selected'));
                
                // Add selected class to clicked card
                card.classList.add('selected');
                
                // Set hidden input value
                selectedRoleInput.value = card.dataset.role;
            });
        });

        // Profile Picture Upload and Cropping
        const profileImageUpload = document.getElementById('profileImageUpload');
        const profileImagePreview = document.getElementById('profileImagePreview');
        const imageCropperModal = document.getElementById('imageCropperModal');
        const imageToCrop = document.getElementById('imageToCrop');
        const cropImageBtn = document.getElementById('cropImageBtn');
        const closeCropperBtn = document.getElementById('closeCropperBtn');
        const cancelCropBtn = document.getElementById('cancelCropBtn');
        let cropper;

        profileImageUpload.addEventListener('change', (e) => {
            const file = e.target.files[0];
            const reader = new FileReader();

            reader.onload = (event) => {
                imageToCrop.src = event.target.result;
                imageCropperModal.classList.remove('hidden');
                imageCropperModal.classList.add('flex');

                // Destroy existing cropper if exists
                if (cropper) {
                    cropper.destroy();
                }

                // Initialize Cropper
                cropper = new Cropper(imageToCrop, {
                    aspectRatio: 1,
                    viewMode: 1,
                });
            };

            reader.readAsDataURL(file);
        });

        cropImageBtn.addEventListener('click', () =>