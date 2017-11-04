<?php
	session_start();

	$idp = $_GET['idprof'];
	$journey = $_SESSION['idjourn'];
	
  require_once('../protected/config.php');
    $sql = "INSERT INTO assistant (idprof, idjourn) VALUES ($idp,$journey)";
    mysqli_query($connection, $sql);
    
	header("location:../edit_journey.php");

 ?>
