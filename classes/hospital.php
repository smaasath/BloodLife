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


/**
 * Description of hospital
 *
 * @author Sankavi
 */
class hospital {
    
    private $hospitalId;
    private $name	;
    private $address;
    private $contactNumber;
    private $districtId;
    
    public function __construct($hospitalId, $name, $address, $contactNumber, $districtId) {
        $this->hospitalId = $hospitalId;
        $this->name = $name;
        $this->address = $address;
        $this->contactNumber = $contactNumber;
        $this->districtId = $districtId;
    }

    public function getHospitalId() {
        return $this->hospitalId;
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

    public function getDistrictId() {
        return $this->districtId;
    }

    public function setHospitalId($hospitalId): void {
        $this->hospitalId = $hospitalId;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }
    public function setContactNumber($contactNumber): void {
        $this->contactNumber = $contactNumber;
    }

    public function setDistrictId($districtId): void {
        $this->districtId = $districtId;
    }

public static function AddHospital($name, $address, $contactNumber, $districtId, $email, $password) {
    try {
        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        $query = "INSERT INTO `hospital` ( `name`, `address`, `contactNumber`, `districtId`) VALUES ( ?, ?, ?, ?);";

        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $name);
        $pstmt->bindValue(2, $address); 
        $pstmt->bindValue(3, $contactNumber);
        $pstmt->bindValue(4, $districtId);
        

        $pstmt->execute();

        if ($pstmt->rowCount() > 0) {
          echo 'Success.';
          $hospitalId = $con->lastInsertId();
                User::AddUser( $password, $email, 3, null,null, $hospitalId);
                self::SendMail( $password, $email, $name);
        } else {
           echo 'Error';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


public static function SendMail( $password, $email,$name) {
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
        $message = "Dear ".$name.",<br>";
        $message .= "Welcome to BloodLife! , your account has been successfully created."."<br>";
        $message .= "        Your Password: ".$password.",<br>";
        

        $mail->Body = $message;

        try {
            $mail->send();
            echo 'Success';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public static function GetHospitalData($hospitalId) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
    
            $query = "SELECT * FROM `hospital` WHERE `id` = ?";
    
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $hospitalId);
    
            $pstmt->execute();
    
            if ($pstmt->rowCount() > 0) {
                return $pstmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return false; // Return false if no data is found
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function showAllHospital() {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT *, district.district, district.division FROM hospital, district WHERE hospital.districtId = district.districtId;`";
            


            $stmt = $con->prepare($query);
            
            $stmt->execute();

            $hospitalArray = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $hospitalArray[] = $row;
            }

            return $hospitalArray;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    
}
