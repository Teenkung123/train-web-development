<?php 
session_start();
require('../../../database.php');
if (isset($_REQUEST['username']) || isset($_REQUEST['password'])) {
    
    $username = mysqli_real_escape_string($con, $_REQUEST['username']);
    $password = md5(mysqli_real_escape_string($con, $_REQUEST['password']));

    $sql_check_exist = "SELECT COUNT(username) FROM profile WHERE username = '$username' AND password = '$password'";
    $que_check_exist = mysqli_query($con, $sql_check_exist);
    $row_check_exist = mysqli_fetch_assoc($que_check_exist);
    if ($row_check_exist['COUNT(username)'] == 1) {
        $_SESSION['login'] = true;
        echo 'S';
    } else {
        echo 'ชื่อผู้ใช้หรือรหัสผิด';
    }
} else {
    echo 'test';
}


?>