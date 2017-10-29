  <?php
  $journey = $_COOKIE['journey'];
  if (isset($_COOKIE['lvl'])){
    unset($_COOKIE['lvl']);
    setcookie('lvl', null, -1, '/');
  }
  ?>
  <div  class="row">

    <div class="col-sm-6 description " >
      <!--Description -->
      <div class="shadow leftpad" id ="description">
        <h2>Description <button class="btn btn-xs skill" onclick="description();"><i class="material-icons">mode_edit</i></button></h2>
        <?php
        require_once('../protected/config.php');
        $sqls = "select description from journey where idjourn=$journey";
        $result = mysqli_query($connection,$sqls);
        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result)
          ?>
          <p class="textd">
            <?php
            echo $row['description'];
            ?>
          </p>
          <?php
        }else{
          ?>
          <div class="row" align = "center">
            <h3>Add Description</h3>
             <button type="button" class="btn-add-journey shadow" onclick="description()"><i class="material-icons">add</i></button>
          </div>
          <?php
        }

        ?>
      </div><br>
      <!--List of assistnts -->
      <div class="shadow leftpad padd" >
        <h2>Assistants <button class="btn btn-xs skill" onclick="description();"><i class="material-icons">mode_edit</i></button></h2>
        <!--Professor -->
        <!-- CARD -->
        <div class="activity-card shadow">
          <div class="media">
            <!--Prof picture-->
            <div class="media-left student-pic-container">
              <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
            </div>
            <!--info about submission-->
            <div class="media-body padded">
              <a href="#"><h4 class="media-heading">WEB DEVELOPMENT</h4></a>
              <h5 class="media-heading"><a href="#">STUDENT_NAME </a><br/><small class=""><i>X mins ago</i></small></h5>
              <!--LOG-->
              <p>Uploaded quest 1</p>
            </div><!--info sub end-->
          </div>
        </div><!-- RECENT ACTIVITY CARD END-->

        <!--Professor -->
        <!-- CARD -->
        <div class="activity-card shadow">
          <div class="media">
            <!--Prof picture-->
            <div class="media-left student-pic-container">
              <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
            </div>
            <!--info about submission-->
            <div class="media-body padded">
              <a href="#"><h4 class="media-heading">Rong gu</h4></a>
              <h5 class="media-heading"><a href="#">STUDENT_NAME </a><br/><small class=""><i>X mins ago</i></small></h5>
              <!--LOG-->
              <p>Uploaded quest 1</p>
            </div><!--info sub end-->
          </div>
        </div><!-- RECENT ACTIVITY CARD END-->
      </div>
    </div>
    <div class="col-sm-6 description">
      <!--List of Skills-->
      <div class="shadow leftpad padd" id="level">
          <div class="row">
            <div class="col-sm-12"  align="center">
                <h2>Skils  <button class="btn btn-xs skill" onclick="skils()"><i class="material-icons">mode_edit</i></button></h2>
            </div>

          </div>
        <br>
        <?php
        $sql = "SELECT s.idsk,t.skil from skill s, typeskil t WHERE s.idjourn=$journey and t.idts = s.idts";
        require_once('../protected/config.php');
        $result = mysqli_query($connection,$sql);
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="row" >


              <div class="col-sm-8">
                <div class="progress">
                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%; ">
                  <?php echo $row['skil'] ?>
                </div>
              </div>
            </div>
            <div class=class="col-sm-3" >
              <button class="btn btn-default btn-xs" type="button" name="button" onclick=<?php echo "levels(".$row['idsk'].")"; ?>>Go to levels</button>
            </div>
          </div>
          <br  />
          <?php
        }
      }else {
        ?>
        <div class="row" align = "center">
          <h3>Add Skills</h3>
           <button type="button" class="btn-add-journey shadow" onclick="skils()"><i class="material-icons">add</i></button>
        </div>
        <?php
      }
      ?>
    </div>


  </div><!-- COL END-->
  </div>
  </div>
