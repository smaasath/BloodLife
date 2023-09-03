<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../CSS/Table.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <title></title>
        
        <style>
.container {
  position: relative;
  text-align: right;
  color: white;
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
        
        
        
        
        
        
        
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
                            <a href="AdminProfile.php"></a>
                            <p style="font-size: 10px;">Blood Bank</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- nav bar end -->
      
      
      
      <div class="container">
            <img src="https://assets.telegraphindia.com/telegraph/2022/Jan/1643137545_blood.jpg" alt="Blood" width="100%" height="200">

 
  
            <div class="centered" style="font-size:3vw" >You don't have to be a doctor to save lives.<br><strong>JUST DONATE BLOOD.</strong></div>
  
</div>
            
            
            
        <div class="p-5">


            <div class="rounded-top-4 p-0 border border-dark-subtle">
                <div class="row align-items-center">
                    <div class="col-3">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="Campaign ID" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>
                    <div class="col-3"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Date</option>
                            <option value="1">12/09/2023</option>
                            <option value="2">07/09/2023</option>
                            <option value="3">09/09/2023</option>
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
                        <button type="button" class="btn btn-primary bgcol" onclick="Addstudent()">Add Campaign</button>
                    </div>
<div class="col-2" >
                        <button type="button" class="btn btn-success">Save</button>
                    </div>
                                


            </div>
            <!-- Table body -->
            <div class="container bg-white m-0 p-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover p-0">

                    <!-- Table row -->


                    <tr class="sticky-top">

                        <th class="col-1 bgcol p-2">CampaignID</th>
                        <th class="col-3 bgcol p-2">Name</th>
                        <th class="col-2 bgcol p-2">Date</th>
                        <th class="col-2 bgcol p-2">Location</th>
                        <th class="col-2 bgcol p-2">Contact No</th>
                        <th class="col-1 bgcol p-2">No of Donors</th>
                        <th class="col-1 bgcol p-2">Edit</th>
                        <th class="col-1 bgcol p-2">Review</th>
                        <th class="col-1 bgcol p-2">View</th>

                    </tr>

                    <tr>
                        <td class="col-1">C001</td>
                        <td class="col-3">Bloody Sweet</td>
                        <td class="col-2">03/09/2023</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">67</td>
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditStudent()">Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="openStudentDetails()">Review</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
             
                    </tr>

                     <tr>
                        <td class="col-1">C001</td>
                        <td class="col-3">Bloody Sweet</td>
                        <td class="col-2">03/09/2023</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">67</td>
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditStudent()">Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="openStudentDetails()">Review</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
             
                    </tr>
                   <tr>
                        <td class="col-1">C001</td>
                        <td class="col-3">Bloody Sweet</td>
                        <td class="col-2">03/09/2023</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">67</td>
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditStudent()">Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="openStudentDetails()">Review</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
             
                    </tr>
                     <tr>
                        <td class="col-1">C001</td>
                        <td class="col-3">Bloody Sweet</td>
                        <td class="col-2">03/09/2023</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">67</td>
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditStudent()">Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="openStudentDetails()">Review</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
             
                    </tr>

                    
                   

                    <tr>
                        <td class="col-1">C001</td>
                        <td class="col-3">Bloody Sweet</td>
                        <td class="col-2">03/09/2023</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">67</td>
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditStudent()">Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="openStudentDetails()">Review</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
             
                    </tr>

                    <!-- Table row -->

                </table> 

            </div>
            <br>
            <!-- Table Head -->
          
        </div>

        <!-- Table -->


        <?php
        // put your code here
        ?>
    </body>
</html>
