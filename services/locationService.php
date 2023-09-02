<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace classes;
require '../classes/district.php';
use classes\district;

if (isset($_POST["district"])) {
        $district = $_POST["district"];
        district::getAllDivision($district);
    }
    
 if (isset($_POST["division"])) {
        $bank = $_POST["division"];
        district::getAllBloodBank($bank);
        
    }
?>