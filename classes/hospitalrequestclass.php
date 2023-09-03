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

    static function getHospitalStatusGradient($status) {
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

    public static function getAllRequestwithHospitalDetails() {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT hospitalrequest.*, hospital.districtId, hospital.name, district.district
FROM hospitalrequest
INNER JOIN hospital ON hospitalrequest.hospitalId = hospital.hospitalId
INNER JOIN district ON hospital.districtId = district.districtId;
";

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
 public static function getAllRequestwithHospitalusingID($hospitalRequestID) {
    try {
        // Assuming you have a DbConnector class that handles database connections
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        // Define the SQL query with a placeholder for hospitalRequestID
        $query = "SELECT * FROM `hospitalrequest` WHERE hospitalRequestID=?";
        
        // Prepare the SQL statement
        $stmt = $con->prepare($query);

        // Bind the parameter (hospitalRequestID)
        $stmt->bindParam(1, $hospitalRequestID, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();

        // Fetch the result as an associative array
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Handle the result as needed
        if ($result) {
            // Create a new hospitalrequestclass object using the retrieved data
            $newReq = new hospitalrequestclass(
                $hospitalRequestID,
                $result["createdDate"],
                $result["bloodQuantity"],
                $result["bloodGroup"],
                $result["requestStatus"],
                $result["hospitalId"]
            );
            echo $result["bloodQuantity"];
            return $newReq;
        } else {
            // Return null or handle the case where no records are found
            return null;
        }

    } catch (PDOException $e) {
        // Handle the error or log it as needed
        echo "Error: " . $e->getMessage();
        return null;
    }
}


}
