<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace classes;

require 'DbConnector.php';

use PDO;
use PDOException;
use classes\DbConnector;

/**
 * Description of bloodBank
 *
 * @author Saalu
 */
class bloodBank {

    //put your code here
    private $bloodBankId;
    private $bloodBankName;
    private $Address;
    private $ContactNo;
    private $districtId;

    public function __construct($bloodBankId, $bloodBankName, $Address, $ContactNo, $districtId) {
        $this->bloodBankId = $bloodBankId;
        $this->bloodBankName = $bloodBankName;
        $this->Address = $Address;
        $this->ContactNo = $ContactNo;
        $this->districtId = $districtId;
    }

    public function setBloodBankId($bloodBankId): void {
        $this->bloodBankId = $bloodBankId;
    }

    public function setBloodBankName($bloodBankName): void {
        $this->bloodBankName = $bloodBankName;
    }

    public function setAddress($Address): void {
        $this->Address = $Address;
    }

    public function setContactNo($ContactNo): void {
        $this->ContactNo = $ContactNo;
    }

    public function setDistrictId($districtId): void {
        $this->districtId = $districtId;
    }

    public function getBloodBankId() {
        return $this->bloodBankId;
    }

    public function getBloodBankName() {
        return $this->bloodBankName;
    }

    public function getAddress() {
        return $this->Address;
    }

    public function getContactNo() {
        return $this->ContactNo;
    }

    public function getDistrictId() {
        return $this->districtId;
    }

    public static function showbloodbankdetails($blID) {
        try {

            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
            $query = "SELECT * FROM `bloodbank` WHERE bloodBankId=?";

            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $blID);
            $stmt->execute();
            $row = $stmt->fetch();

            if ($row) {
                if ($row) {
                    echo '<table class="detail">';

                    echo '<tr><td><label for="BloodbankID">BloodbankID:</label></td><td>' . $row["bloodBankId"] . '</td></tr>';
                    echo '<tr><td><label for="Bloodbank Name">Bloodbank Name:</label></td><td>' . $row["bloodBankName"] . '</td></tr>';
                    echo '<tr><td><label for="Address">Address:</label></td><td>' . $row["Address"] . '</td></tr>';
                    echo '<tr><td><label for="Contact No">Contact No:</label></td><td>' . $row["ContactNo"] . '</td></tr>';
                    echo '<tr><td><label for="DistrictID">DistrictID:</label></td><td>' . $row["districtId"] . '</td></tr>';
                    echo '</table>';
                } else {
                    echo "No results found.";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
