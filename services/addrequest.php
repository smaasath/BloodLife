<?php

namespace classes;

require_once '../classes/district.php';
require_once '../classes/hospitalrequestclass.php';

use classes\district;
use classes\hospitalrequestclass;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $bloodQuantity = filter_var($_POST['bloodQuantity'], FILTER_SANITIZE_STRING);
    $bloodGroup = filter_var($_POST['bloodGroup'], FILTER_SANITIZE_STRING);
    $requestStatus = filter_var($_POST['requestStatus'], FILTER_SANITIZE_STRING);
    $hospitalId = $_POST['userID'];
   $createdDate = date("Y-m-d");

  
    
    hospitalrequestclass::addHosRequest($createdDate, $bloodQuantity, $bloodGroup, $requestStatus, $hospitalId);
    
    header("Location: ../Dashboards/HospitalDashboard.php?addreq=Success");
    
    

   
}
