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
        <h1>Hospital Request Edit</h1>
      
  <div class="form-container">
    <h1>Edit Form</h1>
    <form>
      <div class="field">
        <label for="bloodGroup">Blood Group:</label>
        <input type="text" id="bloodGroup" name="bloodGroup" value="O+">
      </div>
      <div class="field">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="2023-08-25">
      </div>
      <div class="field">
        <label for="bloodQuantity">Blood Quantity:</label>
        <input type="text" id="bloodQuantity" name="bloodQuantity" value="250 ml">
      </div>
      <div class="field">
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" value="Available">
      </div>
      <div class="field">
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="Sample Location">
      </div>
      <div class="field">
        <label for="district">District:</label>
        <input type="text" id="district" name="district" value="Sample District">
      </div>
      <button class="edit-button">Publish Request</button>
    </form>
  </div>


        <?php
        // put your code here
        ?>
    </body>
</html>
