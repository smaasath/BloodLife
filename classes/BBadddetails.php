<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace classes;

require 'DbConnector.php';
use PDOException;
use PDO;
use classes\DbConnector;
/**
 * Description of BBadddetails
 *
 * @author Saalu
 */
class BBadddetails {
    private $BloodID;
    private $BloodGroup;
    private $Quantity;
    private $ExpiryDate;
    
    public function __construct($BloodID, $BloodGroup, $Quantity, $ExpiryDate) {
        $this->BloodID = $BloodID;
        $this->BloodGroup = $BloodGroup;
        $this->Quantity = $Quantity;
        $this->ExpiryDate = $ExpiryDate;
    }
    public function getBloodID() {
        return $this->BloodID;
    }

    public function getBloodGroup() {
        return $this->BloodGroup;
    }

    public function getQuantity() {
        return $this->Quantity;
    }

    public function getExpiryDate() {
        return $this->ExpiryDate;
    }

    public function setBloodID($BloodID): void {
        $this->BloodID = $BloodID;
    }

    public function setBloodGroup($BloodGroup): void {
        $this->BloodGroup = $BloodGroup;
    }

    public function setQuantity($Quantity): void {
        $this->Quantity = $Quantity;
    }

    public function setExpiryDate($ExpiryDate): void {
        $this->ExpiryDate = $ExpiryDate;
    }

    public function Adddetails($BloodID, $BloodGroup,  $Quantity, $ExpiryDate) {
        try {
              $dbcon = new DbConnector();
        $con = $dbcon->getConnection();
        
        $query ="INSERT INTO ''('BloodID', 'BloodGroup', 'Quantity', 'ExpiryDate')VALUES(?, ?, ?, ?)";
        
          $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $BloodID);
            $pstmt->bindValue(2, $BloodGroup);
            $pstmt->bindValue(3, $Quantity);
            $pstmt->bindValue(4, $ExpiryDate);
              $pstmt->execute();

        if ($pstmt->rowCount() > 0) {
            echo 'Success.';
        } else {
            echo 'Error';
        }
            
        } catch (PDOException $exc) {
            echo "Error: " . $e->getMessage();
        }
        }

   
}
