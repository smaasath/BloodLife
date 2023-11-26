<?php
require_once '../classes/User.php';
require_once '../classes/Validation.php';

use classes\User;
use classes\Validation;

session_start();

$method = $_SERVER["REQUEST_METHOD"];
$status = '';

if ($method === "POST") {
    if (isset($_POST["new-password"], $_POST["confirm-password"])) {
        $newPassword = $_POST["new-password"];
        $confirmPassword = $_POST["confirm-password"];

        if ($newPassword === $confirmPassword) {
            if (Validation::validatePassword($newPassword)) {
                // Assuming $_SESSION["email"] contains the user's email

                $user = new User(null, null, null, null, null, null, null, null, null);
                if ($user->changePassword($_SESSION["email"], $newPassword)) {
                    header("Location: ../index.php");
                    exit();
                } else {
                    $status = "Password Change Failed";
                }
            } else {
                $status = "The password you entered is invalid";
            }
        } else {
            $status = "The passwords you entered are not matching";
        }
    } else {
        $status = "You need to fill all the blanks";
    }
} else {
    $status = "Invalid Request";
}

// Redirect based on status
header("Location: ResetPassword.php");
exit();
?>
