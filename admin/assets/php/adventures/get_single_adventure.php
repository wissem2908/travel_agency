<?php
session_start();
require_once '../config.php';
header('Content-Type: application/json');

try {
    // if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    //     http_response_code(403);
    //     echo json_encode(['success' => false, 'message' => 'Access denied']);
    //     exit;
    // }

    if (!isset($_GET['id'])) {
        throw new Exception('Adventure ID required');
    }

    $id = intval($_GET['id']);

    $bdd = new PDO(
        "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $stmt = $bdd->prepare("SELECT * FROM adventures WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $adventure = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$adventure) {
        throw new Exception('Adventure not found');
    }

    echo json_encode($adventure);

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
