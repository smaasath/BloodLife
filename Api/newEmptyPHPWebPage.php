<?php
require_once '../classes/Donation.php';
use classes\Donation;

    // Display Image
    echo '<img src="data:image/jpeg;base64,' . base64_encode(Donation::CreateCertificates("Mohamed Aasath", "2023/03/02")) . '" style="width:30%">';
    echo date("Y-m-d");
  
?>
