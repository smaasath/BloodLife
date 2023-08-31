<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Hospital Request</title>
        <link rel="stylesheet" href="../../CSS/HospitalHSRequest.css">

        <link rel="stylesheet" href="../../CSS/BloodBankRequest.css">

        <link rel="stylesheet" href="../../CSS/BloodBankHSRequest.css">
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

        <!-- Hospital Request start -->

        <div class="container-01">
            <div style="margin-left:50px;margin-right: 50px">
                <div class="form-container">
                    <form>

                        <h2 class="container-title">Create Request</h2>


                        <label for="bloodGroup">Blood Group:</label>
                        <input type="text" id="bloodGroup" name="bloodGroup" required>


                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" required>

                        <label for="bloodQuantity">Blood Quantity:</label>
                        <input type="number" id="bloodQuantity" name="bloodQuantity" required>

                        <label for="status">Status:</label>
                        <select id="status" name="status" required>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>

                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location" required>

                        <label for="district">District:</label>
                        <input type="text" id="district" name="district" required>

                        <div class="button-row">
                            <button type="button" id="nextButton">Send Request</button>
                            <button type="submit" id="submitButton">Cancel Request</button>
                        </div>


                    </form>
                </div>
            </div>

        </div>

        <div class="container-03">
            
                <div class ="card1 col p-3 m-1" >
                    <div class="row">
                        <div class="col-4 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="HRID">HR001</h4>
                                    <h5 class="Status">Urgent</h5>
                                    <div class="button-row">
                                        <button type="button" id="nextButton"><a href="HospitalDashboard.php?page=hospitalreqview" style="text-decoration: none;">View </a></button>                                       
                                    </div>
                                   

                                </div> 
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="HRID">HR001</h4>
                                    <h3 class="Status">Urgent</h3>
                                    <div class="button-row">
                                        <button type="button" id="nextButton"><a href="HospitalDashboard.php?page=hospitalreqview" style="text-decoration: none;">View </a></button>                                         
                                    </div>
                                   

                                </div> 
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="HRID">HR001</h4>
                                    <h3 class="Status">Urgent</h3>
                                    <div class="button-row">
                                       <button type="button" id="nextButton"><a href="HospitalDashboard.php?page=hospitalreqview" style="text-decoration: none;">View </a></button>                                      
                                    </div>
                                   
                                    

                                </div> 
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class=" col-4 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="HRID">HR001</h4>
                                    <h3 class="Status">Urgent</h3>
                                    <div class="button-row">
                                        <button type="button" id="nextButton"><a href="HospitalDashboard.php?page=hospitalreqview" style="text-decoration: none;">View </a></button>                                     
                                    </div>
                                  
                                    

                                </div> 
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                   <h4 class="HRID">HR001</h4>
                                    <h3 class="Status">Urgent</h3>
                                    <div class="button-row">
                                        <button type="button" id="nextButton"><a href="HospitalDashboard.php?page=hospitalreqview" style="text-decoration: none;">View </a></button>                                    
                                    </div>
                                   
                                    

                                </div> 
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                   <h4 class="HRID">HR001</h4>
                                    <h3 class="Status">Urgent</h3>
                                    <div class="button-row">
                                        <button type="button" id="nextButton"><a href="HospitalDashboard.php?page=hospitalreqview" style="text-decoration: none;">View </a></button>                                        
                                    </div>
                                 
                                    

                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>
           
        </div>


        <a href="HospitalDashboard.php?page=hospitalreqview" style="text-decoration: none;"><button> click</button></a>

        <?php
        // put your code here
        ?>
    </body>
</html>
