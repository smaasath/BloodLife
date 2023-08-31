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
        <h1>BL profile</h1>



        
        <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">HospitalID</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0">HS001</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Hospital Name</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0">Jaffna Central Hospital</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0">Hospital Road,Jaffna</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">District</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0">Jaffna</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone No</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0">077 1028754</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0">CentralHospitalJaffna@gmail.com</p>
              </div>
            </div>
            <hr><!-- comment -->
            <div class="text-end">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
             </div>
            
            
             

            
          

    </div>
</div>
            
          
          </div>
        </div>

            
          
            
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          
       <form action="/action_page.php">
                        <label for="fname">HospitalID:</label>
                        <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">Hospital Name:</label>
                           <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">Address:</label>
                         <input type="text" id="fname" name="fname" value=""><br><br>
                        <label for="lname">District:</label>
                       <select name="District" id="Dis">
                                            <option value="volvo">Jaffna</option>
                                            <option value="saab">Mannar</option>
                                            <option value="opel">Badulla</option>
                                            <option value="audi">Anuradapura</option>
                                        </select><br><br>
                        <label for="lname">Phone No:</label>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                                       
                        
                        <label for="lname">Mobile:</label>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="lname">Email:</label>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        
                      </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
           
        <?php
        // put your code here
        ?>
    </body>
</html>
