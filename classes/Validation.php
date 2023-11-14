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

/**
 * Description of Validation
 *
 * @author aasad
 */
class Validation {
    
       public static function validateContactNumber($contactNumber) {
        // Remove spaces and dashes from the phone number
        $cleanedPhoneNumber = preg_replace('/\s+|-/', '', $contactNumber);

        // Regular expression for Sri Lankan phone numbers
        $pattern = '/^(\+94|0)(7[1-9])([0-9]{7})$/';

        // Check if the phone number matches the pattern
        return preg_match($pattern, $cleanedPhoneNumber);
    }

    public static function validateSriLankanNIC($nic) {
        // Remove spaces and convert to uppercase
        $cleanNIC = strtoupper(str_replace(' ', '', $nic));

        // Regular expression patterns for Sri Lankan NIC numbers
        $pattern1 = preg_match('/^[0-9]{9}[vVxX]$/', $cleanNIC);
        $pattern2 = preg_match('/^\d{12}$/', $cleanNIC);

        // Return true if the input matches either pattern, false otherwise
        return $pattern1 || $pattern2;
    }

    public static function validateDOB($dob) {
        $currentDate = new \DateTime();
        $inputDOB = new \DateTime($dob);
        $minAge = 18; // Minimum age required
        // Calculate the difference in years between DOB and current date
        $age = $inputDOB->diff($currentDate)->y;

        // Check if the person is older than 18 years and not bigger than current date
        return ($age >= $minAge && $inputDOB <= $currentDate);
    }

    public static function validateBloodGroup($bloodGroup) {
        // Regular expression for blood group validation
        $pattern = '/^(A|B|AB|O)[+-]$/';

        // Check if the blood group matches the pattern
        return preg_match($pattern, $bloodGroup);
    }

    public static function encryptedValue($value) {
        $encryptedKey = "lkoipiydrvgf";
        $iv = openssl_random_pseudo_bytes(16);
        $encryptedValue = openssl_encrypt($value, 'aes-256-cbc', $encryptedKey, 0, $iv);
        return base64_encode($iv . $encryptedValue);
    }

    public static function decryptedValue($value) {
        $encryptedKey = "lkoipiydrvgf";
        $data = base64_decode($value);
        $iv = substr($data, 0, 16);
        $encryptedValue = substr($data, 16);
        return openssl_decrypt($encryptedValue, 'aes-256-cbc', $encryptedKey, 0, $iv);
    }
    
    
    public static function validateAlreadyExist($attibute, $value, $table) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT * FROM `" . $table . "` WHERE " . $attibute . "=?";

            $stmt = $con->prepare($query);
            $stmt->bindParam(1, $value, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function validateGmail($email) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Check if the domain is Gmail
            list($username, $domain) = explode('@', $email);
            if ($domain === 'gmail.com') {
                return true; // Valid Gmail address
            }
        }
        return false; // Invalid Gmail address
    }

    public static function generateOTP() {
        // Generate a random 6-digit number
        $otp = rand(100000, 999999);
        return $otp;
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

public static function validateChamDate($startDate,$endDate){
    $currentDate = new \DateTime();  
    $inputstartDate = new \DateTime($startDate);
    $inputendDate = new \DateTime($endDate);
   
    
    return ($inputstartDate>=$currentDate && $inputendDate>=$inputstartDate);

}


public static function validateLettersLength($Title,$length) {
    $title = trim($Title); // Remove leading and trailing whitespace
    $title_length = strlen($Title);
    //$address_length =strlen($address)
    return $title_length >= $length;
}

static function validateexpirydate($date){
        
        
    // Get the current date
    $currentDate = date("Y-m-d");

    if (strtotime($date) >= strtotime($currentDate)) {
        return true; // Valid date (present or future)
    }

    return false; // Invalid date (in the past)

}

static function validatequantity($quantity){

return preg_match('/^\d{3}$/', $quantity);
    
}

public static function validatePassword($password) {
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{6,}$/';

    return preg_match($pattern, $password);
}

}