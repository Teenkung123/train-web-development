<?php 
session_start();
if (isset ($_SESSION['login'])) {
	unset($_SESSION['login']);
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	echo "S";
} else {
	echo "คุณไม่ได้ล๊อคอิน";
}


?>