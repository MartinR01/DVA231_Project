<?php
  $journey = $_COOKIE['journey'];
 ?>
<div class="row"><!--Studentlist row -->
  <?php
   $sql= "select s.name, s.lastname, s.email  from Student s, sjourney j where j.idjourn =$journey and s.idstudent = j.idstudent";
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
        </div>
      </div><!-- Student CARD END-->
    </div><!-- COL END-->
  <?php
}
}else{
  ?>
  <h3>Add students</h3>
  <?php
}


   ?>



      </div><!--RA row end -->
