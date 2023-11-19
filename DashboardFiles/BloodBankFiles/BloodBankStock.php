<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
$token = "12b378738a1a6be3bacea473fe9e3d2fbfce8e678d514e1d943";


require_once '../classes/Bloodtable.php';
require_once '../classes/district.php';
require_once '../classes/User.php';

use classes\Bloodtable;
use classes\hospital;
use classes\district;
use classes\User;

$user = new User(null, null, null, null, $token, null, null, null, null);
$validateToken = $user->validateToken();
$bloodBankId = $user->getBloodBankId();
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
                        <b>General Hospital</b>
                        <p style="font-size: 10px;">Hospital</p>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!-- nav bar end -->

    <!-- body start -->
    <div class="mt-5 m-3 mb-1" style="color:gray;">
        <h5>Blood Stock</h5>
    </div>
    <div class="row bg-white m-2 pt-0  align-items-center justify-content-center rounded-5" style="height: 320px;">

        <div class="container">
            <div class="row p-4 pt-2">
                <div class="card1 col-6 p-3 m-0" style=" margin-left:50px">
                    <div class="row">
                        <?php
                        $blood = new Bloodtable(null, null, null, null, $bloodBankId, null);
                        $QArray = $blood->totalQuantityarray();

                        foreach ($QArray as $QuantityArray) {


                        ?>

                            <div class="col-3 p-0 m-0">
                                <div class="container p-2 pb-5 pt-3">
                                    <div class="stockcon" style="height: 100px;background-color: <?php echo ($QuantityArray["totalQuantity"] <= 2000) ? "#FAD4D4" : "white"; ?>;width:120px;">
                                        <h4 class="blood1"><?php echo $QuantityArray["bloodGroup"] ?></h4>
                                        <div style="display: flex;flex-direction: row">
                                            <img src="../Images/blood-bag-removebg-preview.png" height="20px" width="20px" style="margin-left: 10px" />
                                            <h5 style=" padding-left:15px; font-size: 18px"><?php echo $QuantityArray["totalQuantity"] ?>ml</h5><br>

                                        </div>
                                        <h6 class="stocklevel"><?php echo ($QuantityArray["totalQuantity"] <= 2000) ? " <img src='../Images/icons8-alarm-60-removebg-preview.png'  height='20px' width='20px'/>" : ""; ?> </h6>
                                        <br>
                                        <br>

                                    </div>
                                </div>
                            </div>

                        <?php
                        } ?>

                    </div>

                </div>
                <div class="col-6">
                    <div class="row  align-items-center justify-content-center">
                        <img class="d-none d-xl-block" src="../Images/stockalert.jpg" style="height:300px;width:300px;align-items: center; " />
                    </div>
                </div>


            </div>


            <!-- table -->
            <br>
            <div class="row bg-white m-3 pt-0  align-items-center justify-content-center rounded-5" style="height: 500px;">


                <div class="rounded-top-4 p-0 border border-dark-subtle">
                    <div class="row align-items-center" style="display: flex;">
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
                            <button type="button" class="btn btn-danger" style="display:flex;border-radius:5px;gap: 10px;margin-left: 500px;" data-bs-toggle="modal" data-bs-target="#addModal">ADD<i class="fa fa-tint" style="font-size: 1.3em; "></i></button>
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




                        </tr>



                        <tbody id="output">

                            <?php


                            $detailsArray = Bloodtable::showBloodPackets($bloodBankId);
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
                        
                        <td class="col-1"><i class="fas fa-edit fa-lg" style="color: #f21818;" data-bs-toggle="modal" data-bs-target="#editModal"  onclick="EditBloodpackets(${item.bloodId})"></i></td>
                        
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
                        
                        <td class="col-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal" onclick="EditBloodpackets(${item.bloodId})">Edit</button></td>
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
            <!--edit -->
            <form action="../services/Editbloodpackets.php" method="POST" enctype="multipart/form-data">
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="view">EDIT DETAILS</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="editbloodpackets">

                                </div>
                                <input type="hidden" value="<?php echo $token ?>" name="token">
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