<?php

require_once '../classes/Bloodtable.php';
require_once '../classes/validation.php';

use classes\Bloodtable;
use classes\validation;
//compare 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $status;

  if (isset($_POST["bloodgroup"], $_POST["quantity"], $_POST["expiryDate"])) {
    if (empty($_POST["bloodgroup"]) || empty($_POST["quantity"]) || empty($_POST["expiryDate"])) {

      $status = 1;
    } else {

      //sanitize
      $expirydate = filter_var($_POST["expiryDate"], FILTER_SANITIZE_STRING);
      $bloodgroup = filter_var($_POST["bloodgroup"], FILTER_SANITIZE_STRING);
      $quantity = filter_var($_POST["quantity"], FILTER_SANITIZE_STRING);
      $id = filter_var($_POST["id"], FILTER_SANITIZE_STRING);

      //validate

      //if condition to check validate
    

      $validateexpiry = validation::validateexpirydate($expirydate);
      $validatebloodgroup = validation::validateBloodGroup($bloodgroup);
      $validatequantity = validation::validatequantity($quantity);

      if($validateexpiry && $validatebloodgroup && $validatequantity){
        $bloodpacked = new Bloodtable(null, $expirydate, $bloodgroup, $quantity, $id, "Available");
      }else{
        $status = !$validateexpiry ? 2 : (!$validatebloodgroup ? 2 :  (!$validatequantity ? 2 :2));
      }

      if ($bloodpacked->addbloodpacket()) {
        $status = 2;
      } else {
        $status = 3;
      }
    }
  } else {
    $status = 4;
  }

  header("Location: ../Dashboards/BloodBankDashboard.php?status=$status");
}

echo $status;
