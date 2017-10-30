<?php
session_start();
  require_once('../protected/config.php');
  $id=$_SESSION['id'];
  $sql = "UPDATE professor set name = '".$_POST['name']."' , lastname = '".$_POST['lastname']."' , email = '".$_POST['email']."' WHERE idprof = $id";
  mysqli_query($connection, $sql);
  mysqli_close($connection);
  header("location:../profile_settings.php");


 ?>
