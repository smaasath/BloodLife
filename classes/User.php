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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use PDO;
use PDOException;
use classes\DbConnector;

class User {

    private $userId;
    private $password;
    private $email;
    private $userRole;
    private $Token;
    private $expire;
    private $bloodBankId;
    private $donorId;
    private $hospitalId;

    public function __construct($userId, $password, $email, $userRole, $Token, $expire, $bloodBankId, $donorId, $hospitalId) {
        $this->userId = $userId;
        $this->password = $password;
        $this->email = $email;
        $this->userRole = $userRole;
        $this->Token = $Token;
        $this->expire = $expire;
        $this->bloodBankId = $bloodBankId;
        $this->donorId = $donorId;
        $this->hospitalId = $hospitalId;
    }

    public function getToken() {
        return $this->Token;
    }

    public function getExpire() {
        return $this->expire;
    }

    public function setToken($Token): void {
        $this->Token = $Token;
    }

    public function setExpire($expire): void {
        $this->expire = $expire;
    }

    public function getUserId() {
        return $this->userId;
    }


    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUserRole() {
        return $this->userRole;
    }

    public function getBloodBankId() {
        return $this->bloodBankId;
    }

    public function getDonorId() {
        return $this->donorId;
    }

    public function getHospitalId() {
        return $this->hospitalId;
    }

    public function setUserId($userId): void {
        $this->userId = $userId;
    }

 

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setUserRole($userRole): void {
        $this->userRole = $userRole;
    }

    public function setBloodBankId($bloodBankId): void {
        $this->bloodBankId = $bloodBankId;
    }

    public function setDonorId($donorId): void {
        $this->donorId = $donorId;
    }

    public function setHospitalId($hospitalId): void {
        $this->hospitalId = $hospitalId;
    }


    public static function AddUser( $email, $userRole, $hashedPassword, $bloodBankId, $donorId, $hospitalId) {


        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();


            $query = "INSERT INTO `user` (`userId`, `password`, `email`, `userRole`, `bloodBankId`, `donorId`, `hospitalId`) VALUES (NULL, ?, ?, ?, ?, ?, ?);"; // Update the query to include all placeholders
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $hashedPassword);
            $pstmt->bindValue(2, $email);
            $pstmt->bindValue(3, $userRole);
            $pstmt->bindValue(4, $bloodBankId);
            $pstmt->bindValue(5, $donorId);
            $pstmt->bindValue(6, $hospitalId);


            $pstmt->execute();

            if ($pstmt->rowCount() > 0) {
        
                return true;
            } else {
               
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    function donorLogin() {
        $dbcon = new DbConnector;
        $conn = $dbcon->getConnection();
        $sql = "SELECT * FROM `user` WHERE email= ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $this->email, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $rs = $stmt->fetch(PDO::FETCH_OBJ);

            if (password_verify($this->password, $rs->password) && $rs->userRole == 5) {
                $this->Token = bin2hex(random_bytes(25));
                $this->expire = time() + (3600 * 24 * 30);
                $this->userId = $rs->userId;
                return $this->updateToken();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function updateToken() {
        $dbcon = new DbConnector;
        $conn = $dbcon->getConnection();
        $sql = "UPDATE `user` SET `Token`=?,`expire`=? WHERE userId = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $this->Token, PDO::PARAM_STR);
        $stmt->bindParam(2, $this->expire, PDO::PARAM_STR);
        $stmt->bindParam(3, $this->userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    function validateToken() {
        $dbcon = new DbConnector;
        $conn = $dbcon->getConnection();
        $sql = "SELECT * FROM `user` WHERE Token= ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $this->Token, PDO::PARAM_STR);
        $stmt->execute();
        $rs = $stmt->fetch(PDO::FETCH_OBJ);
        if ($rs && $rs->expire > time()) {
            $this->donorId = $rs->donorId;
            $this->bloodBankId = $rs->bloodBankId;
            $this->userRole=$rs->userRole;
            $this->hospitalId = $rs->hospitalId;
            return true;
        } else {
            return false;
        }
    }
    
    
    public static function SendVerificationCode($code,$email) {
    
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
        $mail->Subject = 'Verification Code';
        $message = "Your Verification Code :".$code."<br>";   
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

    public static function SendMail( $password, $email,$name,$type) {
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
        $mail->Subject = $type.' Registration';
        $message = "Dear ".$name.",<br>";
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

}
