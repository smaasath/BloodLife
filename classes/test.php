<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?Php
        if($_SERVER["REQUEST_METHOD"] =="POST"){
            header("Location: ../Dashboards/AdminDashboard.php?status=success");
        }
?>

       ?>

    </body>
</html>
