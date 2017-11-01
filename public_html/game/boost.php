
<?php
session_start();
$journey = $_COOKIE['journey'];
$studentid = $_SESSION['id'];
$idquest= $_COOKIE['questp'];
$boostar= array();
$sql ="select ts.idts,q.points from typeskil ts, questpoints q where q.idquest =$idquest and ts.idts= q.idts";
require_once('../protected/config.php');
$result = mysqli_query($connection,$sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    array_push($boostar,$row['points']);
  }
}

?>
<?php
$sql = "SELECT s.idsk,t.skil,t.idts from skill s, typeskil t WHERE s.idjourn=$journey and t.idts = s.idts";
require_once('../protected/config.php');
$result = mysqli_query($connection,$sql);
$counter = 0;
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <h5>  <?php echo $row['skil'] ?></h5>
    <?php
    $sql2="Select l.maxpt from levels l where l.idsk =".$row['idsk']." and l.lvlname like 'Level 3'";
    require_once('../protected/config.php');
    $result2 = mysqli_query($connection,$sql2);
    $row2= mysqli_fetch_assoc($result2);

    $sql1="Select pointsum from points where idstudent=$studentid and idsk =".$row['idsk'];
    require_once('../protected/config.php');
    $result1 = mysqli_query($connection,$sql1);
    $row1 = mysqli_fetch_assoc($result1);
    if($row2['maxpt'] == 0){
      $prog = "0";
    }else{
      $prog = (($row1['pointsum']+$boostar[$counter])/$row2['maxpt'])*100;

    }

    ?>
    <div class="progress ">
      <div class="progress-bar progress-bar-success progress-bar-striped active" id =<?php echo $row['idts'] ?> role="progressbar"
        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style=<?php echo "width:$prog%"; ?>>
        <?php
        if($boostar[$counter] == 0){

        }else{
        echo round(($boostar[$counter]/$row2['maxpt'])*100)."%";
        }
        ?>
      </div>
    </div>

    <?php
$counter= $counter + 1;
  }
}

?>
