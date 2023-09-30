<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace classes;

require_once 'DbConnector.php';

use PDO;
use PDOException;
use classes\DbConnector;

class User {

    private $userId;
    private $UserName;
    private $password;
    private $email;
    private $userRole;
    private $Token;
    private $expire;
    private $bloodBankId;
    private $donorId;
    private $hospitalId;

    public function __construct($userId, $UserName, $password, $email, $userRole, $Token, $expire, $bloodBankId, $donorId, $hospitalId) {
        $this->userId = $userId;
        $this->UserName = $UserName;
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

    public function getUserName() {
        return $this->UserName;
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

    public function setUserName($UserName): void {
        $this->UserName = $UserName;
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

    public static function AddUser($UserName, $email, $userRole, $hashedPassword, $bloodBankId, $donorId, $hospitalId) {




        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "INSERT INTO `user` (`userId`, `UserName`, `password`, `email`, `userRole`, `bloodBankId`, `donorId`, `hospitalId`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?);"; // Update the query to include all placeholders
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $UserName);
            $pstmt->bindValue(2, $hashedPassword);
            $pstmt->bindValue(3, $email);
            $pstmt->bindValue(4, $userRole);
            $pstmt->bindValue(5, $bloodBankId);
            $pstmt->bindValue(6, $donorId);
            $pstmt->bindValue(7, $hospitalId);

            $pstmt->execute();

            if ($pstmt->rowCount() > 0) {
                return 'Success';
            } else {
                return 'Error';
            }
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    static function generateRandomPassword($length = 10) {
        // Define a character pool for generating the password
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&';

        // Get the total number of characters in the pool
        $characterCount = strlen($characters);

        // Initialize the password variable
        $password = '';

        // Generate a random password of the specified length
        for ($i = 0; $i < $length; $i++) {
            // Get a random character from the pool
            $randomCharacter = $characters[rand(0, $characterCount - 1)];

            // Append the random character to the password
            $password .= $randomCharacter;
        }

        // Return the generated password
        return $password;
    }

    function donorLogin() {
        $dbcon = new DbConnector;
        $conn = $dbcon->getConnection();
        $sql = "SELECT * FROM `user` WHERE UserName= ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $this->UserName, PDO::PARAM_STR);
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
        if($rs && $rs->expire > time()){
            $this->donorId = $rs->donorId;
            return true;
        } else {
            return false;
        }
    }

}
