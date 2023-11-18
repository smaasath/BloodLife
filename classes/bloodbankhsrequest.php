<?php


namespace classes;


require_once 'DbConnector.php';

use PDOException;
use PDO;

class bloodbankhsrequest
{
    private $bloodBankRequestId;
    private $createdDate;
    private $bloodQuantity;
    private $requestStatus;
    private $hospitalRequestId;
    private $bloodBankId ;
    private $bloodGroup;
    

    public function __construct($bloodBankRequestId, $createdDate, $bloodQuantity,$bloodGroup, $requestStatus, $hospitalRequestId, $bloodBankId) {
        $this->bloodBankRequestId = $bloodBankRequestId;
        $this->createdDate = $createdDate;
        $this->bloodQuantity = $bloodQuantity;
        $this->requestStatus = $requestStatus;
        $this->hospitalRequestId = $hospitalRequestId;
        $this->bloodBankId = $bloodBankId;
        $this->bloodGroup = $bloodGroup;
    }

    public function getBloodBankRequestId() {
        return $this->bloodBankRequestId;
    }

    public function getCreatedDate() {
        return $this->createdDate;
    }

    public function getBloodQuantity() {
        return $this->bloodQuantity;
    }

    public function getRequestStatus() {
        return $this->requestStatus;
    }

    public function getHospitalRequestId() {
        return $this->hospitalRequestId;
    }

    public function getBloodBankId() {
        return $this->bloodBankId;
    }

    public function getbloodGroup() {
        return $this->bloodGroup;
    }

    public function setBloodBankRequestId($bloodBankRequestId): void {
        $this->bloodBankRequestId = $bloodBankRequestId;
    }

    public function setCreatedDate($createdDate): void {
        $this->createdDate = $createdDate;
    }

    public function setBloodQuantity($bloodQuantity): void {
        $this->bloodQuantity = $bloodQuantity;
    }

    public function setRequestStatus($requestStatus): void {
        $this->requestStatus = $requestStatus;
    }

    public function setHospitalRequestId($hospitalRequestId): void {
        $this->hospitalRequestId = $hospitalRequestId;
    }

    public function setBloodBankId($bloodBankId): void {
        $this->bloodBankId = $bloodBankId;
    }

    public function setbloodGroup($bloodGroup): void {
        $this->bloodBankId = $bloodGroup;
    }




public static function getBloodBankReqByBankID($bloodBankId,$bloodgroup){
    try {
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        $query = "SELECT
        bloodbankrequest.*,
        hospital.name AS hospitalName,
        hospital.address AS hospitalAddress,
        bloodbank.bloodBankName as bloodBankName,
        bloodbank.Address as bloodbankAddress
    FROM
        bloodbankrequest
    LEFT JOIN
        hospitalrequest
    ON
        hospitalrequest.hospitalRequestID = bloodbankrequest.hospitalRequestId
    LEFT JOIN
        hospital
    ON
        hospital.hospitalId = hospitalrequest.hospitalId
    LEFT JOIN
        bloodbank
    ON
        bloodbank.bloodBankId = bloodbankrequest.bloodBankId
    WHERE
        bloodbankrequest.bloodBankId = ?  && bloodbankrequest.bloodGroup=?
    ORDER BY
        bloodbankrequest.bloodBankRequestId DESC;";


        $stmt = $con->prepare($query);
        $stmt->bindParam(1, $bloodBankId, PDO::PARAM_INT);
        $stmt->bindParam(2, $bloodgroup);
       
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

public function addbloodbankRequest() {
    try {
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        $query = "INSERT INTO `bloodbankrequest`(`bloodBankRequestId`, `createdDate`, `bloodQuantity`, `bloodGroup`, `requestStatus`, `hospitalRequestId`, `bloodBankId`) VALUES (null,?,?,?,?,?,?)";

        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $this->createdDate);
        $pstmt->bindValue(2, $this->bloodQuantity);
        $pstmt->bindValue(3, $this->bloodGroup);
        $pstmt->bindValue(4, $this->requestStatus);
        $pstmt->bindValue(5, $this->hospitalRequestId);
        $pstmt->bindValue(6, $this->bloodBankId);

        $pstmt->execute();

        return $pstmt->rowCount() > 0;
    } catch (PDOException $e) {
        echo "ERROR:" . $e->getMessage();
    }
}

public function ValidatePublishRequest() {
    try {
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        $query = "SELECT * FROM `bloodbankrequest` WHERE bloodBankId = ? && hospitalRequestId = ?;";

        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $this->bloodBankId);
        $pstmt->bindValue(2, $this->hospitalRequestId);
   

        $pstmt->execute();

        return $pstmt->rowCount() > 0;
    } catch (PDOException $e) {
        echo "ERROR:" . $e->getMessage();
    }
}

public static function getAllBloodBankReqByBankID($bloodBankId){
    try {
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        $query = "SELECT
        bloodbankrequest.*,
        hospital.name AS hospitalName,
        hospital.address AS hospitalAddress,
        bloodbank.bloodBankName as bloodBankName,
        bloodbank.Address as bloodbankAddress
    FROM
        bloodbankrequest
    LEFT JOIN
        hospitalrequest
    ON
        hospitalrequest.hospitalRequestID = bloodbankrequest.hospitalRequestId
    LEFT JOIN
        hospital
    ON
        hospital.hospitalId = hospitalrequest.hospitalId
    LEFT JOIN
        bloodbank
    ON
        bloodbank.bloodBankId = bloodbankrequest.bloodBankId
    WHERE
        bloodbankrequest.bloodBankId = ?
    ORDER BY
        bloodbankrequest.bloodBankRequestId DESC;
    ";

        $stmt = $con->prepare($query);
        $stmt->bindParam(1, $bloodBankId, PDO::PARAM_INT);
    

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


