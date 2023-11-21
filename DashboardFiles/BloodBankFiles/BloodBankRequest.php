<?php
require_once "../classes/bloodbankhsrequest.php";

use classes\bloodbankhsrequest;

$bankid = $user->getBloodBankId();


?>

<!DOCTYPE html>

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
    <div class="mt-5 m-3 mb-1" style="color:gray;">
        <h5>Bloodbank Request </h5>
    </div>
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
                            <div class="col-3 rounded-4 m-2" style="width: 270px; height: 200px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; ">

                            <div class="row" style="height: 30px;">
                            <div class="col-1 rounded-right-0 rounded-top-0" style="background: ${getHospitalStatusGradient(item.requestStatus)};width: 10px; height:200px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
         
                            </div>
       <div class="row">
           <div class="col-1 rounded-right-0 rounded-top-0" style="background: ${getHospitalStatusGradient(item.requestStatus)};width: 10px; height:200px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">

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
                           <h4 style="background: ${getHospitalStatusGradient(item.requestStatus)}; -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><b> B${item.bloodBankRequestId}</b></h4>
                       </div>
                   </div>

                   <div class="row" style="height: 30px;">
                   <div class="col"> ${item.hospitalName===null ?  "Bank Request" : item.hospitalName} </div>

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
                   </div><br>
                   <div class="col-6 d-flex justify-content-around">
                                       <div style="width: 25px"> <a href="../Dashboards/BloodBankDashboard.php?page=bbre&&hreqedit=${item.bloodBankRequestId}"><img src="../Images/icons8-edit-24.png" style="width: 20px;" /></a></div>
                                       <div style="width: 25px"><a href="../Dashboards/BloodBankDashboard.php?page=bbrv&&breqId=${item.bloodBankRequestId}"><img style="width: 20px;" src="../Images/icons8-view-90.png" /></a></div>
                                   </div>
               </div>

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

                        filterArray = array.filter((item) => item.bloodBankRequestId.toString().includes(id.toString()));



                        const detailsList = document.getElementById("output");
                        detailsList.innerHTML = "";
                        if (filterArray === null || filterArray.length === 0) {
                            var htmlCode = `<tr><td colspan="12" style="text-align: center;color: red;">No Results Found</td></tr>`;
                            detailsList.innerHTML = htmlCode;
                        } else {
                            filterArray.forEach((item) => {
                                var htmlCode = `     
                                <div class="col-3 rounded-4 m-2" style="width: 270px; height: 200px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; ">
       
            <div class="row">
                <div class="col-1 rounded-right-0" style="background: ${getHospitalStatusGradient(item.requestStatus)};width: 10px; height:200px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">

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
                                <h4 style="background: ${getHospitalStatusGradient(item.requestStatus)}; -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><b> B${item.bloodBankRequestId}</b></h4>
                            </div>
                        </div>

                        <div class="row" style="height: 30px;">
                        <div class="col"> ${item.hospitalName===null ?  "Bank Request" : item.hospitalName} </div>

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
                        </div><br>
                        <div class="col-6 d-flex justify-content-around">
                                            <div style="width: 25px"> <a href="../Dashboards/BloodBankDashboard.php?page=bbre&&hreqedit=${item.bloodBankRequestId}"><img src="../Images/icons8-edit-24.png" style="width: 20px;" /></a></div>
                                            <div style="width: 25px"><a href="../Dashboards/BloodBankDashboard.php?page=bbrv&&breqId=${item.bloodBankRequestId}"><img style="width: 20px;" src="../Images/icons8-view-90.png" /></a></div>
                                        </div>
                    </div>

                </div>

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
    <!-- <div class="col-6 d-flex justify-content-around">
                                            <div style="width: 25px"> <a href="../Dashboards/BloodBankDashboard.php?page=bbre&&hreqedit=${item.bloodBankRequestId}"><img src="../Images/icons8-edit-24.png" style="width: 20px;" /></a></div>
                                            <div style="width: 25px"><a href="../Dashboards/BloodBankDashboard.php?page=bbrv&&breqId=${item.bloodBankRequestId}"><img style="width: 20px;" src="../Images/icons8-view-90.png" /></a></div>
                                        </div> 
                                    B${item.bloodBankRequestId}
                                    ${item.bloodGroup}
                                    <div class="col"> ${item.hospitalName===null ?  "Bank Request" : item.hospitalName} </div>
                                    ${item.requestStatus}
                                    ${item.createdDate}
                                    -->
</body>

</html>