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
                            <b>General Hospital</b>
                            <p style="font-size: 10px;">Hospital</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- nav bar end -->

        <!-- body start -->
        <h1>Hospital Blood Stock</h1>
        <div class="container">
            <div class="row">
                <div class ="card1 col-6 p-3 m-1" >
                    <div class="row">
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood1">A+</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div> 
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood1">A-</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div> 
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood1">B+</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div> 
                            </div>
                        </div>
                        <div class=" col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood1">B-</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood1">AB+</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div> 
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood1">AB-</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div> 
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood1">O+</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div> 
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood1">O-</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class ="card1 col-2 m-1 " >           
                    <div class="input-group rounded p-3">
                        <input type="search" class="form-control rounded" placeholder="Search BloodBank" aria-label="Search" aria-describedby="search-addon" >
                    </div>
                    <div class="container bg-white m-0 p-0" style=" height: 300px; overflow: scroll;">

                    </div>

                </div>
                <div class ="card1 col m-1 " >


                </div>

            </div>
        </div>

        <!-- table -->
        <div class="p-5">


            <div class="rounded-top-4 p-0 border border-dark-subtle">
                <div class="row align-items-center">
                    <div class="col-3">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="Search ID" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>
                    <div class="col-3"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>BloodID</option>
                            <option value="1">B001</option>
                            <option value="2">B002</option>
                            <option value="3">B003</option>
                        </select>
                    </div>

                    <div class="col-2"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>BloodGroup</option>
                            <option value="1">A+</option>
                            <option value="2">B+</option>
                            <option value="2">O+</option>
                            <option value="3">AB+</option>
                            <option value="1">A-</option>
                            <option value="2">B-</option>
                            <option value="3">AB-</option>
                            <option value="2">O-</option>
                        </select>
                    </div>
                    <div class="col-2"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Location</option>
                            <option value="1">Jaffna</option>
                            <option value="2">Colombo</option>
                            <option value="3">Vavuniya</option>
                        </select>
                    </div>

                    
                </div>









            </div>
            <!-- Table body -->
            <div class="container bg-white m-0 p-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover p-0">

                    <!-- Table row -->


                    <tr class="sticky-top">

                        <th class="col-1 bgcol p-2">BloodID</th>
                        <th class="col-2 bgcol p-2">BloodGroup</th>
                        <th class="col-2 bgcol p-2">ExpiryDate</th>
                        <th class="col-2 bgcol p-2">Location</th>
                        <th class="col-2 bgcol p-2">Quantity</th>
                        <th class="col-1 bgcol p-2">Status</th>
                        <th class="col-2 bgcol p-2">Action</th>
                       


                    </tr>

                    <tr>
                        <td class="col-1">B001</td>
                        <td class="col-2 "> B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">1L</td>
                        <td class="col-2">Given</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()">View</button></td>
                        
                    </tr>

                    <tr>
                        <td class="col-1">B001</td>
                        <td class="col-2">B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">1L</td>
                        <td class="col-2">Given</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()">View</button></td>
                       
                    </tr>

                    <tr>
                        <td class="col-1">B001</td>
                        <td class="col-2">B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">1L</td>
                        <td class="col-2">Given</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()">View</button></td>
                       
                    </tr>

                    <tr>
                        <td class="col-1">B001</td>
                        <td class="col-2">B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">1L</td>
                        <td class="col-2">Given</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()">View</button></td>
                        
                    </tr>

                    <tr>
                        <td class="col-1">B001</td>
                        <td class="col-2">B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">1L</td>
                        <td class="col-2">Given</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()">View</button></td>
                        
                    </tr>

                    <tr>
                        <td class="col-1">B001</td>
                        <td class="col-2">B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">1L</td>
                        <td class="col-2">Given</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()">View</button></td>
                       
                    </tr>

                    <tr>
                        <td class="col-1">B001</td>
                        <td class="col-2">B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">1L</td>
                        <td class="col-2">Given</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()">View</button></td>
                        
                    </tr>

                    <tr>
                        <td class="col-1">B001</td>
                        <td class="col-2">B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">1L</td>
                        <td class="col-2">Given</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()">View</button></td>
                        
                    </tr>

                    <tr>
                        <td class="col-1">B001</td>
                        <td class="col-2">B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">1L</td>
                        <td class="col-2 ">Given</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()">View</button></td>
                        
                    </tr>


                    <!-- Table row -->

                </table> 

            </div>
            <br>
            <!-- Table Head -->

        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
