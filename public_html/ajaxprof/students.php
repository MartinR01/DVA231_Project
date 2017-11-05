
<?php

  $journey = $_COOKIE['journey'];
  $error = "";
  if (isset($_COOKIE['studs'])){
      $studs = $_COOKIE['studs'];
      unset($_COOKIE['studs']);
      setcookie('studs', null, -1, '/');
      require_once('../protected/config.php');
      $sql = "DELETE FROM sjourney WHERE idsj=".$studs;
      if (mysqli_query($connection, $sql)) {
      $error= "Record deleted successfully";
      } else {
        $error= "ERROR";
      }
  }
 ?>
<div class="row"><!--Studentlist row -->
  <?php
   $sql= "select j.idsj,s.name, s.lastname, s.email  from Student s, sjourney j where j.idjourn =$journey and s.idstudent = j.idstudent";
  require_once('../protected/config.php');
  $result = mysqli_query($connection,$sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
   ?>
  <!--Student 1-->
  <div class="col-xs-12 col-sm-4">
    <!-- Student CARD -->
    <div class="activity-card">
      <div class="media">
        <!--student picture-->
        <div class="media-left student-pic-container">
          <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
        </div>
        <!--info about student-->
        <div class="media-body padded">
          <a href="#"><h4 class="media-heading"><?php echo $row['name']." ".$row['lastname'] ?></h4></a>
          <h5 class=""><?php echo $row['email'] ?><br/>
            <p>Score: 109pt.</p>
          </div><!--info end-->
          <div class="media-right student-pic-container">
            <button class="btn skilld btn-xs" type="button" name="button" onclick=<?php echo "deletes(".$row['idsj'].")"  ?>><i class="assist material-icons" >delete_forever</i></button>
          </div>
        </div>
      </div><!-- Student CARD END-->
    </div><!-- COL END-->
  <?php
}
}else{
  ?>

  <?php
}
   ?>



      </div><!--RA row end -->
      <div class="row" align = "center">
        <h3>Add Students</h3>
         <button class="btn-add-journey shadow" type="button" data-toggle="modal" data-target="#ModalStudent" name="button"><i class="material-icons">add</i></button>
      </div>

      <!-- Modal -->
      <div id="ModalStudent" class="modal fade" role="dialog">
      <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADD STUDENT</h4>
        </div>
        <div class="modal-body">

          <form id="add_student" action="./php/addStudent.php" method="post">
            <h5>Avalable Students</h5>

              <select name="idstudent" style="height:30px; width:100%;">
                <option value="none">Choose Student</option>
                <?php
                $sql= "select idstudent, name , lastname, email from Student where idstudent  not IN (select idstudent from sjourney where idjourn =$journey) ";
                  $result = mysqli_query($connection,$sql);
                  if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=". $row['idstudent'] .">".$row['name']." ".$row['lastname']."</option>";
                      }
                    }
                 ?>
                 </select>



        </div>
        <div class="modal-footer">
          <button type="button" onclick="form_student() " class="btn btn-primary" >Save Changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
         </form>
      </div>

      </div>
      </div>
