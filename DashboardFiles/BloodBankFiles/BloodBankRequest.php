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
        <h1>BL Req</h1>





  <div class="cotainer-03">
        <div class="cotainer-04">
            <div class="row">
                <div class="card1 col-6 p-4 m-1">
                    <div class="row">
                        <div class="col-3 p-0 m-0"> 
                            <div class=" container p-3">
                                <div class="request"> 
                                    <p>12345</p>
                                    <p>A+</p>
                                    <p>City General Hospital</p>   
                                    <p>10 units</p>
                                    <p>2023-08-22</p>
                                    <p>Available</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0"> 
                            <div class=" container p-3">
                                <div class="request"> 
                                    <p>12345</p>
                                    <p>A+</p>
                                    <p>City General Hospital</p>   
                                    <p>10 units</p>
                                    <p>2023-08-22</p>
                                    <p>Available</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0"> 
                            <div class=" container p-3">
                                <div class="request"> 
                                    <p>12345</p>
                                    <p>A+</p>
                                    <p>City General Hospital</p>   
                                    <p>10 units</p>
                                    <p>2023-08-22</p>
                                    <p>Available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


            <div class="container-02">
        <div class="p-5">


            <div class="rounded-top-4 p-0 border border-dark-subtle">
                <div class="row align-items-center">
                    <div class="col-3">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="ID" aria-label="Search" aria-describedby="search-addon" >



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
                        <button type="button" class="btn btn-primary bgcol" onclick="Addstudent()">Add Request</button>
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

                        <th class="col-1 bgcol p-2">BLBRID</th>
                        <th class="col-2 bgcol p-2">HospitalID</th>
                        <th class="col-2 bgcol p-2">Status</th>
                        <th class="col-2 bgcol p-2">BloodGroup</th>                       
                        <th class="col-3 bgcol p-2">Date</th>
                        <th class="col-2 bgcol p-2">Quantity</th>
                        <th class="col-1 bgcol p-2">View</th>
                        <th class="col-1 bgcol p-2">Edit</th>

                    </tr>

                    <tr>
                        <td class="col-1">BLBR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">BLBR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    </tr>

                    <tr>
                        <td class="col-1">BLBR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    </tr>

                    <tr>
                        <td class="col-1">BLBR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    </tr>

                   <tr>
                        <td class="col-1">BLBR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    </tr>

                    <tr>
                        <td class="col-1">BLBR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    </tr>

                    <tr>
                        <td class="col-1">BLBR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    </tr>

                    <tr>
                        <td class="col-1">BLBR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    </tr>

                    <tr>
                        <td class="col-1">BLBR001</td>
                        <td class="col-2">HS001</td>
                        <td class="col-2">Urgent</td>
                        <td class="col-2">A+</td>
                        <td class="col-3">03-07-2023</td>
                        <td class="col-2">2L</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

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
