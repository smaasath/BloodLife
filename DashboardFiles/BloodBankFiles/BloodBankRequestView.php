<?php
require_once "../classes/bloodbankhsrequest.php";
require_once "../classes/User.php";
require_once "../phpqrcode/qrlib.php";

use classes\User;
use classes\bloodbankhsrequest;

$token = "12b378738a1a6be3bacea473fe9e3d2fbfce8e678d514e1d943";
$user = new User(null, null, null, null, $token, null, null, null, null);
$user->validateToken();
$bankid = $user->getBloodBankId();
echo $bankid;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["breqId"])) {
        $BReqId = $_GET["breqId"];
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
            <link rel="stylesheet" href="../../CSS/BloodBankHospitalRequestView.css">
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



            <div class="mt-5 m-3 mb-1" style="color:gray;">
                <h5>Request View</h5>
            </div>

            <div class="row bg-white m-2 pt-0  align-items-center justify-content-center rounded-5" style="height: 320px;">

            <div class="container">
                <div class="row bg-white m-3 pt-0 align-items-center p-3 justify-content-center">
                    <div class="col-sm-5 bg-white m-3 rounded-2" style="height: 450px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="row p-2 m-1 mt-5">
                            <div class="col-5">
                                <strong> Blood Bank Request ID</strong>
                            </div>
                            <div class="col-4 ">
                                <?php echo "B" . $Result->bloodBankRequestId; ?>
                            </div>
                        </div>
                        <div class="row p-2 m-1">
                            <div class="col-5">
                                <strong> Blood Quantity</strong>
                            </div>
                            <div class="col-4">
                                <?php echo $Result->bloodQuantity; ?>
                            </div>
                        </div>
                        <div class="row p-2 m-1">
                            <div class="col-5">
                                <strong> Blood Group</strong>
                            </div>
                            <div class="col-4">
                                <?php echo $Result->bloodGroup; ?>
                            </div>
                        </div>
                        <div class="row p-2 m-1">
                            <div class="col-5">
                                <strong>Hospital Name</strong>
                            </div>
                            <div class="col-4">
                                <?php echo $Result->hospitalName; ?>
                            </div>
                        </div>
                        <div class="row p-2 m-1">
                            <div class="col-5">
                                <strong>Hospital Address</strong>
                            </div>
                            <div class="col-4">
                                <?php echo $Result->hospitalAddress; ?>
                            </div>
                        </div>

                        <div class="row p-2 m-1">
                            <div class="col-5">
                                <strong> hospital Request Id</strong>
                            </div>
                            <div class="col-4">
                                <?php echo $Result->hospitalRequestId; ?>
                            </div>
                        </div>
                        <div class="row p-2 m-1">
                            <div class="col-5">
                                <strong> Created Date</strong>
                            </div>
                            <div class="col-4">
                                <?php echo $Result->createdDate; ?>
                            </div>
                        </div>
                        <div class="row p-2 m-1">
                            <div class="col-5">
                                <strong>Status:</strong>
                            </div>
                            <div class="col-4">
                                <?php echo $Result->requestStatus; ?>
                            </div>
                        </div>





                    </div>

                    <div class="col-sm-6 align-items-center justify-content-center text-center p-3" style="height: 450px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <?php
                        ob_start(); // Start output buffering

                        // Generate the QR code image
                        QRcode::png("bloodbank" . $Result->bloodBankRequestId);

                        // Get the image data from output buffer
                        $imageData = ob_get_clean();

                        // Output the image data directly with appropriate headers

                        echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" class="w-75">';
                        ?>



                    </div>

                </div>

            </div>



    <?php
    }
}
    ?>
        </body>

        </html>