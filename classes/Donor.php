<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'DbConnector.php';
require_once 'User.php';
require_once 'Validation.php';

use classes\User;
use PDO;
use PDOException;
use classes\DbConnector;
use classes\Validation;

class Donor {

    private $donorId;
    private $name;
    private $bloodGroup;
    private $dob;
    private $contactNumber;
    private $nic;
    private $noOfDonation;
    private $coinValue;
    private $donationLastDate;
    private $availability;
    private $medicalReport;
    private $image;
    private $bloodBankId;
    private $districtId;

    public function __construct($donorId, $name, $bloodGroup, $dob, $contactNumber, $nic, $noOfDonation, $coinValue, $donationLastDate, $availability, $medicalReport, $image, $bloodBankId, $districtId) {
        $this->donorId = $donorId;
        $this->name = $name;
        $this->bloodGroup = $bloodGroup;
        $this->dob = $dob;
        $this->contactNumber = $contactNumber;
        $this->nic = $nic;
        $this->noOfDonation = $noOfDonation;
        $this->coinValue = $coinValue;
        $this->donationLastDate = $donationLastDate;
        $this->availability = $availability;
        $this->medicalReport = $medicalReport;
        $this->image = $image;
        $this->bloodBankId = $bloodBankId;
        $this->districtId = $districtId;
    }

    public function getDonorId() {
        return $this->donorId;
    }

    public function getName() {
        return $this->name;
    }

    public function getBloodGroup() {
        return $this->bloodGroup;
    }

    public function getDob() {
        return $this->dob;
    }

    public function getContactNumber() {
        return $this->contactNumber;
    }

    public function getNic() {
        return $this->nic;
    }

    public function getNoOfDonation() {
        return $this->noOfDonation;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image): void {
        $this->image = $image;
    }

    public function getCoinValue() {
        return $this->coinValue;
    }

    public function getDonationLastDate() {
        return $this->donationLastDate;
    }

    public function getAvailability() {
        return $this->availability;
    }

    public function getMedicalReport() {
        return $this->medicalReport;
    }

    public function getBloodBankId() {
        return $this->bloodBankId;
    }

    public function getDistrictId() {
        return $this->districtId;
    }

    public function setDonorId($donorId): void {
        $this->donorId = $donorId;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setBloodGroup($bloodGroup): void {
        $this->bloodGroup = $bloodGroup;
    }

    public function setDob($dob): void {
        $this->dob = $dob;
    }

    public function setContactNumber($contactNumber): void {
        $this->contactNumber = $contactNumber;
    }

    public function setNic($nic): void {
        $this->nic = $nic;
    }

    public function setNoOfDonation($noOfDonation): void {
        $this->noOfDonation = $noOfDonation;
    }

    public function setCoinValue($coinValue): void {
        $this->coinValue = $coinValue;
    }

    public function setDonationLastDate($donationLastDate): void {
        $this->donationLastDate = $donationLastDate;
    }

    public function setAvailability($availability): void {
        $this->availability = $availability;
    }

    public function setMedicalReport($medicalReport): void {
        $this->medicalReport = $medicalReport;
    }

    public function setBloodBankId($bloodBankId): void {
        $this->bloodBankId = $bloodBankId;
    }

    public function setDistrictId($districtId): void {
        $this->districtId = $districtId;
    }

    public function AddDonor($email) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "INSERT INTO `donor` (`donorId`, `name`, `bloodGroup`, `dob`, `contactNumber`, `nic`, `noOfDonation`, `coinValue`, `donationLastDate`, `availability`, `medicalReport`, `image`, `bloodBankId`, `districtId`) 
            VALUES (Null,?,?,?,?,?,Null,'100',Null,'Available',?,Null,?,?)";

            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->name, PDO::PARAM_STR);
            $pstmt->bindValue(2, $this->bloodGroup); // Use different placeholders for each parameter
            $pstmt->bindValue(3, $this->dob);
            $pstmt->bindValue(4, $this->contactNumber);
            $pstmt->bindValue(5, $this->nic);
            $pstmt->bindValue(6, $this->medicalReport, PDO::PARAM_LOB);
            $pstmt->bindValue(7, $this->bloodBankId);
            $pstmt->bindValue(8, $this->districtId);
            $pstmt->execute();
            if ($pstmt->rowCount() > 0) {
                return self::adduser($con, $email, $this->name);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function adduser($con, $email, $name) {

        $DonorId = $con->lastInsertId();
        $password = Validation::generateRandomPassword();

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        if (User::AddUser($email, 5, $hashedPassword, null, $DonorId, null)) {
            self::SendMail($password, $email, $name);
            return true;
        } else {
            return false;
        }
    }

    public static function SendMail($password, $email, $name) {
        // Create an instance; passing `true` enables exceptions

        require '../mail/Exception.php';
        require '../mail/PHPMailer.php';
        require '../mail/SMTP.php';
        $mail = new PHPMailer(true);

        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'sachinformationsystem@gmail.com';                     //SMTP username
        $mail->Password = 'upyjmbtlcfckzoke';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('sachinformationsystem@gmail.com');
        $mail->addAddress($email);     //Add a recipient             //Name is optional
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Donor Registration';
        $message = "Dear " . $name . ",<br>";
        $message .= "Welcome to BloodLife! , " . "<br>";
        $message .= "your account has been successfully created." . "<br><br>";
        $message .= "        Your username:     " . $email . "<br>";
        $message .= "        Your Password:     " . $password . "<br><br><br>";
        $message .= "Regards,<br>";
        $message .= "BloodLife";

        $mail->Body = $message;

        try {
            $mail->send();
            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    static function getAllDetails() {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT * FROM `donor`";

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

    static function getDonorById($donoId) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT * FROM `donor` WHERE donorId=?";

            // Prepare the SQL statement
            $stmt = $con->prepare($query);

            // Bind the parameter (hospitalRequestID)
            $stmt->bindParam(1, $donoId, PDO::PARAM_INT);

            // Execute the query
            $stmt->execute();

            // Fetch the result as an associative array
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Handle the result as needed
            if ($result) {
                // Create a new hospitalrequestclass object using the retrieved data
                $newDonor = new Donor(
                        $donoId,
                        $result["name"],
                        $result["bloodGroup"],
                        $result["dob"],
                        $result["contactNumber"],
                        $result["nic"],
                        $result["noOfDonation"],
                        $result["coinValue"],
                        $result["donationLastDate"],
                        $result["availability"],
                        $result["medicalReport"],
                        $result["image"],
                        $result["bloodBankId"],
                        $result["districtId"]
                );

                return $newDonor;
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
