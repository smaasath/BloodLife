<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<?php
require '../classes/DbConnector.php';

use classes\DbConnector;

$dbcon = new DbConnector();
$con = $dbcon->getConnection();
?>
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
                            <b>Jaffna Blood Bank</b>
                            <p style="font-size: 10px;">Blood Bank</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- nav bar end -->

        <!-- body start -->
    <center><h1>BloodBank Stock  </h1></center> 
           
          
      
        <div class="container">
            <div class="row">
                <div class ="card1 col-6 p-3 m-1" >
                    <div class="row">
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3 cont45" >
                                <div class="stockcon" style="height: 80px;background-color: white">
                                    <h4 class="blood">A+</h4>
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
                            <div class="container p-3 cont45" >
                                <div class="stockcon" style="height: 80px;background-color: white">
                                    <h4 class="blood">A-</h4>
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
                            <div class="container p-3 cont45" >
                                <div class="stockcon" style="height: 80px;background-color: white">
                                    <h4 class="blood">B+</h4>
                                    <div style="display: flex;flex-direction: row">
                                        <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px"/>
                                         <h5 style="padding-left: 10px">10L</h5>
                                    </div>
                                    <br>
                                    <br>

                                </div> 
                            </div>
                        </div>
                        <div class=" col-3 p-0 m-0">
                            <div class="container p-3 cont45" >
                                <div class="stockcon" style="height: 80px;background-color: white">
                                    <h4 class="blood">B-</h4>
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
                    <div class="row">
                        <div class=" col-3 p-0 m-0">
                            <div class="container p-3 cont45" >
                                <div class="stockcon" style="height: 80px;background-color: white">
                                    <h4 class="blood">AB+</h4>
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
                            <div class="container p-3 cont45"  >
                                <div class="stockcon" style="height: 80px;background-color: white">
                                    <h4 class="blood">AB-</h4>
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
                            <div class="container p-3 cont45" >
                                <div class="stockcon" style="height: 80px;background-color: white">
                                    <h4 class="blood">O+</h4>
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
                            <div class="container p-3 cont45" >
                                <div class="stockcon" style="height: 80px;background-color: white">
                                    <h4 class="blood">O-</h4>
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

                <select  class="district" id="district" onchange="functionTest(this.value)" style="border-radius: 5px; height: 30px">
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
                <select  class="division" id="divisionDropDown" onchange="getBloodBank(this.value)" style="border-radius: 5px; height: 30px">
                    <option>Select Division</option> 

                </select>
                <br>
                <br>
                <select  class="bloodbank" id="bloodbankDropDown" onchange="getBloodBankDetails(this.value)" style="border-radius: 5px; height: 30px">
                    <option>Select Blood Bank</option>

                </select>


            </div>
            <div class ="card1 col m-1 " id ="bloodbankdetails">
                <table class="detail">
                    <tr>
                        <td><label for="BloodbankID">BloodbankID:</label></td>
                        <td><span>1</span></td>
                    </tr>
                    <tr>
                        <td><label for="Bloodbank Name">Bloodbank Name:</label></td>
                        <td><span>Rolexy</span></td>
                    </tr>
                    <tr>
                        <td><label for="Address">Address:</label></td>
                        <td><span>100, Jaffna</span></td>
                    </tr>
                    <tr>
                        <td><label for="Contact No">Contact No:</label></td>
                        <td><span>021456780</span></td>
                    </tr>
                    <tr>
                        <td><label for="DistrictID">DistrictID:</label></td>
                        <td><span>20</span></td>
                    </tr>
                </table>


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
                    

                    <div class="col-2" >
                        <button type="button" class="addbtn" style="margin-left: 400px" onclick="Add()" data-bs-toggle="modal" data-bs-target="#exampleModal" >Add+</button>




                    </div>
                </div>
            </div>











            <!-- Table body -->
            <div class="container bg-white m-0 p-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover p-0">

                    <!-- Table row -->


                    <tr class="sticky-top ">

                        <th class="col-1 bgcol p-2">BloodID</th>
                        <th class="col-2 bgcol p-2">BloodGroup</th>
                        <th class="col-2 bgcol p-2">ExpiryDate</th>
                        <th class="col-2 bgcol p-2">Location</th>
                        <th class="col-1 bgcol p-2">Quantity</th>
                        <th class="col-1 bgcol p-2">Status</th>
                        <th class="col-1 bgcol p-2">View</th>
                        <th class="col-2 bgcol p-2">Edit</th>


                    </tr>

                    <tr>
                        <td class="col-1 ">B001</td>
                        <td class="col-2 ">B+</td>
                        <td class="col-2">2000-01-20</td>
                        <td class="col-2">Jaffna</td>
                        <td class="col-1">1L</td>
                        <td class="col-2">Given</td>
                        <td class="col-1"><button type="button" class="bbviewbtn" onclick="openBloodbankDetails()"data-bs-toggle="modal" data-bs-target="#viewModal" >View</button></td>
                        <td class="col-1"><button type="button" class="editbtn" onclick="Editbloodbank()" data-bs-toggle="modal" data-bs-target="#editModal" >Edit</button></td>
                    </tr>







                    <!-- Table row -->

                </table> 

            </div>
            <br>
            <!-- Table Head -->

        </div>




        <!-- Add details -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD DETAILS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <label for="BloodID">BloodID:</label>
                            <input type="text" class="form-control" id="BloodID" name="BloodID"><br>
                            <label for="BloodGroup">BloodGroup:</label>
                            <input type="text" class="form-control" id="BloodGroup" name="BloodGroup"><br>
                            <label for="Quantity">Quantity:</label>
                            <input type="text" class="form-control" id="Quantity" name="Quantity"><br>
                            <label for="ExpiryDate">ExpiryDate:</label>
                            <input type="text" class="form-control" id="ExpiryDate" name="ExpiryDate"><br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="savebtn">Save</button>
                        <button type="button" class="editbtn" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- VIEW -->

        <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="view" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="view">VIEW DETAILS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="stocky-1">
                                <label for="BloodID">BloodID:</label><br>                          
                            B001
                            </div>
                           <div class="stocky-1">
                            <label for="BloodGroup">BloodGroup:</label><br>
                            <span>O+</span>
                            </div>
                            <div class="stocky-1">
                            <label for="Status">Status:</label><br>
                            <span>Available</span>
                            </div>
                           <div class="stocky-1">
                            <label for="Quantity">Quantity:</label><br>
                            <span>2L</span>
                            </div>
                           <div class="stocky-1">
                            <label for="ExpiryDate">ExpiryDate:</label><br>
                            <span>2023-10-02</span>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="savebtn" data-bs-dismiss="modal">OK</button>


                    </div>
                </div>
            </div>
        </div>


        <!-- edit -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="edit">EDIT DETAILS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <label for="BloodID">BloodID:</label>
                            <input type="text" class="form-control" id="BloodID" name="BloodID">
                            <label for="BloodGroup">BloodGroup:</label>
                            <input type="text" class="form-control" id="BloodGroup" name="BloodGroup">
                            <label for="Location">Location:</label>
                            <input type="text" class="form-control" id="Location" name="Location">
                            <label for="Quantity">Quantity:</label>
                            <input type="text" class="form-control" id="Quantity" name="Quantity">
                            <label for="Status">Status:</label>
                            <input type="text" class="form-control" id="Status" name="Status">
                            <label for="ExpiryDate">ExpiryDate:</label>
                            <input type="text" class="form-control" id="ExpiryDate" name="ExpiryDate">
                            <label for="Bloodbank">Bloodbank:</label>
                            <input type="text" class="form-control" id="Bloodbank" name="Bloodbank">
                            <label for="BloodbankID">BloodbankID:</label>
                            <input type="text" class="form-control" id="BloodbankID" name="BloodbankID">
                            <label for="Address">Address:</label>
                            <input type="text" class="form-control" id="Address" name="Address">
                            <label for="Contact No">Contact No:</label>
                            <input type="text" class="form-control" id="Contact No" name="Contact No">
                            <label for="Email">Email:</label>
                            <input type="text" class="form-control" id="Email" name="Email">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="savebtn">Save</button>
                        <button type="button" class="editbtn" data-bs-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>
        </div>

        <?php
        // put your code hereg
        ?>
    </body>
</html>
