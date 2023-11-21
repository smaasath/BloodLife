<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace classes;

/**
 * Description of Donation
 *
 * @author aasad
 */
require_once 'DbConnector.php';
require_once 'Validation.php';

use PDO;
use PDOException;
use classes\DbConnector;
use classes\Validation;

class Donation
{

    private $donationId;
    private $donorId;
    private $bloodBankId;
    private $campaignId;
    private $certificate;
    private $bloodBankRequestId;

    public function __construct($donationId, $donorId, $bloodBankId, $campaignId, $certificate, $bloodBankRequestId)
    {
        $this->donationId = $donationId;
        $this->donorId = $donorId;
        $this->bloodBankId = $bloodBankId;
        $this->campaignId = $campaignId;
        $this->certificate = $certificate;
        $this->bloodBankRequestId = $bloodBankRequestId;
    }

    public function getDonationId()
    {
        return $this->donationId;
    }

    public function getDonorId()
    {
        return $this->donorId;
    }

    public function getBloodBankId()
    {
        return $this->bloodBankId;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    public function getCertificate()
    {
        return $this->certificate;
    }

    public function getBloodBankRequestId()
    {
        return $this->bloodBankRequestId;
    }

    public function setDonationId($donationId): void
    {
        $this->donationId = $donationId;
    }

    public function setDonorId($donorId): void
    {
        $this->donorId = $donorId;
    }

    public function setBloodBankId($bloodBankId): void
    {
        $this->bloodBankId = $bloodBankId;
    }

    public function setCampaignId($campaignId): void
    {
        $this->campaignId = $campaignId;
    }

    public function setCertificate($certificate): void
    {
        $this->certificate = $certificate;
    }

    public function setBloodBankRequestId($bloodBankRequestId): void
    {
        $this->bloodBankRequestId = $bloodBankRequestId;
    }

    public function AddDonation()
    {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "INSERT INTO `donationtable` (`donationId`, `donorId`, `bloodBankId`, `campaignId`,`certificate`,`bloodBankRequestId`) VALUES (NULL, ?, ?, ?, ?,?);";

            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->donorId); // Use different placeholders for each parameter
            $pstmt->bindValue(2, $this->bloodBankId);
            $pstmt->bindValue(3, $this->campaignId);
            $pstmt->bindValue(4, $this->certificate, PDO::PARAM_LOB);
            $pstmt->bindValue(5, $this->bloodBankRequestId);
            $pstmt->execute();
            return $pstmt->rowCount() > 0;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function divideLetters($string)
    {
        preg_match_all('/[0-9]+|[a-zA-Z]+/', $string, $matches);

        $numbers = implode('', preg_grep('/[0-9]+/', $matches[0]));
        $letters = implode('', preg_grep('/[a-zA-Z]+/', $matches[0]));

        return array("type" => $letters, "EncryptedId" => $numbers);
    }

    public static function CreateCertificates($Name, $date)
    {
        // Create Image From Existing File
        $jpg_image = imagecreatefromjpeg('../Images/certificate.jpg');

        // Check if image creation is successful
        if (!$jpg_image) {
            die('Error: Unable to create image from JPEG.');
        } else {
            // Allocate A Color For The Text
            $white = imagecolorallocate($jpg_image, 54, 12, 110);

            // Set Path to Font File
            $font_path = '../Images/font.ttf';

            imagettftext($jpg_image, 26, 0, 375, 350, $white, $font_path, $Name);
            imagettftext($jpg_image, 11, 0, 730, 430, $white, $font_path, $date);

            // Start output buffering
            ob_start();

            // Output the image
            imagejpeg($jpg_image);

            // Get the buffered output
            $output = ob_get_clean();

            return $output;
        }
    }

    public function getCertificates()
    {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();

            $query = "SELECT donationtable.*, 
            CASE 
                WHEN donationtable.campaignId IS NULL THEN NULL
                ELSE campaigntable.Title
            END AS Title,
            CASE
                WHEN donationtable.campaignId IS NULL THEN NULL
                ELSE campaigntable.campaignId
            END AS campaignId
            FROM donationtable
            LEFT JOIN campaigntable ON donationtable.campaignId = campaigntable.campaignId
            WHERE donationtable.donorId = ?;";

            $stmt = $con->prepare($query);
            $stmt->bindParam(1, $this->donorId, PDO::PARAM_INT);

            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // Fetch other fields including the 'certificate' field
                $certificate = base64_encode($row['certificate']); // Convert binary data to base64
                unset($row['certificate']); // Remove the binary data from the array
                $row['certificate_base64'] = $certificate; // Add base64 encoded certificate to the array
                $dataArray[] = $row;
            }

            return $dataArray;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
