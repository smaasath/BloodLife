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

        if ($user->validateToken() && $user->getDonorId() != null) {

            if (isset($data["AttebdanceId"])) {


                if (!empty($data["AttebdanceId"])) {
                    
                    $EncryptedAttebdanceId = filter_var($data['AttebdanceId'], FILTER_SANITIZE_STRING);
                    $AttendenceArray = Donation::divideLetters($EncryptedAttebdanceId);
                    $donor = Donor::getDonorById($user->getDonorId());
                    $certificate = Donation::CreateCertificates($donor->getName(), date("Y-m-d"));
                    $ValidateDonorLastDate = $donor->ValidateDonationDonationDate();
                    $validateDonorStatus = $donor->getAvailability() == "Available";
                    
                    if($ValidateDonorLastDate && $validateDonorStatus){
                    if ($AttendenceArray["type"] == "campaign") {

                        $ValidateCampaignAttentence = Validation::validateAttendance($donor->getDonorId(), $AttendenceArray["EncryptedId"], "campaignId");

                        if (!$ValidateCampaignAttentence) {
                            if (Validation::validateAlreadyExist("campaignId", $AttendenceArray["EncryptedId"], "campaigntable")) {
                                $donation = new Donation(null, $donor->getDonorId(), $donor->getBloodBankId(), $AttendenceArray["EncryptedId"], $certificate, null);
                                $donation->AddDonation();
                                $donor->setDonationLastDate(date("Y-m-d"));
                                $coinValue = intval($donor->getCoinValue());
                                $numberOfDonation = intval($donor->getNoOfDonation());
                                $donor->setCoinValue($coinValue + 200);
                                $donor->setNoOfDonation($numberOfDonation+ 1);
                                echo $donor->EditDonor() ? json_encode(array("message" => "Attendence Added")) : json_encode(array("message" => "Attendence Failed"));
                            } else {
                               echo json_encode(array("message" => "Invalid Campaign"));
                            }
                        } else {
                            echo json_encode(array("message" => "Attendence Already Added"));
                        }
                    } else if ($AttendenceArray["type"] == "bloodbank") {

                        $ValidateBloodBankAttentence = Validation::validateAttendance($donor->getDonorId(), $AttendenceArray["EncryptedId"], "bloodBankId");

                        if (!$ValidateBloodBankAttentence) {

                            if (Validation::validateAlreadyExist("bloodBankRequestId", $AttendenceArray["EncryptedId"], "bloodbankrequest")) {
                                $donation = new Donation(null, $donor->getDonorId(), $donor->getBloodBankId(), null, $certificate, $AttendenceArray["EncryptedId"]);
                                $donation->AddDonation();
                                $donor->setDonationLastDate(date("Y-m-d"));
                                $coinValue = intval($donor->getCoinValue());
                                $numberOfDonation = intval($donor->getNoOfDonation());
                                $donor->setCoinValue($coinValue + 200);
                                $donor->setNoOfDonation($numberOfDonation+ 1);
                                echo $donor->EditDonor() ? json_encode(array("message" => "Attendence Added")) : json_encode(array("message" => "Attendence Failed"));
                                
                            } else {
                                echo json_encode(array("message" => "Invalid Request"));
                            }
                        } else {
                           echo json_encode(array("message" => "Attendence Already Added"));
                        }
                    } else {

                        echo json_encode(array("message" => "QR Error"));
                    }
                    }else{
                        echo !$validateDonorStatus ? json_encode(array("message" => "Donor Not Activated")) : (!$ValidateDonorLastDate ? json_encode(array("message" => "Your Last Donation Date is lower than 4 months")) : "lko"); 
                    }
                } else {
                    echo json_encode(array("message" => "Attentence Details is Empty"));
                }
            } else {
                echo json_encode(array("message" => "Attentence Details Not Recived"));
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
