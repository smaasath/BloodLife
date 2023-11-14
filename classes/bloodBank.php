<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace classes;
// namespace classes;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
require_once 'DbConnector.php';
require_once 'User.php';

use classes\User;
use PDO;
use PDOException;
use classes\DbConnector;

/**
 * Description of bloodBank
 *
 * @author Sankavi
 */
class bloodBank {

    private $bloodBankId;
    private $bloodBankName;
    private $Address;
    private $ContactNo;
    private $districtId;
    
    public function __construct($bloodBankId, $bloodBankName, $Address, $ContactNo, $districtId) {
        $this->bloodBankId = $bloodBankId;
        $this->bloodBankName = $bloodBankName;
        $this->Address = $Address;
        $this->ContactNo = $ContactNo;
        $this->districtId = $districtId;
    }
    
    public function getBloodBankId() {
        return $this->bloodBankId;
    }

    public function getBloodBankName() {
        return $this->bloodBankName;
    }

    public function getAddress() {
        return $this->Address;
    }

    public function getContactNo() {
        return $this->ContactNo;
    }

    public function getDistrictId() {
        return $this->districtId;
    }
    
    public function setBloodBankId($bloodBankId): void {
        $this->bloodBankId = $bloodBankId;
    }

    public function setBloodBankName($bloodBankName): void {
        $this->bloodBankName = $bloodBankName;
    }

    public function setAddress($Address): void {
        $this->Address = $Address;
    }

    public function setContactNo($ContactNo): void {
        $this->ContactNo = $ContactNo;
    }

    public function setDistrictId($districtId): void {
        $this->districtId = $districtId;
    }

    public static function AddBloodBank( $bloodBankName, $Address, $ContactNo, $districtId, $email, $password) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
           
            $query = "INSERT INTO `bloodbank` ( `bloodBankName`, `Address`, `ContactNo`, `districtId`) VALUES ( ?, ?, ?, ?);";
    
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $bloodBankName);
            $pstmt->bindValue(2, $Address); 
            $pstmt->bindValue(3, $ContactNo);
            $pstmt->bindValue(4, $districtId);
            
    
            $pstmt->execute();
    
            if ($pstmt->rowCount() > 0) {
              echo 'Success.';
              $bloodBankId = $con->lastInsertId();
                    User::AddUser( $password, $email, 3, null,null, $bloodBankId);
                    User::SendMail($password, $email, $bloodBankName,"Bloodbank");
            } else {
               echo 'Error';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // public static function SendMail($password, $email,$bloodBankName) {
    //     // Create an instance; passing `true` enables exceptions

    //     require '../mail/Exception.php';
    //     require '../mail/PHPMailer.php';
    //     require '../mail/SMTP.php';
    //     $mail = new PHPMailer(true);

    //     //Server settings
    //     $mail->SMTPDebug = 0;                      //Enable verbose debug output
    //     $mail->isSMTP();                                            //Send using SMTP
    //     $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    //     $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    //     $mail->Username = 'sachinformationsystem@gmail.com';                     //SMTP username
    //     $mail->Password = 'upyjmbtlcfckzoke';                               //SMTP password
    //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    //     $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //     //Recipients
    //     $mail->setFrom('sachinformationsystem@gmail.com');
    //     $mail->addAddress($email);     //Add a recipient             //Name is optional
    //     //Content
    //     $mail->isHTML(true);                                  //Set email format to HTML
    //     $mail->Subject = 'Donor Registration';
    //     $message = "Dear ".$bloodBankName.",<br>";
    //     $message .= "Welcome to BloodLife! , your account has been successfully created."."<br>";
    //     $message .= "        Your Password: ".$password.",<br>";
        

    //     $mail->Body = $message;

    //     try {
    //         $mail->send();
    //         echo 'Success';
    //     } catch (Exception $e) {
    //         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //     }
    // }

    public  function GetBloodbankData($bloodBankId) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
    
            $query = "SELECT * FROM  `bloodbank` WHERE `bloodBankId` = ?";
    
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $bloodBankId);
    
            $pstmt->execute();
    
            if ($pstmt->rowCount() > 0) {
                $rs = $pstmt->fetch(PDO::FETCH_OBJ);
                 $this->bloodBankName = $rs->bloodBankName;
                 $this->Address = $rs->Address;
                 $this->ContactNo = $rs->ContactNo;
                 $this->districtId = $rs->districtId;
                 return true;

            } else {
                return false; 
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function showAllBloodbank() {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT *, district.district, district.division FROM bloodbank, district WHERE bloodbank.districtId = district.districtId;`";
            


            $stmt = $con->prepare($query);
            
            $stmt->execute();

            $bloodBankArray = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $bloodBankArray[] = $row;
            }

            return $bloodBankArray;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
public function GetBloodbankByName() {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
    
            $query = "SELECT * FROM  `bloodbank` WHERE `bloodBankName` = ?";
    
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->bloodBankName);
    
            $pstmt->execute();
    
            if ($pstmt->rowCount() > 0) {
                $rs =  $pstmt->fetch(PDO::FETCH_OBJ);
                $this->bloodBankId = $rs->bloodBankId;
                $this->Address = $rs->Address;
                $this->	ContactNo = $rs->ContactNo;
                $this->districtId  = $rs->districtId;
                return true;
            } else {
                return false; // Return false if no data is found
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}
