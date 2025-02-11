<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Property Management</title>
    <link rel="stylesheet" href="/assets/style/dashboard.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

    <div class="welcome-modal">
        <div class="welcome-content">
            <div class="house-decoration"></div>
            <button class="modal-close">&times;</button>
            
            <div class="welcome-header">
                <div class="welcome-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h2 class="welcome-title">Welcome Back, Admin!</h2>
                <p class="welcome-subtitle">Here's your property management overview</p>
            </div>

            <div class="welcome-stats">
                <div class="welcome-stat">
                    <div class="welcome-stat-value">24</div>
                    <div class="welcome-stat-label">New Properties</div>
                </div>
                <div class="welcome-stat">
                    <div class="welcome-stat-value">12</div>
                    <div class="welcome-stat-label">Pending Reviews</div>
                </div>
            </div>

            <div class="welcome-footer">
                <button class="welcome-button">Get Started</button>
            </div>
        </div>
    </div>
    
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-logo">
                PropertyAdmin
            </div>
            <ul class="sidebar-menu">
                <li><a class="active" data-section="dashboard"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a data-section="properties"><i class="fas fa-building"></i> Properties</a></li>
                <li><a data-section="users"><i class="fas fa-users"></i> Users</a></li>
                <li><a data-section="reservations"><i class="fas fa-calendar"></i> Reservations</a></li>
                <li><a data-section="reviews"><i class="fas fa-star"></i> Reviews</a></li>
                <li><a data-section="reports"><i class="fas fa-chart-bar"></i> Reports</a></li>
                <li><a data-section="settings"><i class="fas fa-cog"></i> Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            
            <div class="header">
                <h1>Admin Dashboard</h1>
                <div class="user-info">
                    Welcome, Admin
                </div>
            </div>

            <!-- Dashboard Section -->
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
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Properties Section -->
            <div id="properties" class="section">
                <h2>Properties Management</h2>
                <div class="section-content">
                    <p>Manage all properties here...</p>
                </div>
            </div>

            <!-- Users Section -->
            <div id="users" class="section">
                <h2>Users Management</h2>
                <table border="1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= htmlspecialchars($user['id']) ?></td>
                                <td><?= htmlspecialchars($user['name']) ?></td>
                                <td><?= htmlspecialchars($user['email']) ?></td>
                                <td><?= htmlspecialchars($user['role']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Reservations Section -->
            <div id="reservations" class="section">
                <h2>Reservations</h2>
                <div class="section-content">
                    <p>View and manage reservations here...</p>
                </div>
            </div>

            <!-- Reviews Section -->
            <div id="reviews" class="section">
                <h2>Reviews Management</h2>
                <div class="section-content">
                    <p>Manage all reviews here...</p>
                </div>
            </div>

            <!-- Reports Section -->
            <div id="reports" class="section">
                <h2>Reports</h2>
                <div class="section-content">
                    <p>View all reports and analytics here...</p>
                </div>
            </div>

            <!-- Settings Section -->
            <div id="settings" class="section">
                <h2>Settings</h2>
                <div class="section-content">
                    <p>Manage system settings here...</p>
                </div>
            </div>

        </div>
    </div>

    <script src="/assets/js/dashboard.js"></script>
    
</body>
</html>