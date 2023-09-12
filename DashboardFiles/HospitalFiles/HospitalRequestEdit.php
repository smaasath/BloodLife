<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
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
                            <i class="fa-solid fa-bell fa-xl"></i>
                        </div>
                        <div class="col-2 mb-2">
                            <i class="fa-solid fa-gear fa-xl"></i>
                        </div>
                        <div class="col-2 mb-2">
                            <i class="fa-solid fa-user fa-xl"></i>
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
    <center><h1>Hospital Request Edit</h1></center>

    <div class="form-container">
        <h1>Edit Form</h1>
        <form>
            <div class="field">
                <label for="bloodGroup">BloodGroup:</label>
                <select class="form-control form-control-lg" name="bloodGroup" required>
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
            <div class="field">
                <label for="date">Date:     </label>
                <input type="date" class="form-control" id="date" name="date" value="2023-08-25">
            </div>
            <div class="field">
                <label for="bloodQuantity">BloodQuantity:</label>
                <input type="text" class="form-control" id="bloodQuantity" name="bloodQuantity" value="250 ml">
            </div>
            <div class="field">
                <label for="status">Status:   </label>
                <select id="blood-group" class="form-control">
                <option value="Normal">Normal</option>
                <option value="Emergency">Emergency</option>
                <option value="Urgent">Urgent</option>
                <option value="Completed">Completed</option>
                    
                </select>
            </div>      
            <button class="edit-button">Publish Request</button>
        </form>
    </div>


    <?php
    // put your code here
    ?>
</body>
</html>