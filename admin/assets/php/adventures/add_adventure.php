<?php
session_start();
require_once '../config.php'; // adapt path if needed

header('Content-Type: application/json');

try {
    // Security: admin only
    // if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    //     http_response_code(403);
    //     echo json_encode(['success' => false, 'message' => 'Access denied']);
    //     exit;
    // }

    // Check if form was submitted and file uploaded
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Validate required fields
        $required = ['title', 'price', 'duration_days', 'difficulty', 'max_participants', 'status', 'description'];
        foreach ($required as $field) {
            if (empty($_POST[$field])) {
                throw new Exception("Field $field is required");
            }
        }

        // File upload handling
        if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            throw new Exception("Image upload failed");
        }

        $image = $_FILES['image'];
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($image['type'], $allowedTypes)) {
            throw new Exception("Only JPG, PNG, GIF images are allowed");
        }

        // Generate a unique file name
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $imageName = uniqid('adv_') . '.' . $ext;
        $uploadDir = '../../../../assets/images/adventures_images/'; // adapt path
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $imagePath = $uploadDir . $imageName;

        if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
            throw new Exception("Failed to move uploaded image");
        }

        // Insert into database
        $bdd = new PDO(
            "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4",
            DB_USER,
            DB_PASS,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        $sql = "INSERT INTO adventures 
                    (title, price, duration_days, difficulty, max_participants, status, description, image) 
                VALUES 
                    (:title, :price, :duration_days, :difficulty, :max_participants, :status, :description, :image)";

        $stmt = $bdd->prepare($sql);
        $stmt->execute([
            ':title' => $_POST['title'],
            ':price' => $_POST['price'],
            ':duration_days' => $_POST['duration_days'],
            ':difficulty' => $_POST['difficulty'],
            ':max_participants' => $_POST['max_participants'],
            ':status' => $_POST['status'],
            ':description' => $_POST['description'],
            ':image' => $imageName
        ]);

        echo json_encode(['success' => true, 'message' => 'Adventure added successfully']);

    } else {
        throw new Exception("Invalid request method");
    }

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
