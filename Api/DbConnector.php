<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of DbConnector
 *
 * @author Saalu
 */
namespace Api;
use PDO;
use PDOException;


class DbConnector {

//put your code here
    private $server = "localhost:8081";
    private $username = "root";
    private $password = "";
    private $dbName = "bloodlife";

    public function getConnection() {
        try {
            $dsn = "mysql:host=".$this->server.";dbname=".$this->dbName;
            $conn = new PDO($dsn, $this->username, $this->password);
            return $conn;         
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}
