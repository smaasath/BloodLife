<?php
require_once '../../classes/Validation.php';
require_once '../../classes/User.php';

use classes\Validation;
use classes\User;


$status;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['email'])) {

       
       
        
        
    if (!empty($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $validateEmail = Validation::validateGmail($email);
        $emailExist = Validation::validateAlreadyExist("email", $email, "user");
        $user = new User(null, null, null, null, null, null, null, null, null);
        if ($validateEmail) {
            
                // Use the emailExistsInDatabase function from DatabaseFunctions.php
                if ($emailExist) {
                    // Email exists in the database
                    session_start();
                   
                    $_SESSION["VerificationCode"] = Validation::generateOTP();
                    $_SESSION["email"] = $email;
                    $_SESSION['timestamp'] = time();
                    $status = $user->SendVerificationCode(123, "aasadh2000@gmail.com") ? 1 : 2;

         
                    
                } else {
                    // Email does not exist in the database
                    $status = '3';
                }
          
        } else {
            // Invalid email format
            $status = '4';
        }
    } else {
        // Email not provided
        $status = '45';
    }
}
} else {
    // Email not provided
    $status = '6';
}
echo $status;   
?>
