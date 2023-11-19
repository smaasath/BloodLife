<?php
require_once '../classes/Campaign.php';
require_once  '../classes/district.php';

use classes\district;
use classes\campaign;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET["camid"])) {
        $campaignId = filter_var($_GET["camid"], FILTER_SANITIZE_NUMBER_INT);
        $campaign = new campaign($campaignId, null, null, null, null, null, null, null, null);
        if ($campaign->getCampaignDetails()) {
            $districtId = $campaign->getDistrictId();
            $rs = district::getDistrictDivisionById($districtId);
            // Rest of your code


?>



            <div class="row bg-white m-3 pt-0  align-items-center justify-content-center rounded-5" style="height: 600px;">



                <div class="col-lg-6">
                    <div class="form-container">

                        <div class="row align-items-center mt-3">
                            <div class="col-5 justify-content-center">
                                <h6>CampaignName</h6>
                            </div>
                            <div class="col-7 pl-4 justify-content-center">
                                <?php echo $campaign->getTitle(); ?>
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
                                <h6>Location</h6>
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-6">
                                        <select name="district" class="form-control form-control-lg" id="district" onchange="functionTest(this.value)">
                                            <option><?php echo $rs['district']; ?></option>
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
                                    <div class="col-6">

                                        <select name="division" class="form-control form-control-lg" id="divisionDropDown" onchange="getBloodBank(this.value)">
                                            <option><?php echo $rs['division']; ?></option>

                                        </select>
                                    </div>

                                </div>
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

                </div>
         

            <div class="col-6 align-items-center justify-content-center">
                <img class="d-none d-xl-block" src="../Images/hospitalreq.png" />
            </div>
            </div>


<?php
        } else {
        }
    } else {
    }
} else {
}

?>