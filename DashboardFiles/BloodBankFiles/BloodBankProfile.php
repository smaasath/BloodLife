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
        
        
        
         <div class="container">
            <img src="https://ichef.bbci.co.uk/news/624/cpsprodpb/59D8/production/_91400032_blooddonationspl027788188.jpg" alt="Blood" width="100%" height="200">



           

        </div>
        <br><br>
        
        
        
        
        
        
        
        
        <!-- body start -->
    <center><h1> BL PROFILE </h1></center>



        
        <div class="col-lg-8" style="margin-left:150px;width: 500px">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4">
                  <p class="mb-0"><span class="fw-bold">HospitalID</span></p>
              </div>
              <div class="col-sm-4">
                <p class="text-muted mb-0">HS001</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0"><span class="fw-bold">Hospital Name</span></p>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-0">Jaffna Central Hospital</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0"><span class="fw-bold">Address</span></p>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-0">Hospital Road,Jaffna</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0"><span class="fw-bold">District</span></p>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-0">Jaffna</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0"><span class="fw-bold">Phone No</span></p>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-0">077 1028754</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0"><span class="fw-bold">Mobile</span></p>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0"><span class="fw-bold">Email</span></p>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-0">CentralHospitalJaffna@gmail.com</p>
              </div>
            </div>
            <hr><!-- comment -->
            <div class="text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
             </div>
            
            
             

            
          

    </div>
</div>
            
          
          </div>
       
            
          
            
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hospital Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          
       <form action="/action_page.php">
           
           
            <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>HospitalID</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Hospital Name</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Address</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="date"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
            <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>District</h6>
                                    </div>
                                <div class="col-9">
                                        <select class="form-control form-control-lg">
                                            <option selected>Select your District</option>
                                            <option value="1">Mannar</option>
                                            <option value="2"> </option>
                                            <option value="3"> </option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>HospitalID</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
            <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Phone No</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
            <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Mobile No</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
            <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Email</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                    
                                    
                                    
                                    
                        
                       
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
