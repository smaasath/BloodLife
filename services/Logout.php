<?php 
 setcookie("remember_me", "", time() - (30 * 24 * 60 * 60), '/');
 session_start();
 $_SESSION["Token"] = null;
 session_destroy();
 header('Location: ../index.php');

?>