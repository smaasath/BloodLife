<?php


namespace classes;

require_once 'DbConnector.php';


use PDO;
use PDOException;
use classes\DbConnector;

class campOrganizer {
private $organizerId;
private $name;
private $address;
private $contactNumber;
private $nic;
private $bloodBankId;

	public function __constructor($organizerId, $name, $address, $contactNumber, $nic, $bloodBankId) {

		$this->organizerId = $organizerId;
		$this->name = $name;
		$this->address = $address;
		$this->contactNumber = $contactNumber;
		$this->nic = $nic;
		$this->bloodBankId = $bloodBankId;
	}

	public function getOrganizerId() {
		return $this->organizerId;
	}

	public function getName() {
		return $this->name;
	}

	public function getAddress() {
		return $this->address;
	}

	public function getContactNumber() {
		return $this->contactNumber;
	}

	public function getNic() {
		return $this->nic;
	}

	public function getBloodBankId() {
		return $this->bloodBankId;
	}

	public function setOrganizerId($value) {
		$this->organizerId = $value;
	}

	public function setName($value) {
		$this->name = $value;
	}

	public function setAddress($value) {
		$this->address = $value;
	}

	public function setContactNumber($value) {
		$this->contactNumber = $value;
	}

	public function setNic($value) {
		$this->nic = $value;
	}

	public function setBloodBankId($value) {
		$this->bloodBankId = $value;
	}




    public static function AddChamOrg($organizerId, $name, $address, $contactNumber, $nic, $bloodBankId) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "INSERT INTO `campaignorganizer` (`organizerId`, `name`, `address`,`contactNumber`, `nic`,`bloodBankId`) VALUES (NULL, ?, ?, ?, ?, NULL);";

            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $name);
            $pstmt->bindValue(2, $address); // Use different placeholders for each parameter
            //$pstmt->bindValue(3, $dob);
            $pstmt->bindValue(3, $contactNumber);
            $pstmt->bindValue(4, $nic);
           
           
           // $pstmt->bindValue(8, $medicalReport, PDO::PARAM_LOB);
            $pstmt->bindValue(5, $bloodBankId);
            

            $pstmt->execute();
 
           




            if ($pstmt->rowCount() > 0) {
                echo 'Success.';
                $organizerId = $con->lastInsertId ();
//$password=user::generateRandomPassword();

//$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                //User::AddUser($UserName, $email, 5, $hashedPassword , null, $DonorId, null);
                
            } else {
                echo 'Error';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }










}