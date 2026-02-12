<?php
session_start();
require_once '../config.php'; // adjust path

header('Content-Type: application/json');

try {
    // Admin check
    // if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    //     http_response_code(403);
    //     echo json_encode(['success' => false, 'message' => 'Access denied']);
    //     exit;
    // }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (!isset($_POST['id']) || empty($_POST['id'])) {
            throw new Exception("Adventure ID is required");
        }

        $id = intval($_POST['id']);

        $bdd = new PDO(
            "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4",
            DB_USER,
            DB_PASS,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        // Get image filename to delete the file
        $stmt = $bdd->prepare("SELECT image FROM adventures WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $adventure = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$adventure) {
            throw new Exception("Adventure not found");
        }

        // Delete image file
        $imagePath = '../../../../assets/images/adventures_images/' . $adventure['image'];
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete record from database
        $stmt = $bdd->prepare("DELETE FROM adventures WHERE id = :id");
        $stmt->execute([':id' => $id]);

        echo json_encode(['success' => true, 'message' => 'Adventure deleted successfully']);

    } else {
        throw new Exception("Invalid request method");
    }

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
