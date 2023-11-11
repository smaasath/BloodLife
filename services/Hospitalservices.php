<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace classes;

require '../classes/district.php';
require '../classes/hospital.php';
require '../classes/Donor.php';

use classes\district;
use classes\hospital;
use classes\Donor;

$status = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();

    if (isset($_POST["VerificationCode"], $_SESSION["VerificationCode"], $_SESSION["hospital"], $_SESSION["userName"], $_SESSION["email"], $_SESSION['timestamp'])) {
        //check status for adding hospital

        $verifyOtp = (int) $_POST["VerificationCode"] === (int) $_SESSION["VerificationCode"];
        $time = time() - $_SESSION['timestamp'] > 60;

        if ($verifyOtp && $time) {
            
            $status = $_SESSION["hospital"]->AddDonor($_SESSION["userName"], $_SESSION["email"]) ? 1 : 2;
            session_destroy();
            
        } else {
            unset($_SESSION["VerificationCode"]);
            unset($_SESSION['timestamp']);
            $status = !$verifyOtp ? 3 : (!$time ? 4 : 5);

        }
    } else if(isset($_POST["name"], $_POST["address"], $_POST["contactNumber"],
              $_POST["district"], $_POST["division"], $_POST["token"],
              $_POST["UserName"], $_POST["email"])) {

    //empty value check
    if (!empty($_POST["name"]) && ( $_POST["address"]) && ($_POST["contactNumber"]) &&
              ($_POST["district"]) && ($_POST["division"]) && ($_POST["token"]) &&
              ($_POST["UserName"]) && ($_POST["email"])) {


    // sanitizing the inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $contactNumber = filter_var($_POST['contactNumber'], FILTER_SANITIZE_STRING);
    $token = filter_var($_POST['token'], FILTER_SANITIZE_STRING);
    $district = filter_var($_POST['district'], FILTER_SANITIZE_STRING);
    $division = filter_var($_POST['division'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    $districtId = district::getDistrictIDDD($district, $division);
    echo $districtId;
    
    hospital::AddHospital($name, $address, $contactNumber, $districtId, $email, $_POST['UserName'], $password);
    echo "success";
    
    //create user object with token
   $user = new User(null, null, null, null, null, $token, null, null, null, null);
    
    //validations
    $emailExist = User::validateAlreadyExist("email", $email, "user");
    $validateEmail = User::validateGmail($email);
    $validatePhoneNumber = Donor::validateContactNumber($contactNumber);

     //token and hospital id checking
     if ($validateToken && $hospitalId != null) {

         //email,phonenumber validation check
         if ($validateEmail && $validatePhoneNumber ) {

            //email,username exist check in db
            if ( !$emailExist) {

                //create donor object
                $hospital = new Hospital(null, $name, $address, $contactNumber, $districtId);

                $_SESSION["VerificationCode"] = User::generateOTP();
                $_SESSION["hospital"] = $hospital;
                $_SESSION["userName"] = $UserName;
                $_SESSION["email"] = $email;
                $_SESSION['timestamp'] = time();
                $status = $donor->SendMail($UserName, $_SESSION["VerificationCode"], $email, $name) ? 6 : 7;

            } else {
                //check status for exist values
                $status = $nicExist ? 8 : ($emailExist ? 9 : ($userNameExist ? 10 : 11));
            }
        } else {
            //check status for valitations
            $status = !$validateEmail ? 12 : (!$validatePhoneNumber ? 13 : (!$validateNic ? 14 : (!$validateDob ? 15 : (!$validateBloodGroup ? 16 : 17))));
        }
    } else {
        //status for not valid token
        $status = 18;
    }
} else {
    //status for empty value
    $status = 19;
}
} else {
//status for isset value
$status = 20;
}
} else {

echo"Invalid request method";
}

    
header("Location: ../Dashboards/AdminDashboard.php?status=".Donor::encryptedValue($status));




 


?>






