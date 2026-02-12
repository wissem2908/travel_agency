<?php
session_start();
require_once './config.php';
header('Content-Type: application/json');

try {
    $bdd = new PDO(
        "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        echo json_encode([]);
        exit;
    }

    // Helper function to calculate % change
    function percentChange($current, $previous) {
        if ($previous == 0) return 100;
        return round((($current - $previous) / $previous) * 100, 1);
    }

    // 1️⃣ Total Bookings
    $stmt = $bdd->query("SELECT COUNT(*) AS total FROM bookings WHERE MONTH(created_at) = MONTH(CURRENT_DATE()) AND YEAR(created_at) = YEAR(CURRENT_DATE())");
    $totalBookings = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

    $stmt = $bdd->query("SELECT COUNT(*) AS total FROM bookings WHERE MONTH(created_at) = MONTH(CURRENT_DATE() - INTERVAL 1 MONTH) AND YEAR(created_at) = YEAR(CURRENT_DATE() - INTERVAL 1 MONTH)");
    $prevBookings = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    $bookingChange = percentChange($totalBookings, $prevBookings);

    // 2️⃣ Revenue
    $stmt = $bdd->query("SELECT SUM(a.price * b.num_people) AS total 
                         FROM bookings b 
                         JOIN adventures a ON b.adventure_id = a.id
                         WHERE MONTH(b.created_at) = MONTH(CURRENT_DATE()) AND YEAR(b.created_at) = YEAR(CURRENT_DATE())");
    $totalRevenue = $stmt->fetch(PDO::FETCH_ASSOC)['total'] ?? 0;

    $stmt = $bdd->query("SELECT SUM(a.price * b.num_people) AS total 
                         FROM bookings b 
                         JOIN adventures a ON b.adventure_id = a.id
                         WHERE MONTH(b.created_at) = MONTH(CURRENT_DATE() - INTERVAL 1 MONTH) AND YEAR(b.created_at) = YEAR(CURRENT_DATE() - INTERVAL 1 MONTH)");
    $prevRevenue = $stmt->fetch(PDO::FETCH_ASSOC)['total'] ?? 0;
    $revenueChange = percentChange($totalRevenue, $prevRevenue);

    // 3️⃣ Active Adventures (status = Active)
    $stmt = $bdd->query("SELECT COUNT(*) AS active FROM adventures WHERE status = 'Active'");
    $activeAdventures = $stmt->fetch(PDO::FETCH_ASSOC)['active'];

    // 4️⃣ Pending Requests
    $stmt = $bdd->query("SELECT COUNT(*) AS pending FROM bookings WHERE status = 'Pending'");
    $pendingRequests = $stmt->fetch(PDO::FETCH_ASSOC)['pending'];

    echo json_encode([
        'totalBookings' => $totalBookings,
        'bookingChange' => $bookingChange,
        'totalRevenue' => $totalRevenue,
        'revenueChange' => $revenueChange,
        'activeAdventures' => $activeAdventures,
        'pendingRequests' => $pendingRequests
    ]);

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
