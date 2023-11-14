


<?php
require_once '../classes/Bloodtable.php';

use classes\Bloodtable;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["bloodId"])) {

        if (!empty($_POST["bloodId"])) {
            $bloodId = filter_var($_POST["bloodId"], FILTER_SANITIZE_NUMBER_INT);
            $bloodpackets = new Bloodtable($bloodId, null, null, null, null, null);
            if($bloodpackets->GetBloodpacketsData()){

            

?>
             <label for="BloodGroup">BloodGroup:</label>
                                    <select class="form-select" name="bloodgroup" aria-laquantitybel="Default select example" required>
                                        <option value="" selected><?php echo $bloodpackets->getBloodGroup() ?></option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select><br>
                                    <label for="Quantity">Quantity(ml):</label>
                                    <input type="number" class="form-control" name="quantity" value="<?php  echo $bloodpackets->getQuantity()?>" oninput="sanitizeQuantity(this);" maxlength="3" required><br>
                                    <label for="ExpiryDate">Expiry Date:</label>
                                    <input type="date" class="form-control" name="expiryDate" value="<?php  echo $bloodpackets->getExpiryDate()?>" oninput="sanitizeExpiryDate(this)" required><br>
                                    <label for="status">Status:</label>
                                    <select class="form-select" name="status" aria-laquantitybel="Default select example" required>
                                    <option value="" selected><?php  echo $bloodpackets->getStatus()?></option>
                                        <option value="Available">Available</option>
                                        <option value="Given">Given</option>
                                        <option value="Expired">Expired</option>
                                    </select><br>
<?php
            }else{
                echo 'bloodpacket not found';
            }
        } else {
            echo 'bloodid empty';
        }
    } else {
        echo 'not recieved';
    }
   
} else {
    echo ' not post';
}
