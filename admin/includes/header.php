<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildpath Adventures - Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Crimson+Pro:wght@400;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>


    <!-- Admin Layout -->
    <div class="admin-layout" id="adminLayout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="brand">
                    <div class="brand-logo">🌲</div>
                    <div>
                        <h2>WILDPATH</h2>
                        <p>Admin Control</p>
                    </div>
                </div>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-section">
    <p class="nav-section-title">MAIN</p>
                <a class="nav-item <?= ($currentPage == 'dashboard.php') ? 'active' : '' ?>" href="dashboard.php">
                    <span class="nav-icon"><i data-lucide="layout-dashboard"></i></span>
                    <span class="nav-text">Dashboard</span>
                </a>
                </div>
                <div class="nav-section">
    <p class="nav-section-title">MANAGEMENT</p>
                <a class="nav-item <?= ($currentPage == 'adventures.php') ? 'active' : '' ?>" href="adventures.php">
                    <span class="nav-icon"><i data-lucide="mountain"></i></span>
                    <span class="nav-text">Featured Adventures</span>
                </a>

                <a class="nav-item <?= ($currentPage == 'bookings.php') ? 'active' : '' ?>" href="bookings.php">
                    <span class="nav-icon"><i data-lucide="calendar-days"></i></span>
                    <span class="nav-text">Bookings</span>
                </a>

                <a class="nav-item <?= ($currentPage == 'customers.php') ? 'active' : '' ?>" href="customers.php">
                    <span class="nav-icon"><i data-lucide="users"></i></span>
                    <span class="nav-text">Customers</span>
                </a>
                </div>
                       <div class="nav-section">
    <p class="nav-section-title">INSIGHTS</p>
                <a class="nav-item <?= ($currentPage == 'analytics.php') ? 'active' : '' ?>" href="analytics.php">
                    <span class="nav-icon"><i data-lucide="line-chart"></i></span>
                    <span class="nav-text">Analytics</span>
                </a>
                       </div>
                           <div class="nav-section">
    <p class="nav-section-title">SYSTEM</p>
                <a class="nav-item <?= ($currentPage == 'settings.php') ? 'active' : '' ?>" href="settings.php">
                    <span class="nav-icon"><i data-lucide="settings"></i></span>
                    <span class="nav-text">Settings</span>
                </a>
                           </div>
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