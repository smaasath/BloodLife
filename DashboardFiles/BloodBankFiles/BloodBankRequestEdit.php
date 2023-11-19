<?php
if($token){
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
    <center><h1>BloodBank Request-Edit</h1></center>

    <div class="container" >

        <div class="row bg-white m-3 pt-0 align-items-center p-3 justify-content-center rounded-3 d-flex">
            <!-- <div class="text-center m-3"> <h1>BL rq edit</h1> </div>-->
            <div class="bg-white m-3" style="height: 800px; width: 600px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                <div class="row p-3 m-1">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><strong>BloodBankID</strong></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                </div>
                <div class="row p-3 m-1">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><strong>Blood Quantity</strong></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="1L">
                    </div>
                </div>
                <div class="row p-3 m-1">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><strong>Hospital Name</strong></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="XRM Hospital">
                    </div>
                </div>
                <div class="row p-3 m-1">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><strong>Status</strong></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Normal">
                    </div>
                </div>
                <div class="row p-3 m-1">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><strong>Date</strong></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="2022-12-12">
                    </div>
                </div>
                <div class="buttons" >
                      <button class="btn btn-primary" style="background-color: green !important;border: none;margin-left: 350px">Save</button>
                    
                </div>


            </div>


        </div>

    </div>


    <?php
     } else{
        header('Location: ../../index.php');
    }
    ?>
</body>
</html>
