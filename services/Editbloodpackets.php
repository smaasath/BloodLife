

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

  if (isset($_POST["bloodgroup"], $_POST["quantity"], $_POST["expiryDate"], $_POST["token"], $_POST["status"], $_POST["bloodId"])) {


    if (!empty($_POST["bloodgroup"]) && ($_POST["quantity"]) && ($_POST["expiryDate"]) && ($_POST["token"]) && ($_POST["status"]) && ($_POST["bloodId"])) {

      //sanitize
      $expirydate = filter_var($_POST["expiryDate"], FILTER_SANITIZE_STRING);
      $bloodgroup = filter_var($_POST["bloodgroup"], FILTER_SANITIZE_STRING);
      $quantity = filter_var($_POST["quantity"], FILTER_SANITIZE_STRING);
      $token = filter_var($_POST["token"], FILTER_SANITIZE_STRING);
      $Requeststatus = filter_var($_POST["status"], FILTER_SANITIZE_STRING);
      $bloodId =filter_var($_POST["bloodId"], FILTER_SANITIZE_NUMBER_INT);
  
    


      //validate
      $user = new User( null, null, null, null, $token, null, null, null, null);

      $validateexpiry = validation::validateexpirydate($expirydate);
      $validatebloodgroup = validation::validateBloodGroup($bloodgroup);
      $validatequantity = validation::validatequantity($quantity);
      $validateToken = $user->validateToken();
      $bloodBankId = $user->getBloodBankId();
      

      if ($validateToken && $bloodBankId != null) {

        if ($validateexpiry && $validatebloodgroup && $validatequantity) {
          $bloodpacked = new Bloodtable($bloodId, $expirydate, $bloodgroup, $quantity, $bloodBankId, $Requeststatus);
          if($bloodpacked->Editbloodpacket()){
            $status =1;
          }else{
            $status =2;
          }

         
        } else {
          $status = !$validateexpiry ? 3 : (!$validatebloodgroup ? 4 : (!$validatequantity ? 5 : 6));
        }
      } else {
        $status = 7;
      }
    } else {
      $status = 8;
    }
  } else {
    $status = 9;
  }

  // header("Location: ../Dashboards/BloodBankDashboard.php?status=$status");
} else {
  $status = 10;
}

echo $status;