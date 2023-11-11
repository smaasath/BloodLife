<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once '../classes/district.php';

use classes\district;

header('Content-Type: application/json');
$method = $_SERVER["REQUEST_METHOD"];


if ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    
    if(isset($data["district"])){
         $district = filter_var($data['district'], FILTER_SANITIZE_STRING);
         $bloodbanks = district::getBloodBanks($district);
         echo json_encode($bloodbanks);
        
    }
    
  
}