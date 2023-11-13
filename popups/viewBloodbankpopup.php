<?php
require_once '../classes/district.php';
require_once '../classes/bloodBank.php';


use classes\district;
use classes\bloodBank;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST["bloodBankId"])) {
        $bloodBankId = filter_var($_POST["bloodBankId"], FILTER_SANITIZE_NUMBER_INT);
        $bloodBank = new bloodBank($bloodBankId, null, null, null, null);
        if ($bloodBank->GetBloodbankData($bloodBankId)) {
            $districtId = $bloodBank->getDistrictId();
            $rs = district::getDistrictDivisionById($districtId);

?>


            <div class="row align-items-center pb-3">
                <div class="col-4">
                    <h6>bloodBank Name : </h6>
                </div>
                <div class="col-8 text-left">
                    <?php echo $bloodBank->getBloodBankName(); ?>
                </div>

            </div>

            <div class="row align-items-center pb-3">
            <div class="col-4">
                    <h6>Address :</h6>
                </div>
                <div class="col-8 text-left">
                <?php echo  $bloodBank->getAddress(); ?>
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
                <?php echo $bloodBank->getContactNo(); ?>
                </div>
            </div>







<?php
        }
    }
}
?>
<script src="../JS/DashboardJS.js"></script>