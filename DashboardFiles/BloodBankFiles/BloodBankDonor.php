
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
$token = "12b378738a1a6be3bacea473fe9e3d2fbfce8e678d514e1d943";
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

       <!-- Navigation bar -->
<div class="sticky-top bg-white shadownav" style="height: 50px;">
    <!-- Navigation content here -->
</div>

<!-- Page content -->
<div class="container p-5">
    <!-- Search and Add Donor section -->
    <div class="rounded-top-4 p-0 border border-dark-subtle">
        <div class="row align-items-center">
            <!-- Search input -->
            <div class="col-3">
                <div class="input-group rounded p-3">
                    <input type="search" class="form-control rounded" placeholder="DonorID" aria-label="Search" aria-describedby="search-addon">
                </div>
            </div>
            
            <!-- Blood Group filter -->
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
            
            <!-- Add Donor button -->
            <div class="col-4"> 
                <button type="button" class="btn btn-primary bgcol" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Donor
                </button>
            </div>
        </div>
    </div>

    <!-- Donor table -->
    <div class="container bg-white mt-4 p-0" style="max-height: 373px; overflow: scroll;">
        <table class="table table-hover p-0">
            <thead>
                <tr class="sticky-top">
                    <th class="col-1 bg-secondary text-dark p-2">DonorID</th>
                    <th class="col-1 bg-secondary text-dark p-2">Name</th>
                    <th class="col-1 bg-secondary text-dark p-2">Blood Group</th>
                    <th class="col-1 bg-secondary text-dark p-2">Location</th>
                    <th class="col-1 bg-secondary text-dark p-2">Contact No</th>
                    <th class="col-1 bg-secondary text-dark p-2">Available</th>
                    <th class="col-1 bg-secondary text-dark p-2">Last Donation</th>
                    <th class="col-1 bg-secondary text-dark p-2">Edit</th>
                    <th class="col-1 bg-secondary text-dark p-2">View</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require_once '../classes/Donor.php';
                use classes\Donor;
                $requestArray = Donor::getAllDetails();
                foreach ($requestArray as $donorArray){
                ?>
                <tr>
                    <td class="col-1"><?php echo $donorArray["donorId"]; ?></td>
                    <td class="col-1"><?php echo $donorArray["name"]; ?></td>
                    <td class="col-1"><?php echo $donorArray["bloodGroup"]; ?></td>
                    <td class="col-1"><?php echo $donorArray["districtId"]; ?></td>
                    <td class="col-1"><?php echo $donorArray["contactNumber"]; ?></td>
                    <td class="col-1"><?php echo $donorArray["availability"]; ?></td>
                    <td class="col-1"><?php echo $donorArray["donationLastDate"]; ?></td>
                    <td class="col-1">
                        <button type="button" class="btn btn-danger" onclick="DonorEdit()" data-bs-toggle="modal" data-bs-target="#DonorEdit">
                            Edit
                        </button>
                    </td>

                   
                    <td class="col-1">
                        <button type="button" class="btn btn-success" onclick="EditCamp()">
                            View
                        </button>
                    </td>
                </tr>
                <?php } ?> 
            </tbody>
        </table>
    </div>
</div>

                    

                    
                     







<script>
    function validateForm() {
        // Get the values of the contact number, NIC, and password fields
        var contactNumber = document.forms["donorForm"]["contactNumber"].value;
        var nic = document.forms["donorForm"]["nic"].value;
        //var password = document.forms["donorForm"]["password"].value;

        // Validate the contact number using a regular expression
        var contactNumberPattern = /^[0-9]{10}$/;
        if (!contactNumberPattern.test(contactNumber)) {
            alert("Invalid contact number. Please enter a 10-digit number.");
            return false; // Prevent form submission
        }

//        // Validate the NIC using a regular expression (customize the pattern as needed)
//        var nicPattern = /^[0-9]{9}[vVxX]$/;
//        if (!nicPattern.test(nic)) {
//            alert("Invalid NIC. Please enter a valid NIC number.");
//            return false; // Prevent form submission
//        }

        // Validate the password using your specified criteria
       // var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
       // if (!passwordPattern.test(password)) {
           // alert("Invalid password. It must meet the specified criteria.");
           // return false; // Prevent form submission
        //}

        // If all validations pass, allow form submission
        return true;
    }
</script>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password');
        const generatePasswordButton = document.getElementById('generatePassword');

        generatePasswordButton.addEventListener('click', function() {
            const passwordLength = 12; // Adjust the desired password length
            const randomPassword = generateRandomPassword(passwordLength);
            passwordInput.value = randomPassword;
        });

        function generateRandomPassword(length) {
            const characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
            const characterCount = characters.length;
            let password = '';

            for (let i = 0; i < length; i++) {
                const randomCharacter = characters.charAt(Math.floor(Math.random() * characterCount));
                password += randomCharacter;
            }

            return password;
        }
    });
</script>





                <!-----------------------------AddDonorDtails------------------------------------------------------------------------------->
                <!-- Modal -->
                <form name="donorForm" action="../services/DonorAddService.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
    <!-- Your form content here -->


                
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
                                            <h6>Contact No</h6>
                                        </div>
                                        <div class="col-9">
                                            <input type="text" name="contactNumber" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"  required id="contactNumberInput" oninput="validateMobileNumber(this.value)">
                                            <p id="validationResult"></p>
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
                                            <h6>Medical Report</h6>
                                        </div>
                                        <div class="col-9">
                                            <input class="form-control" type="file" name="medicalReport" accept=".pdf">
                                            <p style="font-size: 9px; color: red;">only PDF</p>
                                        </div>
                                    </div>


                                    
                                    
                                    
                                    
                                     <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Username</h6>
                                        </div>
                                        <div class="col-9">
                                            <input type="text"  name="UserName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row align-items-center pb-3">
    

                                     <div class="row align-items-center pb-3">
                                        <div class="col-3">
                                            <h6>Email</h6>
                                        </div>
                                        <div class="col-9">
                                            <input type="email"  name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>
                                    <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" >Add Donor</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    </div>
                </form>
                <!--AddDonorDetails---------------------------------------------------------->










                <!-- --------------------------------------Donor Edit------------------------------------------------------------------------ -->
                <!-----------1st pop-up------------------------Donor Details---------------->
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
                                        <h6> Name</h6>
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
                                        <h6>DateOfBirth</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="date"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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
