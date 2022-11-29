<?php 
session_start();
$host = "kienzhe.dk.mysql";
$username = "kienzhe_dkregistration";
$password = "Admin2022";
$database = "kienzhe_dkregistration";
$dbCon = new mysqli($host, $username, $password, $database);
$dbCon->set_charset("utf8");
if ($dbCon->connect_error) { 
    die('NO CON TO DB (' . $dbCon->errno . ') ' . $dbCon->connect_error); 
}
?>