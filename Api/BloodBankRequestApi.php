<?php

require_once '../classes/bloodbankhsrequest.php';
require_once '../classes/Donor.php';
require_once '../classes/User.php';

use classes\bloodbankhsrequest;
use classes\Donor;
use classes\User;




header('Content-Type: application/json');

$method = $_SERVER["REQUEST_METHOD"];

$headers = getallheaders();
$authorizationHeader = isset($headers['authorization']) ? $headers['authorization'] : null;


if ($method === "GET") {
     
if (isset($authorizationHeader) && preg_match('/Bearer\s+(.*)$/i', $authorizationHeader, $matches)) {

    $token = $matches[1];
    $user = new User(null, null, null, null, $token, null, null, null, null);

    if ($user->validateToken()) {
       
            
            
            $donorId = $user->getDonorId();

            $newDonor = Donor::getDonorById($donorId);

            $bloodBankId = $newDonor->getBloodBankId();

            $newReq = bloodbankhsrequest::getBloodBankReqByBankID($bloodBankId);

            if ($newReq == null) {

                echo json_encode(array("message" => false));
            } else {

                echo json_encode($newReq);
            }
        } else {
            // Invalid HTTP method
            echo json_encode(array("message" => false));
        }
    } else {
        echo json_encode(array("message" => false));
    }
} else {
    echo json_encode(array("message" => "Invalid request method."));
}
