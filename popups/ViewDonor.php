<?php
                  require_once '../classes/Donor.php';
                  
                  require_once  '../classes/district.php';
                  
                  use classes\district;
                  
                
                  use classes\Donor;
              

                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      if (!empty($_POST["donorId"])) {
                          $donorId = filter_var($_POST["donorId"], FILTER_SANITIZE_NUMBER_INT);
                          $Donor = new Donor($donorId, null, null, null, null, null, null, null, null, null, null, null, null, null);
                          if ($Donor->getDonorDetails()) {
                              $districtId = $Donor->getDistrictId();
                              $rs = district::getDistrictDivisionById($districtId);
                              // Rest of your code
                          

                  ?>





                             <div class="row align-items-center mt-3">
                                 <div class="col-5 justify-content-center">
                                     <h6>DonorID</h6>
                                 </div>
                                 <div class="col-7 pl-4 justify-content-center">
                                 <?php echo $Donor->getname(); ?>
                                 </div>
                             </div>

                             <div class="row align-items-center pb-3">
                             <div class="col-5 justify-content-center">
                                     <h6>DonorName</h6>
                                 </div>
                                 <div class="col-7 pl-4 justify-content-center">
                                 <?php echo $Donor->getName(); ?>
                                 </div>

                             </div>
                             <div class="row align-items-center pb-3">
                             <div class="col-5 justify-content-center">
                                     <h6>BloodGroup</h6>
                                 </div>
                                 <div class="col-7 pl-4 justify-content-center">
                                 <?php echo $Donor->getBloodGroup(); ?>
                                 </div>
                             </div>

                             <div class="row align-items-center pb-3">
                             <div class="col-5 justify-content-center">
                                     <h6>contactNumber</h6>
                                 </div>
                                 <div class="col-7 pl-4 justify-content-center">
                                 <?php echo $Donor->getcontactNumber(); ?>
                                 </div>
                             </div>

                             
                            

                             </div>
                             <div class="row align-items-center pb-3">
                             <div class="col-5 justify-content-center">
                               
                                     <h6>NIC</h6>
                                 </div>
                                 
                                 <div class="col-7 pl-4 justify-content-center">
                                 <?php echo $Donor->getNic(); ?>
                                 </div>

                             </div>
                             </div>

                             <div class="row align-items-center pb-3">
                             <div class="col-5 justify-content-center">
                                
                                     <h6>Availability</h6>
                                 </div>
                                 
                                 <div class="col-7 pl-4 justify-content-center">
                                 <?php echo $Donor->getAvailability(); ?>
                                 </div>

                             </div>
                             </div>
 <input type="hidden" name="campaignId" value="  <?php echo $Donor->getname(); ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>

                            
                 <?php
                            } else {
                            }
                        } else {
                        }
                    } else {
                    }

                    ?>


                 <script src="../JS/DashboardJS.js"></script>