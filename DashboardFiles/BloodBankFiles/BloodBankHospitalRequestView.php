<?php
require_once '../classes/hospitalrequestclass.php';
require_once '../classes/Validation.php';

use classes\hospitalrequestclass;
use classes\Validation;
$token = "12b378738a1a6be3bacea473fe9e3d2fbfce8e678d514e1d943";

// Check if the 'hospitalRequestID' parameter is set in the URL
if (isset($_GET['reqid'])) {
    // Retrieve and store the 'hospitalRequestID' value
    $id = Validation::decryptedValue($_GET['reqid']);

    // Now, you can use the $id variable in your code
    

?>




<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../CSS/BloodBankHSRequest.css">
    </head>
    <body>

        <!-- nav bar start -->
        <div class="sticky-top bg-white shadownav" style="height: 50px;">
            <div class="row m-0 d-flex">
                <div class="col-8">

                </div>


                <div class="col-4">
                    <div class="row align-items-center">
                        <div class="col-2 mb-2">

                        </div>
                        <div class="col-2 mb-2">

                        </div>
                        <div class="col-2 mb-2">

                        </div>
                        <div class="col-6 mt-2 	d-none d-xl-block">
                            <b>Jaffna Blood Bank</b>
                            <p style="font-size: 10px;">Blood Bank</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- nav bar end -->

        <!-- body start -->
        <h1>BL Hos Req 2</h1>


        
     
        <?php
                $requestObj = hospitalrequestclass::getRequestwithHospitalusingID($id);

               
                    ?>
        
        
        
       


        <div class="container-05">
         <div class="form-container">
         <form action="../services/Addbloodbankrequest.php" method="POST">
            <div class="left-column">
                <div class="form-group">
                    <label for="blood-group">Blood Group</label>
                    <input type="text" name="bloodGroup" value="<?php echo $requestObj->getBloodGroup(); ?>">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="bloodQuantity" value="<?php echo $requestObj->getBloodQuantity(); ?>">
                </div>
               
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="requestStatus" value="<?php echo $requestObj->getRequestStatus(); ?>" >
                </div>
                <div class="form-group">
                    <label for="hospital-id">HospitalRequest ID</label>
                    <input type="text" name="hospitalRequestId" value="<?php echo $requestObj->getHospitalRequestID(); ?>" >
                </div>
                
            </div>
            <div class="right-column">
                <div class="form-group">
                    <label for="available-quantity">Available Quantity</label>
                    <input type="number" name="available quantity" id="available-quantity" >
                </div>
                
                <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                <div class="text-end">
        <div class="buttons">
            <a href="../Dashboards/BloodBankDashboard.php?page=bbraa">   <button class="btn btn-primary" style="justify-content: flex-end;  gap: 10px;  background-color: green !important;border: none ">Accept</button></a>
            <button type="sumbit" class="btn btn-primary" style=" justify-content: flex-end;  gap: 10px;  background-color: blue !important;border: none">Publish</button>
        </div><br>
                </div>
        </div>
        </form>
        </div>
        </div>





        <?php
           } else {
            echo "ID not found in the URL.";
        }     
        ?>
    </body>
</html>
