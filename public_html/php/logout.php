<?php
	session_start();
	session_destroy();
	unset($_COOKIE['journey']);
	setcookie('journey', null, -1, '/');
	header('Location: ../index.php');
?>
