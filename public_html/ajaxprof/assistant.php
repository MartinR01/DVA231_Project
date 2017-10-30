<?php
$journey = $_COOKIE['journey'];
  $error = "";
  if (isset($_COOKIE['lvld'])){
      $lvld = $_COOKIE['lvld'];
      unset($_COOKIE['lvld']);
      setcookie('lvld', null, -1, '/');
      require_once('../protected/config.php');
      $sql = "DELETE FROM assistant WHERE idprof=".$lvld;
      if (mysqli_query($connection, $sql)) {
      $error= "Record deleted successfully";
      } else {
        $error= "ERROR";
      }
  }

 ?>

<h2>Assistants</h2>
<?php
$counter = 0;
$sql = "Select p.idprof, p.name, p.lastname, p.email from assistant a, professor p where a.idjourn = $journey and p.idprof = a.idprof;";
require_once('../protected/config.php');
$result = mysqli_query($connection,$sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
   $counter = $counter +1;
  ?>
  <div class="row">
    <div class="col-sm-9">
  <!-- CARD -->
  <div class="activity-card shadow">
    <div class="media">
      <!--Prof picture-->
      <div class="media-left student-pic-container">
        <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
      </div>
      <!--info about submission-->
      <div class="media-body padded">
        <h4 class="media-heading"> <?php echo $row['name']." ".$row['lastname']; ?></h4>
        <h5 class="media-heading"><a href="#"><?php echo $row['email']; ?></a>
        <!--LOG-->

      </div><!--info sub end-->
      <div class="media-right student-pic-container">
        <button class="btn skilld btn-xs" type="button" name="button" onclick=<?php echo "deletea(".$row['idprof'].")"  ?>><i class="assist material-icons" >delete_forever</i></button>

      </div>
    </div>
  </div><!-- RECENT ACTIVITY CARD END-->
  </div>
  <div class="col-sm-3">

  </div>

</div>
  <?php

 }
}
?>

<?php
  if ($counter == 2 ){
    ?>
    <div class="row">
      <div class="col-sm-12">
        <button class="btn btn-default col-sm-offset-4" type="button" name="button" onclick=<?php echo "info(".$_COOKIE['journey'].")"; ?>> Save Changes</button>
      </div>
    </div>
    <?php
  }else{
    ?>
    <div class="row" >
      <div class="col-sm-3" >
        <button class="btn btn-primary col-sm-offset-2" type="button" data-toggle="modal" data-target="#myModal" name="button" >ADD ASSISTANT</button>
      </div>
      <div class="col-sm-9">
        <button class="btn btn-default col-sm-offset-6" type="button" name="button" onclick=<?php echo "info(".$_COOKIE['journey'].")"; ?>> Save changes</button>
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
     <h4 class="modal-title">ADD ASSISTANTS</h4>
   </div>
   <div class="modal-body">

     <form id="add_assist" action="./php/addassist.php" method="post">
     <h5>Avalable Assistants</h5>
     <select name="idprof" style="height:30px; width:100%;">
       <option value="none">Choose Assistant</option>
     <?php
      $sql= "Select name,lastname,idprof from professor where idprof not in (Select a.idprof from assistant a, professor p where a.idjourn = $journey and p.idprof = a.idprof) and idprof not in (SELECT j.idprof  from Journey j WHERE j.idjourn=$journey);";
        require_once('../protected/config.php');
        $result = mysqli_query($connection,$sql);
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
              echo "<option value=". $row['idprof'] .">".$row['name']." ".$row['lastname']."</option>";
          }
        }
      ?>
        </select>

   </div>
   <div class="modal-footer">
     <button type="button" onclick="form_assist()" class="btn btn-primary" >Save Changes</button>
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   </div>
    </form>
 </div>

 </div>
 </div>
