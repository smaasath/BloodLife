<?php
$userId = 1;

require_once '../classes/hospitalrequestclass.php';
require_once '../classes/Validation.php';

use classes\hospitalrequestclass;
use classes\Validation;

$token = "saintha";
// Check if the 'hospitalRequestID' parameter is set in the URL
if (isset($_GET['reqid'])) {
    // Retrieve and store the 'hospitalRequestID' value
    $id = Validation::decryptedValue($_GET['reqid']);
    





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
                            <i class="fa-solid fa-bell fa-xl"></i>
                        </div>
                        <div class="col-2 mb-2">
                            <i class="fa-solid fa-gear fa-xl"></i>
                        </div>
                        <div class="col-2 mb-2">
                            <i class="fa-solid fa-user fa-xl"></i>
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
        <div class="mt-5 m-4 mb-2" style="color:gray;">
    <h5>Hospital Request Edit</h5>
  </div>

  <?php
    $hospitalrequesteditobj = hospitalrequestclass::getRequestwithHospitalusingID($id);


    ?> 

  <div class="row bg-white m-3 pt-0  align-items-center justify-content-center rounded-5" style="height: 500px;">
    <div class="form-container">
        
        <form>
        <label for="BloodGroup">BloodGroup:</label>
                                    <select class="form-select" name="bloodGroup" aria-laquantitybel="Default select example" required>
                                        <option value="<?php echo $hospitalrequesteditobj->getBloodGroup()?>" selected><?php echo $hospitalrequesteditobj->getBloodGroup()?></option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                   
                                    <label for="Quantity">Date:</label>
                                    <input type="date" class="form-control" name="expiryDate" value="<?php echo  $hospitalrequesteditobj->getCreateDate(); ?>" required>                                  
                                    <label for="ExpiryDate"> Blood Quantity:</label>
                                    <input type="number" class="form-control" name="bloodQuantity" value="<?php echo  $hospitalrequesteditobj->getBloodQuantity(); ?>" maxlength="3" required>
                                    <label for="status">Status:</label>
                                    
                                    <select class="form-select" name="status" aria-laquantitybel="Default select example" required>
                                    <option value="" selected></option>
                                    <option value="<?php  echo $hospitalrequesteditobj->getRequestStatus()?>" selected><?php echo $hospitalrequesteditobj->getRequestStatus()?></option>
                                        <option value="Available">Normal</option>
                                        <option value="Given">Emergency</option>
                                        <option value="Expired">Urgent</option>
                                    </select><br>

                                    <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    <div class="text-end">
          <button class="edit-button"><a href="HospitalDashboard.php?page=hospitalreqedit" style="text-decoration: none;color: black"> Publish Request</a></button>
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