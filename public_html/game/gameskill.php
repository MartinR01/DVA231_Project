
<?php
	session_start();
  $journey = $_COOKIE['journey'];
  $studentid = $_SESSION['id'];

  $sql="Select COUNT(p.idstudent) as ifplay from points p, skill s where idstudent=$studentid and p.idsk = s.idsk and s.idjourn = $journey;";
  require_once('../protected/config.php');
  $result = mysqli_query($connection,$sql);
  $row = mysqli_fetch_assoc($result);
  if ($row['ifplay']  <= 0){
    $idsk = array();
    $idlvl =array();
  $sql = "Select s.idsk , l.idlvl from  skill s , levels l where s.idjourn= $journey and l.idsk = s.idsk and l.lvlname like 'Level 0';";
  $result = mysqli_query($connection,$sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      array_push($idsk,$row['idsk']);
      array_push($idlvl,$row['idlvl']);
    }
  }
  $lol =sizeof($idsk);
  for ($i=0; $i < $lol; $i++) {
    $sql = "INSERT INTO points( idstudent, idsk, idlvl, pointsum) VALUES ($studentid,$idsk[$i],$idlvl[$i],0)";
    if(mysqli_query($connection,$sql)){
      echo  "Inserted file";
    }else{
      echo  "Error";
    }
  }
  }else{

  }
  $sql = "SELECT s.idsk,t.skil,t.idts from skill s, typeskil t WHERE s.idjourn=$journey and t.idts = s.idts";
  require_once('../protected/config.php');
  $result = mysqli_query($connection,$sql);
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
          $prog = ($row1['pointsum']/$row2['maxpt'])*100;
      }

       ?>
				<div class="progress ">
        <div class="progress-bar progress-bar-success progress-bar-striped " id =<?php echo $row['idts'] ?> role="progressbar"
        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style=<?php echo "width:$prog%"; ?>>

      </div>
			  </div>

    <?php
  }
}

     ?>
