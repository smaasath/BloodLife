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
                        $status = 2;
                    }
                } else {
                    $status = !$validatebloodgroup ? 4 : (!$validatequantity ? 5 : 6);
                }
            } else {
                $status = 7;
            }
        } else {
            $status = 8;
        }
    } else {
        $status = 9;
    }

    // header("Location: ../Dashboards/BloodBankDashboard.php?status=$status");
} else {
    $status = 10;
}

echo $status;
