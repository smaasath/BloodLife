<?php

require_once '../classes/campaign.php';
require_once '../classes/User.php';

use classes\campaign;
use classes\User;


header('Content-Type: application/json');

$method = $_SERVER["REQUEST_METHOD"];

$headers = getallheaders();
$authorizationHeader = isset($headers['authorization']) ? $headers['authorization'] : null;



if ($method === "GET") {
    if (isset($authorizationHeader) && preg_match('/Bearer\s+(.*)$/i', $authorizationHeader, $matches)) {

        $token = $matches[1];
        $user = new User(null, null, null, null, $token, null, null, null, null);

        if ($user->validateToken()) {


            $Allcamp = campaign::getAllCampaign();

            if ($Allcamp == null) {

                echo json_encode(array("message" => false));
            } else {

                echo json_encode($Allcamp);
            }
        } else {
            
            echo json_encode(array("message" => false));
        }
    } else {
        echo json_encode(array("message" => false));
    }
} else {
    echo json_encode(array("message" => "Invalid request method."));
}
