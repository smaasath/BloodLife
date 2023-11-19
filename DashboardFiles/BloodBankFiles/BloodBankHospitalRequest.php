<?php

require_once '../classes/hospitalrequestclass.php';
require_once '../classes/Validation.php';

use classes\hospitalrequestclass;
use classes\Validation;
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
   
    <div class="container">
        <div class="row bg-white m-3 pt-0 align-items-center p-3 justify-content-start rounded-3 d-flex">

            <?php
            $requestArray = hospitalrequestclass::getAllRequestwithHospitalDetails();

            foreach ($requestArray as $datAarray) {
                ?>

                <div class="col">

                    <div class="bg-white p-3  m-3" style="width: 270px; height: 200px; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; background: <?php echo hospitalrequestclass::getHospitalStatusGradient($datAarray["requestStatus"]); ?>; ">
                        <a href="../Dashboards/BloodBankDashboard.php?page=bbhrv&&reqid=<?php echo Validation::encryptedValue($datAarray["hospitalRequestID"]); ?>" style="text-decoration: none;">

                            <div class="row">
                                <div class="col">
                                    <p class="m-b-0 text-white"  style="margin-top: 5px"><strong><?php echo $datAarray["hospitalRequestID"]; ?></strong><span class="f-right" style="margin-left:140px;font-weight: bold"><?php echo $datAarray["bloodGroup"]; ?></span></p>
                                </div>
                            </div>
                            <div class="row text-white" >
                                <div class="col">
                                    <?php echo $datAarray["name"]; ?>
                                </div>
                                 <div class="col">
                                    <img class="w-50" src="../Images/icons8-blood-100.png"/>
                                </div>
                            </div>
                            <div class="row text-white">
                                <div class="col">
                                    <?php echo $datAarray["bloodQuantity"]; ?>
                                </div>
                               
                            </div><br>                        

                            <div class="row">
                                <div class="col">
                                    <p class="m-b-0 text-white"><?php echo $datAarray["createdDate"]; ?><span class="f-right" style="margin-left:30px;font-weight: bold"><?php echo $datAarray["requestStatus"]; ?></span></p> 
                                </div>       
                            </div>
                        </a>
                    </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php
// put your code here
    ?>
</body>
</html>
