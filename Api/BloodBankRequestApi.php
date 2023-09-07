<?php

require_once '../classes/bloodbankhsrequest.php';
use classes\bloodbankhsrequest;


header('Content-Type: application/json');

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

   

    $bloodBankId  = $data['bloodBankId'];

    $newReq = bloodbankhsrequest::getBloodBankReqByBankID($bloodBankId);


    if ($newReq==null) {
       
        echo json_encode(array("message" => "Request Not Found"));
    } else {
        
        echo json_encode($newReq);
       
    }
} else {
    // Invalid HTTP method
    echo json_encode(array("message" => "Invalid request method."));
}