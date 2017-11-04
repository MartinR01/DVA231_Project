<?php


if($_SERVER['REQUEST_METHOD']=="POST"){

if (empty($_POST['idprof'])){

echo "EMPTY";

}else{
  $cookie_name = "lvl";
  $cookie_value = "add";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


  $idp = $_POST['idprof'];
  $journey = $_COOKIE['journey'];

  require_once('../protected/config.php');
    $sql = "INSERT INTO assistant (idprof, idjourn) VALUES ($idp,$journey)";
    mysqli_query($connection, $sql);
    header("location:../journey_activity.php?journey=".$_COOKIE['journey']);
}

}
 ?>
