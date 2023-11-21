<?php

require_once '../classes/hospitalrequestclass.php';
require_once '../classes/validation.php';
require_once '../classes/User.php';

use classes\User;
use classes\validation;
use classes\hospitalrequestclass;
//compare 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $status;

    if (isset($_POST["bloodGroup"], $_POST["bloodQuantity"], $_POST["requestStatus"], $_POST["token"])) {


        if (!empty($_POST["bloodGroup"]) && ($_POST["bloodQuantity"]) && ($_POST["requestStatus"]) && ($_POST["token"])) {

            //sanitize

            $bloodgroup = filter_var($_POST["bloodGroup"], FILTER_SANITIZE_STRING);
            $quantity = filter_var($_POST["bloodQuantity"], FILTER_SANITIZE_STRING);
            $requestStatus = filter_var($_POST["requestStatus"], FILTER_SANITIZE_STRING);
            $token = filter_var($_POST["token"], FILTER_SANITIZE_STRING);


            //validate
            $user = new User(null, null, null, null, $token, null, null, null, null);


            $validatebloodgroup = validation::validateBloodGroup($bloodgroup);
            $validatequantity = validation::validatequantity($quantity);
            $validateToken = $user->validateToken();
            $hospitalid = $user->getHospitalId();
            $createdDate = date("Y-m-d");

            if ($validateToken && $hospitalid != null) {

                if ($validatebloodgroup && $validatequantity) {

                    $request = new hospitalrequestclass(null, $createdDate, $quantity, $bloodgroup, $requestStatus, $hospitalid);

                    if ($request->addHosRequest()) {
                        $status = 1;
                    } else {
                        $status = "Bloodbank Request did not Added! Try Again..";
                    }
                } else {
                    $status = !$validatebloodgroup ? "Blood Group type Error!" : (!$validatequantity ? "Quantity must have 3 digits!" : "Quantity must have 3 digits!");
                }
            } else {
                $status = "Unauthorzied Activity! ";
            }
        } else {
            $status = "All Fields need to be Filled!";
        }
    } else {
        $status = "All Fields need to be Filled!";
    }

} else {
    $status = "Invalid Request Method!";
}

$encrptedmessage=validation::encryptedValue($status);
header("Location: ../Dashboards/HospitalDashboard.php?status=$encrptedmessage");
