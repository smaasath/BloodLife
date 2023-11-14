
<?php

require_once '../classes/User.php';
require_once '../classes/Validation.php';
require_once '../classes/district.php';
require_once '../classes/bloodBank.php';
require_once '../classes/Donor.php';

use classes\User;
use classes\Validation;
use classes\district;
use classes\bloodBank;
use classes\Donor;

header('Content-Type: application/json');
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
if (isset($data["name"], $data["dob"],$data["nic"], $data["contactNumber"],
          $data["district"], $data["division"],$data["email"],$data["password"],$data["bloodbank"])) {

        //empty value check
        if (!empty($data["name"]) && ($data["dob"]) && ($data["nic"]) &&
                ($data["contactNumber"]) && ($data["district"]) && ($data["division"]) &&
                ($data["email"]) && ($data["password"]) && ($data["bloodbank"])) {

            // sanitizing the inputs
            $name = filter_var($data["name"], FILTER_SANITIZE_STRING);
            $dob = filter_var($data["dob"], FILTER_SANITIZE_STRING);
            $contactNumber = filter_var($data["contactNumber"], FILTER_SANITIZE_STRING);
            $nic = filter_var($data["nic"], FILTER_SANITIZE_STRING);
            $district = filter_var($data["district"], FILTER_SANITIZE_STRING);
            $division = filter_var($data["division"], FILTER_SANITIZE_STRING);
            $email = filter_var($data["email"], FILTER_SANITIZE_EMAIL);
            $bloodBankName = filter_var($data["bloodbank"], FILTER_SANITIZE_STRING);
            $password = filter_var($data["password"], FILTER_SANITIZE_STRING);
            $districtId = district::getDistrictIDDD($district, $division);

           

            //validations
            $nicExist = Validation::validateAlreadyExist("nic", $nic, "donor");
            $emailExist = Validation::validateAlreadyExist("email", $email, "user");
            $validateEmail = Validation::validateGmail($email);
            $validatePhoneNumber = Validation::validateContactNumber($contactNumber);
            $validateNic = Validation::validateSriLankanNIC($nic);
            $validateDob = Validation::validateDOB($dob);
            $validatePassword = Validation::validatePassword($password);
            $bloodBank = new bloodBank(null, $bloodBankName, null, null, null);
        

            //token and bloodbank id checking
            if ($bloodBank->GetBloodbankByName()) {


                //email,phonenumber,nic,dob,bloodgroup valitaion check
                if ($validateEmail && $validatePhoneNumber && $validateNic && $validateDob && $validatePassword) {

                    //nic,email,username exist check in db
                    if (!$nicExist && !$emailExist) {

                        //create donor object
                        $donor = new Donor(null, $name, null, $dob, $contactNumber, $nic, null, null, null, "snoozed", null, null, $bloodBank->getBloodBankId(), $districtId);

                        if($donor->AddDonor($email, $password)){
                            $status = true;
                        }else{
                            $status = "Donor Added Failed";
                        }

                    } else {
                        //check status for exist values
                        $status = $nicExist ? "Nic Already Exist" : ($emailExist ? "Email Already Exist" : "Email Already Exist");
                    }
                } else {
                    //check status for valitations
                    $status = !$validateEmail ? "Email Not Valid" : (!$validatePhoneNumber ? "Contact Number Not Valid" : (!$validateNic ? "Nic Not Valid" : (!$validateDob ? "DOB Not Valid" : (!$validatePassword ? "Password must contain 8 Letters eg: NaAdt$3!@#" : "Password must contain 8 Letters eg: NaAdt$3!@#"))));
                }
            } else {
                //status for not valid Blood Bank
                $status = "Blood Bank Not Valid";
            }
        } else {
            //status for empty value
            $status = "Need to Fill All Inputs";
           
        }
    } else {
        //status for isset value
        $status = "Need All Inputs";
    }
     echo json_encode(array("message" => $status));
} else {
    echo json_encode(array("message" => "Invalid request method."));
}