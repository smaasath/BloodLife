<?php
require_once "../classes/bloodbankhsrequest.php";

use classes\bloodbankhsrequest;

$bankid = $user->getBloodBankId();


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
    <link rel="stylesheet" href="../../CSS/BloodBankRequest.css">

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
    <center>
        <h1>BloodBank Request</h1>
    </center>
    <div class="text-center">
        <a href="../Dashboards/BloodBankDashboard.php?page=bbhra"><button type="button" class="btn btn-primary">Add Request</button></a>
    </div>








    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row p-3">
            <div class="col-6">
            <input type="search" id="search" class="form-control rounded" placeholder="Search Name" aria-label="Search" aria-describedby="search-addon" oninput="teeest(this.value)">
            </div>
            <div class="col-6">
                <select class="form-select" aria-label="Default select example" oninput="teest(this.value)">
                    <option selected value="">Status</option>
                    <option value="Normal">Normal</option>
                    <option value="Urgent">Urgent</option>
                    <option value="Emergency">Emergency</option>
                    <option value="Completed">Completed</option>


                </select>
            </div>
        </div>
        <?php
        $detailsArray = bloodbankhsrequest::getAllBloodBankReqByBankID($bankid);
        $test = bloodbankhsrequest::getBloodBankReqByBankID($bankid, "O+");

        ?>

        <div class="bg-white m-3 pt-0 p-3 rounded-3">
            <div class="row d-flex justify-content-around" id="output"></div>


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

                let array = <?php echo json_encode($detailsArray) ?>;
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
                            <div class="bg-white p-4 mt-4 rounded-4" style="height: 180px; width: 300px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; background: ${getHospitalStatusGradient(item.requestStatus)}">
                                       
                                            <div class="row p-1">
                                                <div class="col-6" style="height: 30px;">B${item.bloodBankRequestId}</div>

                                                <div class="col-6" style="height: 30px">${item.bloodGroup}</div>
                                            </div>

                                     

                                        <div class="row p-1 pl-2" style="height: 30px">
                                            <div class="col"> ${item.hospitalName===null ?  "Bank Request" : item.hospitalName} </div>
                                        </div>

                                        <div class="row p-1 pl-4">
                                            <div class="col-6" style="height: 30px">${item.requestStatus}</div>
                                            <div class="col-6" style="height: 30px">${item.createdDate}</div>
                                        </div>

                                        <div class="row mt-1 p-1 justify-content-end">
                                        <div class="col-6 d-flex justify-content-around">
                                            <div style="width: 25px"> <a href="../Dashboards/BloodBankDashboard.php?page=bbre"><img src="../Images/icons8-edit-24.png" style="width: 20px;" /></a></div>
                                            <div style="width: 25px"><a href="../Dashboards/BloodBankDashboard.php?page=bbrv&&breqId=${item.bloodBankRequestId}"><img style="width: 20px;" src="../Images/icons8-view-90.png" /></a></div>
                                        </div>
                                        </div>
                                    </div>`;


                            var divElement = document.createElement("div");

                            divElement.style = "width:300px";


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
                        array = array.filter((item) => item.requestStatus.toLowerCase().includes(testValue));
                        showall(array);
                    }

                }




                function teeest(test) {
                    if (test === "") {
                        array = <?php echo json_encode($detailsArray) ?>;
                        showall(array);
                    } else {

                        var id = parseInt(test, 10);


                        filterArray = array.filter((item) => item.bloodBankRequestId === id);



                        const detailsList = document.getElementById("output");
                        detailsList.innerHTML = "";
                        if (filterArray === null || filterArray.length === 0) {
                            var htmlCode = `<tr><td colspan="12" style="text-align: center;color: red;">No Results Found</td></tr>`;
                            detailsList.innerHTML = htmlCode;
                        } else {
                            filterArray.forEach((item) => {

                                var htmlCode = `     
                            <div class="bg-white p-4 mt-4 rounded-4" style="height: 180px; width: 300px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; background: ${getHospitalStatusGradient(item.requestStatus)}">
                                       
                                            <div class="row p-1">
                                                <div class="col-6" style="height: 30px;">B${item.bloodBankRequestId}</div>

                                                <div class="col-6" style="height: 30px">${item.bloodGroup}</div>
                                            </div>

                                     

                                        <div class="row p-1 pl-2" style="height: 30px">
                                            <div class="col"> ${item.hospitalName===null ?  "Bank Request" : item.hospitalName} </div>
                                        </div>

                                        <div class="row p-1 pl-4">
                                            <div class="col-6" style="height: 30px">${item.requestStatus}</div>
                                            <div class="col-6" style="height: 30px">${item.createdDate}</div>
                                        </div>

                                        <div class="row mt-1 p-1 justify-content-end">
                                        <div class="col-6 d-flex justify-content-around">
                                            <div style="width: 25px"> <a href="../Dashboards/BloodBankDashboard.php?page=bbre"><img src="../Images/icons8-edit-24.png" style="width: 20px;" /></a></div>
                                            <div style="width: 25px"><a href="../Dashboards/BloodBankDashboard.php?page=bbrv"><img style="width: 20px;" src="../Images/icons8-view-90.png" /></a></div>
                                        </div>
                                        </div>
                                    </div>`;



                                var divElement = document.createElement("tr");


                                divElement.innerHTML = htmlCode;


                                detailsList.appendChild(divElement);

                            });
                        }
                    }

                }
            </script>
        </div>
    </div>



    <style>
        .bg-c-blue {
            background: linear-gradient(45deg, #4099ff, #73b4ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg, #2ed8b6, #59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg, #FFB64D, #ffcb80);
        }

        .bg-c-pink {
            background: linear-gradient(45deg, #FF5370, #ff869a);
        }
    </style>






    <?php
      
    ?>
</body>

</html>
