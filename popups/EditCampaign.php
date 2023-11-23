                 <?php
                    require_once '../classes/Campaign.php';
                    require_once  '../classes/district.php';

                    use classes\district;
                    use classes\campaign;

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (!empty($_POST["campaignId"])) {
                            $campaignId = filter_var($_POST["campaignId"], FILTER_SANITIZE_NUMBER_INT);
                            $campaign = new campaign($campaignId, null, null, null, null, null, null, null, null);
                            //$Location = district::getDistrictDivisionById($campaign-> getCampaignId());
                            if ($campaign->getCampaignDetails($campaignId)) {
                                //$districtId = $campaign->getCampaignId();
//$rs = district::getDistrictDivisionById($districtId);
$Location = district::getDistrictDivisionById($campaign-> getCampaignId());
                                // Rest of your code
                            

                    ?>



                             <div class="row align-items-center pb-3">
                                 <div class="col-3">
                                     <h6>CampaignName</h6>
                                 </div>
                                 <div class="col-9">
                                     <input type="text" name="Title" value="<?php echo $campaign->getTitle(); ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                 </div>
                             </div>

                             <div class="row align-items-center pb-3">
                                 <div class="col-3">
                                     <h6>Start Date</h6>
                                 </div>
                                 <div class="col-9">
                                     <input type="date" name="startDate" value="<?php echo $campaign->getstartDate(); ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                 </div>
                             </div>
                             <div class="row align-items-center pb-3">
                                 <div class="col-3">
                                     <h6>End Date</h6>
                                 </div>
                                 <div class="col-9">
                                     <input type="date" name="endDate" value="<?php echo $campaign->getendDate(); ?>" id="endDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                 </div>
                             </div>

                             <div class="row align-items-center pb-3">
                                 <div class="col-3">
                                     <h6>Address</h6>
                                 </div>
                                 <div class="col-9">
                                     <input type="text" name="address" value="<?php echo $campaign->getAddress(); ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                 </div>
                             </div>

                            
                             





                            
            <div class="row align-items-center pb-3">
              <div class="col-3">
                <h6>District</h6>
              </div>
              <div class="col-9">
                <select name="district" class="form-control form-control-lg" id="district" onchange="functionTest(this.value)">
                  <option><?php echo $Location['district']; ?></option>
                  <?php


                  $dataArray = district::getAllDistrict(); // Retrieve district data using the "getAllDistrict()" method

                  foreach ($dataArray as $district) {
                  ?>

                    <option value="<?php echo $district['district']; ?>"><?php echo $district['district']; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="row align-items-center pb-3">
              <div class="col-3">
                <h6>Division</h6>
              </div>
              <div class="col-9">


                <select name="division" class="form-control form-control-lg" id="divisionDropDown" onchange="getBloodbank(this.value)">
                  <option><?php echo $Location['division']; ?></option>

                </select>
              </div>
            </div>

                             </div>
                             <div class="row align-items-center pb-3">
                                 <div class="col-3">
                                     <h6>Status</h6>
                                 </div>
                                 <div class="col-9">
                                     <select name="status" class="form-control" required>
                                         <option><?php echo $campaign->getStatus(); ?></option>
                                         <option value="Active">Active</option>
                                         <option value="Completed">Completed</option>
                                     </select>
                                 </div>

                             </div>
 <input type="hidden" name="campaignId" value="<?php echo $campaign->getCampaignId(); ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
 <input type="hidden" name="token" value="<?php echo $token; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                            
                 <?php
                            } else {
                            }
                        } else {
                        }
                    } else {
                    }

                    ?>


                 <script src="../JS/DashboardJS.js"></script>