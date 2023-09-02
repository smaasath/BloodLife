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
        <h1>BL Hos Req 2</h1>


        
     
        
        
        
        
       


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
            <a href="../Dashboards/BloodBankDashboard.php?page=bbraa">   <button class="btn btn-primary" style="justify-content: flex-end;  gap: 10px;  background-color: green !important;border: none ">Accept</button></a>
            <a href="../Dashboards/BloodBankDashboard.php?page=bbhra">     <button class="btn btn-primary" style=" justify-content: flex-end;  gap: 10px;  background-color: blue !important;border: none">Publish</button></a>
        </div><br>

        <?php
        // put your code here
        ?>
    </body>
</html>
