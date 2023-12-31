<?php

require_once '../classes/User.php';
require_once '../classes/Validation.php';

use classes\User;
use classes\Validation;

header('Content-Type: application/json');

$headers = getallheaders();
$authorizationHeader = isset($headers['Authorization']) ? $headers['Authorization'] : (isset($headers['authorization']) ? $headers['authorization'] : null);
$method = $_SERVER["REQUEST_METHOD"];

if (isset($authorizationHeader) && preg_match('/Bearer\s+(.*)$/i', $authorizationHeader, $matches)) {
   
    $token = $matches[1];
    $user = new User(null, null, null, null, $token, null, null, null, null);

    if ($user->validateToken() && $user->getDonorId() != null ) {
        echo json_encode(array("message" => true));
    } else {
        echo json_encode(array("message" => "Token Not Valid"));
    }
} else if ($method === "POST") {

    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['email']) && isset($data['password'])) {
        $user = new User(null, null, null, null, null, null, null, null, null);
        $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
        $password = filter_var($data['password'], FILTER_SANITIZE_STRING);
        $emailValidation = Validation::validateGmail($email);

        if($emailValidation) {

            $user->setEmail($email);
            $user->setPassword($password);

            if ($user->donorLogin()) {

                echo json_encode(array("message" => true, "Token" => $user->getToken()));
            } else {
                // No matching user foundecho json_encode(array("message" => "Invalid request method."));
                echo json_encode(array("message" => "Invalid user name or Password"));
            }
        } else {
            echo json_encode(array("message" => "Please enter a valid email"));
        }
    } else {
        echo json_encode(array("message" => "Please Fill All fields"));
    }
} else {
    // Invalid HTTP method
    echo json_encode(array("message" => "Invalid request method."));
}

    
    

