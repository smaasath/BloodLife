<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace classes;
require '../classes/bloodBank.php';
use classes\bloodBank;


 if (isset($_POST["bloodBank"])) {
     $bloodBankId= $_POST["bloodBank"];
     bloodBank::showbloodbankdetails($bloodBankId);
    }
?>