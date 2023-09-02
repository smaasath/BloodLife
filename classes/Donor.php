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

/**
 * Description of Add Donor
 *
 * @author HP
 */
class Donor {

    private $donorId;
    private $name;
    private $bloodGroup;
    private $dob;
    private $contactNumber;
    private $nic;
    private $noOfDonation;
    private $coinValue;
    private $donationLastDate;
    private $availability;
    private $medicalReport;
    private $bloodBankId;
    private $districtId;

    public function __construct($donorId, $name, $bloodGroup, $dob, $contactNumber, $nic, $noOfDonation, $coinValue, $donationLastDate, $availability, $medicalReport, $bloodBankId, $districtId) {
        $this->donorId = $donorId;
        $this->name = $name;
        $this->bloodGroup = $bloodGroup;
        $this->dob = $dob;
        $this->contactNumber = $contactNumber;
        $this->nic = $nic;
        $this->noOfDonation = $noOfDonation;
        $this->coinValue = $coinValue;
        $this->donationLastDate = $donationLastDate;
        $this->availability = $availability;
        $this->medicalReport = $medicalReport;
        $this->bloodBankId = $bloodBankId;
        $this->districtId = $districtId;
    }
    
    

    public function getDonorId() {
        return $this->donorId;
    }

    public function getName() {
        return $this->name;
    }

    public function getBloodGroup() {
        return $this->bloodGroup;
    }

    public function getDob() {
        return $this->dob;
    }

    public function getContactNumber() {
        return $this->contactNumber;
    }

    public function getNic() {
        return $this->nic;
    }

    public function getNoOfDonation() {
        return $this->noOfDonation;
    }

    public function getCoinValue() {
        return $this->coinValue;
    }

    public function getDonationLastDate() {
        return $this->donationLastDate;
    }

    public function getAvailability() {
        return $this->availability;
    }

    public function getMedicalReport() {
        return $this->medicalReport;
    }

    public function getBloodBankId() {
        return $this->bloodBankId;
    }

    public function getDistrictId() {
        return $this->districtId;
    }

    public function setDonorId($donorId): void {
        $this->donorId = $donorId;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setBloodGroup($bloodGroup): void {
        $this->bloodGroup = $bloodGroup;
    }

    public function setDob($dob): void {
        $this->dob = $dob;
    }

    public function setContactNumber($contactNumber): void {
        $this->contactNumber = $contactNumber;
    }

    public function setNic($nic): void {
        $this->nic = $nic;
    }

    public function setNoOfDonation($noOfDonation): void {
        $this->noOfDonation = $noOfDonation;
    }

    public function setCoinValue($coinValue): void {
        $this->coinValue = $coinValue;
    }

    public function setDonationLastDate($donationLastDate): void {
        $this->donationLastDate = $donationLastDate;
    }

    public function setAvailability($availability): void {
        $this->availability = $availability;
    }

    public function setMedicalReport($medicalReport): void {
        $this->medicalReport = $medicalReport;
    }

    public function setBloodBankId($bloodBankId): void {
        $this->bloodBankId = $bloodBankId;
    }

    public function setDistrictId($districtId): void {
        $this->districtId = $districtId;
    }
public static function AddDonor($name, $bloodGroup, $dob, $contactNumber, $nic, $noOfDonation, $coinValue, $donationLastDate, $availability, $medicalReport, $bloodBankId, $districtId) {
    try {
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        $query = "INSERT INTO `donor` (`donorId`, `name`, `bloodGroup`, `dob`, `contactNumber`, `nic`, `noOfDonation`, `coinValue`, `donationLastDate`, `availability`, `medicalReport`, `image`, `bloodBankId`, `districtId`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NULL, ?, ?);";

        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $name);
        $pstmt->bindValue(2, $bloodGroup); // Use different placeholders for each parameter
        $pstmt->bindValue(3, $dob);
        $pstmt->bindValue(4, $contactNumber);
        $pstmt->bindValue(5, $nic);
        $pstmt->bindValue(6, $noOfDonation);
        $pstmt->bindValue(7, $coinValue);
        $pstmt->bindValue(8, $donationLastDate);
        $pstmt->bindValue(9, $availability);
        $pstmt->bindValue(10, $medicalReport, PDO::PARAM_LOB);
        $pstmt->bindValue(11, $bloodBankId);
        $pstmt->bindValue(12, $districtId);

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
