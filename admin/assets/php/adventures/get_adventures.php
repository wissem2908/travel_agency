<?php
session_start();
require_once '../config.php'; // adapt path if needed

try {
    $bdd = new PDO(
        "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // Security: admin only
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        http_response_code(403);
        echo json_encode([]);
        exit;
    }

    // Fetch adventures from travel_agency table
    $sql = "SELECT 
                id,
                title,
                description,
                image,
                price,
                duration_days,
                difficulty,
                max_participants,
                status,
                DATE_FORMAT(created_at, '%d/%m/%Y') AS created_at_fr
            FROM adventures
            ORDER BY created_at DESC";

    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    $adventures = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($adventures);

} catch (Exception $e) {

    if ($bdd->inTransaction()) {
        $bdd->rollBack();
    }

    echo json_encode([
        'response' => false,
        'message'  => 'exception',
        'error'    => $e->getMessage()
    ]);
}
