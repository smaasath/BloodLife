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
 * Description of Bloodtable
 *
 * @author Saalu
 */
class Bloodtable
{

    private $bloodId;
    private $expiryDate;
    private $bloodGroup;
    private $quantity;
    private $bloodBankId;
    private $status;

    public function __construct($bloodId, $expiryDate, $bloodGroup, $quantity, $bloodBankId, $status)
    {
        $this->bloodId = $bloodId;
        $this->expiryDate = $expiryDate;
        $this->bloodGroup = $bloodGroup;
        $this->quantity = $quantity;
        $this->bloodBankId = $bloodBankId;
        $this->status = $status;
    }

    public function getBloodId()
    {
        return $this->bloodId;
    }

    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getBloodBankId()
    {
        return $this->bloodBankId;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setBloodId($bloodId): void
    {
        $this->bloodId = $bloodId;
    }

    public function setExpiryDate($expiryDate): void
    {
        $this->expiryDate = $expiryDate;
    }

    public function setBloodGroup($bloodGroup): void
    {
        $this->bloodGroup = $bloodGroup;
    }

    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setBloodBankId($bloodBankId): void
    {
        $this->bloodBankId = $bloodBankId;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }



    public static function showBloodPackets($bloodBankId)
    {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT * FROM `bloodtable` WHERE bloodBankId = ?";



            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $bloodBankId);
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

    public function addbloodpacket()
    {
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
            return $pstmt->rowCount() > 0;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function GetBloodpacketsData()
    {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT * FROM `bloodtable` WHERE bloodId=?";

            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->bloodId);

            $pstmt->execute();

            if ($pstmt->rowCount() > 0) {
                $rs = $pstmt->fetch(PDO::FETCH_OBJ);
                $this->bloodId = $rs->bloodId;
                $this->expiryDate = $rs->expiryDate;
                $this->bloodGroup = $rs->bloodGroup;
                $this->quantity = $rs->quantity;
                $this->bloodBankId  = $rs->bloodBankId;
                $this->status = $rs->status;
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function Editbloodpacket()
    {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "UPDATE `bloodtable` SET `expiryDate`= ? ,
            `bloodGroup`= ?,`quantity`= ?,`bloodBankId`=?,`status`= ? WHERE `bloodId`= ? ";
            $pstmt = $con->prepare($query);

            $pstmt->bindValue(1, $this->expiryDate);
            $pstmt->bindValue(2, $this->bloodGroup);
            $pstmt->bindValue(3, $this->quantity);
            $pstmt->bindValue(4, $this->bloodBankId);
            $pstmt->bindValue(5, $this->status);
            $pstmt->bindValue(6, $this->bloodId);

            $pstmt->execute();
            return $pstmt->rowCount() > 0;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function totalQuantityarray()
    {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
            $query = "SELECT bloodGroup, SUM(quantity) AS totalQuantity
            FROM `bloodtable`
            WHERE bloodBankId = ?
            GROUP BY bloodGroup;
            ";
            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $this->bloodBankId);
            $stmt->execute();
            $dataArray = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $dataArray[] = $row;
            }

            return $dataArray;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function expirydateAlert(){
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
            $query = "SELECT *
            FROM `bloodtable`
            WHERE expiryDate <= DATE_ADD(NOW(), INTERVAL 14 DAY)
                AND expiryDate > NOW()
                AND bloodBankId = ?
            ORDER BY expiryDate ASC;
            
            ";
            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $this->bloodBankId);
            $stmt->execute();
            $dataArray = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $dataArray[] = $row;
            }
            return $dataArray;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function getBloodpacketsbyBloodgp($bloodGroup,$bloodBankId){
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
            $query = "SELECT * FROM `bloodtable` WHERE bloodGroup=? && bloodBankId=? && status = 'Available'  ORDER BY expiryDate ASC";
            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $bloodGroup);
            $stmt->bindValue(2, $bloodBankId);
            $stmt->execute();
            $dataArray = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $dataArray[] = $row;
            }
            return $dataArray;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }


    
}

