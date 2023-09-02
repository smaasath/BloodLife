<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Hospital Request</title>


        <link rel="stylesheet" href="../../CSS/HospitalHSRequest.css">
        <style>
            .card4{
                display: flex;
                flex-direction: column;
                border-radius: 30px;
                border: 1px solid rgba(255, 255, 255, .25);
                background-color: white !important;
                box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
                height: 400px;
                padding: 20px;
                margin: 60px auto;
                margin-left: 250px;
                width :1250px;
                margin-left: 160px !important;
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

        <!-- Hospital Request start -->

        <div class="container">

            <div class="row bg-white m-3 pt-0  align-items-center justify-content-center rounded-5">
                <div class="col-lg-6">
                    <div class="form-container">


                        <form>
                            <h2 class="container-title">Create Request</h2>
                            <label for="bloodGroup">Blood Group:</label>
                            <input type="text" id="bloodGroup" name="bloodGroup" required>
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" required>
                            <label for="bloodQuantity">Blood Quantity:</label>
                            <input type="number" id="bloodQuantity" name="bloodQuantity" required>
                            <label for="status">Status:</label>
                            <select id="status" name="status" required>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                            <label for="location">Location:</label>
                            <input type="text" id="location" name="location" required>
                            <label for="district">District:</label>
                            <input type="text" id="district" name="district" required><br>
                            <div class="text-end">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Send Request</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Cancel Request</button>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-6 align-items-center justify-content-center">
                    <img src="../Images/hospitalreq.png"/>
                </div>
            </div>


            <div class="row bg-white m-3 pt-0 align-items-center p-3 justify-content-start rounded-3 d-flex">
                <a href="../Dashboards/HospitalDashboard.php?page=hospitalreqview"style="text-decoration: none;">
                <div class="bg-white p-3  m-3" style="width: 270px; height: 150px; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                    <div class="row">
                        <div class="col">
                            <p class="m-b-0"  style="margin-top: 5px"><strong>BR001</strong><span class="f-right"><strong style="margin-left: 100px">A+</strong></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            500ml
                        </div>       
                    </div>                        
                  
                    <div class="row">
                        <div class="col">
                            <p class="m-b-0 ">2023-09-15 <span class="f-right" style="margin-left:30px;font-weight: bold">Completed</span></p> 
                        </div>       
                    </div>
                </div>
                </a>

            </div>


        </div>











        <?php
// put your code here
        ?>
    </body>
</html>
