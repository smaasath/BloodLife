<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<?php

// $token = "abcde1234";

require_once '../classes/User.php';

use classes\User;

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="../../CSS/Table.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title></title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 3px solid #f1f1f1;
            border-radius: 30px;
            width: 50%;
            position: relative;
            left: 25%;

        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #0096FF;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 30%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        span.cpsw {
            float: right;
            padding-top: 16px;
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
                        <a href="AdminProfile.php"></a>
                        <p style="font-size: 10px;">Blood Bank</p>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!-- nav bar end -->

    <div class="mt-5 m-3 mb-1" style="color:gray; text-align: center;">

        <h5>Super Profile Manage Page</h5>
    </div>

    <form action="../services/adminProfileEdit.php" method="POST">
        <div class="imgcontainer">
            <img src="../Images/profilepic.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="uname" ><br>

            <label for="psw"><b>Old Password</b></label><br>
            <input type="password" placeholder="Enter Old Password" name="opsw" id="oldpass" ><br>

            <label for="psw"><b>New Password</b></label><br>
            <input type="password" placeholder="Enter New Password" name="psw" id="typepass" ><br>

            <label for="psw"><b> Confirm New Password</b></label><br>
            <input type="password" placeholder="Enter New Password for Confirm" name="cpsw" id="changePass" ><br>

            <input type="checkbox" onclick="Toggle()">
            <label>Show password</label>
            <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" >


            <button type="submit" class="btn btn-outline-primary "><strong>Save</strong></button>

        </div>

    </form>


    <?php
    // put your code here
    ?>

    <script>
        // Change the type of input to password or text
        function Toggle() {
            let x = document.getElementById("typepass");
            let y = document.getElementById("changePass");
            let z = document.getElementById("oldpass");


            if (x.type === "password") {
                x.type = "text";
                y.type = "text";
                z.type = "text";
            } else {
                x.type = "password";
                y.type = "password";
                z.type = "password";
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>