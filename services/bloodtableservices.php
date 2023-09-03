<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace classes;

require '../classes/Bloodtable.php';

use classes\Bloodtable;

if (isset($_POST["getbbdetails"])) {
    $bloodBankId = $_POST["getbbdetails"];
    $dataArray = Bloodtable::getAllbloodpackets($bloodBankId);

    foreach ($dataArray as $packets) {
        echo '      <td class="col-2" style="text-align: center">' . $packets["bloodId"] . '</td>
                    <td class="col-2" style="text-align: center">' . $packets["bloodGroup"] . '</td>
                    <td class="col-2" style="text-align: center">' . $packets["expiryDate"] . '</td>
                    <td class="col-2" style="text-align: center">' . $packets["quantity"] . '</td>
                    <td class="col-2" style="text-align: center">' . $packets["status"] . '</td>
                    <td class="col-1"><button type="button" class="viewbtn" onclick="openBloodbankDetails()" data-bs-toggle="modal" data-bs-target="#viewModal" style="text-align: center">View</button></td>';
    }
}