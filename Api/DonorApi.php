<?php

require_once '../classes/Donor.php';

use classes\Donor;

require_once '../classes/DbConnector.php';
require_once '../classes/User.php';

use classes\User;
use classes\DbConnector;

header('Content-Type: application/json');

$headers = getallheaders();
$authorizationHeader = isset($headers['authorization']) ? $headers['authorization'] : null;
$method = $_SERVER["REQUEST_METHOD"];


if ($method === "GET") {
    if (isset($authorizationHeader) && preg_match('/Bearer\s+(.*)$/i', $authorizationHeader, $matches)) {

        $token = $matches[1];
        $user = new User(null, null, null, null, null, $token, null, null, null, null);

        if ($user->validateToken()) {

            $data = json_decode(file_get_contents("php://input"), true);

            $donorId = $user->getDonorId();

            $newDonor = Donor::getDonorById($donorId);

            if ($newDonor == null) {

                echo json_encode(array("message" => false));
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
                            "districtId" => $newDonor->getDistrictId(),
                        )
                );
            }
        } else {

            echo json_encode(array("message" => false));
        }
    } else {
        echo json_encode(array("message" => false));
    }
} else {
    echo json_encode(array("message" => "Invalid request method"));
}