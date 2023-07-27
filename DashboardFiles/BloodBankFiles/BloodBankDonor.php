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

        <div class="container">
            <img src="https://mseducationacademy.in/storage/2023/06/world-blood-donor-day1.jpg" alt="Blood" width="100%" height="200">






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
                        <button type="button" class="btn btn-primary bgcol" onclick="AddDonor()" data-bs-toggle="modal" data-bs-target="#AddCampaign">
                            Add Donor</button>
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
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="DonorEdit()" data-bs-toggle="modal" data-bs-target="#DonorEdit">
                                Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="DonorView()" data-bs-toggle="modal" data-bs-target="#DonorView">
                                View</button></td>

                    </tr>



<!-----------------------------AddDonorDtails------------------------------------------------------------------------------->
                    <div class="modal fade" id="AddCampaign">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="AddCampaign">Blood Donor Details</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form>
                                        <label for="fname">First Name:</label>
                                        <input type="text" id="fname" name="fname"><br><br>
                                        <label for="lname">Last Date:</label>
                                        <input type="date" id="birthday" name="birthday"><br><br>
                                        <label for="email">Blood Group:</label>
                                        <<input type="date" id="birthday" name="birthday"><br><br>
                                        <label for="email">DateOfbirth:</label>
                                        <input type="email" id="email" name="email"><br><br>
                                        <label for="email">age:</label>
                                        <input type="email" id="email" name="email"><br><br>
                                        <label for="email">age:</label>
                                        <input type="email" id="email" name="email"><br><br>
                                        <select name="District" id="Dis">
                                            <option value="volvo">Jaffna</option>
                                            <option value="saab">Mannar</option>
                                            <option value="opel">Badulla</option>
                                            <option value="audi">Anuradapura</option>
                                        </select><br><br>
                                        <label for="email">Ds Division:</label>
                                        <input type="email" id="email" name="email"><br><br>
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email"><br><br>

                                    </form>
                                </div>


                                <div class="modal-footer">


                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--AddDonorDetails---------------------------------------------------------->







                    <!-- --------------------------------------Campaign Edit------------------------------------------------------------------------ -->
                    <!-----------1st pop-up------------------------Campaign Details---------------->
                    <div class="modal fade" id="DonorEdit">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Campaign Details</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                     <form>
                                        <label for="fname">First Name:</label>
                                        <input type="text" id="fname" name="fname"><br><br>
                                        <label for="lname">Last Date:</label>
                                        <input type="date" id="birthday" name="birthday"><br><br>
                                        <label for="email">Blood Group:</label>
                                        <<input type="date" id="birthday" name="birthday"><br><br>
                                        <label for="email">DateOfbirth:</label>
                                        <input type="email" id="email" name="email"><br><br>
                                        <label for="email">age:</label>
                                        <input type="email" id="email" name="email"><br><br>
                                        <label for="email">age:</label>
                                        <input type="email" id="email" name="email"><br><br>
                                        <select name="District" id="Dis">
                                            <option value="volvo">Jaffna</option>
                                            <option value="saab">Mannar</option>
                                            <option value="opel">Badulla</option>
                                            <option value="audi">Anuradapura</option>
                                        </select><br><br>
                                        <label for="email">Ds Division:</label>
                                        <input type="email" id="email" name="email"><br><br>
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email"><br><br>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Delete</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#OrganizerEdit">Back</button>
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Camp Edit-->


                    <!-- --------------------------------------Campaign View------------------------------------------------------------------------ -->
                    <!--CampDetailsView-->
                    <!-- 1st pop-up -->

                    <div class="modal fade" id="DonorView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="Save">view</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                                        Organizer Details
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>  -->
                    <!--CampDetailsView-->



                    <!--OrganizerDetailsview-->
                    <!-- Modal -->

                    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModal7">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="Save()">Back</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>  




                    <!--------------------------------------------------------------------------------------------------------------->



                    <?php
                    // put your code here
                    ?>
                    </body>
                    </html>
