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
       <!-- <h1>BL Donor</h1> -->

 <div class="">
            <img src="../../Images/logo.jpg" alt="Blood" class="">

 

  

  
           <!-- <div class="centered" style="font-size:3vw" >You don't have to be a doctor to save lives.<br><strong>JUST DONATE BLOOD.</strong></div>-->
  
</div>
            
            
            
        <div class="p-5">


            <div class="rounded-top-4 p-0 border border-dark-subtle">
                <div class="row align-items-center">
                    <div class="col-3">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="DonorID" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>
                    <div class="col-3"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Blood Group</option>
                            <option value="1">O+</option>
                            <option value="2">AB-</option>
                            <option value="3">A+</option>
                        </select>
                    </div>

                    <div class="col-2"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Location</option>
                            <option value="1">Jaffna</option>
                            <option value="2">Badulla</option>
                            <option value="3">Mannar</option>
                        </select>
                    </div>
                    <div class="col-2"> 
                        <button type="button" class="btn btn-primary bgcol" onclick="Addstudent()">Add Donor</button>
                    </div>
<div class="col-2" >
                        <button type="button" class="btn btn-success">Save</button>
                    </div>
                            
                                    </div>


            </div>
            <!-- Table body -->
            <div class="container bg-white m-0 p-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover p-0">

                    <!-- Table row -->


                    <tr class="sticky-top">

                        <th class="col-1 bgcol p-2">DonorID</th>
                        <th class="col-2 bgcol p-2">Name</th>
                        <th class="col-1 bgcol p-2">Blood Group</th>
                        <th class="col-1 bgcol p-2">Location</th>
                        <th class="col-2 bgcol p-2">Contact No</th>
                        <th class="col-1 bgcol p-2">Available</th>
                        <th class="col-1 bgcol p-2">Last Donation</th>
                        <th class="col-1 bgcol p-2">Edit</th>
                        <th class="col-1 bgcol p-2">View</th>

                    </tr>

                    <tr>
                        <td class="col-1">D001</td>
                        <td class="col-2">Nelax</td>
                        <td class="col-1">O+</td>
                        <td class="col-1">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">available</td>
                        <td class="col-1">06/07/2023</td>
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditStudent()">Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
             
                    </tr>

                     <tr>
                        <td class="col-1">D001</td>
                        <td class="col-2">Nelax</td>
                        <td class="col-1">O+</td>
                        <td class="col-1">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">available</td>
                        <td class="col-1">06/07/2023</td>
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditStudent()">Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
             
                    </tr>
                   <tr>
                        <td class="col-1">D001</td>
                        <td class="col-2">Nelax</td>
                        <td class="col-1">O+</td>
                        <td class="col-1">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">available</td>
                        <td class="col-1">06/07/2023</td>
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditStudent()">Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
             
                    </tr>
                    <tr>
                        <td class="col-1">D001</td>
                        <td class="col-2">Nelax</td>
                        <td class="col-1">O+</td>
                        <td class="col-1">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">available</td>
                        <td class="col-1">06/07/2023</td>
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditStudent()">Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
             
                    </tr>

                    
                   

                 <tr>
                        <td class="col-1">D001</td>
                        <td class="col-2">Nelax</td>
                        <td class="col-1">O+</td>
                        <td class="col-1">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">available</td>
                        <td class="col-1">06/07/2023</td>
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditStudent()">Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
             
                    </tr>

                    <!-- Table row -->



        <?php
        // put your code here
        ?>
    </body>
</html>
