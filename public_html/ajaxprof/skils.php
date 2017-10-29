<h2>Skils</h2>
<?php
 $sql = "SELECT s.idsk,t.skil from skill s, typeskil t WHERE s.idjourn=$journey and t.idts = s.idts";
require_once('../protected/config.php');
$result = mysqli_query($connection,$sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
 ?>
<div class="">
<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
  <?php echo $row['skil'] ?>
</div>
</div>
<button type="button" name="button" onclick=<?php echo "levels(".$row['idsk'].")"; ?>>See Levels</button>
</div>
<br  />
<?php
}
}else {
?>
<h3>Add Skills</h3>
<?php
}
?>
