<?php

require_once '../classes/campaign.php';
require_once '../classes/User.php';
require_once '../classes/Donation.php';

use classes\campaign;
use classes\User;
use classes\Donation;


header('Content-Type: application/json');

$method = $_SERVER["REQUEST_METHOD"];

$headers = getallheaders();
$authorizationHeader = isset($headers['Authorization']) ? $headers['Authorization'] : (isset($headers['authorization']) ? $headers['authorization'] : null);


if ($method === "GET") {
    if (isset($authorizationHeader) && preg_match('/Bearer\s+(.*)$/i', $authorizationHeader, $matches)) {

        $token = $matches[1];
        $user = new User(null, null, null, null, $token, null, null, null, null);

        if ($user->validateToken() && $user->getDonorId() != null) {


            $donation = new Donation(null, $user->getDonorId(), null, null, null, null);
            $donationArray = $donation->getCertificates();
            
            
           if (!empty($donationArray)) {
               
                echo json_encode(array("message" => true, "data" => $donationArray));
            } else {
                echo json_encode(array("message" => "No Certificates Found", "data" => []));
            }
        } else {
            
            echo json_encode(array("message" => "Invalid Token"));
        }
    } else {
        echo json_encode(array("message" => "Didn't Find Header"));
    }
} else {
    echo json_encode(array("message" => "Invalid request method."));
}
