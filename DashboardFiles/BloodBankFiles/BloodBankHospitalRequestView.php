<?php
require_once "../classes/hospitalrequestclass.php";
require_once "../classes/Validation.php";


use classes\hospitalrequestclass;
use classes\Validation;




$bankid = $user->getBloodBankId();



if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["bhreqid"])) {
        $BReqId = Validation::decryptedValue($_GET["bhreqid"]);
     


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
            <div class="mt-5 m-3 mb-1" style="color:gray;">
                <h5>Hospital Request View</h5>
            </div>
            <div class="row bg-white m-3 pt-0  align-items-center justify-content-center rounded-5" style="height: 600px;">



                <?php

                if (hospitalrequestclass::getRequestwithHospitalusingID($BReqId) != false) {
                    $requestObj = hospitalrequestclass::getRequestwithHospitalusingID($BReqId);


                ?>






                    <div class="row">
                        <div class="col-lg-5 m-3 p-1">

                            <div class="form-container" style=" border: 2px solid #ccc; border-radius:10px; width: 500px">

                                <form action="../services/Addbloodbankrequest.php" method="POST">
                                    <div class="col m-2">
                                        <div class="form-group">
                                            <label for="blood-group">Blood Group</label>
                                            <input type="text" name="bloodGroup" value="<?php echo $requestObj->getBloodGroup(); ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" name="bloodQuantity" value="<?php echo $requestObj->getBloodQuantity(); ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" name="requestStatus" value="<?php echo $requestObj->getRequestStatus(); ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="hospital-id">HospitalRequest ID</label>
                                            <input type="text" name="hospitalRequestId" value="<?php echo $requestObj->getHospitalRequestID(); ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="available-quantity">Available Quantity</label>
                                            <input type="number" value="<?php echo $requestObj->totalQuantityarrayByBloodGroup($bankid); ?>" name="available quantity" id="available-quantity" readonly>
                                        </div>

                                        <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        <div class="text-end"><br>
                                            <div class="buttons">
                                                <a href="../Dashboards/BloodBankDashboard.php?page=bbraa"> <button type="button" class="btn btn-outline-secondary"><strong> Accept </strong></button></a>
                                                <button  type="sumbit" class="btn btn-outline-danger"><strong>Publish </strong></button>
                                               
                                            </div><br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 justify-content-center align-items-center text-center">
                            <img class="d-none d-lg-block w-100 text-center" src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/35517/blood-donation-clipart-md.png" />
                        </div>
                    </div>


            </div>


<?php
                } else {
                    echo "detail not found";
                }
            } else {
                echo "ID not found in the URL.";
            }
        } else {
            echo "ID not found in the URL.";
        }
?>

        </body>

        </html>