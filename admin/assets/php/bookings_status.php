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

    // if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    //     echo json_encode([]);
    //     exit;
    // }

    $stmt = $bdd->query("SELECT status, COUNT(*) AS total FROM bookings GROUP BY status");
    $statuses = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($statuses);

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
