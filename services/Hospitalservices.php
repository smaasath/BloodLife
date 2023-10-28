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

    


 

}
?>






