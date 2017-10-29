
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

if (empty($_POST['typeskill'])){

echo "EMPTY";

}else{

$cookie_name = "lvl";
$cookie_value = "add";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  $ts = $_POST['typeskill'];
  $journey = $_COOKIE['journey'];
  $awards= array();
require_once('../protected/config.php');
  $sql = "INSERT INTO skill (idjourn, idts) VALUES ($journey,$ts)";
  mysqli_query($connection, $sql);

//Get ID OF skill
  $idskill = 0;
  $skillt = "";
$sql = "SELECT s.idsk,t.skil from skill s, typeskil t WHERE s.idjourn=$journey and t.idts = s.idts ";
$result = mysqli_query($connection,$sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $idskill = $row['idsk'];
    $skillt = $row['skil'];
  }
}
//Get awards

$sql = " Select ida from awards where Path LIKE '%$skillt.png';";
$result = mysqli_query($connection,$sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    array_push($awards, $row['ida']);
  }
}

//Insert Levels
    $lvlno = 0;
    foreach ($awards as $value) {
      $lol = $value;
    $sql = "INSERT INTO levels (lvlname,maxpt,ida,idsk) VALUES ('Level $lvlno',0,$lol,$idskill);";
    mysqli_query($connection, $sql);
      $lvlno = $lvlno +1;

    }



       header("location:../journey_activity.php?journey=".$_COOKIE['journey']);
}
}



 ?>
