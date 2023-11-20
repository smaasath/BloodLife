<?php


require_once '../classes/User.php';


use classes\User;


$status=null;


    

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "aasadh";
    
    // if (isset(
    //     $_POST["uname"],$_POST["opsw"],$_POST["psw"],
    //     $_POST["cpsw"], $_POST["token"]
    // )) {
    //     $username = $_POST['uname'];
    //     $oldPassword = $_POST['opsw'];
    //     $newPassword = $_POST['psw'];
    //     $confirmNewPassword = $_POST['cpsw'];
    //     $token = $_POST["token"];  

    //     echo $token;
    //     echo $username;
    //     echo $oldPassword;
    //     echo $newPassword;
    //     echo $confirmNewPassword;
        
    // } else {
    //     //status for isset value
    //     $status = 17;
    // }


    $user = new User(null, null, null, null, $token, null, null, null, null);


    // Get input data
    $username = $_POST['uname'];
    $oldPassword = $_POST['opsw'];
    $newPassword = $_POST['psw'];
    $confirmNewPassword = $_POST['cpsw'];
    $token = $_POST["token"]; 

    // Validate input data (you might want to add more validation)[check All fields are required]
    if (!empty($_POST["uname"]) && ( $_POST["opsw"]) && ($_POST["psw"]) &&($_POST["cpsw"]) ) {

    // sanitizing the inputs
        $username = filter_var($_POST['uname'], FILTER_SANITIZE_EMAIL);
        $oldPassword = filter_var($_POST['opsw'], FILTER_SANITIZE_STRING);
        $newPassword = filter_var($_POST['psw'], FILTER_SANITIZE_STRING);
        $confirmNewPassword = filter_var($_POST['cpsw'], FILTER_SANITIZE_STRING);
        $token = filter_var($_POST['token'], FILTER_SANITIZE_STRING);

         // Check if the old password matches the one in the database
         if ($user->verifyPassword($username, $oldPassword)) {
            // Check if the new passwords match
            if ($newPassword == $confirmNewPassword) {
                // Update the password in the database
                $user->changePassword($username, $newPassword);
                $status = 1;
            } else {
                $status = 2;
            }
        } else {
            $status = 3;
        
        } 
    } else {
        $status = 4;
        }
    }

echo $status;


// }else{
//     $status=1;
// }
// echo $status;


 
