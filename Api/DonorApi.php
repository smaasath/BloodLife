<?php

require_once '../classes/Donor.php';
use classes\Donor;


header('Content-Type: application/json');

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {
    $data = json_decode(file_get_contents("php://input"), true);

   

    $donorId = $data['donorId'];

    $newDonor = Donor::getDonorById($donorId);


    if ($newDonor==null) {
       
        echo json_encode(array("message" => "User Not Found"));
    } else {
        
        echo json_encode(
           array(
            "donorId" => $newDonor->getDonorId(),
            "name" => $newDonor->getName(),
            "bloodGroup" => $newDonor->getBloodGroup(),
            "dob" => $newDonor->getDob(),
            "contactNumber" => $newDonor->getContactNumber(),
            "nic" => $newDonor->getNic(),
            "noOfDonation" => $newDonor->getNoOfDonation(),
            "coinValue" => $newDonor->getCoinValue(),
            "donationLastDate" => $newDonor->getDonationLastDate(),
            "availability" => $newDonor->getAvailability(),
        
            "bloodBankId" => $newDonor->getBloodBankId(),
            "districtId" => $newDonor->getDistrictId(),     
           )
        );
       
    }
} else {
    // Invalid HTTP method
    echo json_encode(array("message" => "Invalid request method."));
}