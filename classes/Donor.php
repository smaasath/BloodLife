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

use classes\User;
use PDO;
use PDOException;
use classes\DbConnector;

class Donor
{

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

    public function __construct($donorId, $name, $bloodGroup, $dob, $contactNumber, $nic, $noOfDonation, $coinValue, $donationLastDate, $availability, $medicalReport, $image, $bloodBankId, $districtId)
    {
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

    public function getDonorId()
    {
        return $this->donorId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    public function getNic()
    {
        return $this->nic;
    }

    public function getNoOfDonation()
    {
        return $this->noOfDonation;
    }
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getCoinValue()
    {
        return $this->coinValue;
    }

    public function getDonationLastDate()
    {
        return $this->donationLastDate;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function getMedicalReport()
    {
        return $this->medicalReport;
    }

    public function getBloodBankId()
    {
        return $this->bloodBankId;
    }

    public function getDistrictId()
    {
        return $this->districtId;
    }

    public function setDonorId($donorId): void
    {
        $this->donorId = $donorId;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setBloodGroup($bloodGroup): void
    {
        $this->bloodGroup = $bloodGroup;
    }

    public function setDob($dob): void
    {
        $this->dob = $dob;
    }

    public function setContactNumber($contactNumber): void
    {
        $this->contactNumber = $contactNumber;
    }

    public function setNic($nic): void
    {
        $this->nic = $nic;
    }

    public function setNoOfDonation($noOfDonation): void
    {
        $this->noOfDonation = $noOfDonation;
    }

    public function setCoinValue($coinValue): void
    {
        $this->coinValue = $coinValue;
    }

    public function setDonationLastDate($donationLastDate): void
    {
        $this->donationLastDate = $donationLastDate;
    }

    public function setAvailability($availability): void
    {
        $this->availability = $availability;
    }

    public function setMedicalReport($medicalReport): void
    {
        $this->medicalReport = $medicalReport;
    }

    public function setBloodBankId($bloodBankId): void
    {
        $this->bloodBankId = $bloodBankId;
    }

    public function setDistrictId($districtId): void
    {
        $this->districtId = $districtId;
    }

    public static function AddDonor($name, $medicalReport, $bloodGroup, $dob, $contactNumber, $nic, $bloodBankId,  $UserName,  $email, $districtId)
    {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "INSERT INTO `donor` (`donorId`, `name`, `bloodGroup`, `dob`, `contactNumber`, `nic`, `noOfDonation`, `coinValue`, `donationLastDate`, `availability`, `medicalReport`, `image`, `bloodBankId`, `districtId`) 
            VALUES (Null,?,?,?,?,?,Null,'100',Null,'Available',?,Null,?,?)";

            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $name);
            $pstmt->bindValue(2, $bloodGroup); // Use different placeholders for each parameter
            $pstmt->bindValue(3, $dob);
            $pstmt->bindValue(4, $contactNumber);
            $pstmt->bindValue(5, $nic);


            $pstmt->bindValue(6, $medicalReport, PDO::PARAM_LOB);
            $pstmt->bindValue(7, $bloodBankId);
            $pstmt->bindValue(8, $districtId);


            $pstmt->execute();






            if ($pstmt->rowCount() > 0) {
                
                $DonorId = $con->lastInsertId();
                $password = user::generateRandomPassword();

                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

               

                // User::AddUser($UserName, $email, 5, $hashedPassword, null, $DonorId, null);
                self::SendMail($UserName, $password, $email, $name);
                header("Location: ../Dashboards/BloodBankDashboard.php");
            } else {
                echo 'Error';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function SendMail($UserName, $password, $email, $name)
    {
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
        $message .= "Welcome to BloodLife! , your account has been successfully created." . "<br>";
        $message .= "        Your username:" . $UserName . ",<br>";
        $message .= "        Your Password: " . $password . ",<br>";


        $mail->Body = $message;

        try {
            $mail->send();
            echo 'Success';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    static function getAllDetails()
    {
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


    static function getDonorById($donoId)
    {
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






    function validateContactNumber($contactNumber)
    {
        // Remove any non-digit characters from the phone number, allowing hyphens
        $cleanedContactNumber = preg_replace('/[^0-9-]/', '', $contactNumber);

        // Check if the cleaned phone number contains exactly 10 digits
        if (strlen($cleanedContactNumber) === 10) {
            return true; // Valid phone number
        } else {
            return false; // Invalid phone number
        }
    }







    function validateSriLankanNIC($nic)
    {
        // Remove spaces and convert to uppercase
        $nic = strtoupper(str_replace(' ', '', $nic));

        // Check if the NIC length is 10 characters (old format) or 12 characters (new format)
        if (strlen($nic) !== 10 && strlen($nic) !== 12) {
            return false;
        }

        // Validate based on the format
        if (preg_match('/^[0-9]{9}[vVxX]$/', $nic) || preg_match('/^[0-9]{11}[vVxX]$/', $nic)) {
            // NIC is valid
            return true;
        } else {
            // NIC is not valid
            return false;
        }
    }
}
