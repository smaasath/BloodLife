<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
$token = "12b378738a1a6be3bacea473fe9e3d2fbfce8e678d514e1d943";

require_once '../classes/Bloodtable.php';
require_once '../classes/district.php';

use classes\Bloodtable;
use classes\hospital;
use classes\district;
?>
<?php
$bloodbankid = 1;
?>
<?php if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
        echo 'enter all values!!';
    } elseif ($_GET['status'] == 2) {
        echo '<script>
            console.log("saalu");
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire(
                    "Good job!",
                    "You clicked the button!",
                    "success"
                );
            });
        </script>';
    } elseif ($_GET['status'] == 3) {
        echo 'enter 3';
    } elseif ($_GET['status'] == 4) {
        echo 'enter 4';
    }
} ?>
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

    <div class="container">
        <div class="row">
            <div class="card1 col p-3 m-1">
                <div class="row">

                    <div class="col-3 p-0 m-0">
                        <div class="container p-3">
                            <div class="stockcon" style="height: 120px;background-color: white">
                                <h4 class="blood1">A+</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px" />
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3">
                            <div class="stockcon" style="height: 120px;background-color: white">
                                <h4 class="blood1">A-</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px" />
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3">
                            <div class="stockcon" style="height: 120px;background-color: white">
                                <h4 class="blood1">B+</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px" />
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3">
                            <div class="stockcon" style="height: 120px;background-color: white">
                                <h4 class="blood1">B-</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px" />
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>

                    <div class="col-3 p-0 m-0">
                        <div class="container p-3">
                            <div class="stockcon" style="height: 120px;background-color: white">
                                <h4 class="blood1">AB+</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px" />
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3">
                            <div class="stockcon" style="height: 120px;background-color: white">
                                <h4 class="blood1">AB-</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px" />
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3">
                            <div class="stockcon" style="height: 120px;background-color: white">
                                <h4 class="blood1">O+</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px" />
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="container p-3">
                            <div class="stockcon" style="height: 120px;background-color: white">
                                <h4 class="blood1">O-</h4>
                                <div style="display: flex;flex-direction: row">
                                    <img src="../Images/blood-bag.png" height="30px" width="30px" style="margin-left: 10px" />
                                    <h5 style="padding-left: 10px">10L</h5>
                                </div>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- table -->
            <div class="p-5">


                <div class="rounded-top-4 p-0 border border-dark-subtle">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="input-group rounded p-3">
                                <input type="search" class="form-control rounded" placeholder="Search ID" aria-label="Search" aria-describedby="search-addon" oninput="teeest(this.value)">

                            </div>
                        </div>


                        <div class="col-2">
                            <select class="form-select" aria-label="Default select example" oninput="teest(this.value)">
                                <option selected>BloodGroup</option>
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="O+">O+</option>
                                <option value="AB+">AB+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                        <div class="col-1">
                            <button type="button" class="addbtn" style="margin-left: 400px; border-radius:5px" data-bs-toggle="modal" data-bs-target="#addModal">Add+</button>
                        </div>


                    </div>


                </div>
                <!-- Table body -->
                <div class="container bg-white m-0 p-0" style=" max-height: 373px; overflow: scroll;">
                    <table class="table table-hover p-0">

                        <!-- Table row -->


                        <tr class="sticky-top">

                            <th class="col-1 bgcol p-2" style="text-align: center;">BloodID</th>
                            <th class="col-2 bgcol p-2" style="text-align: center;">BloodGroup</th>
                            <th class="col-2 bgcol p-2" style="text-align: center;">ExpiryDate</th>
                            <!-- <th class="col-2 bgcol p-2" style="text-align: center;">Location</th> -->
                            <th class="col-2 bgcol p-2" style="text-align: center;">Quantity(ml)</th>
                            <th class="col-2 bgcol p-2" style="text-align: center;">Status</th>
                            <th class="col-1 bgcol p-2" style="text-align: center;">Action</th>
                            <td class="col-1">



                        </tr>



                        <tbody id="output">

                            <?php
                            $detailsArray = Bloodtable::showBloodPackets();
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
                        <td class="col-1">${item.bloodId}</td>
                        <td class="col-3">${item.bloodGroup}</td>
                        <td class="col-2">${item.expiryDate}</td>                  
                        <td class="col-1">${item.quantity}</td>
                        <td class="col-1">${item.status}</td>
                        <td class="col-1">
                                        <button type="button" 
                                                  class="btn btn-primary" 
                                                  data-bs-toggle="modal"    
                                                  onclick="OpenHospitalDetails()">
                                          View
                                        </button>
                        </td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal"  onclick="EditHospitalDetails()">Edit</button></td>
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
                                        array = array.filter((item) => item.bloodGroup.toLowerCase().includes(testValue));
                                        showall(array);
                                    }

                                }

                                function teeest(test) {

                                    var id = parseInt(test, 10);

                                    var testValue = test.toLowerCase();

                                    filterArray = array.filter((item) => item.bloodId === id);


                                    const detailsList = document.getElementById("output");
                                    detailsList.innerHTML = "";
                                    if (filterArray === null || filterArray.length === 0) {
                                        var htmlCode = `<tr><td colspan="12" style="text-align: center;color: red;">No Results Found</td></tr>`;
                                        detailsList.innerHTML = htmlCode;
                                    } else {
                                        filterArray.forEach((item) => {

                                            var htmlCode = ` 
                    <tr>
                    <td class="col-1">${item.bloodId}</td>
                        <td class="col-3">${item.bloodGroup}</td>
                        <td class="col-2">${item.expiryDate}</td>
                        <td class="col-3">${item.expiryDate}</td>                    
                        <td class="col-1">${item.quantity}</td>
                        <td class="col-1">${item.status}</td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal"  onclick="OpenHospitalDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal"  onclick="EditHospitalDetails()">Edit</button></td>
                    </tr>`;


                                            var divElement = document.createElement("tr");


                                            divElement.innerHTML = htmlCode;


                                            detailsList.appendChild(divElement);

                                        });
                                    }


                                }
                            </script>

                        </tbody>




                        <!-- Table row -->

                    </table>

                </div>
                <br>
                <!-- Table Head -->

            </div>

            <!-- add-->
            <form action="../services/bloodpackets.php" method="POST">
                <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-modal="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="addModalLabel">ADD DETAILS</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="bloodpackets.php">
                                    <label for="BloodGroup">BloodGroup:</label>
                                    <select class="form-select" name="bloodgroup" aria-laquantitybel="Default select example" required>
                                        <option value="" selected>Select your Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select><br>
                                    <label for="Quantity">Quantity(ml):</label>
                                    <input type="number" class="form-control" name="quantity" oninput="sanitizeQuantity(this);" maxlength="3" required><br>
                                    <label for="ExpiryDate">Expiry Date:</label>
                                    <input type="date" class="form-control" name="expiryDate" oninput="sanitizeExpiryDate(this)" required><br>
                                    <input type="hidden" value="<?php echo $token ?>" name="token">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="savebtn">Save</button>
                                <button type="button" class="editbtn" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--
        <div class="modal" tabindex="-1" id ="addsave">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Do you want to save ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Save changes</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>-->




            <!--end add-->
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
                                    </div><br>
                                    <div class="stocky">
                                        <label for="BloodGroup">BloodGroup:</label>
                                        <span>O+</span>
                                    </div><br>
                                    <div class="stocky">
                                        <label for="Location">Location:</label>
                                        <span>JAFFNA</span>
                                    </div><br>
                                    <div class="stocky">
                                        <label for="Quantity">Quantity:</label>
                                        <span>2L</span>
                                    </div><br>
                                    <div class="stocky">
                                        <label for="Status">Status:</label>
                                        <span>Available</span>
                                    </div><br>
                                    <div class="stocky">
                                        <label for="ExpiryDate">ExpiryDate:</label>
                                        <span>2023-10-02</span>
                                    </div><br>
                                    <div class="stocky">
                                        <label for="Bloodbank">Bloodbank:</label>
                                        <span>Venus</span>
                                    </div><br>
                                    <div class="stocky">
                                        <label for="BloodbankID">BloodbankID:</label>
                                        <span>BB001</span>
                                    </div><br>
                                    <div class="stocky">
                                        <label for="Address">Address:</label>
                                        <span>100,JAFFNA</span>
                                    </div><br>
                                    <div class="stocky">
                                        <label for="Contact No">Contact No:</label>
                                        <span>0214578965</span>
                                    </div><br>
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

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script src="sweetalert2.all.min.js"></script>

                <script>
                    function sanitizeQuantity(inputField) {
                        inputField.value = inputField.value.replace(/\D/g, '');
                        if (inputField.value.length > 3) {
                            inputField.value = inputField.value.slice(0, 3);
                        }
                    }

                    function sanitizeExpiryDate(inputField) {
                        var today = new Date().toISOString().split('T')[0]; // Get today's date in the format YYYY-MM-DD

                        if (inputField.value < today) {
                            inputField.value = today; // Set the input value to today if a past date is selected
                        }
                    }
                </script>
</body>

</html>