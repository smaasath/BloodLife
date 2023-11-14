<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>

            h1, h2, h3, h4, h5, span {
                font-family: Macan,Helvetica Neue,Helvetica,Arial,sans-serif;
                font-weight: 700;
            }
                    :root {
                --primary-color: #235391;
                --secondary-color: #007bff;
                --background-color: #f4f9fd;
                --text-color: #010101;
                --icon-color: #1d7a85;
                --icon-hover-color: #235391;
                --container-bg-color: #ffffff;
                --info-text-color: #bcbcbc;
            }
            #Verify {
                max-width: 400px;
                align-content: center;
                background-color: #fff;
                color: black;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .form-container {
                background-color: var(--container-bg-color);
                border-radius: 10px;
                padding: 20px;
                min-width:600px;
            }

            .form-container .form-control {
                border: 2px solid var(--primary-color);
                color: var(--text-color);
                font-size: 16px;
            }

            .form-container .form-control:focus {
                border-color: var(--secondary-color);
            }

            .form-container .btn-primary {
                background-color: var(--secondary-color);
                border: none;
                color: var(--container-bg-color);
                font-size: 18px;
                transition: background-color 0.3s ease-in-out;
            }

            .form-container .btn-primary:hover {
                background-color: var(--icon-hover-color);
            }

            .form-container textarea {
                resize: vertical;
            }

            a {
                text-decoration: none;
            }

            .countdown-container {
                background-color: #e0e0e0;
                position: relative;
                margin: 0;
                padding: 0;
            }

            #countdown-bar {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height: 5px;
                background-color: #DB2F0B;
                margin: 0;
                padding: 0;
            }

        </style>
    </head>
    <body class="VerifyBody">
            <div class="container d-flex justify-content-center align-items-center vh-100">
        <form method="POST" action="">
            <div class="form-container" id="Verify">
                <div class="countdown-container">
                    <div id="countdown-bar"></div>
                </div>
                <h2 class="text-center">Verify your email</h2><br><br>
                <div class="mb-3">
                    <center><span class="text-center">We've sent you a code to your email</span> </center><br>
                    <span class="text-center">To complete the verification process, please enter the code below.</span><br><br>
                    <input type="text" class="form-control col-md-6 col-sm-6 col-sm-offset-2" name="verifyCode" required><br>
                    <p class="text-center">Didn't receive the code
                        <a href=""> <b>RESEND</b>  </a>
                    </p>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" >Verify</button>
                </div>
            </div>
        </form>
                </div>
        <script>
            const countdown = 60; // Set the countdown time in seconds
            let remainingTime = countdown;

            const countdownBar = document.getElementById("countdown-bar");

            function updateCountdown() {
                const progress = (remainingTime / countdown) * 100;
                countdownBar.style.width = progress + "%";
                remainingTime--;

                if (remainingTime < 0) {
                    clearInterval(timer);
                    countdownBar.style.width = "0%";
                    alert("Time's up!");
                }
            }

            updateCountdown(); // Initial update
            const timer = setInterval(updateCountdown, 1000); // Update every second
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>