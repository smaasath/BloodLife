<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace classes;

require_once'DbConnector.php';

use PDO;
use PDOException;
use classes\DbConnector;

/**
 * Description of district
 *
 * @author Saalu
 */
class district {

    private $districtId;
    private $district;
    private $division;

    public function __construct($districtId, $district, $division) {
        $this->districtId = $districtId;
        $this->district = $district;
        $this->division = $division;
    }

    public function getDistrictId() {
        return $this->districtId;
    }

    public function getDistrict() {
        return $this->district;
    }

    public function getDivision() {
        return $this->division;
    }

    public static function getAllDistrict() {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT district FROM `district` GROUP BY district";

            $stmt = $con->prepare($query);
            $stmt->execute();

            return self::rowToArray($stmt);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function getAllDivision($district) {

        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT division FROM district WHERE district= ? ";

            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $district);
            $stmt->execute();

            return self::rowToArray($stmt);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function getAllDstrictDivition() {


        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT  district,division FROM `district`";

            $stmt = $con->prepare($query);
            $stmt->execute();

            return self::rowToArray($stmt);
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function getDistrictIDDD($district, $division) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT districtId FROM `district` WHERE district=? AND division=?";

            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $district);
            $pstmt->bindValue(2, $division);

            $pstmt->execute();

            if ($pstmt->rowCount() > 0) {
                // Assuming you want to return the districtId value
                $row = $pstmt->fetch(PDO::FETCH_ASSOC);
                return $row["districtId"];
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function getDistrictDivisionById($districtId) {

        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT * FROM `district` WHERE districtId=?";

            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $districtId);

            $pstmt->execute();

            if ($pstmt->rowCount() > 0) {
                // Assuming you want to return the districtId value
                $row = $pstmt->fetch(PDO::FETCH_ASSOC);
                return $row;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function getBloodBanks($district) {

        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT bloodbank.bloodBankId, bloodbank.bloodBankName
                      FROM bloodbank
                      JOIN district ON bloodbank.districtId = district.districtId
                      WHERE district.district = ?";

            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $district);

            $pstmt->execute();

            if ($pstmt->rowCount() > 0) {
                
                return self::rowToArray($pstmt);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function rowToArray($pstmt) {
        $dataArray = array();

        while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)) {
            $dataArray[] = $row;
        }
        return $dataArray;
    }

}
