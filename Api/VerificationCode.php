
<?php

require_once '../classes/User.php';
require_once '../classes/Validation.php';

use classes\User;
use classes\Validation;

header('Content-Type: application/json');
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data["email"])) {
        $email = $data["email"];
        if (Validation::validateGmail($email)) {
            $otp = Validation::generateOTP();
            if (User::SendVerificationCode($otp, $data["email"])) {
                echo json_encode(array(
                    "message" => true,
                    "otp" => $otp
                ));
            } else {
                echo json_encode(array("message" => "gmail send fail"));
            }
        } else {
            echo json_encode(array("message" => "Invalid Gmail"));
        }
    } else {
        echo json_encode(array("message" => "didn't get gmail"));
    }
} else {
    echo json_encode(array("message" => "Invalid request method."));
}