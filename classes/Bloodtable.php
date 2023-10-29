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
 * Description of Bloodtable
 *
 * @author Saalu
 */
class Bloodtable {

    private $bloodId;
    private $expiryDate;
    private $bloodGroup;
    private $quantity;
    private $bloodBankId;
    private $status;

    public function __construct($bloodId, $expiryDate, $bloodGroup, $quantity, $bloodBankId, $status) {
        $this->bloodId = $bloodId;
        $this->expiryDate = $expiryDate;
        $this->bloodGroup = $bloodGroup;
        $this->quantity = $quantity;
        $this->bloodBankId = $bloodBankId;
        $this->status = $status;
    }

    public function getBloodId() {
        return $this->bloodId;
    }

    public function getExpiryDate() {
        return $this->expiryDate;
    }

    public function getBloodGroup() {
        return $this->bloodGroup;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getBloodBankId() {
        return $this->bloodBankId;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setBloodId($bloodId): void {
        $this->bloodId = $bloodId;
    }

    public function setExpiryDate($expiryDate): void {
        $this->expiryDate = $expiryDate;
    }

    public function setBloodGroup($bloodGroup): void {
        $this->bloodGroup = $bloodGroup;
    }

    public function setQuantity($quantity): void {
        $this->quantity = $quantity;
    }

    public function setBloodBankId($bloodBankId): void {
        $this->bloodBankId = $bloodBankId;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

    public static function getAllbloodpackets($bloodBankId) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
            $query = "SELECT * FROM `bloodtable` WHERE bloodBankId=?";

            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $bloodBankId); // Make sure $blID is defined.
            $stmt->execute();

            $dataArray = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $dataArray[] = $row;
            }

            if (empty($dataArray)) {
                echo "No results found.";
            }

            return $dataArray;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public static function showBloodPackets() {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT * FROM `bloodtable`";
            


            $stmt = $con->prepare($query);
            
            $stmt->execute();

            $bloodArray = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $bloodArray[] = $row;
            }

            return $bloodArray;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function addbloodpacket() {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "INSERT INTO `bloodtable` (`bloodId`, `expiryDate`, `bloodGroup`, `quantity`, `bloodBankId`, `status`) VALUES (NULL, ?, ?, ?, ?, ?);";
            $pstmt = $con->prepare($query);

            $pstmt->bindValue(1, $this->expiryDate);
            $pstmt->bindValue(2, $this->bloodGroup);
            $pstmt->bindValue(3, $this->quantity);
            $pstmt->bindValue(4, $this->bloodBankId);
            $pstmt->bindValue(5, $this->status);

            $pstmt->execute();
            if ($pstmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
