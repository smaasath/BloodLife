<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Hospital Request</title>
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
        <div class="form-container">
            <h2 class="container-title">Create Request</h2>
            <form>
                
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
                    <button type="button" id="prevButton">Blood Bank List</button>
                    <button type="button" id="nextButton">Send Request</button>
                    <button type="submit" id="submitButton">Cancel Request</button>
                </div>
            </form>
        </div>
    </div>
        
        
        <div class="container-02">
        <div class="p-5">


            <div class="rounded-top-4 p-0 border border-dark-subtle">
                <div class="row align-items-center">
                    <div class="col-3">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="HRID" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>
                    <div class="col-2"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Normal</option>
                            <option value="2">Urgent</option>
                            <option value="3">Very Urgent</option>
                        </select>
                    </div>

                    <div class="col-2"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Blood Type</option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="3">B-</option>
                            <option value="3">O+</option>
                            <option value="3">O-</option>
                            <option value="3">AB+</option>
                            <option value="3">AB-</option>
                        </select>
                    </div>
                    <div class="col-2"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Quantity</option>
                            <option value="1">10L</option>
                            <option value="2">5L</option>
                            <option value="3">20L</option>
                        </select>
                    </div>
                    <div class="col-2"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Location</option>
                            <option value="1">Jaffna</option>
                            <option value="2">Kandy</option>
                            <option value="3">Colombo</option>
                        </select>
                    </div>
                    









            </div>
            <!-- Table body -->
            <div class="container bg-white m-0 p-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover p-0">

                    <!-- Table row -->


                    <tr class="sticky-top">

                        <th class="col-1 bgcol p-2">HRID</th>
                        <th class="col-2 bgcol p-2">HospitalID</th>
                        <th class="col-2 bgcol p-2">Status</th>
                        <th class="col-2 bgcol p-2">BloodGroup</th>
                        <th class="col-3 bgcol p-2">Location</th>
                        <th class="col-3 bgcol p-2">Date</th>
                        <th class="col-2 bgcol p-2">Quantity</th>
                        <th class="col-1 bgcol p-2">View</th>
                        <th class="col-1 bgcol p-2">Edit</th>

                    </tr>

                    <tr>
                        <td class="col-1">HR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">HR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">HR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">HR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                   <tr>
                        <td class="col-1">HR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">HR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">HR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">HR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">HR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>


                    <!-- Table row -->

                </table> 

            </div>
            <br>
            <!-- Table Head -->
          
        </div>
        </div>
            </div>
        <!-- Table -->




        <?php
        // put your code here
        ?>
    </body>
</html>
