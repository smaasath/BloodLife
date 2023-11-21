<
        <?php          
                    require_once '../classes/bloodBank.php';
                    require_once '../classes/district.php';
                    
                    
                    use classes\district;
                    
                  
                    use classes\bloodBank;
                

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (!empty($_POST["bloodBankId"])) {
                            $bloodBankId = filter_var($_POST["bloodBankId"], FILTER_SANITIZE_NUMBER_INT);
                            $bloodBank = new bloodBank($bloodBankId, null, null, null, null);
                            if ($bloodBank->GetBloodbankByName()) {
                                $districtId = $bloodBank->getDistrictId();
                                $rs = district::getDistrictDivisionById($districtId);
                                // Rest of your code
                            

                    ?>
                    


          
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
          

        <?php

} else {
}
} else {
}
} else {
}

?>


<script src="../JS/DashboardJS.js"></script>