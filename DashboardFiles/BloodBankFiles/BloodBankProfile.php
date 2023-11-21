<?php
require_once '../classes/bloodBank.php';
require_once '../classes/district.php';

use classes\district;
use classes\bloodBank;

$bloodBankId = $user->getBloodBankId();
$bloodBank = new bloodBank($bloodBankId, null, null, null, null);
$bloodBank->GetBloodbankData($bloodBankId);
//$bloodBank->editBloodbank($bloodBankId);
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
    <h5>Bloodbank Profile</h5>
  </div>


  <div class="row bg-white m-3 pt-0  align-items-center justify-content-center rounded-5" style="height: 600px;">

    <div class="col-lg-6">
      <div class="form-container" style="margin-left:100px;width: 500px">
        <div class="card-body">
        

  <br>




          
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0"><span class="fw-bold">Bloodbank Name</span></p>
            </div>
            <div class="col-sm-7">
              <p class="text-muted mb-0"><?php echo $bloodBank->getBloodBankName(); ?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0"><span class="fw-bold">Address</span></p>
            </div>
            <div class="col-sm-7">
              <p class="text-muted mb-0"><?php echo $bloodBank->getAddress(); ?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0"><span class="fw-bold">District</span></p>
            </div>
            <div class="col-sm-7">
              <p class="text-muted mb-0"><?php echo $bloodBank->getContactNo(); ?></p>
            </div>
          </div>
         
          
         
          <div class="text-end">
            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
          </div>

        </div>
      </div>
    </div>
    <div class="col-6 align-items-center justify-content-center">
      <img class="d-none d-xl-block" src="../Images/bloodbankprof.jpg" />
    </div>
  </div>






  






  <?php

  ?>
</body>

</html>