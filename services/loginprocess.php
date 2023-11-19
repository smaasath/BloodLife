<?php

require_once '../classes/User.php';
require_once '../classes/Validation.php';

use classes\User;
use classes\Validation;

session_start();
$status = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    if (isset($_POST["email"], $_POST["password"])) {

        if (!empty($_POST["email"] && $_POST["password"])) {

            // sanitizing the inputs
            $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

            $validateEmail = Validation::validateGmail($email);
            if ($validateEmail) {
                $user = new User(null, $password, $email, null, null, null, null, null, null);
                if ($user->webLogin() != false) {
                    $userArray = $user->webLogin();
                    $_SESSION["Token"] = $userArray['Token'];


                    if (isset($_POST["remember"])) {
                        $status = 9;
                    } else {
                        switch ($userArray['UserRole']) {
                            case 1:
    
                                header('Location: ../Dashboards/AdminDashboard.php');
                                break;
                            case 2:
                                header('Location: ../Dashboards/BloodBankDashboard.php');
                                break;
                            case 3:
                                header('Location: ../Dashboards/HospitalDashboard.php');
                                break;
                            default:
                                $status = 10;
                        }
                    }
                } else {
                    $status = 6;
                }
            } else {
                $status = 5;
            }
        } else {
            //status for empty value
            $status = 03;
        }
    } else {
        //status for isset value
        $status = 02;
    }
} else {
    //status for request method
    $status = 07;
}
echo $status;
