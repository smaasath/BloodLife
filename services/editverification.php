<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset( $_GET["type"])){

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        #countdown {
            font-size: 24px;
            font-weight: bold;
        }

        .btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var countdown = 60;
            var countdownElement = document.getElementById("countdown");

            function updateCountdown() {
                countdownElement.textContent = countdown;
                if (countdown === 0) {
                    // Redirect or perform any other action when the countdown reaches 0
                    window.location.href = "editHospitalservices.php";
                } else {
                    countdown--;
                    setTimeout(updateCountdown, 1000);
                }
            }

            // Start the countdown when the page loads
            updateCountdown();
        });
    </script>
</head>
<body>
    <div class="card">
        <form action="<?php echo $_GET["type"]=="hospital" ? "editHospitalservices.php" : ($_GET["type"]=="bloodbank" ? "bloodbankservices.php":"");?>" method="POST" >
            <h2>Verify your email</h2><br><br>
            <span>We've sent you a code to your email</span><br>
            <span>To complete the verification process, please enter the code below.</span><br><br>
            <input type="text" name="VerificationCode" value="" /><br>
            <p>Didn't receive the code <a href="#"><b>RESEND</b></a></p>
            <input type="submit" value="submit" class="btn btn-primary" />
        </form>
        <p>Time left: <span id="countdown"></span> seconds</p>
    </div>
    <?php
    // put your PHP code here
    }
}
    ?>
</body>
</html>


