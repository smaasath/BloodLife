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
                            <b>General Hospital</b>
                            <p style="font-size: 10px;">Hospital</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- nav bar end -->

        <!-- body start -->
    <center><h1>Hospital Blood Stock</h1></center>
    <div class="container">
        <div class="row">
            <div class ="card1 col-6 p-3 m-1" >
                <div class="row">
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon" style="height: 80px;background-color: white">
                                <h4 class="blood1">A+</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px"/>
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>                                   
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon" style="height: 80px;background-color: white">
                                <h4 class="blood1">A-</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px"/>
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>                                  
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon" style="height: 80px;background-color: white">
                                <h4 class="blood1">B+</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px"/>
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>                                   
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon" style="height: 80px;background-color: white">
                                <h4 class="blood1">B-</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px"/>
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>                                   
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>

                    <div class="col-3 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon" style="height: 80px;background-color: white">
                                <h4 class="blood1">AB+</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px"/>
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>                                  
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon" style="height: 80px;background-color: white">
                                <h4 class="blood1">AB-</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px"/>
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>                                   
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon" style="height: 80px;background-color: white">
                                <h4 class="blood1">O+</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px"/>
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>                                   
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3" >
                            <div class="stockcon" style="height: 80px;background-color: white">
                                <h4 class="blood1">O-</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px"/>
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>                                  
                                <br>
                                <br>

                            </div> 
                        </div>
                    </div>
                </div>
            </div>


            <div class ="card1 col-2 m-1 " >   

                <select  class="district" id="district" onchange="functionTest(this.value)">
                    <option>Select District</option>
                    <?php
                    require '../classes/district.php';

                    use classes\district;

$dataArray = district::getAllDistrict(); // Retrieve district data using the "getAllDistrict()" method

                    foreach ($dataArray as $district) {
                        ?>

                        <option  value="<?php echo $district['district']; ?>"><?php echo $district['district']; ?></option>
                        <?php
                    }
                    ?>
                </select>

                <br>
                <br>
                <select  class="division" id="divisionDropDown" onchange="getBloodBank(this.value)">
                    <option>Select Division</option> 

                </select>
                <br>
                <br>
                <select  class="bloodbank" id="bloodbankDropDown" onchange="getBloodBankDetails(this.value)">
                    <option>Select Blood Bank</option>

                </select>


            </div>
            <div class ="card1 col m-1 " id ="bloodbankdetails">

               
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
                        <td class="col-2">B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-2">1L</td>
                        <td class="col-2">Given</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()" data-bs-toggle="modal" data-bs-target="#viewModal">View</button></td>

                    </tr>




                    <!-- Table row -->

                </table> 

            </div>
            <br>
            <!-- Table Head -->

        </div>
        <-<!--view -->
        <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="view" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="view">VIEW DETAILS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="stocky">
                                <label for="BloodID">BloodID:</label>                          
                                B001
                            </div>
                            <div class="stocky">
                                <label for="BloodGroup">BloodGroup:</label>
                                <span>O+</span>
                            </div>
                            <div class="stocky">
                                <label for="Location">Location:</label>
                                <span>JAFFNA</span>
                            </div>
                            <div class="stocky">
                                <label for="Quantity">Quantity:</label>
                                <span>2L</span>
                            </div>
                            <div class="stocky">
                                <label for="Status">Status:</label>
                                <span>Available</span>
                            </div>
                            <div class="stocky">
                                <label for="ExpiryDate">ExpiryDate:</label>
                                <span>2023-10-02</span>
                            </div>
                            <div class="stocky">
                                <label for="Bloodbank">Bloodbank:</label>
                                <span>Venus</span>
                            </div>
                            <div class="stocky">
                                <label for="BloodbankID">BloodbankID:</label>
                                <span>BB001</span>
                            </div>
                            <div class="stocky">
                                <label for="Address">Address:</label>
                                <span>100,JAFFNA</span>
                            </div>
                            <div class="stocky">
                                <label for="Contact No">Contact No:</label>
                                <span>0214578965</span>
                            </div>
                            <div class="stocky">
                                <label for="Email">Email:</label>
                                <span>SAALU@gmail</span>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>


                    </div>
                </div>
            </div>
        </div>

        <?php
// put your code here
        ?>
</body>
</html>
