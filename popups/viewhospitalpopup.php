<?php
require_once '../classes/district.php';
require_once '../classes/hospital.php';


use classes\district;
use classes\hospital;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST["hospitalId"])) {
        $hospitalId = filter_var($_POST["hospitalId"], FILTER_SANITIZE_NUMBER_INT);
        $hospital = new hospital($hospitalId, null, null, null, null);
        if ($hospital->GetHospitalData($hospitalId)) {
            $districtId = $hospital->getDistrictId();
            $rs = district::getDistrictDivisionById($districtId);

?>


            <div class="row align-items-center pb-3">
                <div class="col-3">
                    <h6>Hospital Name : <?php echo $hospital->getName(); ?> </h6>
                </div>
                
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-3">
                    <h6>Address : <?php echo $hospital->getAddress(); ?></h6>
                </div>
               
            </div>

            <div class="row align-items-center pb-3">
                <div class="col-3">
                    <h6>District : <?php echo $rs["district"]; ?></h6>
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-3">
                    <h6>DS Division : <?php echo $rs["division"]; ?></h6>
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-3">
                    <h6>Contact No : <?php echo $hospital->getContactNumber(); ?></h6>
                </div>
                
            </div>

            





<?php
        }
    }
}
?>
<script src="../JS/DashboardJS.js"></script>