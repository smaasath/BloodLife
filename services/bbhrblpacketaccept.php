<?php
require_once '../classes/Bloodtable.php';
require_once '../classes/validation.php';
require_once '../classes/User.php';

use classes\User;
use classes\Bloodtable;
use classes\validation;

$status;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["bloodId"])) {
        if (!empty($_POST["bloodId"])) {
            $bloodId = $_POST["bloodId"];
            foreach ($bloodId as $id) {
                $bloodpackets = new Bloodtable($id, null, null, null, null, null);
                $bloodpackets->GetBloodpacketsData();
                $bloodpackets->setStatus("Given");
                $bloodpackets->Editbloodpacket();
            }
            $status = 5;
        } else {
            $status = "All Fields need to be Filled!";
        }
    } else {
        $status = "All Fields need to be Filled!";
    }
} else {
    $status = "Invalid Request Method!";
}
$encrptedmessage=validation::encryptedValue($status);
header("Location: ../Dashboards/BloodBankDashboard.php?status=$encrptedmessage");
