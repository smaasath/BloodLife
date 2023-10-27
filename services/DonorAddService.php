<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace classes;

require '../classes/Donor.php';
require '../classes/district.php';

use classes\district;
use classes\Donor;

$status = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//isset check

    if (isset($_POST["name"], $_POST["bloodGroup"], $_POST["dob"],
                    $_POST["nic"], $_POST["contactNumber"], $_FILES["medicalReport"],
                    $_POST["district"], $_POST["division"], $_POST["token"],
                    $_POST["UserName"], $_POST["email"])) {

        //empty value check
        if (!empty($_POST["name"]) && ( $_POST["bloodGroup"]) && ($_POST["dob"]) &&
                ($_POST["nic"]) && ($_POST["contactNumber"]) && ($_FILES["medicalReport"]) &&
                ($_POST["district"]) && ($_POST["division"]) && ($_POST["token"]) &&
                ($_POST["UserName"]) && ($_POST["email"])) {

            // sanitizing the inputs
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $bloodGroup = filter_var($_POST['bloodGroup'], FILTER_SANITIZE_STRING);
            $dob = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);
            $contactNumber = filter_var($_POST['contactNumber'], FILTER_SANITIZE_STRING);
            $nic = filter_var($_POST['nic'], FILTER_SANITIZE_STRING);
            $medicalReport = file_get_contents($_FILES['medicalReport']['tmp_name']);
            $token = filter_var($_POST['token'], FILTER_SANITIZE_STRING);
            $UserName = filter_var($_POST['UserName'], FILTER_SANITIZE_STRING);
            $district = filter_var($_POST['district'], FILTER_SANITIZE_STRING);
            $division = filter_var($_POST['division'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $districtId = district::getDistrictIDDD($district, $division);
            
            //create user object with token
            $user = new User(null, null, null, null, null, $token, null, null, null, null);
            
            //validations
            $nicExist = User::validateAlreadyExist("nic", $nic, "donor");
            $emailExist = User::validateAlreadyExist("email", $email, "user");
            $userNameExist = User::validateAlreadyExist("UserName", $UserName, "user");
            $validateEmail = User::validateGmail($email);
            $validatePhoneNumber = Donor::validateContactNumber($contactNumber);
            $validateNic = Donor::validateSriLankanNIC($nic);
            $validateDob = Donor::validateDOB($dob);
            $validateBloodGroup = Donor::validateBloodGroup($bloodGroup);
            $validateToken = $user->validateToken();
            $bloodBankId = $user->getBloodBankId();
            
            //token and bloodbank id checking
            if ($validateToken && $bloodBankId !=null) {
                
                
                //email,phonenumber,nic,dob,bloodgroup valitaion check
                if ($validateEmail && $validatePhoneNumber && $validateNic && $validateDob && $validateBloodGroup) {

                    //nic,email,username exist check in db
                    if (!$nicExist && !$emailExist && !$userNameExist) {
                        
                        //create donor object
                        $donor = new Donor(null, $name, $bloodGroup, $dob, $contactNumber, $nic, null, null, null, null, $medicalReport, null, $bloodBankId, $districtId);
                        
                        //check status for adding donor
                        $status = $donor->AddDonor($UserName, $email) ? 1 : 2;
                    } else {
                        //check status for exist values
                        $status = $nicExist ? 3 : ($emailExist ? 4 : ($userNameExist ? 5 : 6));
                    }
                } else {
                    //check status for valitations
                    $status = !$validateEmail ? 7 : (!$validatePhoneNumber ? 8 : (!$validateNic ? 9 : (!$validateDob ? 10 : (!$validateBloodGroup ? 11 : 12))));
                }
            } else {
                //status for not valid token
                $status = 13;
            }
        } else {
            //status for empty value
            $status = 14;
        }
    } else {
        //status for isset value
        $status = 15;
    }
} else {

    echo"Invalid request method";
}

echo $status;
