<?php

require_once '../classes/hospitalrequestclass.php';
require_once '../classes/Validation.php';
require_once '../classes/bloodBank.php';


use classes\hospitalrequestclass;
use classes\Validation;
use classes\bloodBank;

$bankid = $user->getBloodBankId();
$bloodBank = new bloodBank($bankid, null, null, null, null);
$bloodBank->GetBloodbankData($bankid);


?>


<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <title></title>




    <link rel="stylesheet" href="../CSS/BloodBankHSRequest.css">
</head>

<body>

<div class="sticky-top bg-white shadownav" style="height: 50px;">
                <div class="row m-0 d-flex">
                    <div class="col-6">
                    </div>
                    <div class="col-6">
                        <div class="row align-items-center justify-content-end">
                         
                            <div class="col-6 mt-2 	d-none d-xl-block ">
                                <b><?php echo $bloodBank->getBloodBankName();  ?></b>
                                <p style="font-size: 10px;">Blood Bank</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- nav bar end -->

    <!-- body start -->
    <div class="mt-5 m-3 mb-1" style="color:gray;">
        <h5>Hospital Request</h5>
    </div>
    <div class="container">
        <div class="row p-3">
            <div class="col-3">
                <input type="search" id="search" class="form-control rounded" placeholder="Search Name" aria-label="Search" aria-describedby="search-addon" oninput="Search(this.value)">
            </div>
            <div class="col-3">
                <select class="form-select" aria-label="Default select example" oninput="status(this.value)">
                    <option selected value="">Status</option>
                    <option value="Normal">Normal</option>
                    <option value="Urgent">Urgent</option>
                    <option value="Emergency">Emergency</option>
                    <option value="Completed">Completed</option>


                </select>
            </div>
        </div>
        <div class="row bg-white m-3 pt-0 align-items-center p-3 d-flex justify-content-around rounded-3" id="output">

            <?php
            $requestArray = hospitalrequestclass::getAllRequestwithHospitalDetails();


            ?>


            <script>
             



                function getHospitalStatusGradient(status) {
                    switch (status) {
                        case "Normal":
                            return "linear-gradient(45deg,#4099ff,#73b4ff)";
                        case "Urgent":
                            return "linear-gradient(45deg,#FF5370,#ff869a)";
                        case "Emergency":
                            return "linear-gradient(45deg,#FFB64D,#ffcb80)";
                        default:
                            return "linear-gradient(45deg,#4099ff,#73b4ff)";
                    }
                }


                let array = <?php echo json_encode($requestArray) ?>;
                let filterArray;
                showall(array);

                function showall(array) {
                    const detailsList = document.getElementById("output");
                    detailsList.innerHTML = "";
                    if (array === null || array.length === 0) {
                        var htmlCode = `<h4 colspan="12" style="text-align: center;color: red;" >No Results Found</h4>`;
                        detailsList.innerHTML = htmlCode;
                    } else {
                        array.forEach((item) => {
                            var htmlCode = `    
    <div class="col-3 rounded-4 m-2" style="width: 270px; height: 160px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; ">
        <a href="../Dashboards/BloodBankDashboard.php?page=bbhrv&bhreqid=${item.hospitalRequestID}" style="text-decoration: none;">
            <div class="row">
                <div class="col-1 rounded-right-0" style="background: ${getHospitalStatusGradient(item.requestStatus)};width: 10px; height:160px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">

                </div>
                <div class="col-10 bg-white p-2 pt-3 mb-1" style="width:240px">


                    <div class="row">

                        <div class="row">
                            <div class="col-5" style="height: 40px;">
                                <h4 style="background: ${getHospitalStatusGradient(item.requestStatus)}; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                    <b>${item.bloodGroup}</b>
                                </h4>

                            </div>
                            <div class="col-5 text-end" style="height: 40px;">
                                <h4 style="background: ${getHospitalStatusGradient(item.requestStatus)}; -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><b>HR-${item.hospitalRequestID}</b></h4>
                            </div>
                        </div>

                        <div class="row" style="height: 30px;">
                            <h6 style="color:black;">${item.name}</h6>

                        </div>
                        <div class="row">
                            <div class="col-5" style="height: 25px;">
                                <h6 style="background: ${getHospitalStatusGradient(item.requestStatus)}; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">${item.requestStatus}</h6>
                            </div>
                            <div class="col-5 text-end" style="height: 25px;">
                                <h6 style="color:black;">${item.bloodQuantity}</h6>
                            </div>
                        </div>
                        <div class="row pt-3" style="height: 25px;">

                            <h6 style="color:black;">${item.createdDate}</h6>
                        </div>
                    </div>

                </div>

            </div>
        </a>
    </div>`;


                            var divElement = document.createElement("div");

                            divElement.style = "width:300px";


                            divElement.innerHTML = htmlCode;


                            detailsList.appendChild(divElement);
                        });
                    };

                }

                function status(test) {
                    if (test === "") {
                        array = <?php echo json_encode($requestArray) ?>;
                        showall(array);
                    } else {
                        array = <?php echo json_encode($requestArray) ?>;
                        var testValue = test.toLowerCase();
                        array = array.filter((item) => item.requestStatus.toLowerCase().includes(testValue));
                        showall(array);
                    }

                }




                function Search(test) {
                    if (test === "") {
                        array = <?php echo json_encode($requestArray) ?>;
                        showall(array);
                    } else {

                        var id = parseInt(test, 10);

                        filterArray = array.filter((item) => item.hospitalRequestID.toString().includes(id.toString()));



                        const detailsList = document.getElementById("output");
                        detailsList.innerHTML = "";
                        if (filterArray === null || filterArray.length === 0) {
                            var htmlCode = `<tr><td colspan="12" style="text-align: center;color: red;">No Results Found</td></tr>`;
                            detailsList.innerHTML = htmlCode;
                        } else {
                            filterArray.forEach((item) => {
                                var htmlCode = ` 
                               <div class="col-3 rounded-4 m-2" style="width: 270px; height: 160px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; ">
        <a href="../Dashboards/BloodBankDashboard.php?page=bbhrv&&bhreqid=${item.hospitalRequestID}" style="text-decoration: none;">
            <div class="row">
                <div class="col-1 rounded-right-0" style="background: ${getHospitalStatusGradient(item.requestStatus)};width: 10px; height:160px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">

                </div>
                <div class="col-10 bg-white p-2 pt-3 mb-1" style="width:240px">


                    <div class="row">

                        <div class="row">
                            <div class="col-5" style="height: 40px;">
                                <h4 style="background: ${getHospitalStatusGradient(item.requestStatus)}; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                    <b>${item.bloodGroup}</b>
                                </h4>

                            </div>
                            <div class="col-5 text-end" style="height: 40px;">
                                <h4 style="background: ${getHospitalStatusGradient(item.requestStatus)}; -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><b>HR-${item.hospitalRequestID}</b></h4>
                            </div>
                        </div>

                        <div class="row" style="height: 30px;">
                            <h6 style="color:black;">${item.name}</h6>

                        </div>
                        <div class="row">
                            <div class="col-5" style="height: 25px;">
                                <h6 style="background: ${getHospitalStatusGradient(item.requestStatus)}; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">${item.requestStatus}</h6>
                            </div>
                            <div class="col-5 text-end" style="height: 25px;">
                                <h6 style="color:black;">${item.bloodQuantity}</h6>
                            </div>
                        </div>
                        <div class="row pt-3" style="height: 25px;">

                            <h6 style="color:black;">${item.createdDate}</h6>
                        </div>
                    </div>

                </div>

            </div>
        </a>
    </div>`;

                                var divElement = document.createElement("div");

                                divElement.style = "width:300px";


                                divElement.innerHTML = htmlCode;


                                detailsList.appendChild(divElement);

                            });
                        }
                    }

                }
            </script>


        </div>










    </div>
    </div>
    <?php

    ?>

    </div>
</body>

</html>