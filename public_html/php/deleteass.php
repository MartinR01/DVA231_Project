<?php
	session_start();

	$idp = $_GET['idprof'];
	$journey = $_SESSION['idjourn'];
	
  require_once('../protected/config.php');
    $sql = "DELETE FROM assistant WHERE idprof = $idp AND idjourn = $journey ";
    mysqli_query($connection, $sql);
    
	header("location:../edit_journey.php");

 ?>
