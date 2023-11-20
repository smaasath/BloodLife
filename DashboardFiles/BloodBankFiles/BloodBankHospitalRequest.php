<?php

require_once '../classes/hospitalrequestclass.php';
require_once '../classes/Validation.php';


use classes\hospitalrequestclass;
use classes\Validation;



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
    <div class="mt-5 m-3 mb-1" style="color:gray;">
        <h5>Hospital Request</h5>
    </div>
    <div class="container">
        <div class="row p-3">
            <div class="col-6">
                <input type="search" id="search" class="form-control rounded" placeholder="Search Name" aria-label="Search" aria-describedby="search-addon" oninput="Search(this.value)">
            </div>
            <div class="col-6">
                <select class="form-select" aria-label="Default select example" oninput="status(this.value)">
                    <option selected value="">Status</option>
                    <option value="Normal">Normal</option>
                    <option value="Urgent">Urgent</option>
                    <option value="Emergency">Emergency</option>
                    <option value="Completed">Completed</option>


                </select>
            </div>
        </div>
        <div class="row bg-white m-3 pt-0 align-items-center p-3 justify-content-start rounded-3 d-flex" id="output">

            <?php
            $requestArray = hospitalrequestclass::getAllRequestwithHospitalDetails();
            print_r($requestArray);

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
                                <div class="col-4" >    
                                <div class="bg-white p-3  m-2" style="width: 270px; height: 200px; border-radius:10px;box-shadow: rgba(0, 0, 0, 0.16) 0px 8px 8px; background: ${getHospitalStatusGradient(item.requestStatus)}; ">
                        <a href="../Dashboards/BloodBankDashboard.php?page=bbhrv&&bhreqid=${item.hospitalRequestID}" style="text-decoration: none;">

                            <div class="row">
                                <div class="col">
                                    <p class="m-b-0 text-white"  style="margin-top: 5px"><strong>${item.hospitalRequestID}</strong><span class="f-right" style="margin-left:140px;font-weight: bold"></span></p>
                                </div>
                                <div class="col">
                                    <p class="m-b-0 text-white"  style="margin-top: 5px"><strong>${item.bloodQuantity}</strong><span class="f-right" style="margin-left:140px;font-weight: bold"></span></p>

                                </div>
                            </div>
                            <div class="row text-white" >
                                <div class="col">
                                <div class="col-6" style="height: 30px">${item.bloodGroup}</div>
                                </div>
                                 <div class="col">
                                    <img class="w-50" src="../Images/icons8-blood-100.png"/>
                                </div>
                            </div>
                            <div class="row text-white">
                                <div class="col">

                                <div class="col-6" style="height: 30px">${item.requestStatus}</div>

                                </div>
                                <div class="col-6" style="height: 30px">${item.	createdDate}</div>
                            </div><br>                        

                            <div class="row">
                                <div class="col">

                                    <p class="m-b-0 text-white"><span class="f-right" style="margin-left:30px;font-weight: bold"></span></p> 

                                </div>       
                            </div>
                        </a>
                    </div>
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
                                <div class="col-4" >    
                                <div class="bg-white p-3  m-2" style="width: 270px; height: 200px; border-radius:10px;box-shadow: rgba(0, 0, 0, 0.16) 0px 8px 8px; background: ${getHospitalStatusGradient(item.requestStatus)}; ">
                        <a href="../Dashboards/BloodBankDashboard.php?page=bbhrv&&bhreqid=${item.hospitalRequestID}" style="text-decoration: none;">

                            <div class="row">
                                <div class="col">
                                    <p class="m-b-0 text-white"  style="margin-top: 5px"><strong>${item.hospitalRequestID}</strong><span class="f-right" style="margin-left:140px;font-weight: bold"></span></p>
                                </div>
                                <div class="col">
                                    <p class="m-b-0 text-white"  style="margin-top: 5px"><strong>${item.bloodQuantity}</strong><span class="f-right" style="margin-left:140px;font-weight: bold"></span></p>
                                </div>
                            </div>
                            <div class="row text-white" >
                                <div class="col">
                                <div class="col-6" style="height: 30px">${item.bloodGroup}</div>
                                </div>
                                 <div class="col">
                                    <img class="w-50" src="../Images/icons8-blood-100.png"/>
                                </div>
                            </div>
                            <div class="row text-white">
                                <div class="col">
                                <div class="col-6" style="height: 30px">${item.requestStatus}</div>
                                </div>
                                <div class="col-6" style="height: 30px">${item.	createdDate}</div>
                            </div><br>                        

                            <div class="row">
                                <div class="col">
                                    <p class="m-b-0 text-white"><span class="f-right" style="margin-left:30px;font-weight: bold"></span></p> 
                                </div>       
                            </div>
                        </a>
                    </div>
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
</body>

</html>