<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <title>Blood Bank Dashboard</title>
        <link rel="stylesheet" href="../CSS/DashboardCSS.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body >
        <div class="container-fluid">
            <div class="row flex-wrap flex-row-reverse">
                <!-- large Side bar start-->

                <div id="col2" class="col-2 colordashbord fixed-top">

                    <hr class="dashboardhr">
                    <div class="nav nav-pills flex-column mb-auto logoutheight" >
                        <button onclick="bigtosmal()" style="background-color: transparent;
                                border: none;"><i class="fa-solid fa-arrow-right-to-bracket fa-flip-horizontal fa-lg" style="color: #ffffff;"></i></button>

                        <a href="#">
                            <img src="../Images/logo.png" alt="Home"  class="w-75 m-5 mb-1 mt-1">
                        </a>
                    </div>
                    <hr class="dashboardhr">
                    <div class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" onclick="dashborad()" class="nav-link navbarcolor"  aria-current="page">
                                <i class="fa-solid fa-gauge fa-xl icondash"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>

                            <a href="#" onclick="Course()" class="nav-link navbarcolor" >
                                <i class="fa-solid fa-graduation-cap fa-xl icondash"></i>
                                Courses
                            </a>

                        </li>
                        <li>
                            <a href="#" onclick="webiner()" class="nav-link navbarcolor" >
                                <i class="fa-solid fa-video fa-xl icondash"></i>
                                Webinars
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="profile()" class="nav-link navbarcolor" >
                                <i class="fa-solid fa-user fa-xl icondash"></i>
                                Profile
                            </a>
                        </li>
                        <br>
                        <br>

                    </div>

                    <hr class="dashboardhr">
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-power-off fa-lg loggedicon"></i>
                            <strong class="loggedout">Log Out</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">

                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                    <hr class="dashboardhr">
                </div>

                <!--  large Side bar end-->

                <!--  small Side bar start-->
                <div id="col1" class="col-1 flex-column colordashbord fixed-top">

                    <hr class="dashboardhr">

                    <div class="p-2">
                        <button onclick="smalltobig()" id="smalltobig" style="background-color: transparent;
                                border: none;"><i class="fa-solid fa-arrow-right-to-bracket fa-flip-vertical fa-lg" style="color: #ffffff;"></i></button>
                    </div>
                    <div class="p-2">
                        <a href="#">
                            <img src="../Images/LogoSmall.png" alt="Home" class="img-fluid">
                        </a>
                    </div>
                    <hr class="dashboardhr">
                    <!-- dashboard icon start -->
                    <div style="margin-left: -9px;">
                        <i  href="" onclick="dashborad()" class="fa-solid fa-gauge fa-xl icondash nav-link navbarcolorafter"></i>
                    </div>
                    <!-- dashboard icon end -->
                    <div style="margin-left: -9px;">
                        <i onclick="Course()" href="" class="fa-solid fa-graduation-cap fa-xl icondash nav-link navbarcolorafter"></i>
                    </div>

                    <div style="margin-left: -9px;">
                        <i  href="" onclick="webiner()" class="fa-solid fa-video fa-xl icondash nav-link navbarcolorafter"></i>
                    </div>

                    <div style="margin-left: -9px;">
                        <i href="" onclick="profile()" class="fa-solid fa-user fa-xl icondash nav-link navbarcolorafter"></i>
                    </div>
                    <br><br>


                    <hr class="dashboardhr">
                    <div style="margin-left: -9px;">
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-power-off fa-lg icondash"></i>

                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">

                                <li><a class="dropdown-item" href="#">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr class="dashboardhr">

                </div>

                <!--  small Side bar End-->


                <!--  body-->
                <div id="col10"class="col-10 col10edit">




                </div>







            </div>
        </div>

    </div>
    <?php
    // put your code here
    ?>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../JS/DashboardJS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
