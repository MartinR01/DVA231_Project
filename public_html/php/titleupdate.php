<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

  $journey = $_COOKIE['journey'];
  if(empty($_POST['text'])){
    $cookie_name = "lvl";
    $cookie_value = "description";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
      header("location:../journey_activity.php?journey=".$_COOKIE['journey']);
  }else{

    $cookie_name = "lvl";
    $cookie_value = "description";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
      require_once('../protected/config.php');
      $sql = "UPDATE Journey set title ='".$_POST['text']."'  WHERE idjourn =".$journey;
      mysqli_query($connection, $sql);
        mysqli_close($connection);
        header("location:../journey_activity.php?journey=".$_COOKIE['journey']);

}
}


 ?>
