<?php

require_once '../classes/Bloodtable.php';
require_once '../classes/validation.php';
require_once '../classes/User.php';

use classes\User;
use classes\Bloodtable;
use classes\validation;
//compare 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $status;

  if (isset($_POST["bloodgroup"], $_POST["quantity"], $_POST["expiryDate"], $_POST["token"])) {


    if (!empty($_POST["bloodgroup"]) && ($_POST["quantity"]) && ($_POST["expiryDate"]) && ($_POST["token"])) {

      //sanitize
      $expirydate = filter_var($_POST["expiryDate"], FILTER_SANITIZE_STRING);
      $bloodgroup = filter_var($_POST["bloodgroup"], FILTER_SANITIZE_STRING);
      $quantity = filter_var($_POST["quantity"], FILTER_SANITIZE_STRING);
      $token = filter_var($_POST["token"], FILTER_SANITIZE_STRING);


      //validate
      $user = new User( null, null, null, null, $token, null, null, null, null);

      $validateexpiry = validation::validateexpirydate($expirydate);
      $validatebloodgroup = validation::validateBloodGroup($bloodgroup);
      $validatequantity = validation::validatequantity($quantity);
      $validateToken = $user->validateToken();
      
      $bloodBankId = $user->getBloodBankId();
      
   

      if ($validateToken && $bloodBankId != null) {

        if ($validateexpiry && $validatebloodgroup && $validatequantity) {
          $bloodpacked = new Bloodtable(null, $expirydate, $bloodgroup, $quantity, $bloodBankId, "Available");

          if ($bloodpacked->addbloodpacket()) {
            $status = 1;
          } else {
            $status = "Unsuccessfull !";
          }
        } else {
          $status = !$validateexpiry ? "The expiration date should not precede the indicated time of expiry!" : (!$validatebloodgroup ? "Blood Group type Error!" : (!$validatequantity ? "Quantity must have 3 digits!" : "Quantity must have 3 digits!"));
        }
      } else {
        $status = "Unauthorzied Activity! ";
      }
    } else {
      $status ="All Fields need to be Filled!";
    }
  } else {
    $status =  "All Fields need to be Filled!";
  }

  // header("Location: ../Dashboards/BloodBankDashboard.php?status=$status");
} else {
  $status = "Invalid Request Method!";
}

$encrptedmessage=validation::encryptedValue($status);
header("Location: ../Dashboards/BloodBankDashboard.php?status=$encrptedmessage");
