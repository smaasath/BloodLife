<?php

require_once '../classes/campaign.php';
use classes\campaign;


header('Content-Type: application/json');

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

   



    $Allcamp = campaign::getAllCampaign();


    if ($Allcamp==null) {
       
        echo json_encode(array("message" => "Request Not Found"));
    } else {
        
        echo json_encode($Allcamp);
       
    }
} else {
    // Invalid HTTP method
    echo json_encode(array("message" => "Invalid request method."));
}