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
    private $Location;

    public function __construct($bloodId, $expiryDate, $bloodGroup, $quantity, $bloodBankId, $status, $Location) {
        $this->bloodId = $bloodId;
        $this->expiryDate = $expiryDate;
        $this->bloodGroup = $bloodGroup;
        $this->quantity = $quantity;
        $this->bloodBankId = $bloodBankId;
        $this->status = $status;
        $this->Location = $Location;
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

    public function getLocation() {
        return $this->Location;
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

    public function setLocation($Location): void {
        $this->Location = $Location;
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

}
