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
        <h1>Hospital Request view</h1>

  <div class="form-container">
    <h1>Form Details</h1>
    <div class="form-fields">
      <div class="field">
        <label>Blood Group:</label>
        <span>O+</span>
      </div>
      <div class="field">
        <label>Date:</label>
        <span>August 25, 2023</span>
      </div>
      <div class="field">
        <label>Blood Quantity:</label>
        <span>250 ml</span>
      </div>
      <div class="field">
        <label>Status:</label>
        <span>Available</span>
      </div>
      <div class="field">
        <label>Location:</label>
        <span>Sample Location</span>
      </div>
      <div class="field">
        <label>District:</label>
        <span>Sample District</span>
      </div>
    </div>
    <button class="edit-button"><a href="HospitalDashboard.php?page=hospitalreqedit" style="text-decoration: none;"> Edit</a></button>
  </div>


         
        <?php
        // put your code here
        ?>
    </body>
</html>
