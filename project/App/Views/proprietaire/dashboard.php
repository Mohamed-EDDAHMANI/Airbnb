<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Owner Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Sidebar -->
    <div class="fixed left-0 top-0 w-64 h-full bg-white shadow-lg">
        <div class="p-4">
            <div class="flex items-center mb-8">
                <img src="/api/placeholder/40/40" alt="Logo" class="w-10 h-10 rounded-full"/>
                <span class="ml-3 text-xl font-semibold text-gray-800">AirHost Pro</span>
            </div>
            
            <nav>
                <a href="#" class="flex items-center p-3 mb-2 bg-red-50 text-red-600 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    Bookings
                </a>
                <a href="#" class="flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Guests
                </a>
                <a href="#" class="flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Earnings
                </a>
                <a href="#" class="flex items-center p-3 mb-2 text-gray-600 hover:bg-gray-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Settings
                </a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Welcome back, <?= $_SESSION['user']['name'] ?>!</h1>
                <p class="text-gray-600">Here's what's happening with your properties today.</p>
            </div>
            <div class="flex items-center">
                <button class="mr-4 p-2 rounded-full bg-gray-100 relative">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
                <img src="<?= $_SESSION['user']['pic'] ?>" alt="Profile" class="w-10 h-10 rounded-full"/>
            </div>
        </div>
        <?php var_dump($_SESSION['user']) ?>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 text-sm">Total Revenue</h3>
                    <span class="p-2 bg-green-100 rounded-lg">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </span>
                </div>
                <p class="text-2xl font-bold text-gray-800">$24,780</p>
                <p class="text-green-600 text-sm">+12.5% from last month</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 text-sm">Total Bookings</h3>
                    <span class="p-2 bg-blue-100 rounded-lg">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </span>
                </div>
                <p class="text-2xl font-bold text-gray-800">156</p>
                <p class="text-blue-600 text-sm">+8.2% from last month</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 text-sm">Average Rating</h3>
                    <span class="p-2 bg-yellow-100 rounded-lg">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </span>
                </div>
                <p class="text-2xl font-bold text-gray-800">4.8/5.0</p>
                <p class="text-yellow-600 text-sm">+0.3 from last month</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 text-sm">Occupancy Rate</h3>
                    <span class="p-2 bg-purple-100 rounded-lg">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </span>
                </div>
                <p class="text-2xl font-bold text-gray-800">85%</p>
                <p class="text-purple-600 text-sm">+5% from last month</p>
            </div>
        </div>

        <!-- Properties Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Property" class="w-full h-48 object-cover"/>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Luxury Beach Villa</h3>
                        <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm">Active</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <p class="text-gray-600">Miami Beach, FL</p>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-500">Next Booking</p>
                            <p class="font-semibold">Feb 15 - Feb 20</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Revenue</p>
                            <p class="font-semibold">$8,450</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Rating</p>
                            <p class="font-semibold">4.9/5.0</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Property" class="w-full h-48 object-cover"/>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Mountain Retreat</h3>
                        <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm">Active</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <p class="text-gray-600">Aspen, CO</p>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-500">Next Booking</p>
                            <p class="font-semibold">Feb 18 - Feb 25</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Revenue</p>
                            <p class="font-semibold">$12,800</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Rating</p>
                            <p class="font-semibold">4.8/5.0</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Property" class="w-full h-48 object-cover"/>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Downtown Loft</h3>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-600 rounded-full text-sm">Maintenance</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <p class="text-gray-600">New York, NY</p>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div>
                            <p class="text-gray-500">Next Booking</p>
                            <p class="font-semibold">Mar 1 - Mar 5</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Revenue</p>
                            <p class="font-semibold">$3,520</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Rating</p>
                            <p class="font-semibold">4.7/5.0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <!-- Revenue Chart -->
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Revenue Overview</h3>
                <canvas id="revenueChart" class="w-full h-64"></canvas>
            </div>

            <!-- Bookings Chart -->
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Booking Statistics</h3>
                <canvas id="bookingsChart" class="w-full h-64"></canvas>
            </div>
        </div>

        <!-- Recent Bookings Table -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 border-b">
                <h3 class="text-lg font-semibold text-gray-800">Recent Bookings</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Guest</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Property</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check In</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check Out</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img src="/api/placeholder/32/32" alt="Guest" class="w-8 h-8 rounded-full"/>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">John Smith</div>
                                        <div class="text-sm text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Luxury Beach Villa</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Feb 15, 2024</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Feb 20, 2024</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$2,450</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span>
                            </td>
                        </tr>
                        <!-- Add more booking rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Initialize Charts -->
    <script>
        // Revenue Chart
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Revenue',
                    data: [15000, 24780, 18900, 22000, 19500, 24780],
                    borderColor: 'rgb(59, 130, 246)',
                    tension: 0.4,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return ' + value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });

        // Bookings Chart
        const bookingsCtx = document.getElementById('bookingsChart').getContext('2d');
        new Chart(bookingsCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Bookings',
                    data: [45, 52, 38, 41, 48, 56],
                    backgroundColor: 'rgba(59, 130, 246, 0.5)',
                    borderColor: 'rgb(59, 130, 246)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>