<?php
  $journey = $_COOKIE['journey'];
 ?>
        <div class="row">
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Sort by: Main Quests
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#">Side Quests</a></li>
              <li><a href="#">Main Quests</a></li>
            </ul>
          </div>
        </div>
        <hr/>
        <?php

         $sql = "select idquest,title,description from quest where idjourn = $journey";

         ?>
      <div class="container">
        <div class="row"><!--quest row -->
          <?php
          require_once('../protected/config.php');
          $result = mysqli_query($connection,$sql);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
          <div class="col-sm-4 quest-container" align="center"><!--Quest 1 -->
            <div class="quest-availability"></div>
            <div class="quest shadow" data-toggle="tooltip" title="<?php echo $row['description']; ?>" data-placement="right">
				
              <h4><?php echo $row['title']; ?></h4>
            </div>
          </div><!--Quest 1 end-->
          <?php
        }
      }else {
        ?>
        <h1> ADD quest !</h1>
        <?php
      }
           ?>
        </div>
      </div><!--END OF QUESTS -->

      <div class="container" align="center">
      <div class="row">
        <button type="button" class="btn-add-journey shadow" onclick="editquest()"><i class="material-icons">add</i></button>
      </div>
    </div>

	