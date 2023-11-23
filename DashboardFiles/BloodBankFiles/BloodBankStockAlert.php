<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<?php



require_once '../classes/Bloodtable.php';
require_once '../classes/Validation.php';
require_once '../classes/bloodBank.php';

use classes\Bloodtable;
use classes\Validation;
use classes\bloodBank;

$bloodBankId = $user->getBloodBankId();

$bankid = $user->getBloodBankId();
$bloodBank = new bloodBank($bankid, null, null, null, null);
$bloodBank->GetBloodbankData($bankid);
?>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    <!-- nav bar start -->
    <div class="sticky-top bg-white shadownav" style="height: 50px;">
                <div class="row m-0 d-flex">
                    <div class="col-6">
                    </div>
                    <div class="col-6">
                        <div class="row align-items-center justify-content-end">
                         
                            <div class="col-6 mt-2 	d-none d-xl-block ">
                                <b><?php echo $bloodBank->getBloodBankName();  ?></b>
                                <p style="font-size: 10px;">Blood Bank</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- nav bar end -->

    <!-- body start -->
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
                       Take Action Successfully
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
        <h5>Blood Stock Alert</h5>
    </div>
    <div class="row bg-white m-3 pt-0  align-items-center justify-content-center rounded-5" style="height: flex;">

    <div class="container">

        <div class="row">
            <?php



            $expiryalert = new Bloodtable(null, null, null, null, $bloodBankId, null);
            $expiryalertArray = $expiryalert->expirydateAlert();

            foreach ($expiryalertArray as $expiryArray) {


            ?>
                <div class="col-5 p-2 m-2 alert alert-secondary" style="height: 150px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="row" style="height: 100%;">
                        <div class="col-2 align-self-center">
                            <img src="../Images/warning.png" height="60px" width="60px" />
                        </div>
                        <div class="col-9">

                            <div class="row" style="height: 40px;">
                                <div class="col-5">
                                    <h5><u>STOCK ALERT</u></h5>
                                </div>
                                <div class="col-5 text-end ">
                                    <h5 style="color: #F47C7C;"> BloodID :<?php echo $expiryArray["bloodId"] ?></h5>
                                </div>
                            </div>
                            <div class="row" style="height: 40px;">
                                <div class="col-5">
                                    <h6>Expirydate :<?php echo $expiryArray["expiryDate"] ?></h6>
                                </div>
                                <div class="col-5 text-end">
                                    <?php
                                    // Assuming $expiryArray["expiryDate"] contains the expiration date in "Y-m-d" format
                                    $expiryDate = new DateTime($expiryArray["expiryDate"]);
                                    $currentDate = new DateTime(); // Current date/time

                                    // Calculate the difference between dates
                                    $dateDiff = $expiryDate->diff($currentDate);
                                    ?>

                                    <h6>Remaining Dates:
                                        <?php
                                        if ($expiryDate < $currentDate) {
                                            echo "Expired";
                                        } else {
                                            echo $dateDiff->format('%a days'); // Display the difference in days
                                        }
                                        ?>
                                    </h6>
                                </div>
                            </div>
                            <div class="row" style="height: 40px;">
                                <div class="col-5">
                                    <h6>Status :<?php echo $expiryArray["status"] ?></h6>
                                </div>
                                <div class="col-5">
                                    <button type="button" class="btn btn-danger bgcol" data-bs-toggle="modal" data-bs-target="#editModal" onclick="EditBloodpackets(<?php echo $expiryArray['bloodId'] ?>)" style="width: 130px; height: 40px; float: right; margin-top: 10px;">Take action</button>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>


            <?php
            } ?>
        </div>

    </div>
    </div>
    <?php
   
    ?>

    <form action="../services/Editbloodpackets.php" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="view">EDIT DETAILS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="editbloodpackets">

                        </div>
                        <input type="hidden" value="<?php echo $token ?>" name="token">
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePopup1">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>