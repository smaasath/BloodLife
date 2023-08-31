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

            $dataArray = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $dataArray[] = $row;
            }

            return $dataArray;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function getAllDivision($districtfromdrop) {


        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT division FROM district WHERE district= ? ";

            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $districtfromdrop);
            $stmt->execute();
            echo ' <option>Select Division</option>';
            $dataArray = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $dataArray[] = $row;
            }

            foreach ($dataArray as $division) {
                echo ' <option value=' . $division["division"] . '>' . $division["division"] . '</option>';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function getAllBloodBank($divisionfromdrop) {


        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT district.districtId, bloodbank.bloodBankName
FROM district
INNER JOIN bloodbank ON district.districtId = bloodbank.districtId
WHERE district.division= ?";

            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $divisionfromdrop);
            $stmt->execute();

            $dataArray = array();
            echo ' <option>Select Blood Bank</option>';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $dataArray[] = $row;
            }

            foreach ($dataArray as $bloodbank) {
                echo ' <option value=' . $bloodbank["bloodBankName"] . '>' . $bloodbank["bloodBankName"] . '</option>';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}

if (isset($_POST["district"])) {
    $district = $_POST["district"];
    district::getAllDivision($district);
}
if (isset($_POST["division"])) {
    $division = $_POST["division"];
    district::getAllBloodBank($division);
}

