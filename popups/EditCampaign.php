                 <?php
                    require_once '../classes/Campaign.php';
                    require_once  '../classes/district.php';
                   
                    use classes\district;
                    use classes\campaign;
                  
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                        if (isset($_POST["campaignId"])) {
                            $campaignId = filter_var($_POST["campaignId"], FILTER_SANITIZE_NUMBER_INT);
                            $campaign = new campaign($campaignId, null, null, null, null, null, null, null, null);
                            if ($campaign->getCampaignDetails($campaignId)) {
                                $districtId = $campaign->getDistrictId();
                                $rs = district::getDistrictDivisionById($districtId);


                    ?>

                 <div class="row align-items-center pb-3">
                     <div class="col-3">
                         <h6>CampaignId</h6>
                     </div>
                     <div class="col-9">
                         <input type="text" name="EditTitle" id="EditTitle" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                     </div>
                 </div>

                 <div class="row align-items-center pb-3">
                     <div class="col-3">
                         <h6>CampaignName</h6>
                     </div>
                     <div class="col-9">
                         <input type="text" name="Title" id="Title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                     </div>
                 </div>

                 <div class="row align-items-center pb-3">
                     <div class="col-3">
                         <h6>Start Date</h6>
                     </div>
                     <div class="col-9">
                         <input type="text" name="startDate" id="startDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                     </div>
                 </div>
                 <div class="row align-items-center pb-3">
                     <div class="col-3">
                         <h6>End Date</h6>
                     </div>
                     <div class="col-9">
                         <input type="date" name="endDate" id="endDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                     </div>
                 </div>


                 <div class="row align-items-center pb-3">
                     <div class="col-3">
                         <h6>status</h6>
                     </div>
                     <div class="col-9">
                         <input type="text " name="status" id="status" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                     </div>
                 </div>
                
                 <?php
                            }}
}

?>


<script src="../JS/DashboardJS.js"></script>