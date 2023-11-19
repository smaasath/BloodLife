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
                    <h6>Hospital Name</h6>
                </div>
                <div class="col-9">
                    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $hospital->getName(); ?>" required>

                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-3">
                    <h6>Address</h6>
                </div>
                <div class="col-9">
                    <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $hospital->getAddress(); ?>" required>
                </div>
            </div>

            <div class="row align-items-center pb-3">
                <div class="col-3">
                    <h6>District</h6>
                </div>
                <div class="col-9">
                    <select name="district" class="form-control-sm form-control-sm" id="district" onchange="functionTestt(this.value)">
                        <option><?php echo $rs["district"]; ?></option>
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
                    <h6>DS Division</h6>
                </div>
                <div class="col-9">
                    <select name="division" class="form-control-sm form-control-sm" id="divisionDropDownp" onchange="getBloodBank(this.value)">
                        <option><?php echo $rs["division"]; ?></option>
                    </select>
                </div>

            </div>
            <div class="row align-items-center pb-3">
                <div class="col-3">
                    <h6>Contact No</h6>
                </div>
                <div class="col-9">
                    <input type="text" name="contactNumber" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $hospital->getContactNumber(); ?>" required id="contactNumberInput" oninput="validateMobileNumber(this.value)">
                   
                    <p id="validationResult"></p>
                </div>
            </div>
            <input type="hidden" value="<?php echo $hospital->getHospitalId(); ?>" name="hospitalId">
            





<?php
        }
    }
}
?>
<script src="../JS/DashboardJS.js"></script>