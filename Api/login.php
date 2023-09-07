<?php
require_once '../classes/DbConnector.php';
use classes\DbConnector;

header('Content-Type: application/json');

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

   

    $UserName = $data['UserName'];
    $password = $data['password'];

    $dbcon = new DbConnector;
    $conn = $dbcon->getConnection();

    // Use a prepared statement with placeholders to prevent SQL injection
    $sql = "SELECT UserName, userRole, donorId FROM user WHERE UserName=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $UserName, PDO::PARAM_STR);
    $stmt->bindParam(2, $password, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // User found, return user information
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode(array("message" => true, "user" => $user));
    } else {
        // No matching user found
        echo json_encode(array("message" => false));
    }
} else {
    // Invalid HTTP method
    echo json_encode(array("message" => "Invalid request method."));
}
?>
