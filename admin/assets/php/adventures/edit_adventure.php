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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $required = ['id', 'title', 'price', 'duration_days', 'difficulty', 'max_participants', 'status', 'description'];
        foreach ($required as $field) {
            if (!isset($_POST[$field]) || empty($_POST[$field])) {
                throw new Exception("$field is required");
            }
        }

        $id = intval($_POST['id']);

        $bdd = new PDO(
            "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4",
            DB_USER,
            DB_PASS,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        // Handle image upload if a new file is provided
        $imageName = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image = $_FILES['image'];
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($image['type'], $allowedTypes)) {
                throw new Exception('Only JPG, PNG, GIF images are allowed');
            }
            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            $imageName = uniqid('adv_') . '.' . $ext;
            $uploadDir = '../../../../assets/images/adventures_images/';
            if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
            $imagePath = $uploadDir . $imageName;
            if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
                throw new Exception("Failed to upload image");
            }

            // Delete old image
            $stmtOld = $bdd->prepare("SELECT image FROM adventures WHERE id = :id");
            $stmtOld->execute([':id' => $id]);
            $oldImage = $stmtOld->fetch(PDO::FETCH_ASSOC);
            if ($oldImage && file_exists($uploadDir . $oldImage['image'])) {
                unlink($uploadDir . $oldImage['image']);
            }
        }

        // Update database
        $sql = "UPDATE adventures SET 
                    title = :title,
                    price = :price,
                    duration_days = :duration_days,
                    difficulty = :difficulty,
                    max_participants = :max_participants,
                    status = :status,
                    description = :description";

        if ($imageName) $sql .= ", image = :image";

        $sql .= " WHERE id = :id";

        $stmt = $bdd->prepare($sql);

        $params = [
            ':title' => $_POST['title'],
            ':price' => $_POST['price'],
            ':duration_days' => $_POST['duration_days'],
            ':difficulty' => $_POST['difficulty'],
            ':max_participants' => $_POST['max_participants'],
            ':status' => $_POST['status'],
            ':description' => $_POST['description'],
            ':id' => $id
        ];

        if ($imageName) $params[':image'] = $imageName;

        $stmt->execute($params);

        echo json_encode(['success' => true, 'message' => 'Adventure updated successfully']);

    } else {
        throw new Exception('Invalid request method');
    }

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
