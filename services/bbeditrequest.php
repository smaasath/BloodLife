<?php

require_once '../classes/bloodbankhsrequest.php';
require_once '../classes/validation.php';
require_once '../classes/User.php';

use classes\User;
use classes\validation;
use classes\bloodbankhsrequest;
//compare 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $status;
  

    if (isset($_POST["bloodGroup"], $_POST["bloodQuantity"], $_POST["requestStatus"], $_POST["token"], $_POST["bloodBankRequestId"])) {


        if (!empty($_POST["bloodGroup"]) && ($_POST["bloodQuantity"]) && ($_POST["requestStatus"]) && ($_POST["token"]) && ($_POST["bloodBankRequestId"])) {

            //sanitize

            $bloodgroup = filter_var($_POST["bloodGroup"], FILTER_SANITIZE_STRING);
            $quantity = filter_var($_POST["bloodQuantity"], FILTER_SANITIZE_STRING);
            $requestStatus = filter_var($_POST["requestStatus"], FILTER_SANITIZE_STRING);
            $token = filter_var($_POST["token"], FILTER_SANITIZE_STRING);
            $reqid= filter_var($_POST["bloodBankRequestId"], FILTER_SANITIZE_NUMBER_INT);


            //validate
            $user = new User(null, null, null, null, $token, null, null, null, null);


            $validatebloodgroup = validation::validateBloodGroup($bloodgroup);
            $validatequantity = validation::validatequantity($quantity);
            $validateToken = $user->validateToken();
            $bloodBankId  = $user->getBloodBankId();
            $createdDate = date("Y-m-d");

            if ($validateToken && $bloodBankId != null) {

                if ($validatebloodgroup && $validatequantity) {
                    $request = new bloodbankhsrequest($bloodBankRequestId, $createdDate, $bloodQuantity,$bloodGroup, $requestStatus, $hospitalRequestId, $bloodBankId);
                   
                    if ($request->EditBbRequest()) {
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
