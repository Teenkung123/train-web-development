<?php 
session_start();
require('../../../database.php');
if (isset($_REQUEST['username']) || isset($_REQUEST['password']) || isset($_REQUEST['email'])) {
    
    $username = mysqli_real_escape_string($con, $_REQUEST['username']);
    $password = md5($_REQUEST['password']);
    $email = mysqli_real_escape_string($con, $_REQUEST['email']);

    $sql_check_exist = "SELECT COUNT(username) FROM profile WHERE (username = '$username' OR email = '$email')";
    $que_check_exist = mysqli_query($con, $sql_check_exist);
    if (false === $que_check_exist) {
        echo mysqli_error($con);
    }
    $row_check_exist = mysqli_fetch_assoc($que_check_exist);
    if ($row_check_exist['COUNT(username)'] >= 1) {
        echo 'ชื่อผู้ใช้หรืออีเมลนี้มีอยู่แล้ว';
    } else {
        $sql_insert = "INSERT INTO profile VALUES(null, '$username', '$email', '$password')";
        $que_insert = mysqli_query($con, $sql_insert);
        if (false === $que_insert) {
            echo mysqli_error($con);
        }
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        echo "S";
    }
} else {
    echo 'something went wrong';
}


?>