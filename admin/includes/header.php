<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildpath Adventures - Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Crimson+Pro:wght@400;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>


    <!-- Admin Layout -->
    <div class="admin-layout" id="adminLayout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>WILDPATH</h2>
                <p>Admin Control</p>
            </div>
            <nav class="sidebar-nav">
                <a class="nav-item active" href="dashboard.php">
                    <span class="nav-icon">📊</span>
                    Dashboard
</a>
                <a class="nav-item" href="adventures.php">
                    <span class="nav-icon">🏔️</span>
                    Featured Adventures
                </a>
                <a class="nav-item" href="bookings.php">
                    <span class="nav-icon">📅</span>
                    Bookings
                </a>
                <a class="nav-item" href="customers.php">
                    <span class="nav-icon">👥</span>
                    Customers
                </a>
                <a class="nav-item" href="analytics.php">
                    <span class="nav-icon">📈</span>
                    Analytics
                </a>
                <a class="nav-item" href="settings.php">
                    <span class="nav-icon">⚙️</span>
                    Settings
                </a>
            </nav>
            <div class="sidebar-footer">
                <div class="user-info">
                    <div class="user-avatar">AD</div>
                    <div class="user-details">
                        <h4>Admin User</h4>
                        <p>admin@wildpath.com</p>
                    </div>
                </div>
            </div>
        </aside>
