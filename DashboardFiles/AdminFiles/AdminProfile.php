<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../CSS/Table.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <title></title>
        <style>
            body {
            font-family: Arial, Helvetica, sans-serif;
            align: center;
            display: flex;
            felx:50%;
            
            }
            
            form {
            border: 3px solid #f1f1f1;
            width: 50%;
            padding-left:25px;
            padding-right:25px;
            position: relative;
            left: 25%;
            
            }

            input[type=text], input[type=password] {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
            }

            button {
              background-color: #04AA6D;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
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
                            <a href="AdminProfile.php"></a>
                            <p style="font-size: 10px;">Blood Bank</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- nav bar end -->
        
        <center> <h2>Super Profile Manage Page</h2> </center>

        <form action="" method="post">
          <div class="imgcontainer">
            <img src="../Images/profilepic.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="uname" required><br>

            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" required><br>

            <label for="cpsw"><b>Change Password</b></label><br>
            <input type="password" placeholder="change your password" name="cpsw" required><br>

            <label>
              <input type="checkbox" checked="checked" name="remember">Show password
            </label>

            <button type="submit">Login</button>

          </div>


          </div>
        </form>



        <!-- Table -->

        <div class="p-5">


            <div class="rounded-top-4 p-0 border border-dark-subtle">
                <div class="row align-items-center">
                    <div class="col-3">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="Search ID" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>
                    <div class="col-3"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Department</option>
                            <option value="1">Department1</option>
                            <option value="2">Department2</option>
                            <option value="3">Department3</option>
                        </select>
                    </div>

                    <div class="col-2"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Course</option>
                            <option value="1">Course 1</option>
                            <option value="2">Course 2</option>
                            <option value="3">Course 3</option>
                        </select>
                    </div>
                    <div class="col-2"> 
                        <button type="button" class="btn btn-primary bgcol" onclick="Addstudent()">Add Student</button>
                    </div>

                    <div class="col-2" >
                        <button type="button" class="btn btn-success">Save</button>
                    </div>
                </div>









            </div>
            <!-- Table body -->
            <div class="container bg-white m-0 p-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover p-0">

                    <!-- Table row -->


                    <tr class="sticky-top">

                        <th class="col-1 bgcol p-2">ID</th>
                        <th class="col-3 bgcol p-2">Name</th>
                        <th class="col-2 bgcol p-2">Gender</th>
                        <th class="col-3 bgcol p-2">Contact No</th>
                        <th class="col-1 bgcol p-2">View</th>
                        <th class="col-1 bgcol p-2">Edit</th>

                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>

                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="openStudentDetails()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStudent()">Edit</button></td>
                    </tr>


                    <!-- Table row -->

                </table> 

            </div>
            <br>
            <!-- Table Head -->
          
        </div>

        <!-- Table -->




        



        <?php
        // put your code here
        ?>




        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
