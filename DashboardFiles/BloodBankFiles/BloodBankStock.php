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
        <h1>BloodBank Stock
            <?php
            if ($con) {
                echo 'success';
            } else {
                echo 'not';
            }
            ?>
        </h1>
        <div class="container">
            <div class="row">
                <div class ="card1 col-6 p-3 m-1" >
                    <div class="row">
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood">A+</h4>
                                    <br>
                                    <br>

                                </div> 
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood">A-</h4>
                                    <br>
                                    <br>

                                </div> 
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood">B+</h4>
                                    <br>
                                    <br>

                                </div> 
                            </div>
                        </div>
                        <div class=" col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood">B-</h4>
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
                                    <h4 class="blood">AB+</h4>
                                    <br>
                                    <br>

                                </div> 
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood">AB-</h4>
                                    <br>
                                    <br>

                                </div> 
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood">O+</h4>
                                    <br>
                                    <br>

                                </div> 
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0">
                            <div class="container p-3" >
                                <div class="stockcon">
                                    <h4 class="blood">O-</h4>
                                    <br>
                                    <br>

                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class ="card1 col-2 m-1 " >           
                     <select  class="district" id="district">
                        <option value="jaffna">jaffna</option>
                        
                    </select>
                    <br>
                    <br>
                     <select  class="division" id="division">
                        <option value="jaffna">Nallur</option>
                        
                    </select>
                    <br>
                    <br>
                    <select  class="bloodbank" id="bloodbank">
                        <option value="jaffna">jaffna blood bank</option>
                        
                    </select>

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

                    <div class="col-2" >
                        <button type="button" class="btn btn-primary bgcol" onclick="Add()" data-bs-toggle="modal" data-bs-target="#exampleModal" >Add+</button>




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
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openBloodbankDetails()"data-bs-toggle="modal" data-bs-target="#viewModal" >View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="Editbloodbank()" data-bs-toggle="modal" data-bs-target="#editModal" >Edit</button></td>
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
                        <button type="button" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

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
                            <label for="BloodID">BloodID:</label>
                            <input type="text" class="form-control" id="BloodID" name="BloodID"><br>
                            <label for="BloodGroup">BloodGroup:</label>
                            <input type="text" class="form-control" id="BloodGroup" name="BloodGroup"><br>
                            <label for="Status">Status:</label>
                            <input type="text" class="form-control" id="Status" name="Status"><br>
                            <label for="Quantity">Quantity:</label>
                            <input type="text" class="form-control" id="Quantity" name="Quantity"><br>
                            <label for="ExpiryDate">ExpiryDate:</label>
                            <input type="text" class="form-control" id="ExpiryDate" name="ExpiryDate"><br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>


                    </div>
                </div>
            </div>
        </div>


        <!-- edit -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="edit">VIEW DETAILS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <label for="BloodID">BloodID:</label>
                            <input type="text" class="form-control" id="BloodID" name="BloodID"><br>
                            <label for="BloodGroup">BloodGroup:</label>
                            <input type="text" class="form-control" id="BloodGroup" name="BloodGroup"><br>
                            <label for="Location">Location:</label>
                            <input type="text" class="form-control" id="Location" name="Location"><br>
                            <label for="Quantity">Quantity:</label>
                            <input type="text" class="form-control" id="Quantity" name="Quantity"><br>
                            <label for="Status">Status:</label>
                            <input type="text" class="form-control" id="Status" name="Status"><br>
                            <label for="ExpiryDate">ExpiryDate:</label>
                            <input type="text" class="form-control" id="ExpiryDate" name="ExpiryDate"><br>
                            <label for="Bloodbank">Bloodbank:</label>
                            <input type="text" class="form-control" id="Bloodbank" name="Bloodbank"><br>
                            <label for="BloodbankID">BloodbankID:</label>
                            <input type="text" class="form-control" id="BloodbankID" name="BloodbankID"><br>
                            <label for="Address">Address:</label>
                            <input type="text" class="form-control" id="Address" name="Address"><br>
                            <label for="Contact No">Contact No:</label>
                            <input type="text" class="form-control" id="Contact No" name="Contact No"><br>
                            <label for="Email">Email:</label>
                            <input type="text" class="form-control" id="Email" name="Email"><br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>
        </div>

        <?php
        // put your code hereg
        ?>
    </body>
</html>
