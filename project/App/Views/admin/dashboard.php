<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Property Management</title>
    <link rel="stylesheet" href="/public/assets/style/dashboard.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">

        <div class="sidebar">

            <div class="sidebar-logo">
                <svg class="mx-auto h-16 w-auto" viewBox="0 0 1991.3 2159.5" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1851.5 1841.1c-230.9-183.9-454.5-357.5-656.4-524.5-93.6-77.4-178.1-156.4-247.1-247.6-48.9-65.4-88.9-136.4-114.5-212.7-32.5-96.5-43.6-197.4-35.8-298.5 9.2-117.3 48.4-230.8 113.5-325.4 90.5-129.8 230.4-224.3 387.4-255.5 76.6-15.7 156.9-16.5 234.5-2.2 87.4 16.1 170.2 54.4 239.8 112.5 56.1 46.7 103.4 104.5 137.9 168.6 20.4 37.8 36.3 77.7 47.5 118.5 15.3 56.1 22.8 114.2 22.4 172.4-.6 102.8-24.7 204.9-69.1 297.5-44.8 93.5-109.1 176.9-187.5 244.7 27.9 52.6 63.9 100.7 104.7 142.7 42.5 44.1 89.9 83.1 138.4 119.5 185.9 139.9 386.6 256.6 572.5 395.1 18.5 13.6 30.5 34.5 32.6 57.1 2.1 22.6-5.9 45-22.1 61l-210.9 210.9c-16.9 16.9-42.1 23.4-65.4 16.7-23.3-6.7-42.1-24.4-49.9-47.4z" fill="#FF385C"/>
                    <path d="M1406.9 1144.7c36.9-52.6 66.1-109.5 86.5-169.1 40.8-118.2 47.5-247.3 19.4-370.4-27.5-120.1-87.5-230.4-175.9-316.4-76.1-74.5-172.6-127.4-275.8-153.9-131.6-33.7-272.9-19.5-398.3 41.4-102.5 49.5-190.5 127.4-253.1 223.1-64.5 98.7-99.6 214.1-100.2 331.5-.6 117.3 33.1 233.4 96.5 332.5 44.6 69.7 103.4 129.5 170.6 175.5 38.1 25.8 78.5 47.5 121 64.8 48.9-48.3 93.1-100.5 130.6-156.2-75.1-34.5-139.7-87.5-187.5-155.1-64.5-92-94.8-204.1-86-316.4 8.8-112.3 54.4-220.3 129.5-303.8 85.9-96.5 210.3-151.7 338.7-151.7 128.4 0 252.8 55.2 338.7 151.7 75.1 83.5 120.7 191.5 129.5 303.8 8.8 112.3-21.5 224.4-86 316.4-47.8 67.6-112.4 120.6-187.5 155.1 37.5 55.7 81.7 107.9 130.6 156.2 42.5-17.3 82.9-39 121-64.8 67.2-46 126-105.8 170.6-175.5z" fill="#fff"/>
                </svg>
            </div>

            <ul class="sidebar-menu">
                <li><a class="active" data-section="dashboard" href="/admin/proprelated/dashboard"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="/admin/proprelated/users"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="/admin/proprelated/annonces"><i class="fas fa-building"></i> Annonces</a></li>
                <li><a href="/admin/proprelated/populaire_propritaire"><i class="fas fa-calendar"></i> Proprietaire</a></li>
                <li><a href="/admin/proprelated/revenus"><i class="fas fa-star"></i> Revenus</a></li>
                <li><a href="/admin/proprelated/reports"><i class="fas fa-chart-bar"></i> Reports</a></li>
                <li><a href="/admin/proprelated/setting"><i class="fas fa-cog"></i> Settings</a></li>
            </ul>

        </div>

        <div class="main-content">

            <div class="header">
                <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
                <div class="user-info flex items-center">
                    <span class="text-gray-800">Admin </span>
                    <img src="https://intranet.youcode.ma/storage/users/profile/thumbnail/1119-1727859809.JPG" alt="Admin" class="rounded-full h-8 w-8 object-cover mr-2">
                </div>
            </div>

            <div id="dashboard" class="section active">
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>Total Properties</h3>
                        <div class="value">245</div>
                    </div>
                    <div class="stat-card">
                        <h3>Total Reservations</h3>
                        <div class="value">1,234</div>
                    </div>
                    <div class="stat-card">
                        <h3>Total Users</h3>
                        <div class="value">5,678</div>
                    </div>
                    <div class="stat-card">
                        <h3>Total Revenue</h3>
                        <div class="value">$123,456</div>
                    </div>
                </div>

                <div class="properties-table">
                    <h2 style="padding: 1rem;">Recent Properties</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Owner</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Luxury Villa</td>
                                <td>John Doe</td>
                                <td>Miami, FL</td>
                                <td>$350/night</td>
                                <td>Pending</td>
                                <td>
                                    <button class="btn btn-success">Approve</button>
                                    <button class="btn btn-danger">Reject</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="content-area">
            </div>

        </div>

    </div>

    <script src="/public/assets/js/dashboard.js"></script>

</body>
</html>