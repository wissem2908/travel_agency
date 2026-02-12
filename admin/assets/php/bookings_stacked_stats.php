<?php
require_once './config.php';

try {
    $pdo = new PDO(
        "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $sql = "
        SELECT 
            MONTH(created_at) AS month_num,
            DATE_FORMAT(created_at, '%b') AS month_name,
            SUM(CASE WHEN status='Pending' THEN 1 ELSE 0 END) AS pending,
            SUM(CASE WHEN status='Confirmed' THEN 1 ELSE 0 END) AS confirmed,
            SUM(CASE WHEN status='Cancelled' THEN 1 ELSE 0 END) AS cancelled
        FROM bookings
        GROUP BY MONTH(created_at), DATE_FORMAT(created_at, '%b')
        ORDER BY month_num ASC
    ";

    $stmt = $pdo->query($sql);

    $months = [];
    $pending = [];
    $confirmed = [];
    $cancelled = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $months[] = $row['month_name'];
        $pending[] = (int)$row['pending'];
        $confirmed[] = (int)$row['confirmed'];
        $cancelled[] = (int)$row['cancelled'];
    }

    echo json_encode([
        'months' => $months,
        'pending' => $pending,
        'confirmed' => $confirmed,
        'cancelled' => $cancelled
    ]);

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
