<?php



session_start();
echo  $_SESSION["VerificationCode"],  $_SESSION["email"], $_SESSION['timestamp'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST["VerificationCode"], $_SESSION["VerificationCode"],  $_SESSION["email"], $_SESSION['timestamp'])) {
        echo "ll";
        $verifyOtp = (int) $_POST["VerificationCode"] === (int) $_SESSION["VerificationCode"];
        $time = time() - $_SESSION['timestamp'] > 60000000;

        if ($verifyOtp) {
            header("location : ResetPassword.php");
        } else {
            unset($_SESSION["VerificationCode"]);
            unset($_SESSION['timestamp']);
            $status = !$verifyOtp ? 3 : (!$time ? 4 : 5);
            header("location : OTP.php");
        }
    }
}
?>
