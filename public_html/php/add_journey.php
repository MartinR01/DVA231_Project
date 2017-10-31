<?php
	session_start();
	
	$sql = "UPDATE journey SET title= '".$_POST['title']."' , description= '".$_POST['description']."' WHERE idjourn = '".$_SESSION['idjourn']."'";
    require_once('../protected/config.php');
    mysqli_query($connection,$sql);
	
	unset($_SESSION['idjourn']);
	
	header("location:../dashboard_prof.php");
?>