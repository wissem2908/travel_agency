<?php
session_start();
require_once '../config.php'; // database credentials
header('Content-Type: application/json');

try {
    $bdd = new PDO(
        "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // Optional: admin check
    // if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    //     echo json_encode([]);
    //     exit;
    // }

    // Fetch all bookings with adventure details
    $sql = "SELECT 
                b.id AS booking_id,
                b.full_name,
                b.phone,
                b.dob,
                b.num_people,
                b.status,
                a.title AS adventure_title,
                a.price AS adventure_price
            FROM bookings b
            JOIN adventures a ON b.adventure_id = a.id
            ORDER BY b.created_at DESC";

    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($bookings);

} catch (Exception $e) {
    echo json_encode([
        'error' => $e->getMessage()
    ]);
}
