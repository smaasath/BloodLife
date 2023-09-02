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


    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $bloodGroup = filter_var($_POST['bloodGroup'],FILTER_SANITIZE_STRING);
    $dob = filter_var($_POST['dob'],FILTER_SANITIZE_STRING);
    $contactNumber = filter_var( $_POST['contactNumber'],FILTER_SANITIZE_STRING);
    $nic = filter_var($_POST['nic'],FILTER_SANITIZE_STRING);
    $noOfDonation = filter_var($_POST['noOfDonation'],FILTER_SANITIZE_NUMBER_INT);
    $coinValue = filter_var($_POST['coinValue'],FILTER_SANITIZE_NUMBER_INT);
    $donationLastDate =filter_var( $_POST['donationLastDate'],FILTER_SANITIZE_STRING);
    $availability = filter_var($_POST['availability'],FILTER_SANITIZE_STRING);
    $medicalReport = file_get_contents($_FILES['medicalReport']['tmp_name']);
    $district =filter_var($_POST['district'],FILTER_SANITIZE_STRING);
    $division=filter_var($_POST['division'],FILTER_SANITIZE_STRING);
    $bloodBankId  = filter_var($_POST['bloodBankId'],FILTER_SANITIZE_NUMBER_INT);
    
  
$districtId = district::getDistrictIDDD($district, $division);
echo $bloodBankId ;

    
    Donor::AddDonor($name, $bloodGroup, $dob, $contactNumber, $nic, $noOfDonation, $coinValue, $donationLastDate, $availability, $medicalReport, 1,$districtId);

}