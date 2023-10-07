<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace classes;

require '../classes/district.php';
require '../classes/hospital.php';

use classes\district;
use classes\hospital;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//    $hospitalId = filter_var($_POST['hospitalId'], FILTER_SANITIZE_NUMBER_INT);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $contactNumber = filter_var($_POST['contactNumber'], FILTER_SANITIZE_STRING);
//   $districtId = filter_var($_POST['districtId'], FILTER_SANITIZE_NUMBER_INT);
    $district = filter_var($_POST['district'], FILTER_SANITIZE_STRING);
    $division = filter_var($_POST['division'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $UserName = filter_var($_POST['UserName'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    $districtId = district::getDistrictIDDD($district, $division);
    echo $districtId;
    
//    echo $district;
//    echo $division;
//    echo $name;
//    echo $address;
//    echo $contactNumber;


    hospital::AddHospital($name, $address, $contactNumber, $districtId, $email, $UserName, $password);
    echo "success";

    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];

    // Define your password validation criteria
    $min_length = 8;
    $uppercase_required = true;
    $lowercase_required = true;
    $digit_required = true;
    $special_char_required = false; // You can set this to true if you want to require special characters

    // Perform password validation
    $errors = [];

    // Check if the password meets the minimum length requirement
    if (strlen($password) < $min_length) {
        $errors[] = "Password must be at least $min_length characters long.";
    }

    // Check if the password contains at least one uppercase letter
    if ($uppercase_required && !preg_match('/[A-Z]/', $password)) {
        $errors[] = "Password must contain at least one uppercase letter.";
    }

    // Check if the password contains at least one lowercase letter
    if ($lowercase_required && !preg_match('/[a-z]/', $password)) {
        $errors[] = "Password must contain at least one lowercase letter.";
    }

    // Check if the password contains at least one digit
    if ($digit_required && !preg_match('/[0-9]/', $password)) {
        $errors[] = "Password must contain at least one digit.";
    }

    // Check if the password contains special characters (if required)
    if ($special_char_required && !preg_match('/[^a-zA-Z0-9]/', $password)) {
        $errors[] = "Password must contain at least one special character.";
    }

    // Display validation results
    if (empty($errors)) {
        echo "Password is valid!";
        echo "<br>";
    } else {
        echo "Password is not valid. Errors:<br>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

 if (isset($_POST["hospital"])) {
     $hospitalID= $_POST["hospital"];
     hospital::showhospitaldetails($hospitalID);
    }

}
?>






