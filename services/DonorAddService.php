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

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $bloodGroup = filter_var($_POST['bloodGroup'], FILTER_SANITIZE_STRING);
    $dob = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);
    $contactNumber = filter_var($_POST['contactNumber'], FILTER_SANITIZE_STRING);
    $nic = filter_var($_POST['nic'], FILTER_SANITIZE_STRING);
   
    $medicalReport = file_get_contents($_FILES['medicalReport']['tmp_name']);
    
    $bloodBankId = filter_var($_POST['bloodBankId'], FILTER_SANITIZE_NUMBER_INT);
    $UserName = filter_var($_POST['UserName'], FILTER_SANITIZE_STRING);
  
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

    $districtId = district::getDistrictIDDD($district, $division);
    echo $bloodBankId;


   



    Donor::AddDonor($name, $medicalReport,$bloodGroup,$dob,$contactNumber,$nic, $bloodBankId,  $UserName,  $email);
}