<?php 
session_start();
require('../../../database.php');
if (isset($_REQUEST['username']) || isset($_REQUEST['password'])) {
    
    $username = mysqli_real_escape_string($con, $_REQUEST['username']);
    $password = md5($_REQUEST['password']);

    $sql_check_exist = "SELECT COUNT(username) FROM profile WHERE (username = '$username' OR email = '$username') AND password = '$password'";
    $que_check_exist = mysqli_query($con, $sql_check_exist);
    $row_check_exist = mysqli_fetch_assoc($que_check_exist);
    if ($row_check_exist['COUNT(username)'] == 1) {
        $sql_check_username = "SELECT COUNT(username) FROM profile WHERE username = '$username'";
        $que_check_username = mysqli_query($con, $sql_check_username);
        $row_check_username = mysqli_fetch_assoc($que_check_username);

        if ($row_check_username['COUNT(username)'] == 0) {
            $email = $username;
            $sql_search = "SELECT username FROM profile WHERE email = '$email'";
            $que_search = mysqli_query($con, $sql_search);
            $row_search = mysqli_fetch_assoc($que_search);
            $username = $row_search['username'];
        } else {
            $sql_search = "SELECT email FROM profile WHERE username = '$username'";
            $que_search = mysqli_query($con, $sql_search);
            $row_search = mysqli_fetch_assoc($que_search);
            $email = $row_search['email'];
        }

        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        echo 'S';
    } else {
        echo 'ชื่อผู้ใช้หรือรหัสผิด';
    }
} else {
    echo 'test';
}


?>