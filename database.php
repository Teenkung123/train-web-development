<?php 
date_default_timezone_set('Asia/Bangkok');
$host = "localhost";
$username = "root";
$password = "12345678";
$database = "test";
$con = new mysqli($host, $username, $password, $database);
if($con->connect_error){
    die("Connection Failed :" .$con->connect_error);
}
$con->set_charset("utf8");

?>