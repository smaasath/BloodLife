<?php

require_once '../classes/User.php';
require_once '../classes/Donation.php';
require_once '../classes/Donor.php';
require_once '../classes/Validation.php';

use classes\User;
use classes\Donation;
use classes\Donor;
use classes\Validation;

header('Content-Type: application/json');

$method = $_SERVER["REQUEST_METHOD"];

$headers = getallheaders();
$authorizationHeader = isset($headers['Authorization']) ? $headers['Authorization'] : (isset($headers['authorization']) ? $headers['authorization'] : null);
$data = json_decode(file_get_contents("php://input"), true);

if ($method === "POST") {

    if (isset($authorizationHeader) && preg_match('/Bearer\s+(.*)$/i', $authorizationHeader, $matches)) {

        $token = $matches[1];
        $user = new User(null, null, null, null, $token, null, null, null, null);

        if ($user->validateToken()) {

            if (isset($data["AttebdanceId"])) {


                if (!empty($data["AttebdanceId"])) {

                    $EncryptedAttebdanceId = filter_var($data['AttebdanceId'], FILTER_SANITIZE_STRING);
                    $AttendenceArray = Donation::divideLetters($EncryptedAttebdanceId);
                    $donor = Donor::getDonorById($user->getDonorId());
                    $certificate = Donation::CreateCertificates($donor->getName(), date("Y-m-d"));

                    if ($AttendenceArray["type"] == "campaign") {
                        if (Validation::validateAlreadyExist("campaignId", $AttendenceArray["EncryptedId"], "campaigntable")) {
                        $donation = new Donation(null, $donor->getDonorId(), $donor->getBloodBankId(), $AttendenceArray["EncryptedId"], $certificate, null);
                        echo $donation->AddDonation() ? "succam" : "failcamp";
                        } else {
                             echo 'didn find camp';
                        }
                    } else if ($AttendenceArray["type"] == "bloodbank") {
                        
                        if (Validation::validateAlreadyExist("bloodBankRequestId", $AttendenceArray["EncryptedId"], "bloodbankrequest")) {
                            $donation = new Donation(null, $donor->getDonorId(), $donor->getBloodBankId(), null, $certificate, $AttendenceArray["EncryptedId"]);
                            echo $donation->AddDonation() ? "sucbank" : "failbank";
                        } else {
                            echo 'didn find request id';
                        }
                    } else {

                        echo 'pua';
                    }
                } else {
                    echo 'empty';
                }
            } else {
                echo 'lop';
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
