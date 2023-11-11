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
                <div class="col-4">
                    <h6>Hospital Name : </h6>
                </div>
                <div class="col-8 text-left">
                    <?php echo $hospital->getName(); ?>
                </div>

            </div>

            <div class="row align-items-center pb-3">
            <div class="col-4">
                    <h6>Address :</h6>
                </div>
                <div class="col-8 text-left">
                <?php echo $hospital->getAddress(); ?>
                </div>
            </div>

            <div class="row align-items-center pb-3">
                <div class="col-4">
                    <h6>District : </h6>
                </div>
                <div class="col-8 text-left">
                <?php echo $rs["district"]; ?>
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-4">
                    <h6>DS Division : </h6>
                </div>
                <div class="col-8 text-left">
                <?php echo $rs["division"]; ?>
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-4">
                    <h6>Contact No : </h6>
                </div>
                <div class="col-8 text-left">
                <?php echo $hospital->getContactNumber(); ?>
                </div>
            </div>







<?php
        }
    }
}
?>
<script src="../JS/DashboardJS.js"></script>