<?php

require_once '../classes/DbConnector.php';
require_once '../classes/User.php';

use classes\User;
use classes\DbConnector;

header('Content-Type: application/json');

$headers = getallheaders();
$authorizationHeader = isset($headers['Authorization']) ? $headers['Authorization'] : null;
$method = $_SERVER["REQUEST_METHOD"];

if (isset($authorizationHeader) && preg_match('/Bearer\s+(.*)$/i', $authorizationHeader, $matches)) {

    $token = $matches[1];
    $user = new User(null, null, null, null, null, $token, null, null, null, null);

    if ($user->validateToken()) {
        echo json_encode(array("message" => true));
    } else if ($method === "POST") {

        $data = json_decode(file_get_contents("php://input"), true);
        if (isset($data['UserName']) && isset($data['password'])) {
            $UserName = filter_var($data['UserName'], FILTER_SANITIZE_STRING);
            $password = filter_var($data['password'], FILTER_SANITIZE_STRING);

            $user->setUserName($UserName);
            $user->setPassword($password);

            if ($user->donorLogin()) {

                echo json_encode(array("message" => true, "Token" => $user->getToken()));
            } else {
                // No matching user foundecho json_encode(array("message" => "Invalid request method."));
                echo json_encode(array("message" => false));
            }
        } else {
            echo json_encode(array("message" => false));
        }
    } else {
        // Invalid HTTP method
        echo json_encode(array("message" => "Invalid request method."));
    }
} else {
    // Invalid HTTP method
    echo json_encode(array("message" => "Invalid request method ra."));
} 
    
    

