<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace classes;
require '../classes/Campaign.php';
require '../classes/district.php';


use classes\district;
use classes\campaign;



if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $Title = filter_var($_POST['Title'],FILTER_SANITIZE_NUMBER_INT);
    $address = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
    $startDate = filter_var($_POST['startDate'],FILTER_SANITIZE_STRING);
    $endDate = filter_var( $_POST['endDate'],FILTER_SANITIZE_STRING);
    $review = filter_var($_POST['review'],FILTER_SANITIZE_STRING);
    $status= filter_var($_POST['status'],FILTER_SANITIZE_STRING);
   // $districtId = filter_var($_POST['districtId'],FILTER_SANITIZE_NUMBER_INT);
   // $organizerId  =filter_var( $_POST['organizerId'],FILTER_SANITIZE_NUMBER_INT);
    //$bloodBankId = filter_var($_POST['bloodBankId'],FILTER_SANITIZE_NUMBER_INT);
    
//$districtId = district::getDistrictIDDD($district, $division);
//echo $campaignId  ;






    
campaign::AddCampaign($Title, $address, $startDate, $endDate, $review, $status);

}