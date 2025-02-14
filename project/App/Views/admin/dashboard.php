<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Property Management</title>
    <link rel="stylesheet" href="/public/assets/style/dashboard.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Stat Card Styles */
        .stat-card {
            position: relative;
            overflow: hidden;
        }

        /* Stat Chart Styles */
        .stat-chart {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 30px;
            background-color: rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: flex-end;
        }

        /* Stat Bar Styles */
        .stat-bar {
            background-color: #FF385C;
            color: white;
            text-align: center;
            padding: 2px;
            font-size: 0.7rem;
            flex-grow: 1;
            transition: height 0.3s ease;
        }

        /* Admin Profile Styles */
        .admin-profile {
            display: flex;
            flex-direction: column; /* Stack items vertically */
            align-items: center; /* Center items horizontally */
            padding: 1rem;
            background-color: #f9f9f9;
            border-radius: 8px;
            margin-bottom: 1rem;
            text-align: center; /* Center text within the profile */
        }

        .admin-profile img {
            width: 80px; /* Larger profile picture */
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 0.5rem; /* Space between image and text */
        }

        .admin-profile-info h2 {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.25rem;
        }

        .admin-profile-info p {
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="sidebar">

            <div class="sidebar-logo">
                <img src="/public/assets/images/logo.png" alt="">
            </div>

            <ul class="sidebar-menu">
                <li><a class="active" data-section="dashboard"><i class="fas fa-home"></i> Main</a></li>
                <li><a href="/admin/proprelated/users"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="/admin/proprelated/annonces"><i class="fas fa-building"></i> Annonces</a></li>
                <li><a href="/admin/proprelated/populaire_propritaire"><i class="fas fa-calendar"></i> Proprietaire</a></li>
                <li><a href="/admin/proprelated/revenus"><i class="fas fa-star"></i> Revenus</a></li>
                <li><a href="/admin/proprelated/reports"><i class="fas fa-chart-bar"></i> Reports</a></li>
            </ul>

        </div>

        <div class="main-content">

            <div id="dashboard" class="section active">

                <div class="admin-profile">
                    <img src="https://intranet.youcode.ma/storage/users/profile/thumbnail/1119-1727859809.JPG" alt="Admin Profile Picture">
                    <div class="admin-profile-info">
                        <h2>Welcome, Admin</h2>
                        <p>Administrator</p>
                        <p>FrJ@admin.com</p>
                    </div>
                </div>

                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>Total Properties</h3>
                        <div class="value"><?= htmlspecialchars($totalProperties ?? 0) ?></div>
                        <div class="stat-chart">
                            <div class="stat-bar" style="height: <?= ($totalProperties / 500) * 100 ?>%;"></div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <h3>Total Reservations</h3>
                        <div class="value"><?= htmlspecialchars($totalReservations ?? 0) ?></div>
                        <div class="stat-chart">
                            <div class="stat-bar" style="height: <?= ($totalReservations / 2000) * 100 ?>%;"></div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <h3>Total Users</h3>
                        <div class="value"><?= htmlspecialchars($totalUsers ?? 0) ?></div>
                        <div class="stat-chart">
                            <div class="stat-bar" style="height: <?= ($totalUsers / 10000) * 100 ?>%;"></div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <h3>Total Revenue</h3>
                        <div class="value">$<?= htmlspecialchars(number_format($totalRevenue ?? 0, 2)) ?></div>
                        <div class="stat-chart">
                            <div class="stat-bar" style="height: <?= ($totalRevenue / 100000) * 100 ?>%;"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div id="content-area">
            </div>

        </div>

    </div>

    <script src="/public/assets/js/dashboard.js"></script>

</body>
</html>
