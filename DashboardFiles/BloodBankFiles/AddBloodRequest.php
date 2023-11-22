<?php
require_once '../classes/Validation.php';

use classes\Validation;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../../CSS/BloodBankHospitalReguestAccept.css">
    <link rel="stylesheet" href="../../CSS/HospitalHSRequest.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <div class="container">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["status"])) {
                $status = Validation::decryptedValue($_GET["status"]);
                if ($status == 1) {
        ?>
                   
                    <div class="alert alert-success d-flex align-items-center m-2" role="alert">
                       <div class="col-1 align-items-center justify-content-center" >
                       <img width="30" height="30" src="https://img.icons8.com/color/48/ok--v1.png" alt="ok--v1"/>
                       </div>
                       <div class="col-10 d-flex">
                       Request Successfully Added
                       </div>
                      
                       <div class="col-1 d-flex align-items-end justify-content-center">
                       <a href="../Dashboards/BloodBankDashboard.php?"> <img width="30" height="30" src="https://img.icons8.com/hatch/64/delete-sign.png" alt="delete-sign"/></a>
                    </div>
                      
                    </div>
                <?php
                } else {


                ?>

                    <div class="alert alert-danger d-flex align-items-center m-2" role="alert">
                    <div class="col-1 align-items-center justify-content-center" >
                    <img width="30" height="30" src="https://img.icons8.com/cute-clipart/64/high-priority.png" alt="high-priority"/>
                       </div>
                       <div class="col-10 d-flex">
                       <?php
                            echo $status;
                            ?>
                       </div>
                      
                       <div class="col-1 d-flex align-items-end justify-content-center">
                      <a href="../Dashboards/BloodBankDashboard.php?"> <img width="30" height="30" src="https://img.icons8.com/hatch/64/delete-sign.png" alt="delete-sign"/></a>
                    </div>
                        
                    </div>

        <?php
                }
            }
        }
        ?>
         <div class="mt-5 m-3 mb-1" style="color:gray;">
        <h5>Create Request</h5>
    </div>
        <div class="row bg-white m-3 pt-0  align-items-center justify-content-center rounded-5" style="height: 600px;">



            <div class="col-lg-6">
                <div class="form-container">


                    <form action="../services/Addbloodbankrequest.php" method="POST">
                        <h2 class="container-title">Create Request</h2>
                        <label for="bloodGroup">Blood Group:</label>
                        <select class="form-control" name="bloodGroup" id="bloodgroup" required>
                            <option selected>Select your Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-"> A-</option>
                            <option value="B+"> B+</option>
                            <option value="B-"> B-</option>
                            <option value="O+"> O+</option>
                            <option value="O-"> O-</option>
                            <option value="AB+"> AB+</option>
                            <option value="AB-"> AB-</option>

                        </select>

                        <label for="bloodQuantity">Blood Quantity (ml):</label>
                        <input type="number" class="form-control" name="bloodQuantity" id="bloodQuantityInput" required>
                        <p id="bloodQuantityError" style="color: red;"></p>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const bloodQuantityInput = document.getElementById("bloodQuantityInput");
                                const bloodQuantityError = document.getElementById("bloodQuantityError");

                                bloodQuantityInput.addEventListener("input", function() {
                                    const inputValue = bloodQuantityInput.value;
                                    if (!/^\d{3}$/.test(inputValue)) {
                                        bloodQuantityError.textContent = "Please enter a valid three-digit number.";
                                        document.getElementById("reqsum").disabled = true;
                                    } else {
                                        bloodQuantityError.textContent = "";
                                        document.getElementById("reqsum").disabled = false;


                                    }
                                });
                            });

                            function cancel() {
                                const bloodQuantityInput = document.getElementById("bloodQuantityInput");
                                const bloodgroup = document.getElementById("bloodgroup");
                                const status = document.getElementById("requestStatus");
                                bloodQuantityInput.value = "";
                                bloodgroup.value = "Select your Blood Group";
                                status.value = "Select Status";
                            }
                        </script>


                        <label for="status">Status:</label>

                        <select class="form-control" name="requestStatus" id="requestStatus" required>
                            <option selected>Select Status</option>
                            <option value="Normal">Normal</option>
                            <option value="Emergency">Emergency</option>
                            <option value="Urgent">Urgent</option>
                        </select>
                        <br>

                        <br>
                        <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                        <input type="hidden" name="hospitalRequestId" value="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                        <div class="text-end">
                            <button type="submit" class="btn btn-danger" id="reqsum">Add Request</button>
                            <button type="button" class="btn btn-danger" onclick="cancel()">Cancel Request</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="col-6 align-items-center justify-content-center">
                <img class="d-none d-xl-block" src="../Images/hospitalreq.png" />
            </div>
        </div>
    </div>














    <?php

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>