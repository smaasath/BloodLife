<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php 
$bloodBankId = 1;

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
        <!-- nav bar end -->

        <!-- body start -->
        <h1> BL Donor </h1>

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
                        <td class="col-1"><button type="button" class="btn btn-danger" onclick="DonorEdit()" data-bs-toggle="modal" data-bs-target="#DonorEdit">
                                Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-success" onclick="EditCamp()">View</button></td>

                    </tr>

                    <tr>
                        <td class="col-1">D001</td>
                        <td class="col-2">Nelax</td>
                        <td class="col-1">O+</td>
                        <td class="col-1">Jaffna</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1">available</td>
                        <td class="col-1">06/07/2023</td>
                        <td class="col-1"><button type="button" class="btn btn-danger" onclick="DonorEdit()" data-bs-toggle="modal" data-bs-target="#DonorEdit">
                                Edit</button></td>
                        <td class="col-1"><button type="button" class="btn btn-success" onclick="EditCamp()">View</button></td>

                    </tr>

                </table>

                <!-----------------------------AddDonorDtails------------------------------------------------------------------------------->
                <!-- Modal -->
                <form action="../services/DonorAddService.php" method="POST" enctype="multipart/form-data">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Donor Details</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Name</h6>
                                        </div>
                                        <div class="col-9">
                                            <input type="text"  name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>


                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Blood Group</h6>
                                        </div>
                                        <div class="col-9">
                                            <select class="form-control form-control-lg" name="bloodGroup">
                                                <option selected>Select your Blood Group</option>
                                                <option value="A+">A+</option>
                                                <option value="A-"> A-</option>
                                                <option value="B+"> B+</option>
                                                <option value="B-"> B-</option>
                                                <option value="O+"> O+</option>
                                                <option value="O-"> O-</option>
                                                <option value="AB+"> AB+</option>
                                                <option value="AB-"> AB-</option>

                                            </select>
                                        </div>
                                    </div>


                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Date Of Birth</h6>
                                        </div>
                                        <div class="col-9">
                                            <input type="date"  name="dob" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>



                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Phone No</h6>
                                        </div>
                                        <div class="col-9">
                                            <input type="text"  name="contactNumber" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>


                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Location</h6>
                                        </div>
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-6">
                                                    <select name="district" class="form-control form-control-lg" id="district" onchange="functionTest(this.value)">
                                                        <option>Select District</option>
                                                        <?php
                                                        require '../classes/district.php';

                                                        use classes\district;

$dataArray = district::getAllDistrict(); // Retrieve district data using the "getAllDistrict()" method

                                                        foreach ($dataArray as $district) {
                                                            ?>

                                                            <option  value="<?php echo $district['district']; ?>"><?php echo $district['district']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select> 
                                                </div>
                                                <div class="col-6">

                                                    <select name="division" class="form-control form-control-lg" id="divisionDropDown" onchange="getBloodBank(this.value)">
                                                        <option>Select Division</option> 

                                                    </select>  
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>NIC</h6>
                                        </div>
                                        <div class="col-9">
                                            <input type="text"  name="nic" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>




                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>No of Donation</h6>
                                        </div>
                                        <div class="col-9">
                                            <input type="number"  name="noOfDonation" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>


                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Coin Value</h6>
                                        </div>
                                        <div class="col-9">
                                            <input type="number"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>


                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Donation Last Date</h6>
                                        </div>
                                        <div class="col-9">
                                            <input type="date"  name="donationLastDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>


                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Medical Report</h6>
                                        </div>
                                        <div class="col-9">
                                            <input class="form-control" type="file" name="medicalReport" accept="image/jpeg">
                                            <p style="font-size: 9px; color: red;">only jpeg</p>
                                        </div>
                                    </div>


                                    <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Availability</h6>
                                        </div>
                                        <div class="col-9">
                                            <select class="form-control form-control-lg" name="availability">
                                                <option selected>Select your Blood Group</option>
                                                <option value="Availabile">Availabile</option>
                                                <option value="Notavailable"> Notavailable</option>


                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="bloodBankId" value="<?php echo $bloodBankId; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" >Add Donor</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
                <!--AddDonorDetails---------------------------------------------------------->










                <!-- --------------------------------------Campaign Edit------------------------------------------------------------------------ -->
                <!-----------1st pop-up------------------------Campaign Details---------------->
                <div class="modal fade" id="DonorEdit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Donor Edit Details</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>First Name</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Last Name</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Blood Group</h6>
                                    </div>
                                    <div class="col-9">
                                        <select class="form-control form-control-lg">
                                            <option selected>Select your Blood Group</option>
                                            <option value="1">A+</option>
                                            <option value="2"> </option>
                                            <option value="3"> </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Disease</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Age</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text "  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Phone No</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>NIC</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>District</h6>
                                    </div>
                                    <div class="col-9">
                                        <select class="form-control form-control-lg">
                                            <option selected>Select your District</option>
                                            <option value="1">Mannar</option>
                                            <option value="2"> </option>
                                            <option value="3"> </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>DS Division</h6>
                                    </div>
                                    <div class="col-9">
                                        <select class="form-control form-control-lg">
                                            <option selected>Select your District</option>
                                            <option value="1"> </option>
                                            <option value="2"> </option>
                                            <option value="3"> </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>No Of Donation</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>coin Value</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Donation Last Date</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="date"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>availability</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                            </div>



                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary">delete</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Back</button>
                                <button type="button" class="btn btn-secondary" >Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Camp Edit-->


                <!-- --------------------------------------Donor View----------------------------------------------------------------------- -->
                <!-----------1st pop-up------------------------Campaign Details---------------->
                <div class="modal fade" id="CampaignEdit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Donor View Details</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="modal fade" id="ChampView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="Save">View</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">





                                                <form action="/action_page.php">
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
                                                </form>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                                                    Organizer Details
                                                </button>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                                                    Donor Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


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
                                </form>
                            </div>


                            <div class="modal-footer">
                                <button type="button"  class="btn btn-info">Delete</button>
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
