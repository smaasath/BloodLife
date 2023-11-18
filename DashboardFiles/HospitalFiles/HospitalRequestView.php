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
    <div class="mt-5 m-4 mb-2" style="color:gray;">
        <h5>Hospital Request View</h5>
    </div>

    <?php
    $hospitalrequestobj = hospitalrequestclass::getRequestwithHospitalusingID($id);


    ?> 

    <div class="row bg-white m-3 pt-0  align-items-center justify-content-center rounded-5" style="height: 600px;">
        <div class="col-6 align-items-center justify-content-center">
            <img class="d-none d-xl-block" src="../Images/hospitalprof.jpg" />
        </div>
        <div class="col-lg-6">
            <div class="form-container" style="margin-left:100px;width: 500px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-0"><span class="fw-bold">BloodGroup</span></p>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="bloodGroup" value="<?php echo  $hospitalrequestobj->getBloodGroup(); ?>" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-0"><span class="fw-bold">Date</span></p>
                        </div>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" name="date" value="<?php echo  $hospitalrequestobj->getCreateDate(); ?>" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-0"><span class="fw-bold">Blood Quantity</span></p>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="bloodQuantity" value="<?php echo  $hospitalrequestobj->getBloodQuantity(); ?>" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-0"><span class="fw-bold">Status</span></p>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="requestStatus" value="<?php echo  $hospitalrequestobj->getRequestStatus(); ?>" readonly>
                        </div>
                    </div>
                    <hr>

                </div>
                <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                <div class="text-end">
                    <a href="HospitalDashboard.php?page=hospitalreqedit&&reqid=<?php echo $_GET['reqid']; ?>" style="text-decoration: none;color: black"> <button class="edit-button">Edit</button></a>
                </div>


            </div>

        </div>
    </div>

    </div>

    </div>

    </div>






    <!-- check boxes -->






























    <?php
      // Now, you can use the $id variable in your code
    
} else {
    echo "ID not found in the URL.";
}
    ?>
</body>

</html>