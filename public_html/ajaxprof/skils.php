<?php
  $error = "";
  if (isset($_COOKIE['lvld'])){
      $lvld = $_COOKIE['lvld'];
      unset($_COOKIE['lvld']);
      setcookie('lvld', null, -1, '/');
      require_once('../protected/config.php');
      $sql = "DELETE FROM levels WHERE idsk=".$lvld;
      mysqli_query($connection, $sql);
      $sql = "DELETE FROM skill WHERE idsk=".$lvld;
      if (mysqli_query($connection, $sql)) {
      $error= "Record deleted successfully";
      } else {
        $error= "ERROR";
      }
  }
 ?>

<h2 class="col-sm-offset-4">Skils</h2><br>
<?php
 $counter = 0;
$journey = $_COOKIE['journey'];
$sqls = "SELECT s.idsk,t.skil from skill s, typeskil t WHERE s.idjourn=$journey and t.idts = s.idts";
require_once('../protected/config.php');
$result = mysqli_query($connection, $sqls);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="row" >
      <div class="col-sm-10">
        <div class="progress">
          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%; ">
          <?php echo $row['skil'];
              $counter = $counter + 1;
           ?>
        </div>
      </div>
    </div>
    <div class="col-sm-2" >
    <button class="btn skilld btn-xs" type="button" name="button" onclick=<?php echo "deletes(".$row['idsk'].")"  ?>><i class="material-icons">delete_forever</i></button>
    </div>
  </div>
  <br>
  <?php
}
}else {
?>
<?php
}
?>
<span class="col-sm-offset-3"><?php echo $error ;?></span><br>
<br>
<?php if ($counter == 6){
 ?>
 <div class="row">
   <div class="col-sm-12">
     <button class="btn btn-default col-sm-offset-4" type="button" name="button" onclick=<?php echo "info(".$_COOKIE['journey'].")"; ?>> Save changes</button>
   </div>
 </div>
<?php
}else{
?>
<div class="row" >
  <div class="col-sm-3" >
    <button class="btn btn-primary col-sm-offset-6" type="button" data-toggle="modal" data-target="#myModal" name="button" > ADD SKILL</button>
  </div>
  <div class="col-sm-9">
    <button class="btn btn-default col-sm-offset-2" type="button" name="button" onclick=<?php echo "info(".$_COOKIE['journey'].")"; ?>> Save changes</button>
  </div>
</div>
<?php

}

 ?>
 <!-- Modal -->
 <div id="myModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">ADD SKILL</h4>
   </div>
   <div class="modal-body">
     <form id="add_skill_form" action="./php/addSkill.php" method="post">
     <h5>Avalable Skills</h5>
     <select name="typeskill" style="height:30px; width:100%;">
       <option value="none">Choose Skill</option>
     <?php
      $sql= "Select idts, skil from typeskil where skil not in (SELECT t.skil from skill s, typeskil t WHERE s.idjourn=$journey and t.idts = s.idts)";
        require_once('../protected/config.php');
        $result = mysqli_query($connection,$sql);
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
              echo "<option value=". $row['idts'] .">".$row['skil']."</option>";
          }
        }
      ?>
        </select>

   </div>
   <div class="modal-footer">
     <button type="button" onclick="form_skill()" class="btn btn-primary" >Save Changes</button>
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   </div>
    </form>
 </div>

 </div>
 </div>
