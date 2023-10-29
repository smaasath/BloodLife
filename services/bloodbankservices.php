<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace classes;

require '../classes/district.php';
require '../classes/bloodBank.php';

use classes\district;
use classes\bloodBank;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $bloodBankName = filter_var($_POST['bloodBankName'], FILTER_SANITIZE_STRING);
    $Address = filter_var($_POST['Address'], FILTER_SANITIZE_STRING);
    $ContactNo = filter_var($_POST['ContactNo'], FILTER_SANITIZE_STRING);
    $district = filter_var($_POST['district'], FILTER_SANITIZE_STRING);
    $division = filter_var($_POST['division'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    
    
    $districtId = district::getDistrictIDDD($district, $division);
    echo $districtId;
    

    bloodBank::AddBloodBank($bloodBankName, $Address, $ContactNo, $districtId, $email, $UserName, $password);
    echo "success";

    

 

}
?>






