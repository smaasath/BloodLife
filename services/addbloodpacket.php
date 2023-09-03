<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace classes;

require '../classes/Bloodtable.php';

use classes\Bloodtable;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bloodGroup = filter_var($_POST['bloodGroup'],FILTER_SANITIZE_STRING);
    $quantity = filter_var($_POST['quantity'],FILTER_SANITIZE_STRING);
    $expiryDate = filter_var($_POST['expiryDate'],FILTER_SANITIZE_STRING);
    $status = filter_var($_POST['status'],FILTER_SANITIZE_STRING);
    
    echo $bloodGroup;
    echo $quantity;
    echo $expiryDate;
    echo $status;

}

