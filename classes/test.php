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

      require '../classes/hospitalrequestclass.php';
      use classes\hospitalrequestclass;
      $array = hospitalrequestclass::getAllRequest();
              print_r($array);
       

       
        ?>      
    </body>
</html>
