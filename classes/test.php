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
        <?php
        require 'district.php';
        

        use classes\district;

         // Initialize an empty array to store the data
       
        $dataArray = district::getAllDistrict(); // Retrieve district data using the "getAllDistrict()" method
        print_r($dataArray); // Display the contents of the array using "print_r"
        
        
        ?>
        <h1> <?php print_r($dataArray); // Display the contents of the array using "print_r" ?></h1>
        
        <?php
        require 'district.php';
        

        use classes\district;

         // Initialize an empty array to store the data
       
        $dataArray = Division::getAllDivision(); // Retrieve district data using the "getAllDistrict()" method
        print_r($dataArray); // Display the contents of the array using "print_r"
        
        
        ?>
        <h1> <?php print_r($dataArray); // Display the contents of the array using "print_r" ?></h1>
    </body>
</html>
