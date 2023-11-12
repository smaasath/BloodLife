<?php

require_once '../classes/Donor.php';
require_once '../classes/User.php';
require_once '../classes/district.php';

use classes\Donor;
use classes\User;
use classes\district;


header('Content-Type: application/json');

$headers = getallheaders();
$authorizationHeader = isset($headers['authorization']) ? $headers['authorization'] : null;
$method = $_SERVER["REQUEST_METHOD"];


if ($method === "GET") {
    if (isset($authorizationHeader) && preg_match('/Bearer\s+(.*)$/i', $authorizationHeader, $matches)) {

        $token = $matches[1];
        $user = new User(null, null, null, null, $token, null, null, null, null);

        if ($user->validateToken()) {

            $data = json_decode(file_get_contents("php://input"), true);

            $donorId = $user->getDonorId();

            $newDonor = Donor::getDonorById($donorId);
            
            $district = district::getDistrictDivisionById($newDonor->getDistrictId());

            if ($newDonor == null) {

                echo json_encode(array("message" => "Donor Didn't found"));
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
                            "medicalReport" => base64_encode($newDonor->getMedicalReport()),
                            "image" => base64_encode($newDonor->getImage()),
                            "bloodBankId" => $newDonor->getBloodBankId(),
                            "district" => $district["district"],
                            "division" => $district["division"],
                            "message" => true
                        )
                );
            }
        } else {

            echo json_encode(array("message" => "Invalid Token"));
        }
    } else {
        echo json_encode(array("message" => "Header Didn't Find"));
    }
} else {
    echo json_encode(array("message" => "Invalid request method"));
}