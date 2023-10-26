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



    if(isset($_POST["name"],$_POST["bloodGroup"],$_POST["dob"],
    $_POST["nic"],$_POST["contactNumber"],$_FILES["medicalReport"],
    $_POST["district"],$_POST["division"],$_POST["bloodBankId"],
    $_POST["UserName"],$_POST["email"])){

        if(!empty($_POST["name"]) && ( $_POST["bloodGroup"]) && ($_POST["dob"]) && 
        ($_POST["nic"])&& ($_POST["contactNumber"]) && ($_FILES["medicalReport"]) && 
        ($_POST["district"]) && ($_POST["division"]) && ($_POST["bloodBankId"]) && 
        ($_POST["UserName"]) && ($_POST["email"])){


            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $bloodGroup = filter_var($_POST['bloodGroup'], FILTER_SANITIZE_STRING);
            $dob = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);
            $contactNumber = filter_var($_POST['contactNumber'], FILTER_SANITIZE_STRING);
            $nic = filter_var($_POST['nic'], FILTER_SANITIZE_STRING);
           
            $medicalReport = file_get_contents($_FILES['medicalReport']['tmp_name']);
            
            $bloodBankId = filter_var($_POST['bloodBankId'], FILTER_SANITIZE_NUMBER_INT);
            $UserName = filter_var($_POST['UserName'], FILTER_SANITIZE_STRING);
            $district = filter_var($_POST['district'], FILTER_SANITIZE_STRING);
            $division = filter_var($_POST['division'], FILTER_SANITIZE_STRING);
          
            $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        
            $districtId = district::getDistrictIDDD($district, $division);
            
            
        
        
           
        
        
        
           if(Donor::AddDonor($name, $medicalReport,$bloodGroup,$dob,$contactNumber,$nic, $bloodBankId,  $UserName,  $email,$districtId)){
            echo "succes";
           }else{
            echo "failed to add donor";
           }


        }else{
            echo "need all input";
        }
   
    
    
        }else {
            echo "isset error";
        }
}else{

    echo"Invalid request method";
}