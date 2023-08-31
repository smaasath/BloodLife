
<?php
session_start();

if (isset($_GET['page'])) {
    $_SESSION['selectedLink'] = $_GET['page'];
}
?>


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
        <title>Hospital Dashboard</title>
        <link rel="stylesheet" href="../CSS/DashboardCSS.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
        
        <link rel="stylesheet" href="../CSS/hospitalstock.css">
        
        
        <link rel="stylesheet" href="../CSS/HospitalRequestView.css">
        <link rel="stylesheet" href="../CSS/HospitalRequestEdit.css">
       
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-wrap flex-row-reverse">
                <!-- large Side bar start-->

                <div id="col2" class="col-2 colordashbord fixed-top" style=" z-index: 10000 !important;">

                    <hr class="dashboardhr">
                    <div class="nav nav-pills flex-column mb-auto logoutheight" >
                        <button onclick="bigtosmal()" style="background-color: transparent;
                                border: none;"><i class="fa-solid fa-arrow-right-to-bracket fa-flip-horizontal fa-lg" style="color: #ffffff;"></i></button>

                        <a href="#">
                            <img src="../Images/logo.jpg" alt="Home"  class="w-50 m-5 mb-1 mt-4 rounded-5 logimage">
                        </a>
                    </div>
                    <hr class="dashboardhr">
                    <div class="nav nav-pills flex-column mb-1">
                        <li>
                            
                            <a href="HospitalDashboard.php?page=hospital" class="nav-link navbarcolor <?php echo ($_SESSION['selectedLink'] ?? '') === 'hospital' ? 'active' : ''; ?><?php echo ($_SESSION['selectedLink'] ?? '') === '' ? 'active' : ''; ?><?php echo ($_SESSION['selectedLink'] ?? '') === 'hospitalreqview' ? 'active' : ''; ?><?php echo ($_SESSION['selectedLink'] ?? '') === 'hospitalreqedit' ? 'active' : ''; ?>"  aria-current="page">
                               
                                        <i class="fa-solid fa-square-h fa-xl icondash"></i>
                                   
                                        Hospital Request
                                  
                            </a>

                        </li>

                        

                        <li>
                            <a href="HospitalDashboard.php?page=stock" class="nav-link navbarcolor <?php echo ($_SESSION['selectedLink'] ?? '') === 'stock' ? 'active' : ''; ?>"  aria-current="page">
                                
                                        <i class="fa-solid fa-warehouse fa-xl icondash"></i>
                                   
                                        Blood Stock
                                  
                            </a>

                        </li>

                       

                        

                        <li>
                            <a href="HospitalDashboard.php?page=profile" class="nav-link navbarcolor <?php echo ($_SESSION['selectedLink'] ?? '') === 'profile' ? 'active' : ''; ?>"  aria-current="page">
                                
                                        <i class="fa-solid fa-user fa-xl icondash"></i>
                                    
                                        Profile
                                   
                            </a>

                        </li>






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
                <div id="col1" class="col-1 flex-column colordashbord fixed-top" style=" z-index: 100 !important;">

                    <hr class="dashboardhr">

                    <div class="p-2">
                        <button onclick="smalltobig()" id="smalltobig" style="background-color: transparent;
                                border: none;"><i class="fa-solid fa-arrow-right-to-bracket fa-flip-vertical fa-lg" style="color: #ffffff;"></i></button>
                    </div>
                    <div class="p-2">
                        <a href="#">
                            <img src="../Images/LogoSmall.png" alt="Home" class="img-fluid rounded-3 logimage" style="width: 50%;">
                        </a>
                    </div>
                    <hr class="dashboardhr">
                    <!-- dashboard icon start -->

                    <div style="margin-left: -9px;">

                        <i  href="HospitalDashboard.php?page=hospital" class="fa-solid fa-square-h fa-xl icondash nav-link navbarcolorafter <?php echo ($_SESSION['selectedLink'] ?? '') === 'hospital' ? 'active' : ''; ?><?php echo ($_SESSION['selectedLink'] ?? '') === '' ? 'active' : ''; ?><?php echo ($_SESSION['selectedLink'] ?? '') === 'hospitalreqview' ? 'active' : ''; ?><?php echo ($_SESSION['selectedLink'] ?? '') === 'hospitalreqedit' ? 'active' : ''; ?>"></i>
                    </div>
                    <!-- dashboard icon end -->
                   
                    <div style="margin-left: -9px;">
                        <i  href="HospitalDashboard.php?page=stock" class="fa-solid fa-warehouse fa-xl icondash nav-link navbarcolorafter <?php echo ($_SESSION['selectedLink'] ?? '') === 'stock' ? 'active' : ''; ?>"></i>
                    </div>

                    <div style="margin-left: -9px;">
                        <i href="HospitalDashboard.php?page=profile" class="fa-solid fa-user fa-xl icondash nav-link navbarcolorafter <?php echo ($_SESSION['selectedLink'] ?? '') === 'profile' ? 'active' : ''; ?>"></i>
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
                    
                    

                     <?php
                      if (isset($_SESSION['selectedLink'])) {
                        if($_SESSION['selectedLink']=="hospital"){
                             include '../DashboardFiles/HospitalFiles/HospitalRequest.php';
                        }elseif ($_SESSION['selectedLink']=="stock") {
                             include '../DashboardFiles/HospitalFiles/HospitalBloodStock.php';
                        }elseif ($_SESSION['selectedLink']=="hospitalreqview") {
                             include '../DashboardFiles/HospitalFiles/HospitalRequestView.php';
                        }elseif ($_SESSION['selectedLink']=="hospitalreqedit") {
                             include '../DashboardFiles/HospitalFiles/HospitalRequestEdit.php';
                        } else {
                             include '../DashboardFiles/HospitalFiles/HospitalProfile.php';
                        }
    

                    } else {
                         include '../DashboardFiles/HospitalFiles/HospitalRequest.php';
                    }
                     
                     
                     
                     ?>


                </div>







            </div>
        </div>

    </div>
    <?php
// put your code here
    ?>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../JS/Hospitaldash.js"></script>
    <script src="../JS/DashboardJS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

    </body>
</html>
