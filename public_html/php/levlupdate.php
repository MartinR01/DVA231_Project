
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  $lvl = $_COOKIE['lvl'];

  $ids= array();
  $sql = "SELECT l.idlvl from levels l, awards a WHERE l.idsk =$lvl and a.ida=l.ida;";
  require_once('../protected/config.php');
  $result = mysqli_query($connection,$sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      array_push($ids, $row['idlvl']);
    }
  }

    foreach ($ids as $value) {
      require_once('../protected/config.php');
      $lol = $value."";
      $sql = "UPDATE levels set maxpt =".$_POST[$lol]."  WHERE idlvl =".$value;
      if (mysqli_query($connection, $sql)) {

      } else {
        echo "Error updating record: " . mysqli_error($connection);
      }


    }
        mysqli_close($connection);
        header("location:../journey_activity.php?journey=".$_COOKIE['journey']);
}



 ?>
