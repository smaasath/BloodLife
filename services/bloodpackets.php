<?php

require_once '../classes/Bloodtable.php';
use classes\Bloodtable;
//compare 
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $status;
    
    if(isset($_POST["bloodgroup"],$_POST["quantity"],$_POST["expiryDate"])){
        if(empty($_POST["bloodgroup"]) || empty($_POST["quantity"])|| empty($_POST["expiryDate"])){

               $status = 1;      
        } else {
             
           $bloodpacked = new Bloodtable(null, $_POST["expiryDate"], $_POST["bloodgroup"], $_POST["quantity"], $_POST["id"], "Available");
           
           if($bloodpacked->addbloodpacket()){
               $status = 2;
           } else {
                $status = 3;
           }
        }
        
    } else {
      $status = 4;
    }
    
   // header("Location: ../Dashboards/BloodBankDashboard.php?status=$status");
    
  

}
echo $status;

?>