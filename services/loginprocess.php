<?php

require_once '../classes/User.php';
require_once '../classes/DbConnector.php';

use classes\User;
use classes\DbConnector;

$connect = mysqli_connect("localhost", "root", "bloodline", "Login-Details") or die("Connection Failed");

if (!empty($_POST['save'])) {
    $UserName = $_POST['UserName'];
    $password = $_POST['password'];

    // Sanitize and validate user inputs
    $UserName = filter_var($UserName, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    if (empty($UserName) || empty($password)) {
        echo "Invalid input data.";
    } else {
        $query = "SELECT * FROM login WHERE username=? AND password=?";
        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "ss", $UserName, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "Login is successful";

            // Create a User object and call the webLogin method
            $user = new User($UserName, $password);
            $user->webLogin();
        } else {
            echo "Login is not successful";
        }
    }
}

function webLogin() {
    $dbcon = new DbConnector();
    $conn = $dbcon->getConnection();

    // You don't need to sanitize and validate inputs here. Do that in the main code block.

    $sql = "SELECT * FROM `user` WHERE UserName = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $this->UserName, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $rs = $stmt->fetch(PDO::FETCH_OBJ);

        if (password_verify($this->password, $rs->password)) {
            $this->Token = bin2hex(random_bytes(25));
            $this->expire = time() + (3600 * 24 * 30);
            $this->userId = $rs->userId;
            if ($this->updateToken()) {
                echo "success";
            } else {
                echo "Login update failed";
            }
        } else {
            echo "Password verification failed";
        }
    } else {
        echo "User not found";
    }
}
