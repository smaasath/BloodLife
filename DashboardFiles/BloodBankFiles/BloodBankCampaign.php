<?php
require_once '../classes/campaign.php';

use classes\campaign;

$token = "12b378738a1a6be3bacea473fe9e3d2fbfce8e678d514e1d943";
?>

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


    <!--
       <div class="container">
            <img src="https://assets.telegraphindia.com/telegraph/2022/Jan/1643137545_blood.jpg" alt="Blood" width="100%" height="200">



            <div class="centered" style="font-size:3vw" ><br><strong>.</strong></div>

        </div>
        -->

    <center>
        <h1> BL Campaign </h1>
    </center>

    <div class="p-5">


        <!-- <div class="rounded-top-4 p-0 border border-dark-subtle">
            <div class="row align-items-center">
        


               // <?php
                    // if (isset($_GET["status"]) && !empty($_GET["status"])) {
                    // $status = campaign::decryptedValue($_GET["status"]);


                    // }
                    // 
                    ?>
            -->
        <div class="rounded-top-4 p-0 border border-dark-subtle">
            <div class="row align-items-center">
                <!-- Search input -->
                <div class="col-3">
                    <div class="input-group rounded p-3">
                        <input type="search" class="form-control rounded" placeholder="campaignID" aria-label="Search" aria-describedby="search-addon">
                    </div>
                </div>

                <!-- Blood Group filter -->
                <!--
                    <div class="col-3">
                        <select class="form-control form-control-lg" name="bloodGroup">
                            <option selected>Select your Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
        -->




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
                    <button type="button" class="btn btn-primary" onclick="AddCampaign()">Add Campaign</button>





                </div><br>
                <!-- Table body -->
                <div class="container bg-white m-0 p-0" style=" max-height: 373px; overflow: scroll;">
                    <table class="table table-hover p-0">

                        <!-- Table row -->


                        <!-- Donor table -->

                        <thead>
                            <tr class="sticky-top">
                                <th class="col-1 bg-secondary text-dark p-2">CampaignID</th>
                                <th class="col-1 bg-secondary text-dark p-2">Name</th>
                                <th class="col-1 bg-secondary text-dark p-2">StartDate</th>
                                <th class="col-1 bg-secondary text-dark p-2">EndDate</th>
                                <th class="col-1 bg-secondary text-dark p-2">Status</th>

                                <th class="col-1 bg-secondary text-dark p-2">Edit</th>
                                <th class="col-1 bg-secondary text-dark p-2">Review</th>
                                <th class="col-1 bg-secondary text-dark p-2">View</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!--  <tr class="sticky-top">

<th class="col-1 bgcol p-2">CampaignID</th>
<th class="col-2 bgcol p-2">Name</th>
<th class="col-1 bgcol p-2">Date</th>
<th class="col-1 bgcol p-2">Location</th>
<th class="col-2 bgcol p-2">Contact No</th>
<th class="col-1 bgcol p-2">No of.Donors</th>
<th class="col-1 bgcol p-2">Edit</th>
<th class="col-1 bgcol p-2">Review</th>
<th class="col-1 bgcol p-2">View</th>

</tr>
                    -->







                            <table class="table">

                                <tbody>
                                    <?php
                                    $requestArray = campaign::getAllCampaign();
                                    foreach ($requestArray as $donorArray) {
                                    ?>
                                        <tr>
                                            <td class="col-1"><?php echo $donorArray["campaignId"]; ?></td>
                                            <td class="col-1"><?php echo $donorArray["Title"]; ?></td>
                                            <td class="col-1"><?php echo $donorArray["startDate"]; ?></td>
                                            <td class="col-1"><?php echo $donorArray["endDate"]; ?></td>
                                            <td class="col-1"><?php echo $donorArray["status"]; ?></td>
                                            <td class="col-1">
                                                <button type="button" class="btn btn-danger editbtn" onclick="EditCamp()" data-bs-toggle="modal" data-bs-target="#DonorEdit">
                                                    Edit
                                                </button>
                                            </td>

                                            <td class="col-1">
                                                <button type="button" class="btn btn-success" onclick="ReviewChamp()">
                                                    Review
                                                </button>
                                            </td>

                                            <td class="col-1">
                                                <button type="button" class="btn btn-success view_Edit" onclick="ViewChamp()">
                                                    View
                                                </button>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>




                            <!--


                        <tr class="sticky-top">

                            <th class="col-1 bgcol p-2">CampaignID</th>
                            <th class="col-2 bgcol p-2">Name</th>
                            <th class="col-1 bgcol p-2">Date</th>
                            <th class="col-1 bgcol p-2">Location</th>
                            <th class="col-2 bgcol p-2">Contact No</th>
                            <th class="col-1 bgcol p-2">No of.Donors</th>
                            <th class="col-1 bgcol p-2">Edit</th>
                            <th class="col-1 bgcol p-2">Review</th>
                            <th class="col-1 bgcol p-2">View</th>

                        </tr>


                        <tr>
                            <td class="col-1">C001</td>
                            <td class="col-2">Bloody Sweet</td>
                            <td class="col-1">03/09/2023</td>
                            <td class="col-1">Jaffna</td>
                            <td class="col-2">0755701765</td>
                            <td class="col-1">67</td>
                            <td class="col-1"><button type="button" class="btn btn-danger" onclick="EditCamp()">Edit</button></td>
                            <td class="col-1"><button type="button" class="btn btn-secondary" onclick="ReviewChamp()" data-bs-toggle="modal" data-bs-target="#Review">Review</button></td>
                            <td class="col-1"><button type="button" class="btn btn-success" onclick="ViewChamp()">View</button></td>

                        </tr>
                        -->


                            <!-- Table row -->

                    </table>

                </div>

                <!-- Table Head -->


            </div>
        </div>

        <!-- Table -->
        <!-------------------------------------------->






        <!--CampaignAddDetails-->
        <!-- Modal -->
        <form action="../services/CampaignAddService.php" method="POST" enctype="multipart/form-data">


            <div class="modal fade" id="AddCampaign">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="AddCampaign"><span class="fw-bold">Campaign Details</span></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Campaign Name</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="Title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>


                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>start Date</h6>
                                </div>
                                <div class="col-9">
                                    <input type="date" name="startDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>


                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>End Date</h6>
                                </div>
                                <div class="col-9">
                                    <input type="date" name="endDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>


                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text " name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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

                                                    <option value="<?php echo $district['district']; ?>"><?php echo $district['district']; ?></option>
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



                        </div>

                        <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                Organizer Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!--CampaignAddDetails-

            <td class="col-1">
    <button type="button" class="btn btn-success view-details-btn" data-toggle="modal" data-target="#campaignDetailsModal" data-campaign-id="<?php echo $donorArray['campaignId']; ?>">
        View Details
    </button>
</td>



        </form>

                                            -->





            <!-- --------------------------------------Campaign Edit------------------------------------------------------------------------ -->
            <!-----------1st pop-up------------------------Campaign Details-----




        <div class="modal fade" id="CampaignEdit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Campaign Edit Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                                            -
                    <div class="modal fade" id="CampaignEdit" tabindex="-1" role="dialog" aria-labelledby="EditCampaignPopupLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditCampaignPopupLabel">Edit Campaign</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>





<form action="CampaignEditService" method="POST">



                    <div class="modal-body">
                <div class="row align-items-center pb-3">
                    <div class="col-3">
                        <h6>Campaign Name</h6>
                    </div>
                    <div class="col-9">
                        <input type="text" name="Title" id="Title "  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                    </div>
                </div>
                
                <div class="row align-items-center pb-3">
                    <div class="col-3">
                        <h6>Start Date</h6>
                    </div>
                    <div class="col-9">
                        <input type="date" name="startDate" id="startDate"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                    </div>
                </div>
                
                <div class="row align-items-center pb-3">
                    <div class="col-3">
                        <h6>End Date</h6>
                    </div>
                    <div class="col-9">
                        <input type="date" name="endDate"id="endDate"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                    </div>
                </div>
            </div>
            </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" name="updateCampaign" class="btn btn-primary " data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#OrganizerEdit">Organizer Details</button>
                    </div>
                </div>
            </div>
       
        -Camp Edit-- >


<!--
<script>   


$(document).ready(function(){

$('.editbt').on('click',function(){
$('CampaignEdit').model('show');

$tr =$(this).closest('tr');
var data=$tr.children('td').map(function(){
return $(this).text();

}).get();

console.log(data);

$('#Title').val(data[0]);
$('#startDate').val(data[1]);
$('#endDate').val(data[2]);
//$().val(data[3 ]);






});



})
</script>
-->


            <!-- View Campaign Modal --
        <div class="modal fade" id="ViewCampaignDetailsModal" tabindex="-1" role="dialog" aria-labelledby="ViewCampaignDetailsLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ViewCampaignDetailsLabel">View Campaign Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Display campaign details here --
                <div>
                    <h6>Campaign Name</h6>
                    <p id="ViewTitle"></p>
                </div>
                <div>
                    <h6>Start Date</h6>
                    <p id="ViewStartDate"></p>
                </div>
                <!-- Add more fields for displaying campaign details here --
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
    $('. getCampaignDetails').on('click', function(){
        $('#ViewCampaignDetailsModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.find('td').map(function(){
            return $(this).text();
        }).get();
        // Populate the modal with campaign details
        $('#ViewTitle').text(data[1]);
        $('#ViewStartDate').text(data[2]);
        // Add more fields for displaying campaign details as needed
    });
});
</script>

-->
            <!-- xample-
<div class="modal fade" id="ViewCampaignDetailsModal" tabindex="-1" role="dialog" aria-labelledby="ViewCampaignDetailsLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ViewCampaignDetailsLabel">View Campaign Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center pb-3">
                    <div class="col-3">
                        <h6>CampaignId</h6>
                    </div>
                    <div class="col-9">
                        <input type="text" name="ViewTitle" id="ViewTitle" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-3">
                        <h6>CampaignName</h6>
                    </div>
                    <div class="col-9">
                        <input type="text" name="ViewCampaignName" id="ViewCampaignName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
                    </div>
                </div>
                <!-- Add more fields for viewing campaign details here --
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

-->





            <!-- Edit Campaign Modal -->
            <div class="modal fade" id="EditCampaignDetailsModal" tabindex="-1" role="dialog" aria-labelledby="EditCampaignDetailsLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title" id="EditCampaignDetailsLabel">Edit Campaign Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="CampaignEditService" method="POST">
                            <div class="modal-body">
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>CampaignId</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="EditTitle" id="EditTitle" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>CampaignName</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="Title" id="Title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Start Date</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="startDate" id="startDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>End Date</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="date" name="endDate" id="endDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>


                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>status</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text " name="status" id="status" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <!-- Add more fields for editing campaign details here -->
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" name="updateCampaign" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>


            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

            <script>
                $(document).ready(function() {
                    $('.editbtn ').on('click', function() {
                        $('#EditCampaignDetailsModal').modal('show');
                        $tr = $(this).closest('tr');
                        var data = $tr.find('td').map(function() {
                            return $(this).text();
                        }).get();
                        console.log(data);
                        $('#EditTitle').val(data[0]);
                        $('#Title').val(data[1]);
                        $('#startDate').val(data[2]);
                        $('#endDate').val(data[3]);
                        $('#status').val(data[4]);
                        // Set values for other fields as well
                        $('#EditStartDate').val(data[1]);
                        $('#EditEndDate').val(data[2]);
                        // Handle the Save Changes button click
                        $('#updateCampaignBtn').on('click', function() {
                            // Collect the updated data from the modal fields
                            var updatedTitle = $('#EditTitle').val();
                            var updatedStartDate = $('#startDate').val();
                            // Get values for other fields as needed

                            // Make an AJAX request to update the campaign
                            $.ajax({
                                type: 'POST',
                                url: 'update_campaign.php', // Replace with the actual URL
                                data: {
                                    campaignId: data[0], // Include campaign ID for identifying the record to update
                                    updatedTitle: updatedTitle,
                                    updatedStartDate: updatedStartDate,
                                    // Include other updated fields
                                },
                                success: function(response) {
                                    // Handle the response from the server, e.g., show a success message or update the table
                                    if (response === 'success') {
                                        $('#EditCampaignDetailsModal').modal('hide');
                                        // You can update the table or show a success message here
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.log('Error: ' + error);
                                }
                            });
                        });
                    });
                });
            </script>



            <!--
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
--
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <form action="update_campaign.php" method="POST"> <!-- Replace 'update_campaign.php' with your update script --
        <button type="submit" class="btn btn-primary">Save Changes</button>
   
</div>

</div>
</div>
</div>
<!--
<script>
$(document).ready(function(){
    $('.editbtn').on('click', function(){
        $('#EditCampaignDetailsModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.find('td').map(function(){
            return $(this).text();
        }).get();
        console.log(data);
        $('#EditTitle').val(data[0]);
        $('#startDate').val(data[1]);
        // Set values for other fields as needed

        // Handle the Save Changes button click
        $('#updateCampaignBtn').on('click', function() {
            // Collect the updated data from the modal fields
            var updatedTitle = $('#EditTitle').val();
            var updatedStartDate = $('#startDate').val();
            // Get values for other fields as needed

            // Make an AJAX request to update the campaign
            $.ajax({
                type: 'POST',
                url: 'update_campaign.php', // Replace with the actual URL
                data: {
                    campaignId: data[0], // Include campaign ID for identifying the record to update
                    updatedTitle: updatedTitle,
                    updatedStartDate: updatedStartDate,
                    // Include other updated fields
                },
                success: function(response) {
                    // Handle the response from the server, e.g., show a success message or update the table
                    if (response === 'success') {
                        $('#EditCampaignDetailsModal').modal('hide');
                        // You can update the table or show a success message here
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error: ' + error);
                }
            });
        });
    });
});
</script>

<---------------------------------------------------------------------------------------------------------->
            <!-- View Campaign Modal -->
            <div class="modal fade" id="ViewCampaignDetailsModal" tabindex="-1" role="dialog" aria-labelledby="EditCampaignDetailsLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title" id="ViewCampaignDetailsLabel">Edit Campaign Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="CampaignEditService" method="POST">
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
                                                            <p class="text-muted mb-0" name="EditTitle" id="EditTitle"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <strong>Hospital Name:</strong>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="text-muted mb-0" name="Title" id="Title"></p>
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



                                <!----------------------------------------------

                    <div class="row align-items-center pb-3">
                        <div class="col-3">
                            <h6>CampaignId</h6>
                        </div>
                        <div class="col-9">
                            <input type="text" name="EditTitle" id="EditTitle" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                    </div>

                    <div class="row align-items-center pb-3">
                        <div class="col-3">
                            <h6>CampaignName</h6>
                        </div>
                        <div class="col-9">
                            <input type="text" name="Title" id="Title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                    </div>

                    <div class="row align-items-center pb-3">
                        <div class="col-3">
                            <h6>Start Date</h6>
                        </div>
                        <div class="col-9">
                            <input type="text" name="startDate" id="startDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                    </div>
                    <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>End Date</h6>
                                </div>
                                <div class="col-9">
                                    <input type="date" name="endDate" id="endDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>


                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>status</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text " name="status"  id="status"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>-------->
                                <!-- Add more fields for editing campaign details here -->
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" name="updateCampaign" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
            --

            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

            <script>
                $(document).ready(function() {
                    $('.view_Edit ').on('click', function() {
                        $('#ViewCampaignDetailsModal').modal('show');
                        $tr = $(this).closest('tr');
                        var data = $tr.find('td').map(function() {
                            return $(this).text();
                        }).get();
                        console.log(data);
                        $('#EditTitle').val(data[0]);
                        $('#Title').val(data[1]);
                        $('#startDate').val(data[2]);
                        $('#endDate').val(data[3]);
                        $('#status').val(data[4]);
                        // Set values for other fields as well
                        // $('#EditStartDate').val(data[1]);
                        // $('#EditEndDate').val(data[2]);
                        // Handle the Save Changes button click
                        $('#updateCampaignBtn').on('click', function() {
                            // Collect the updated data from the modal fields
                            var updatedTitle = $('#EditTitle').val();
                            var updatedStartDate = $('#startDate').val();
                            // Get values for other fields as needed

                            // Make an AJAX request to update the campaign
                            $.ajax({
                                type: 'POST',
                                url: 'update_campaign.php', // Replace with the actual URL
                                data: {
                                    campaignId: data[0], // Include campaign ID for identifying the record to update
                                    updatedTitle: updatedTitle,
                                    updatedStartDate: updatedStartDate,
                                    // Include other updated fields
                                },
                                success: function(response) {
                                    // Handle the response from the server, e.g., show a success message or update the table
                                    if (response === 'success') {
                                        $('#EditCampaignDetailsModal').modal('hide');
                                        // You can update the table or show a success message here
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.log('Error: ' + error);
                                }
                            });
                        });
                    });
                });
            </script>
            <!--
</div>
</form>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
--
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <form action="update_campaign.php" method="POST"> <!-- Replace 'update_campaign.php' with your update script --
        <button type="submit" class="btn btn-primary">Save Changes</button>
   
</div>

</div>
</div>
</div>


!-------------------------------------------------------------------------------->





















            -->

            <!--
<script>
$(document).ready(function(){
    $('.edit-details-btn').on('click', function(){
        $('#EditCampaignDetailsModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.find('td').map(function(){
            return $(this).text();
        }).get();
        console.log(data);
        $('#EditTitle').val(data[0]);
        $('#Title').val(data[1]);
        $('#startDate').val(data[2]);
        $('#endDate').val(data[3]);
        $('#status').val(data[4]);
       

        // Set values for other fields as needed
    });
});
</script>
-->







            <!--Other form fields for editing (Start Date, End Date, etc.) go here -->
            <!--
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="updateCampaign" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>



-->


            <!--
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script>
$(document).ready(function(){
    $('.view_Edit').on('click', function(){
        $('#EditCampaignDetailsModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.find('td').map(function(){
            return $(this).text();
        }).get();
        console.log(data);
        $('#EditTitle').val(data[0]);
        $('#Title').val(data[1]);
$('#startDate').val(data[2]);
$('#endDate').val(data[3]);
        // Set values for other fields as well
        // $('#EditStartDate').val(data[1]);
        // $('#EditEndDate').val(data[2]);
    });
});
</script>

-->











            <!-- Campaign Details Modal -
<div class="modal fade" id="campaignDetailsModal" tabindex="-1" role="dialog" aria-labelledby="campaignDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="campaignDetailsModalLabel">Campaign Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="campaignId">Campaign ID:</label>
                    <p id="campaignId"></p>
                </div>
                <div class="form-group">
                    <label for="campaignTitle">Campaign Name:</label>
                    <p id="campaignTitle"></p>
                </div>
                 Add more fields for campaign details here 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function () {
    $('.view-details-btn').on('click', function () {
        var campaignId = $(this).data('campaign-id');
        // You can use AJAX or other methods to fetch campaign details based on campaignId from the server
        // For this example, we'll just set some dummy data
        var dummyData = {
            campaignId: campaignId,
            campaignTitle: "Sample Campaign Title",
            // Add more fields here
        };
        populateCampaignDetailsModal(dummyData);
    });

    function populateCampaignDetailsModal(data) {
        $('#campaignId').text(data.campaignId);
        $('#campaignTitle').text(data.campaignTitle);
        // Populate other fields with data
        // $('#startDate').text(data.startDate);
        // $('#endDate').text(data.endDate);
    }
});
</script>
 







        OrganizerEdit-->
            <!--
        <div class="modal fade" id="OrganizerEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModal2">Organizer Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/action_page.php">
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6> Name</h6>
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
                                    <input type="text " name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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
                                    <h6> Contact No</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6> Email</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6> Age</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6> NIC</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="EditCamp()">Back</button>
                        <button type="button" class="btn btn-primary">Save </button>
                    </div>
                </div>
            </div>
        </div>-->
            <!--OrganizerEdit-->




            <!--------------------------------------------------->
            <!-------------------Review-------------------------------->

            <div class="modal fade" id="Review" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="Review">Review Campaign</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Percentege</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""><br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Back</button>

                        </div>
                    </div>
                </div>
            </div>






            <!-- --------------------------------------Campaign View------------------------------------------------------------------------ -->
            <!--CampDetailsView-

        <table>
    <tr class="campaign-details">
        <td>1</td>
        <td>Campaign Title 1</td>
        <td>Start Date 1</td>
        -- Add more table cells with campaign details as needed 
    </tr>
    <!- Add more table rows for other campaigns --
</table>--

<script>
$(document).ready(function(){
    $('. getCampaignDetails').on('click', function(){
        var $tr = $(this);
        var data = $tr.find('td').map(function(){
            return $(this).text();
        }).get();
        
        // Populate the modal with campaign details
        $('#ViewTitle').text(data[1]);
        $('#ViewStartDate').text(data[2]);
        // Add more fields for displaying campaign details as needed

        // Show the modal
        $('#ChampView').modal('show');
    });
});
</script>


-->









            <!-- 1st pop-up -->


            <!-- Trigger button for opening the modal --


<!-- Campaign table --
<table class="campaign-details">
   
    <!-- Add more table rows for other campaigns --
</table>

<!-- Modal for displaying campaign details --
<div class="modal fade" id="ChampView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="Save">View Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Display campaign details here --
                <p><strong>Campaign Title:</strong> <span id="ViewTitle"></span></p>
                <p><strong>Start Date:</strong> <span id="ViewStartDate"></span></p>
                <!-- Add more fields for displaying campaign details as needed --
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


       --<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
--
       <script>
$(document).ready(function(){
    $('.view_Edit').on('click', function(){
        var $tr = $(this);
        var data = $tr.find('td').map(function(){
            return $(this).text();
        }).get();
        
        // Populate the modal with campaign details
        $('#ViewTitle').text(data[1]);
        $('#ViewStartDate').text(data[2]);
        // Add more fields for displaying campaign details as needed

        // Show the modal
        $('#ChampView').modal('show');
    });
});
</script>







        <!--OrganizerDetailsview--
        <!-- Modal -

        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModal7">Organizer Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">OrganizerID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact_NO</th>
                                    <th scope="col">Distict</th>
                                    <th scope="col">Email</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>D001</td>
                                    <td>Mani</td>
                                    <td>07722223</td>
                                    <td>Jaffna</td>
                                    <td>M@gmail.com</td>

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>D001</td>
                                    <td>Mani</td>
                                    <td>07722223</td>
                                    <td>Jaffna</td>
                                    <td>M@gmail.com</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="Save()">Back</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>



        -Donorview-->
            <!-- pop-up3-

        <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModal7">Donor Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">DonorID</th>
                                    <th scope="col">Last Donation Date</th>
                                    <th scope="col">Donation Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>D001</td>
                                    <td>07/12/2022</td>
                                    <td>Blood Bank</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>D002</td>
                                    <td>23/09/2011</td>
                                    <td>Campaign</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="Save()">Back</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    -------------------------------------------------------------------------------------------------------------->








            <?php
            // put your code here
            ?>
</body>

</html>