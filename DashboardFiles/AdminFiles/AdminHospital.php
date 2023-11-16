<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
$hospitalId = 1;
$token = "12b378738a1a6be3bacea473fe9e3d2fbfce8e678d514e1d943";

require_once '../classes/hospital.php';
require_once '../classes/district.php';

use classes\hospital;
use classes\district;


?>

<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        /* CSS to set a consistent width for input elements */
        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            /* Set the width to 100% */
            box-sizing: border-box;
            /* Include padding and border in the total width */
        }

        .valid {
            color: green;
        }

        .not-valid {
            color: red;
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
    <center>
        <h1>Admin Hospital - Management</h1>
    </center>
    <!-- Table -->


    <div class="p-5">


        <div class="rounded-top-4 p-0 border border-dark-subtle">
            <div class="row align-items-center">


                <div class="col-3">
                    <div class="input-group rounded p-3">
                        <input type="search" id="search" class="form-control rounded" placeholder="Search Name" aria-label="Search" aria-describedby="search-addon" oninput="teeest(this.value)">





                    </div>
                </div>


                <div class="col-2">
                    <select class="form-select" aria-label="Default select example" oninput="teest(this.value)">
                        <option selected value="">District</option>
                        <?php
                        $dataArray = district::getAllDistrict(); // Retrieve district data using the "getAllDistrict()" method

                        foreach ($dataArray as $district) {
                        ?>

                            <option value="<?php echo $district['district']; ?>"><?php echo $district['district']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-3">
                    <button type="button" class="btn btn-primary bgcol" onclick="AddHospital()">Add Hospital </button>
                </div>

                <!-- <div class="col-3">
                    <button type="button" class="btn btn-primary bgcol" onclick="EditHospital()" data-bs-toggle="modal" data-bs-target="#editHospital">Edit Hospital</button>


                </div> -->

            </div>

        </div>
        <!-- Table body -->
        <div class="container bg-white m-0 p-0" style=" min-height: 500px; overflow: scroll;">
            <table class="table table-hover p-0">
                <thead>
                    <!-- Table row -->
                    <tr class="sticky-top">

                        <th class="col-1 bgcol p-2">Hospital ID</th>
                        <th class="col-3 bgcol p-2">Hospital Name</th>
                        <th class="col-2 bgcol p-2">Address</th>
                        <th class="col-3 bgcol p-2">Contact Number</th>
                        <th class="col-1 bgcol p-2">District </th>
                        <th class="col-1 bgcol p-2">division </th>
                        <th class="col-1 bgcol p-2">View</th>
                        <th class="col-1 bgcol p-2">Edit</th>

                    </tr>
                </thead>

                <tbody id="output">

                    <?php
                    $detailsArray = hospital::showAllHospital();
                    ?>
                    <script>
                        let array = <?php echo json_encode($detailsArray) ?>;
                        let filterArray;
                        showall(array);

                        function showall(array) {
                            const detailsList = document.getElementById("output");
                            detailsList.innerHTML = "";
                            if (array === null || array.length === 0) {
                                var htmlCode = `<tr><td colspan="12" style="text-align: center;color: red;" >No Results Found</td></tr>`;
                                detailsList.innerHTML = htmlCode;
                            } else {
                                array.forEach((item) => {

                                    var htmlCode = ` <tr>
                        <td class="col-1">${item.hospitalId}</td>
                        <td class="col-3">${item.name}</td>
                        <td class="col-2">${item.address}</td>
                        <td class="col-3">${item.contactNumber}</td>                    
                        <td class="col-1">${item.district}</td>
                        <td class="col-1">${item.division}</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#veiwHospital"  onclick="VeiwHospital(${item.hospitalId})">View</button></td>


                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospital"   onclick="editHospital(${item.hospitalId})">Edit</button></td>
                    </tr>`;


                                    var divElement = document.createElement("tr");


                                    divElement.innerHTML = htmlCode;


                                    detailsList.appendChild(divElement);
                                });
                            };

                        }

                        function teest(test) {
                            if (test === "") {
                                array = <?php echo json_encode($detailsArray) ?>;
                                showall(array);
                            } else {
                                array = <?php echo json_encode($detailsArray) ?>;
                                var testValue = test.toLowerCase();
                                array = array.filter((item) => item.district.toLowerCase().includes(testValue));
                                showall(array);
                            }

                        }

                        function teeest(test) {

                            var id = parseInt(test, 10);

                            var testValue = test.toLowerCase();

                            filterArray = array.filter((item) => item.hospitalId === id || item.name.toLowerCase().includes(testValue));


                            const detailsList = document.getElementById("output");
                            detailsList.innerHTML = "";
                            if (filterArray === null || filterArray.length === 0) {
                                var htmlCode = `<tr><td colspan="12" style="text-align: center;color: red;">No Results Found</td></tr>`;
                                detailsList.innerHTML = htmlCode;
                            } else {
                                filterArray.forEach((item) => {

                                    var htmlCode = ` 
                    <tr>
                        <td class="col-1">${item.hospitalId}</td>
                        <td class="col-3">${item.name}</td>
                        <td class="col-2">${item.address}</td>
                        <td class="col-1">${item.contactNumber}</td>
                        <td class="col-1">${item.district}</td>
                        <td class="col-1">${item.division}</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#veiwHospital"  onclick="VeiwHospital(${item.hospitalId})">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHospital"  onclick="editHospital(${item.hospitalId})">Edit</button></td>
                    </tr>`;


                                    var divElement = document.createElement("tr");


                                    divElement.innerHTML = htmlCode;


                                    detailsList.appendChild(divElement);

                                });
                            }


                        }
                    </script>

                </tbody>
            </table>
        </div>
        <br>


    </div>

    <!--add Hospital-->
    <!-- Modal -->
    <form action="../services/Hospitalservices.php" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="addHospital">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addHospital">Add Hospital </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Hospital Name</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                        </div>
                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Address</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                        </div>
                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>District</h6>
                            </div>
                            <div class="col-9">
                                <select name="district" class="form-control-sm form-control-sm" id="district" onchange="functionTest(this.value)">
                                    <option>Select District</option>
                                    <?php
                                    $dataArray = district::getAllDistrict(); // Retrieve district data using the "getAllDistrict()" method

                                    foreach ($dataArray as $district) {
                                    ?>

                                        <option value="<?php echo $district['district']; ?>"><?php echo $district['district']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>DS Division</h6>
                            </div>
                            <div class="col-9">
                                <select name="division" class="form-control-sm form-control-sm" id="divisionDropDown" onchange="getBloodBanks(this.value)">
                                    <option>Select Division</option>
                                </select>
                            </div>

                        </div>
                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Contact No</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" name="contactNumber" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required id="contactNumberInput" oninput="validateMobileNumber(this.value)">
                                <p id="validationResult"></p>
                            </div>
                        </div>
                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Email</h6>
                            </div>
                            <div class="col-9">
                                <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                        </div>

                        <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>


                        <!-- <input type ="hidden" name ="hospitalId" value="<?php echo $hospitalId; ?> "aria-label="Sizing example input" aria-discribedby="inputGroup-sizing-sm" required> -->

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePopup1">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>
        </div>

    </form>


    <!--Save Popup AddHospital-->
    <!-- Modal -->
    <!--    <div class="modal fade" id="savePopup1" tabindex="-1" aria-labelledby="savePopup1Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="savePopup1Label1"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
    
                    <div class="modal-body">
    
                        <h1>Do you want to save the changes?</h1>
    
                    </div>
                    <div class="modal-footer">
    
                        <button type="button" class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger">Don't Save </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="AddHospital()">cancel</button>
    
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--Delete Popup AddHospital-->
    <!-- Modal -->
    <!--<div class="modal fade" id="deletePopup1" tabindex="-1" aria-labelledby="deletePopup1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deletePopup1Label1"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
    
                <div class="modal-body">
    
                    <h1>Do you want to delete the changes?</h1>
    
                </div>
                <div class="modal-footer">
    
                    <button type="button" class="btn btn-primary">No </button>
                    <button type="button" class="btn btn-danger">Yes </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="AddHospital()">cancel</button>
    
                </div>
            </div>
        </div>
    </div>
    </div>-->





    <!--edit Hospital -->
    <!-- Modal -->
    <form action="../services/Hospitalservices.php" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="editHospital">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editHospital">Edit Hospital </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="hoapitlEdit">



                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePopup1">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>
        </div>

    </form>


    <!--Save Popup edit Hospital-->
    <!-- Modal -->
    <div class="modal fade" id="savePopup3" tabindex="-1" aria-labelledby="savePopup3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="savePopup3Label1"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <h1>Do you want to save the changes?</h1>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">Save </button>
                    <button type="button" class="btn btn-danger">Don't Save </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="EditHospitalDetails()">cancel</button>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Delete Popup editbloodbank-->
    <!-- Modal -->
    <div class="modal fade" id="deletePopup3" tabindex="-1" aria-labelledby="deletePopup3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deletePopup3Label1"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">

                        <h1>Do you want to delete the changes?</h1>

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary">No </button>
                        <button type="button" class="btn btn-danger">Yes </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="EditHospitalDetails()">cancel</button>

                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Modal View Hospital Details-->
    <!-- Modal -->
    <div class="modal fade" id="veiwHospital">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="veiwHospital">View Hospial Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="hospitalVeiw">

                    <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>

                </div>

                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#savePopup2">Save </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePopup2">Delete</button> -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                </div>
            </div>
        </div>
    </div>




    <!--Save Popup view Hospital-->
    <!-- Modal -->
    <div class="modal fade" id="savePopup2" tabindex="-1" aria-labelledby="savePopup2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="savePopup2Label1"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <h1>Do you want to save the changes?</h1>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">No </button>
                    <button type="button" class="btn btn-danger">Yes </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="OpenHospitalDetails()">Cancel</button>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Delete Popup view Hospital-->
    <!-- Modal -->
    <div class="modal fade" id="deletePopup2" tabindex="-1" aria-labelledby="deletePopup2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deletePopup2Label1"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <h1>Do you want to delete the changes?</h1>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">No </button>
                    <button type="button" class="btn btn-danger">Yes </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="OpenHospitalDetails()">cancel</button>


                </div>
            </div>
        </div>
    </div>
    </div>




    <?php
    // put your code here
    ?>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../JS/Admindash.js"></script>
</body>

</html>