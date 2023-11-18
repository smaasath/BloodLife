<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<?php
$token = "12b378738a1a6be3bacea473fe9e3d2fbfce8e678d514e1d943";


require_once '../classes/Bloodtable.php';
require_once '../classes/district.php';
require_once '../classes/User.php';

use classes\Bloodtable;
use classes\hospital;
use classes\district;
use classes\User;

$user = new User(null, null, null, null, $token, null, null, null, null);
$validateToken = $user->validateToken();
$bloodBankId = $user->getBloodBankId();
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

            <div class="row">
            <?php



                        $expiryalert = new Bloodtable(null, null, null, null, $bloodBankId, null);
                        $expiryalertArray = $$expiryalert->expirydateAlert();

                        foreach ($expiryalertArray as $expiryArray) {


                        ?>
                <div class="col-5 p-2 m-2 alert alert-warning" style="height: 150px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">
                    <div style="display: flex;flex-direction: row">
                        <img src="../Images/warning.png" height="50px" width="50px" style="margin-center: 10px"/>
                        <h5 style="padding-left: 10px">Stock Alert <br><br><?php echo $expiryArray["expiryDate"] ?></h5>
                        
                    </div>
                    <button type="button" class="btn btn-primary bgcol"   onclick="Takeaction()" style="width: 130px;height: 40px; float: right" >Take action</button>
                </div>
                
                <?php
                        } ?>
            </div>

        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
