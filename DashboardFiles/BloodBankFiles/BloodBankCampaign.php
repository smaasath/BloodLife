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



            <div class="centered" style="font-size:3vw" ><br><strong>JUST DONATE BLOOD.</strong></div>

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
                        <button type="button" class="btn btn-primary bgcol" onclick="AddCampaign()" >Add Campaign</button>


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
                            <td class="col-1"><button type="button" class="btn btn-dark" onclick="EditCamp()">Edit</button></td>
                            <td class="col-1"><button type="button" class="btn btn-secondary" onclick="ReviewChamp()" data-bs-toggle="modal" data-bs-target="#Review">Review</button></td>
                            <td class="col-1"><button type="button" class="btn btn-info" onclick="ViewChamp()">View</button></td>

                        </tr>



                        <!-- Table row -->

                    </table> 

                </div>
                <br>
                <!-- Table Head -->

            </div>

            <!-- Table -->
            <!-------------------------------------------->






            <!--CampaignAddDetails-->
            <!-- Modal -->
            <div class="modal fade" id="AddCampaign">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="AddCampaign">Campaign Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="/action_page.php">
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
                        
                      </form>     

                           
                                       


                        </div>
                        <div class="modal-footer">


                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                Organizer Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--CampaignAddDetails-->



            <!--OrganizerAdd-->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Organizer Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-body">

                                
                                
                                
                                 <form action="/action_page.php">
                        <label for="fname">Name:</label>
                        <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">Address:</label>
                   <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">District:</label>
                        <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">Contact No:</label>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="lname">Email:</label>
                                <select name="District" id="Dis"> 
                                            <option value="volvo">Jaffna</option>
                                            <option value="saab">Mannar</option>
                                            <option value="opel">Badulla</option>
                                            <option value="audi">Anuradapura</option>
                                        </select><br><br>

                        <label for="fname">Age:</label>
                        <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">NIC:</label>
                         <input type="text" id="fname" name="fname" value=""><br><br>
                        
                                 </form>
                                
                                                       </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="AddCampaign()">Back</button>
                                <button type="button" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>








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




         <!-- --------------------------------------Campaign View------------------------------------------------------------------------ -->
          <!--CampDetailsView-->
            <!-- 1st pop-up -->
            
            <div class="modal fade" id="ChampView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="Save">view</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="/action_page.php">
                                  <label for="fname">CampaignID:</label>
                                  <p>Nelax</P>
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">
               Organizer Details
            </button>
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal8">
               Donor Details
            </button>
                  </div>
                </div>
              </div>
            </div>  
            <!--CampDetailsView-->



            <!--OrganizerDetailsview-->
            <!-- Modal -->
            
            <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModal7">Organizer Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <!<!-- comment   <div class="container bg-white m-0 p-0" style=" max-height: 373px; overflow: scroll;">  -->
                    <table >
  <tr>
    <th>OrganizerID</th>
    <th>Name</th>
    <th>ContactNo</th>
    <th>District</th>
    <th>Email</th>
    
  </tr>
  <tr>
    <td>A001</td>
    <td>Helina</td>
    <td>07725563</td>
    <td>Jaffna</td>
    <td>ABC@gmail.com</td>
  </tr>
 
</table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="Save()">Back</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>  
            
            
            
             <!--Donorview-->
            <!-- pop-up3-->
            
            <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


         <!--------------------------------------------------->
<!-------------------Review-------------------------------->

 <div class="modal fade" id="Review" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="Review">Review</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      
                    <div class="form-group">
                                        <label for="exampleInputEmail1">Percentege</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""><br>
                                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Save</button>
                   
                  </div>
                </div>
              </div>
            </div>  






            <?php
            // put your code here
            ?>
    </body>
</html>
