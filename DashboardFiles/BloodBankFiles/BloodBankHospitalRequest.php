<?php 

$userId = 1;

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
        <h1>BL Hos Req</h1>
        <a href="BloodBankDashboard.php?page=bbhrv" style="text-decoration: none;"><div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                
                <div class="card-block">
                 <div class="postcard__bar m-0"></div>    
                </div>
                
            </div>
        </div></div></a>


        <div class="container-05">
          
            <div class="left-column">
                <div class="form-group">
                    <label for="blood-group">Blood Group</label>
                    <select id="blood-group">
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" min="1">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" id="location">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" id="status">
                </div>
                <div class="form-group">
                    <label for="hospital-id">Hospital ID</label>
                    <input type="text" id="hospital-id">
                </div>
                <div class="form-group">
                    <label for="hospital-name">Hospital Name</label>
                    <input type="text" id="hospital-name">
                </div>
            </div>
            <div class="right-column">
                <div class="form-group">
                    <label for="available-quantity">Available Quantity</label>
                    <input type="number" id="available-quantity" disabled>
                </div>
                
            </div>
        </div>
        <div class="buttons">
            <button class="btn btn-primary" style="background-color: green !important;border: none">Accept</button>
                    <button class="btn btn-primary" style="background-color: blue !important;border: none">Publish</button>
                </div>

<div class="container-03">
   <div style="margin-left:20px; margin-right: 20px">
            <div class ="card1 col p-3 m-1" >
                <div class="row">
                    <div class="col-6 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon">
                                <h4 class="blood">A+</h4>
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
                    <div class="col-6 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon">
                                <h4 class="blood">A-</h4>
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
     
                </div>
                <div class="row">
                    <div class=" col-6 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon">
                                <h4 class="blood">AB+</h4>
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
                    <div class="col-6 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon">
                                <h4 class="blood">AB-</h4>
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
                   
                </div>
            </div>
            </div>
</div>
       


 <a href="BloodBankDashboard.php?page=hospitalreqview" style="text-decoration: none;"><button> click</button></a>
        <?php
        // put your code here
        ?>
    </body>
</html>
