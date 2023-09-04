<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .buttoncolor {
                background-color: #f44336;
            } /* Red */
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
    <center><h1>Admin - Blood Bank Management</h1></center>

    <!-- Table -->

    <div class="p-5">


        <div class="rounded-top-4 p-0 border border-dark-subtle">
            <div class="row align-items-center">
                <div class="col-3">           
                    <div class="input-group rounded p-3">
                        <input type="search" class="form-control rounded" placeholder="Search ID" aria-label="Search" aria-describedby="search-addon"  >



                    </div>
                </div>

                <div class="col-3">           
                    <div class="input-group rounded p-3">
                        <input type="search" class="form-control rounded" placeholder="Search Name" aria-label="Search" aria-describedby="search-addon" >



                    </div>
                </div>


                <div class="col-2"> 
                    <select class="form-select" aria-label="Default select example" >
                        <option selected>District</option>
                        <option value="1">Jaffna</option>
                        <option value="2">Badulla</option>
                        <option value="3">Vavuniya</option>
                    </select>
                </div>

                <div class="col-3"> 
                    <button type="button" class="btn btn-primary bgcol" data-bs-toggle="modal" data-bs-target="#addBloodbank" onclick="AddBloodbank()" style="float: right;">Add Blood Bank</button>
                </div>


            </div>

        </div>
        <!-- Table body -->
        <div class="container bg-white m-0 p-0" style=" max-height: 500px; overflow: scroll;">
            <table class="table table-hover p-0">

                <!-- Table row -->


                <tr class="sticky-top">

                    <th class="col-1 bgcol p-2">Blood Bank ID</th>
                    <th class="col-3 bgcol p-2">Blood Bank Name</th>
                    <th class="col-2 bgcol p-2">Address</th>
                    <th class="col-3 bgcol p-2">District</th>
                    <th class="col-1 bgcol p-2">DS Division</th>
                    <th class="col-1 bgcol p-2">Contact Number</th>
                    <th class="col-1 bgcol p-2">Email</th>
                    <th class="col-1 bgcol p-2">View</th>
                    <th class="col-1 bgcol p-2">Edit</th>

                </tr>

                <tr>
                    <td class="id col-1">BBID001</td>
                    <td class="name col-3"> Regional Blood Centre</td>
                    <td class="addrs col-2">Victoria Rd, Jaffna</td>
                    <td class="district col-3">Jaffna</td>
                    <td class="division col-3">Jaffna</td>
                    <td class="contact col-3">94212223063</td>
                    <td class="email col-3">info@thjaffna.lk</td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openBloodbankDetails" onclick="Popup()">View</button></td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBloodbankDetails" onclick="Popup()">Edit</button></td>
                </tr>
                
                 <tr>
                    <td class="id col-1">BBID001</td>
                    <td class="name col-3"> Regional Blood Centre</td>
                    <td class="addrs col-2">Victoria Rd, Jaffna</td>
                    <td class="district col-3">Jaffna</td>
                    <td class="division col-3">Jaffna</td>
                    <td class="contact col-3">94212223063</td>
                    <td class="email col-3">info@thjaffna.lk</td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openBloodbankDetails" onclick="Popup()">View</button></td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBloodbankDetails" onclick="Popup()">Edit</button></td>
                </tr>
                
                 <tr>
                    <td class="id col-1">BBID001</td>
                    <td class="name col-3"> Regional Blood Centre</td>
                    <td class="addrs col-2">Victoria Rd, Jaffna</td>
                    <td class="district col-3">Jaffna</td>
                    <td class="division col-3">Jaffna</td>
                    <td class="contact col-3">94212223063</td>
                    <td class="email col-3">info@thjaffna.lk</td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openBloodbankDetails" onclick="Popup()">View</button></td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBloodbankDetails" onclick="Popup()">Edit</button></td>
                </tr>
                
                 <tr>
                    <td class="id col-1">BBID001</td>
                    <td class="name col-3"> Regional Blood Centre</td>
                    <td class="addrs col-2">Victoria Rd, Jaffna</td>
                    <td class="district col-3">Jaffna</td>
                    <td class="division col-3">Jaffna</td>
                    <td class="contact col-3">94212223063</td>
                    <td class="email col-3">info@thjaffna.lk</td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openBloodbankDetails" onclick="Popup()">View</button></td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBloodbankDetails" onclick="Popup()">Edit</button></td>
                </tr>
                
                 <tr>
                    <td class="id col-1">BBID001</td>
                    <td class="name col-3"> Regional Blood Centre</td>
                    <td class="addrs col-2">Victoria Rd, Jaffna</td>
                    <td class="district col-3">Jaffna</td>
                    <td class="division col-3">Jaffna</td>
                    <td class="contact col-3">94212223063</td>
                    <td class="email col-3">info@thjaffna.lk</td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openBloodbankDetails" onclick="Popup()">View</button></td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBloodbankDetails" onclick="Popup()">Edit</button></td>
                </tr>
                
                 <tr>
                    <td class="id col-1">BBID001</td>
                    <td class="name col-3"> Regional Blood Centre</td>
                    <td class="addrs col-2">Victoria Rd, Jaffna</td>
                    <td class="district col-3">Jaffna</td>
                    <td class="division col-3">Jaffna</td>
                    <td class="contact col-3">94212223063</td>
                    <td class="email col-3">info@thjaffna.lk</td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openBloodbankDetails" onclick="Popup()">View</button></td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBloodbankDetails" onclick="Popup()">Edit</button></td>
                </tr>
                
                 <tr>
                    <td class="id col-1">BBID001</td>
                    <td class="name col-3"> Regional Blood Centre</td>
                    <td class="addrs col-2">Victoria Rd, Jaffna</td>
                    <td class="district col-3">Jaffna</td>
                    <td class="division col-3">Jaffna</td>
                    <td class="contact col-3">94212223063</td>
                    <td class="email col-3">info@thjaffna.lk</td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openBloodbankDetails" onclick="Popup()">View</button></td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBloodbankDetails" onclick="Popup()">Edit</button></td>
                </tr>
                
                 <tr>
                    <td class="id col-1">BBID001</td>
                    <td class="name col-3"> Regional Blood Centre</td>
                    <td class="addrs col-2">Victoria Rd, Jaffna</td>
                    <td class="district col-3">Jaffna</td>
                    <td class="division col-3">Jaffna</td>
                    <td class="contact col-3">94212223063</td>
                    <td class="email col-3">info@thjaffna.lk</td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openBloodbankDetails" onclick="Popup()">View</button></td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBloodbankDetails" onclick="Popup()">Edit</button></td>
                </tr>
                
                 <tr>
                    <td class="id col-1">BBID001</td>
                    <td class="name col-3"> Regional Blood Centre</td>
                    <td class="addrs col-2">Victoria Rd, Jaffna</td>
                    <td class="district col-3">Jaffna</td>
                    <td class="division col-3">Jaffna</td>
                    <td class="contact col-3">94212223063</td>
                    <td class="email col-3">info@thjaffna.lk</td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openBloodbankDetails" onclick="Popup()">View</button></td>
                    <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBloodbankDetails" onclick="Popup()">Edit</button></td>
                </tr>











            </table> 


        </div>
        <!-- Table body -->
        <div class="container bg-white m-0 p-0" style=" max-height: 500px; overflow: scroll;">
            <table class="table table-hover p-0">

    </div>
    <br>


</div>

<!-- Button trigger modal -->




<!-- Modal edit Blood bank Details -->

<div class="modal fade" id="editBloodbankDetails" tabindex="-1" aria-labelledby="openBloodbankDetailsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editBloodbankDetailsLabel">Edit Blood bank Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>--------------------------------------------------</p>
                <form action="">
                    <label for="BbId">Blood bank ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                    <input type="text" id="BbId" name="BbId" required><br><br>
                    <label for="BbName">Blood Bank Name:</label>
                    <input type="text" id="BbName" name="BbName" required><br><br>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>

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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal add blood bank -->
    <div class="modal fade" id="addBloodbank" tabindex="-1" aria-labelledby="addBloodbankLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addBloodbankLabel">Add Blood bank </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>--------------------------------------------------</p>
                    <form action="">
                        
                        <label for="BbName">Blood Bank Name:</label>
                        <input type="text" id="BbName" name="BbName" required><br><br>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>


                        </div>
                </div>
            </div>
        </div>


        <!-- Modal open Blood bank Details-->
        <div class="modal fade" id="openBloodbankDetails" tabindex="-1" aria-labelledby="openBloodbankDetailsLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="openBloodbankDetailsLabel">Blood Bank Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <p>--------------------------------------------------</p>
                        <p>Blood Bank ID   : BBID001</p>
                        <p>Blood Bank Name : Regional Blood Centre	</p>
                        <p>Address         : Victoria Rd, Jaffna	</p>
                        <p>District        : Jaffna </p>
                        <p>DS Division     : Jaffna</p>
                        <p>Contact No      : 94212223063</p>
                        <p>Email           : info@thjaffna.lk</p>
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
