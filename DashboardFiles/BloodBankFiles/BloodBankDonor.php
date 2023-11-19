<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php

$token = "12b378738a1a6be3bacea473fe9e3d2fbfce8e678d514e1d943";
require_once '../classes/Donor.php';
require_once '../classes/User.php';
require_once '../classes/district.php';



use classes\User;
use classes\Donor;
use classes\district;
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
    <!-- body start -->

    <div class="mt-5 m-3 mb-1" style="color:gray;">
        <h5>Donor</h5>
        <div class="row  align-items-right justify-content-center">
            <img class="d-none d-xl-block" src="../Images/donor1.jpg" style="height:250px;width:400px;align-items: center; " />
        </div>
    </div>

    <!-- Page content -->
    <div class="container p-2">
        <!-- Search and Add Donor section -->
       
        <div class="row bg-white m-1 pt-0  align-items-center justify-content-center rounded-5" style="height: 500px;">
            <div class="container">
                <div class="rounded-top-4 p-0 border border-dark-subtle">
                    <div class="row align-items-center">
                        <!-- Search input -->
                        <div class="col-3">
                            <div class="input-group rounded p-3">
                                <input type="search" class="form-control rounded" placeholder="DonorID" aria-label="Search" aria-describedby="search-addon">
                            </div>
                        </div>

                        <!-- Blood Group filter -->
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

                        <!-- Add Donor button -->
                       

                <!-- Donor table -->










                <!-- Table body -->
                <div class="container bg-white m-0 p-0" style=" max-height: 373px; overflow: scroll;">
                    <table class="table table-hover p-0">

                        <!-- Table row ----->


                        <!-- Campaign table Heading-->

                        <thead>
                            <tr class="sticky-top">
                                <th class="col-1 bg-secondary text-dark p-2" style="text-align: center;">DonorID</th>
                                <th class="col-1 bg-secondary text-dark p-2" style="text-align: center;">Name</th>
                                <th class="col-1 bg-secondary text-dark p-2" style="text-align: center;">Blood Group</th>
                                <th class="col-1 bg-secondary text-dark p-2" style="text-align: center;">Contact No</th>
                                <th class="col-1 bg-secondary text-dark p-2" style="text-align: center;">nic</th>
                                
                                <th class="col-1 bg-secondary text-dark p-2" style="text-align: center;">Available</th>
                                <th class="col-1 bg-secondary text-dark p-2" style="text-align: center;">Last Donation</th>
                                <th class="col-1 bg-secondary text-dark p-2" style="text-align: center;">Edit</th>
                                <th class="col-1 bg-secondary text-dark p-2" style="text-align: center;">View</th>
                            </tr>
                        </thead>

                        <!---Table body Details----------->


                        <table class="table">

                            <tbody id="output">
                                <?php
                                $user = new User(null, null, null, null, $token, null, null, null, null);
                                $user->validateToken();
                                $requestArray = Donor::getAllDonor($user->getBloodBankId());
                                ?>

                                <script>
                                    let array = <?php echo json_encode($requestArray) ?>;
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
                        <td class="col-1">${item.donorId}</td>
                        <td class="col-1">${item.name}</td>
                         <td class="col-1">${item.contactNumber}</td>                    
                        <td class="col-1">${item.availability }</td>
                        <td class="col-1">${item.medicalReport }</td>
                     
                       
                      
                    
                        <td class="col-1"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="EditDonor(${item.donorId})" >Edit</button> </td>

                        

                        <td class="col-1"> <a href="../Dashboards/BloodBankDashboard.php?page=CampaignView&&camid=${item.campaignId}" style="text-decoration: none;"><button type="button" class="btn btn-success"> View </button></a></td>



                                                </tr>`;


                                                var divElement = document.createElement("tr");


                                                divElement.innerHTML = htmlCode;


                                                detailsList.appendChild(divElement);
                                            });
                                        };

                                    }

                                    function DistrictFilter(test) {
                                        if (test === "") {
                                            array = <?php echo json_encode($requestArray) ?>;
                                            showall(array);
                                        } else {
                                            array = <?php echo json_encode($requestArray) ?>;
                                            var testValue = test.toLowerCase();
                                            array = array.filter((item) => item.district.toLowerCase().includes(testValue));
                                            showall(array);
                                        }

                                    }

                                    function searchfilter(test) {

                                        var id = parseInt(test, 10);

                                        var testValue = test.toLowerCase();

                                        filterArray = array.filter((item) => item.campaignId === id || item.Title.toLowerCase().includes(testValue));


                                        const detailsList = document.getElementById("output");
                                        detailsList.innerHTML = "";
                                        if (filterArray === null || filterArray.length === 0) {
                                            var htmlCode = `<tr><td colspan="12" style="text-align: center;color: red;">No Results Found</td></tr>`;
                                            detailsList.innerHTML = htmlCode;
                                        } else {
                                            filterArray.forEach((item) => {

                                                var htmlCode = ` 
                            <tr>
                            <td class="col-1">${item.donorId}</td>
                        <td class="col-1">${item.name}</td>
                         <td class="col-1">${item.contactNumber}</td>                    
                        <td class="col-1">${item.availability }</td>
                        <td class="col-1">${item.medicalReport }</td>
                        <td class="col-1"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="EditDonor(${item.donorId})" >Edit</button> </td>
                        

                        <td class="col-1"> <a href="../Dashboards/BloodBankDashboard.php?page=CampaignView&&camid=${item.campaignId}" style="text-decoration: none;"><button type="button" class="btn btn-success"> View </button></a></td>
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

                </table>
            </div>
        </div>
    </div>
    </div>












    <!----------------------------EditDonorDtails------------------------------------------------------------------------------->
    <!-- Modal -->
    <form action="../services/DonorEditService.php" method="POST" enctype="multipart/form-data">
        <!--<form name="donorForm" action="../services/DonorAddService.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
            <!-- Your form content here -->



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModal">Donor Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="DonorEdit"></div>
                        <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Donor</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </form>
    <!--AddDonorDetails---------------------------------------------------------->













    <!-- --------------------------------------Donor View----------------------------------------------------------------------- -->
    <!-----------1st pop-up------------------------Campaign Details---------------->
    <div class="modal fade" id="CampaignEdit">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="Save">View Donor Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <strong>Hospital ID:</strong>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">HS001</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <strong>Hospital Name:</strong>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">Jaffna Central Hospital</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <strong>Address:</strong>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">Hospital Road, Jaffna</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <strong>District:</strong>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">Jaffna</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <strong>Phone No:</strong>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">077 1028754</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <strong>Mobile:</strong>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">(098) 765-4321</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Email:</strong>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-muted mb-0">CentralHospitalJaffna@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#OrganizerEdit">Donation Details</button>
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


                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">DonorID</th>
                                <th scope="col">Last Donation Date</th>
                                <th scope="col">Donation Type</th>
                            </tr>
                        </thead>
                        <tbody>

                            <th scope="row">1</th>
                            <td>D004</td>
                            <td>07/12/2022</td>
                            <td>BloodBank</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="EditCamp()">Back</button>

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