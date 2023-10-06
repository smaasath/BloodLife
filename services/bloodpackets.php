<?php
$quantityerr = $bloodGrouperr= $Expirydateerr="";
$quantity = $bloodGroup= $Expirydate="";

//compare 
if($_SERVER["REQUEST_METHOD"] =="POST"){


    //empty

    if(empty($_POST['quantity'])){
        $quantityerr="quantity is required";
    }
    else{
        $quantity =input_data($_POST['quantity']);
        if(!preg_match("/^([0-9]{3})$/",$quantity)){
            $quantityerr ="Three digits only allowed";
    }
}
if(empty($_POST['Expirydate'])){
    $Expirydateerr="expiry date is required";
}
else{
    $Expirydate =input_data($_POST['Expirydate']);
}
}
function input_data($data){
    //remove spaces special symbols

    $data =trim($data);
    $data =stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>