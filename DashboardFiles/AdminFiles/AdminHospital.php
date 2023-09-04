<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
$hospitalId = 1;
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
                            <a href="AdminProfile.php"></a>
                            <p style="font-size: 10px;">Blood Bank</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- nav bar end -->

        <!-- body start -->
    <center><h1>Admin Hospital - Management</h1></center>
    <!-- Table -->

    <div class="p-5">


        <div class="rounded-top-4 p-0 border border-dark-subtle">
            <div class="row align-items-center">
                <div class="col-3">           
                    <div class="input-group rounded p-3">
                        <input type="search" class="form-control rounded" placeholder="Search ID" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>

                    <div class="col-3">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="Search Name" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>


                    <div class="col-2"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>District</option>
                            <option value="1">Jaffna</option>
                            <option value="2">Badulla</option>
                            <option value="3">Vavuniya</option>
                        </select>
                    </div>

                    <div class="col-3" > 
                        <button type="button" class="btn btn-primary bgcol" data-bs-toggle="modal" data-bs-target="#AddHospital" onclick="AddHospital()" style="float: right;">Add Hospital</button>
                    </div>

                </div>

            </div>
            <!-- Table body -->
            <div class="container bg-white m-0 p-0" style=" max-height: 500px; overflow: scroll;">
                <table class="table table-hover p-0">

                    <!-- Table row -->



                        <th class="col-1 bgcol p-2">Hospital ID</th>
                        <th class="col-3 bgcol p-2">Hospital Name</th>
                        <th class="col-2 bgcol p-2">Address</th>
                        <th class="col-3 bgcol p-2">District</th>
                        <th class="col-1 bgcol p-2">DS Division</th>
                        <th class="col-1 bgcol p-2">Contact Number</th>
                        <th class="col-1 bgcol p-2">Email</th>
                        <th class="col-1 bgcol p-2">View</th>
                        <th class="col-1 bgcol p-2">Edit</th>

                    </tr>

                    <tr>
                        <td class="col-1">H_ID001</td>
                        <td class="col-3"> Teaching Hospital-Jaffna</td>
                        <td class="col-2"> Hospital St, Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">0212223348</td>
                        <td class="col-3">info@thjaffna.lk</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openHospitalDetails" onclick="Popup()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospitalDetails" onclick="Popup()">Edit</button></td>
                    </tr>
                    
                    <tr>
                        <td class="col-1">H_ID001</td>
                        <td class="col-3"> Teaching Hospital-Jaffna</td>
                        <td class="col-2"> Hospital St, Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">0212223348</td>
                        <td class="col-3">info@thjaffna.lk</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openHospitalDetails" onclick="Popup()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospitalDetails" onclick="Popup()">Edit</button></td>
                    </tr>
                    
                    <tr>
                        <td class="col-1">H_ID001</td>
                        <td class="col-3"> Teaching Hospital-Jaffna</td>
                        <td class="col-2"> Hospital St, Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">0212223348</td>
                        <td class="col-3">info@thjaffna.lk</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openHospitalDetails" onclick="Popup()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospitalDetails" onclick="Popup()">Edit</button></td>
                    </tr>
                    
                    <tr>
                        <td class="col-1">H_ID001</td>
                        <td class="col-3"> Teaching Hospital-Jaffna</td>
                        <td class="col-2"> Hospital St, Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">0212223348</td>
                        <td class="col-3">info@thjaffna.lk</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openHospitalDetails" onclick="Popup()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospitalDetails" onclick="Popup()">Edit</button></td>
                    </tr>
                    
                    <tr>
                        <td class="col-1">H_ID001</td>
                        <td class="col-3"> Teaching Hospital-Jaffna</td>
                        <td class="col-2"> Hospital St, Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">0212223348</td>
                        <td class="col-3">info@thjaffna.lk</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openHospitalDetails" onclick="Popup()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospitalDetails" onclick="Popup()">Edit</button></td>
                    </tr>
                    
                    <tr>
                        <td class="col-1">H_ID001</td>
                        <td class="col-3"> Teaching Hospital-Jaffna</td>
                        <td class="col-2"> Hospital St, Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">0212223348</td>
                        <td class="col-3">info@thjaffna.lk</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openHospitalDetails" onclick="Popup()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospitalDetails" onclick="Popup()">Edit</button></td>
                    </tr>
                    
                    <tr>
                        <td class="col-1">H_ID001</td>
                        <td class="col-3"> Teaching Hospital-Jaffna</td>
                        <td class="col-2"> Hospital St, Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">0212223348</td>
                        <td class="col-3">info@thjaffna.lk</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openHospitalDetails" onclick="Popup()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospitalDetails" onclick="Popup()">Edit</button></td>
                    </tr>
                    
                    <tr>
                        <td class="col-1">H_ID001</td>
                        <td class="col-3"> Teaching Hospital-Jaffna</td>
                        <td class="col-2"> Hospital St, Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">0212223348</td>
                        <td class="col-3">info@thjaffna.lk</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openHospitalDetails" onclick="Popup()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospitalDetails" onclick="Popup()">Edit</button></td>
                    </tr>
                    
                    <tr>
                        <td class="col-1">H_ID001</td>
                        <td class="col-3"> Teaching Hospital-Jaffna</td>
                        <td class="col-2"> Hospital St, Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">Jaffna</td>
                        <td class="col-3">0212223348</td>
                        <td class="col-3">info@thjaffna.lk</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openHospitalDetails" onclick="Popup()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospitalDetails" onclick="Popup()">Edit</button></td>
                    </tr>

                </table> 
            </div>
            <br>


        </div>


        <!-- Modal edit Hospital Details-->
        <div class="modal fade" id="editHospitalDetails" tabindex="-1" aria-labelledby="editHospitalDetailsLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editHospitalDetailsLabel">Edit Hospital Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>--------------------------------------------------</p>
                        <form action="">
                            <label for="HosId">Hospital ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="text" id="HosId" name="HosId" required><br><br>
                            <label for="HosName">Hospital Name:</label>
                            <input type="text" id="HosName" name="HosName" required><br><br>
                            <label for="Adrs">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="text" id="Adrs" name="Adrs" required><br><br>
                            <label for="Dst">District&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="text" id="Dst" name="Dst" required><br><br>
                            <label for="Divi">DS Division&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="text" id="Divi" name="Divi" required><br><br>
                            <label for="Cnct">Contact No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="tel" id="Cnct" name="Cnct" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
                            <label for="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="email" id="email" name="email" required><br><br>  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#savePopup" onclick="Popup()">Save </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePopup"onclick="Popup()">Delete</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>



                            </div>
                    </div>
                </div>
            </div>

            <!-- Modal save -->
            <div class="modal fade" id="savePopup" tabindex="-1" aria-labelledby="savePopupLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="savePopupLabel"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1>Do you want to save the changes?</h1>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger">Don't Save </button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  >cancel</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal delete -->
            <div class="modal fade" id="deletePopup" tabindex="-1" aria-labelledby="deletePopupLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deletePopupLabel"> </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1>Do you want to delete the details?</h1>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">No</button>
                            <button type="button" class="btn btn-danger">Yes</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-dismiss="modal">cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            
               <!-- Modal Add Hospital -->
        <div class="modal fade" id="AddHospital" tabindex="-1" aria-labelledby="addHospitalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addHospitalLabel">Add Hospital </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>--------------------------------------------------</p>
                        <form action="">
                           
                            <label for="HosName">Hospital Name:</label>
                            <input type="text" id="HosName" name="HosName" required><br><br>
                            <label for="Adrs">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="text" id="Adrs" name="Adrs" required><br><br>
                            <label for="Dst">District&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="text" id="Dst" name="Dst" required><br><br>
                            <label for="Divi">DS Division&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="text" id="Divi" name="Divi" required><br><br>
                            <label for="Cnct">Contact No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="tel" id="Cnct" name="Cnct" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
                            <label for="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input type="email" id="email" name="email" required><br><br>  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#savePopup" onclick="Popup()">Save </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePopup"onclick="Popup()">Delete</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>



                            </div>
                    </div>
                </div>
            </div>

            <!-- Modal open Hospital Details -->
            <div class="modal fade" id="openHospitalDetails" tabindex="-1" aria-labelledby="openHospitalDetailsLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="openHospitalDetailsLabel">Hospital Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <p>--------------------------------------------------</p>
                            <p>Hospital ID   : H_ID0040</p>
                            <p>Hospital Name : Teaching Hospital - Jaffna</p>
                            <p>Address       : Hospital St,Jaffna,40000</p>
                            <p>District      : Jaffna </p>
                            <p>DS Division   : Jaffna</p>
                            <p>Contact No    : 0212223348</p>
                            <p>Email         : info@thjaffna.lk</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#savePopup" onclick="Popup()">Save </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePopup"onclick="Popup()">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>



                        </div>
                    </div>
                </div>
            </div>



            <?php
            // put your code here
            ?>




            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <script src="/JS/Admindash.js"></script>
    </body>
</html>
