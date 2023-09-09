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

    public static function addbloodpacket( $bloodGroup, $quantity, $expiryDate, $status) {
        try {
             $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
            
            $query ="INSERT INTO 'bloodtable'(bloodGroup,quantity,expiryDate,status) VALUES(?, ?, ?, ?);";
            $pstmt =$con->prepare($query);
           
            $pstmt->bindValue(1, $bloodGroup);
            $pstmt->bindValue(2, $quantity);
            $pstmt->bindValue(3, $expiryDate);
            $pstmt->bindValue(4, $status);
            
            $pstmt->execute();
            if($pstmt->rowCount()>0){
                echo 'success';
                
            }else{
                echo'error';
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        }
}