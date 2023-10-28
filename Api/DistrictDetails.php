
<?php
require_once '../classes/district.php';

use classes\district;

header('Content-Type: application/json');
$method = $_SERVER["REQUEST_METHOD"];


if ($method === "GET") {
    
   $datAarray = district::getAllDstrictDivition();
    echo json_encode($datAarray);
}