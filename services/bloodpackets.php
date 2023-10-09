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
    
    header("Location: ../Dashboards/BloodBankDashboard.php?status=$status");
    
  
//
//    //empty
//
//    if(empty($_POST['quantity'])){
//        $quantityerr="quantity is required";
//    }
//    else{
//        $quantity =input_data($_POST['quantity']);
//        if(!preg_match("/^([0-9]{3})$/",$quantity)){
//            $quantityerr ="Three digits only allowed";
//    }
//}
//if(empty($_POST['Expirydate'])){
//    $Expirydateerr="expiry date is required";
//}
//else{
//    $Expirydate =input_data($_POST['Expirydate']);
//}
//}
//function input_data($data){
//    //remove spaces special symbols
//
//    $data =trim($data);
//    $data =stripcslashes($data);
//    $data = htmlspecialchars($data);
//    return $data;
}

?>