<?php
	session_start();

	//add journey to database
	$profID = $_SESSION['id'];
	$dummyName = "New Journey";
	require_once('protected/config.php');
    $sql = "INSERT INTO journey (title, idprof) VALUES ( '".$dummyName."' , $profID );";
    mysqli_query($connection, $sql);
	
	//find the id
	$sql = "SELECT idjourn FROM journey WHERE title='".$dummyName."'";
    
	$row = mysqli_fetch_assoc(mysqli_query($connection, $sql));
	$_SESSION['idjourn'] = $row['idjourn'];
	$journey = $row['idjourn'];
	
	header("location: journey_activity.php?journey=$journey&page=info");
	
 ?>