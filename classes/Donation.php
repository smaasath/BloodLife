<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace classes;

/**
 * Description of Donation
 *
 * @author aasad
 */

require_once 'DbConnector.php';
require_once 'Validation.php';


use PDO;
use PDOException;
use classes\DbConnector;
use classes\Validation;



class Donation {

    private $donationId;
    private $donorId;
    private $bloodBankId;
    private $campaignId;
    private $certificate;
    private $bloodBankRequestId;

    public function __construct($donationId, $donorId, $bloodBankId, $campaignId, $certificate, $bloodBankRequestId) {
        $this->donationId = $donationId;
        $this->donorId = $donorId;
        $this->bloodBankId = $bloodBankId;
        $this->campaignId = $campaignId;
        $this->certificate = $certificate;
        $this->bloodBankRequestId = $bloodBankRequestId;
    }

    public function getDonationId() {
        return $this->donationId;
    }

    public function getDonorId() {
        return $this->donorId;
    }

    public function getBloodBankId() {
        return $this->bloodBankId;
    }

    public function getCampaignId() {
        return $this->campaignId;
    }

    public function getCertificate() {
        return $this->certificate;
    }

    public function getBloodBankRequestId() {
        return $this->bloodBankRequestId;
    }

    public function setDonationId($donationId): void {
        $this->donationId = $donationId;
    }

    public function setDonorId($donorId): void {
        $this->donorId = $donorId;
    }

    public function setBloodBankId($bloodBankId): void {
        $this->bloodBankId = $bloodBankId;
    }

    public function setCampaignId($campaignId): void {
        $this->campaignId = $campaignId;
    }

    public function setCertificate($certificate): void {
        $this->certificate = $certificate;
    }

    public function setBloodBankRequestId($bloodBankRequestId): void {
        $this->bloodBankRequestId = $bloodBankRequestId;
    }

    public function AddDonation() {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "INSERT INTO `donationtable` (`donationId`, `donorId`, `bloodBankId`, `campaignId`,`certificate`,`bloodBankRequestId`) VALUES (NULL, ?, ?, ?, ?,?);";

            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->donationId, PDO::PARAM_STR);
            $pstmt->bindValue(2, $this->donorId); // Use different placeholders for each parameter
            $pstmt->bindValue(3, $this->bloodBankId);
            $pstmt->bindValue(4, $this->campaignId);
            $pstmt->bindValue(5, $this->certificate, PDO::PARAM_LOB);
            $pstmt->bindValue(6, $this->bloodBankRequestId);
            $pstmt->execute();
            return $pstmt->rowCount() > 0;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function divideLetters($string) {
        preg_match_all('/[0-9]+|[a-zA-Z]+/', $string, $matches);

        $numbers = implode('', preg_grep('/[0-9]+/', $matches[0]));
        $letters = implode('', preg_grep('/[a-zA-Z]+/', $matches[0]));

        return array("type" => $letters, "EncryptedId" => $numbers);
    }

}
