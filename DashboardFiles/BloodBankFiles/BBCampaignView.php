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
        


?>







            
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">

                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <strong> CampaignName</strong>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="text-muted mb-0" name="EditTitle"  ><?php echo $campaign->getTitle(); ?></p>
                                                        </div>

                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <strong>Start Date</strong>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="text-muted mb-0" name="startDate" > <?php echo $campaign->getstartDate(); ?>"</p>
                                                        </div>

                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <strong>End Date</strong>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="text-muted mb-0" name="endDate"> <?php echo $campaign->getendDate(); ?>"</p>
                                                        </div>

                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <strong>Address</strong>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="text-muted mb-0"><?php echo $campaign->getAddress(); ?></p>
                                                        </div>

                                                        <div class="row align-items-center pb-3">

                                                        </div>

                                                        <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <strong>lol</strong>
                                                        </div>
                                                        <div class="col-sm-8">
                                                             <p class="text-muted mb-0" name="startDate" ><?php echo $rs['district']; ?></p>
                                                        </div>
                                                        <div class="row align-items-center pb-3">

</div>

                                                        
                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <strong>Division</strong>
                                                        </div>
                                                        <div class="col-sm-8">
                                                             <p class="text-muted mb-0" name="startDate" ><?php echo $rs['division']; ?></p>
                                                        </div>

                                                        <div class="row align-items-center pb-3">
                                                        </div>
                                                  
                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <strong>Status</strong>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="text-muted mb-0"><?php echo $campaign->getStatus(); ?></p>
                                                        </div>
                                                        <div class="row align-items-center pb-3">

</div>
                                                    </div>
                                                    </div> </div> </div> </div>
                                                   
                                                    </div>
            </div>
        
        
        </div></div>


                                  




         

                             

<?php
        } else {
        }
    } else {
    }
} else {
    
}



?>

