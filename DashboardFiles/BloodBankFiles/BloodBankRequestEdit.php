<?php


require_once '../classes/bloodbankhsrequest.php';
require_once '../classes/Validation.php';

use classes\bloodbankhsrequest;
use classes\Validation;

if (isset($_GET['hreqedit'])) {
   
    $BReqId = $_GET["hreqedit"];
    $BBRequest = new bloodbankhsrequest($BReqId, null, null, null, null, null, null);
    $Result = $BBRequest->getBloodBankReqByReqID();

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
                <h5>Request Edit</h5>
            </div>

    

    <div class="container" >

        <div class="row bg-white m-3 pt-0 align-items-center p-3 justify-content-center rounded-3 d-flex">
            <!-- <div class="text-center m-3"> <h1>BL rq edit</h1> </div>-->
            <div class="bg-white m-3" style="height: 400px; width: 600px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                
                    <div class="mb-3 m-2">
                        <label for="exampleFormControlInput1" class="form-label"><strong>Blood Group :</strong></label>
                        <select class="form-select" name="bloodGroup" aria-laquantitybel="Default select example" required>
                        <option value=" <?php echo $Result->bloodGroup; ?>" selected><?php echo $Result->bloodGroup; ?> </option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                    </div>
               
                
                    <div class="mb-3 m-2">
                        <label for="exampleFormControlInput1" class="form-label"><strong>Blood Quantity</strong></label>
                        <input type="number" class="form-control"  name="bloodQuantity" value="<?php echo $Result->bloodQuantity; ?>">
                    </div>
               
                
                    <div class="mb-3 m-2">
                        <label for="exampleFormControlInput1" class="form-label"><strong>Status :</strong></label>
                        <select class="form-select" name="requestStatus" aria-laquantitybel="Default select example" required>
                       <option value="<?php echo $Result->requestStatus; ?>" selected><?php echo $Result->requestStatus; ?> </option>
                        <option value="Available">Normal</option>
                        <option value="Given">Emergency</option>
                        <option value="Expired">Urgent</option>
                    </select>
                    </div>
                    
                
                
                    <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                    <input type="hidden" name="bloodBankRequestId" value="<?php echo $id; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                <div class="buttons" >
                      <button class="btn btn-secondary" type="submit" style=" border: none;margin-left: 480px">Save</button>
                    
                </div>


            </div>


        </div>

    </div>


    <?php

    
} else {
    echo "ID not found in the URL.";
}

    ?>
</body>
</html>
