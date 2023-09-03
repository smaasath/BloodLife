<?php

namespace classes;

require_once 'DbConnector.php';

use PDO;
use PDOException;
use classes\DbConnector;

/**
 * Description of createrequestHS
 *
 * @author Asus
 */
class hospitalrequestclass {

    private $hospitalRequestID;
    private $createDate;
    private $bloodQuantity;
    private $bloodGroup;
    private $requestStatus;
    private $hospitalId;

    function __construct($hospitalRequestID, $createDate, $bloodQuantity, $bloodGroup, $requestStatus, $hospitalId) {
        $this->hospitalRequestID = $hospitalRequestID;
        $this->createDate = $createDate;
        $this->bloodQuantity = $bloodQuantity;
        $this->bloodGroup = $bloodGroup;
        $this->requestStatus = $requestStatus;
        $this->hospitalId = $hospitalId;
    }

    function getHospitalRequestID() {
        return $this->hospitalRequestID;
    }

    function getCreateDate() {
        return $this->createDate;
    }

    function getBloodQuantity() {
        return $this->bloodQuantity;
    }

    function getBloodGroup() {
        return $this->bloodGroup;
    }

    function getRequestStatus() {
        return $this->requestStatus;
    }

    function getHospitalId() {
        return $this->hospitalId;
    }

    function setHospitalRequestID($hospitalRequestID) {
        $this->hospitalRequestID = $hospitalRequestID;
    }

    function setCreateDate($createDate) {
        $this->createDate = $createDate;
    }

    function setBloodQuantity($bloodQuantity) {
        $this->bloodQuantity = $bloodQuantity;
    }

    function setBloodGroup($bloodGroup) {
        $this->bloodGroup = $bloodGroup;
    }

    function setRequestStatus($requestStatus) {
        $this->requestStatus = $requestStatus;
    }

    function setHospitalId($hospitalId) {
        $this->hospitalId = $hospitalId;
    }

    static function addHosRequest($createdDate, $bloodQuantity, $bloodGroup, $requestStatus, $hospitalId) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "INSERT INTO `hospitalrequest` (`hospitalRequestID`, `createdDate`, `bloodQuantity`, `bloodGroup`, `requestStatus`, `hospitalId`) VALUES (NULL, ?, ?, ?, ?, ?);";

            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $createdDate);
            $pstmt->bindValue(2, $bloodQuantity);
            $pstmt->bindValue(3, $bloodGroup);
            $pstmt->bindValue(4, $requestStatus);
            $pstmt->bindValue(5, $hospitalId);

            $pstmt->execute();

            if ($pstmt->rowCount() > 0) {
                echo 'Successfully Created.';
            } else {
                echo 'Error, Try Again';
            }
        } catch (PDOException $e) {
            echo "ERROR:" . $e->getMessage();
        }
    }
    
    
  static  function getHospitalStatusGradient($status) {
            switch ($status) {
                case "Normal":
                    return "linear-gradient(45deg,#4099ff,#73b4ff)";
                    break;
                case "Completed":
                    return "linear-gradient(45deg,#2ed8b6,#59e0c5)";
                    break;
                case "Urgent":
                    return "linear-gradient(45deg,#FF5370,#ff869a)";
                    break;
                case "Emergency":
                    return " linear-gradient(45deg,#FFB64D,#ffcb80)";
                    break;
                default:
                    return "linear-gradient(45deg,#4099ff,#73b4ff)";
            }
        }
        
        
        public static function getAllRequest() {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT * FROM `hospitalrequest`";

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

    
     
}
