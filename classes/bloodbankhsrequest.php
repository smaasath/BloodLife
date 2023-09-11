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

    public function __construct($bloodBankRequestId, $createdDate, $bloodQuantity, $requestStatus, $hospitalRequestId, $bloodBankId) {
        $this->bloodBankRequestId = $bloodBankRequestId;
        $this->createdDate = $createdDate;
        $this->bloodQuantity = $bloodQuantity;
        $this->requestStatus = $requestStatus;
        $this->hospitalRequestId = $hospitalRequestId;
        $this->bloodBankId = $bloodBankId;
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



static function getBloodBankReqByBankID($bloodBankId){
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
        hospital
      ON
        hospital.hospitalId = bloodbankrequest.hospitalRequestId
      LEFT JOIN
        bloodbank
      ON
        bloodbank.bloodBankId = bloodbankrequest.bloodBankId
      WHERE
        bloodbankrequest.bloodBankId = ?
      ORDER BY
        bloodbankrequest.bloodBankRequestId DESC;";

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


