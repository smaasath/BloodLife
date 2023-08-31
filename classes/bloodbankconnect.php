<?php



if (isset($_POST["bloodBank"])) {
    $bloodBank = $_POST["bloodBank"];
    bloodBank::getAllBloodBank($bloodBank);

    echo '';
   
}

?>