<?php


if($_SERVER['REQUEST_METHOD']=="POST"){

if (empty($_POST['idstudent'])){

echo "EMPTY";

}else{
  $cookie_name = "stud";
  $cookie_value = "add";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


  $ids= $_POST['idstudent'];
  $journey = $_COOKIE['journey'];

  require_once('../protected/config.php');
    $sql = "INSERT INTO sjourney (avalable,idstudent, idjourn) VALUES ('true',$ids,$journey)";
    mysqli_query($connection, $sql);
    header("location:../journey_activity.php?journey=".$_COOKIE['journey']);
}

}
 ?>
