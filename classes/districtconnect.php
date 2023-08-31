<?php

if (isset($_POST["district"])) {
    $district = $_POST["district"];
    district::getAllDivision($district);
}
if (isset($_POST["division"])) {
    $division = $_POST["division"];
    district::getAllBloodBank($division);
}

?>
