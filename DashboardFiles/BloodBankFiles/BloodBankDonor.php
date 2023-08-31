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
                    <div class="col-4"> 
                        <button type="button" class="btn btn-primary bgcol"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Donor</button>
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
                        <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditCamp()">Edit</button></td>

                    </tr>



<!-----------------------------AddDonorDtails------------------------------------------------------------------------------->
              <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
                                           <button type="button" class="btn btn-secondary">delete</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#OrganizerEdit">Back</button>
                                      <button type="button" class="btn btn-secondary" >Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Camp Edit-->


                    <!-- --------------------------------------Campaign Edit------------------------------------------------------------------------ -->
            <!-----------1st pop-up------------------------Campaign Details---------------->
            <div class="modal fade" id="CampaignEdit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Campaign Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                              <form action="/action_page.php">
                                  <label for="fname">CampaignID:</label>
                        <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="fname">Campaign Name:</label>
                        <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">Start Date:</label>
                         <input type="date" id="birthday" name="birthday"><br><br>
                        <label for="lname">End Date:</label>
                        <input type="date" id="birthday" name="birthday"><br><br>
                        <label for="lname">Address:</label>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="lname">District:</label>
                        <select name="District" id="Dis">
                            <option value="volvo">Jaffna</option>
                            <option value="saab">Mannar</option>
                            <option value="opel">Badulla</option>
                            <option value="audi">Anuradapura</option>
                        </select><br><br>
                                       
                        <label for="lname">Ds Division:</label>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="lname">Contact No:</label>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="lname">Email:</label>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="fname">OrganizerID:</label>
                        <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="fname">BloodBankID:</label>
                        <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="fname">Status:</label>
                                  <select name="District" id="Dis">
                            <option value="volvo">Available</option>
                            <option value="saab">NotAvailable</option>
                            
                        </select><br><br>
                      </form>   
                                     
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#OrganizerEdit">Organizer Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Camp Edit-->



            <!--OrganizerEdit-->
           
            <div class="modal fade" id="OrganizerEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModal2">Organizer Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                             <form action="/action_page.php">
                        <label for="fname">Name:</label>
                        <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">Address:</label>
                   <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">District:</label>
                        <select name="District" id="Dis">
                                            <option value="volvo">Jaffna</option>
                                            <option value="saab">Mannar</option>
                                            <option value="opel">Badulla</option>
                                            <option value="audi">Anuradapura</option>
                                        </select><br><br>
                        <label for="lname">Contact No:</label>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="lname">Email:</label>
                                 <input type="text" id="fname" name="fname" value=""><br><br>

                        <label for="fname">Age:</label>
                        <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">NIC:</label>
                             <input type="text" id="fname" name="fname" value=""><br><br>
                            
                                </form>     
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="EditCamp()">Back</button>
                            <button type="button" class="btn btn-primary">Save </button>
                        </div>
                    </div>
                </div>
            </div>
     <!--OrganizerEdit-->




                    <?php
                    // put your code here
                    ?>
                    </body>
                    </html>
