<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace classes;

/**
 * Description of hospital
 *
 * @author Sankavi
 */
class hospital {
    
    private $hospitalId;
    private $name	;
    private $address;
    private $contactNumber;
    private $districtId;
    
    public function __construct($hospitalId, $name, $address, $contactNumber, $districtId) {
        $this->hospitalId = $hospitalId;
        $this->name = $name;
        $this->address = $address;
        $this->contactNumber = $contactNumber;
        $this->districtId = $districtId;
    }

    public function getHospitalId() {
        return $this->hospitalId;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getContactNumber() {
        return $this->contactNumber;
    }

    public function getDistrictId() {
        return $this->districtId;
    }

    public function setHospitalId($hospitalId): void {
        $this->hospitalId = $hospitalId;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }

    public function setContactNumber($contactNumber): void {
        $this->contactNumber = $contactNumber;
    }

    public function setDistrictId($districtId): void {
        $this->districtId = $districtId;
    }

public static function AddHospital($hospitalId, $name, $address, $contactNumber, $districtId) {
    try {
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        $query = "INSERT INTO `hospital` (`hospitalId`, `name`, `address`, `contactNumber`, `districtId`) VALUES ( ?, ?, ?, ?, ?);";

        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $name);
        $pstmt->bindValue(2, $address); // Use different placeholders for each parameter
        $pstmt->bindValue(3, $contactNumber);
        $pstmt->bindValue(4, $districtId);
        

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
