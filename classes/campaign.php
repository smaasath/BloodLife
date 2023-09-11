<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace classes;

require_once 'DbConnector.php';

use PDO;
use PDOException;
use classes\DbConnector;

class campaign {
   
    
    private $campaignId;
    private $Title;
    private $address;
    private $startDate;
    private $endDate;
    private $review;
    private $status;
    private $districtId;
    private $organizerId;
    private $bloodBankId;
    
    public function __construct($campaignId, $Title, $address, $startDate, $endDate, $review, $status, $districtId, $organizerId, $bloodBankId) {
        $this->campaignId = $campaignId;
        $this->Title = $Title;
        $this->address = $address;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->review = $review;
        $this->status = $status;
        $this->districtId = $districtId;
        $this->organizerId = $organizerId;
        $this->bloodBankId = $bloodBankId;
    }
    
    public function getCampaignId() {
        return $this->campaignId;
    }

    public function getTitle() {
        return $this->Title;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function getReview() {
        return $this->review;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getDistrictId() {
        return $this->districtId;
    }

    public function getOrganizerId() {
        return $this->organizerId;
    }

    public function getBloodBankId() {
        return $this->bloodBankId;
    }


    public function setCampaignId($campaignId): void {
        $this->campaignId = $campaignId;
    }

    public function setTitle($Title): void {
        $this->Title = $Title;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }

    public function setStartDate($startDate): void {
        $this->startDate = $startDate;
    }

    public function setEndDate($endDate): void {
        $this->endDate = $endDate;
    }

    public function setReview($review): void {
        $this->review = $review;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

    public function setDistrictId($districtId): void {
        $this->districtId = $districtId;
    }

    public function setOrganizerId($organizerId): void {
        $this->organizerId = $organizerId;
    }

    public function setBloodBankId($bloodBankId): void {
        $this->bloodBankId = $bloodBankId;
    }


    
    public static function AddCampaign( $Title, $address, $startDate, $endDate, $review, $status, $districtId, $organizerId, $bloodBankId) {
    try {
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        $query = "INSERT INTO `campaigntable` (`campaignId`, `Title`, `address`, `startDate`, `endDate`, `review`, `status`, `districtId`, `organizerId`, `bloodBankId`) VALUES (NULL, ?, ?, ?, ?, ?, ?, NULL, NULL, NULL);";

        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $Title);
        $pstmt->bindValue(2, $address); 
        $pstmt->bindValue(3, $startDate);
        $pstmt->bindValue(4, $endDate);
        $pstmt->bindValue(5, $review);

        $pstmt->bindValue(6,  $status);
        $pstmt->bindValue(7, $districtId);
        $pstmt->bindValue(8, $organizerId);
        $pstmt->bindValue(9, $bloodBankId);
        


        $pstmt->execute();

        if ($pstmt->rowCount() > 0) {
            echo 'Success.';
        } else {
            echo 'Error';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}















}
