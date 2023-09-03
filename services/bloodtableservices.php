<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace classes;
require '../classes/Bloodtable.php';
use classes\Bloodtable;

if (isset($_POST["Bloodtable"])) {
     $bloodBankId = $_POST["Bloodtable"];
     bloodBank::showbloodbankdetails($bloodBankId );
    }

    if (isset($_POST["Bloodtable"])) {
     $bloodId  = $_POST["Bloodtable"];
     bloodBank::showbloodbankdetails($bloodId  );
    }
