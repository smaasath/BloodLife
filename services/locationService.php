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
       $dataArray =  district::getAllDivision($district);
        echo ' <option>Select Division</option>';
        
        foreach ($dataArray as $division) {
                echo ' <option value=' . $division["division"] . '>' . $division["division"] . '</option>';
            }
    }
    
 if (isset($_POST["division"])) {
        $bank = $_POST["division"];
        $dataArray = district::getBloodBanks($bank);
        echo ' <option>Select Blood Bank</option>';
        foreach ($dataArray as $bloodbank) {
                echo ' <option value=' . $bloodbank["bloodBankId"] . '>' . $bloodbank["bloodBankName"] . '</option>';
            }
        
    }
?>