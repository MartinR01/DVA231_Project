<?php
  $journey = $_COOKIE['journey'];
  $QUESTS_PER_ROW = 4;
  $QUEST_COLS = 12 / $QUESTS_PER_ROW;

  if (isset($_COOKIE['dquest'])) {
    $idq = $_COOKIE['equest'];
    unset($_COOKIE['equest']);
    setcookie('equest', null, -1, '/');
    unset($_COOKIE['dquest']);
    setcookie('dquest', null, -1, '/');
    require_once('../protected/config.php');
    $sql = "DELETE FROM questpoints WHERE idquest=".$idq;
    mysqli_query($connection, $sql);
    $sql = "DELETE FROM quest WHERE idquest=".$idq;
    if (mysqli_query($connection, $sql)) {
    $error= "Record deleted successfully";
    } else {
      $error= "ERROR";
    }

  }
 ?>
		 <div class="container" >
		  <div class="row" align="center">
			<button type="button" class="btn-add-journey shadow" onclick="addquest()"><i class="material-icons">add</i></button>
		  </div>
		</div>
        <hr/>
        <?php

     $sql_main = "select idquest,title,description from quest where idjourn = $journey AND questm = 'main' ORDER BY sortnum ASC";
		 $sql_side = "select idquest,title,description from quest where idjourn = $journey AND questm = '' ORDER BY sortnum ASC";

         ?>
      <div class="container" align="center">
		<h1>Main Quests</h1>
        <div class="row" ><!--quest row -->
          <?php
          require_once('../protected/config.php');
          $result_main = mysqli_query($connection,$sql_main);
		  $result_side = mysqli_query($connection,$sql_side);
          if (mysqli_num_rows($result_main) > 0) {
            while($mains = mysqli_fetch_assoc($result_main)) {
           ?>
          <div class="col-sm-<?php echo $QUEST_COLS ?> quest-container" align="center"><!--Quest 1 -->
            <div class="quest-availability"></div>
            <div class="quest shadow" data-toggle="tooltip" title="<?php echo $mains['description']; ?>" data-placement="right" onclick=<?php echo "editquest(".$mains['idquest'].")"  ?>>
				          <h4><?php echo $mains['title'];?></h4>

            </div>
          </div><!--Quest 1 end-->
          <?php
			}
    }else {
        ?>
        <h4> Add Main quest !</h4>
        <?php
      }
      ?>
			</div>
			<hr/>
			<h1>Side Quests</h1>
			<div class="row">
			<?php
      $result_side = mysqli_query($connection,$sql_side);
          if (mysqli_num_rows($result_side) > 0) {
			while($side = mysqli_fetch_assoc($result_side)){?>
			<div class="col-sm-<?php echo $QUEST_COLS ?> sidequest-container" align="center" ><!--Quest 1 -->
            <div class="sidequest-availability"></div>
            <div class="sidequest shadow" data-toggle="tooltip" title="<?php echo $side['description']; ?>" data-placement="right" onclick=<?php echo "editquest(".$side['idquest'].")"  ?>>
				<h4><?php echo $side['title'];?></h4>

            </div>
          </div><!--Quest 1 end-->
		<?php
		}
      }else {
        ?>
        <h4> ADD side quest !</h4>
        <?php
      }
           ?>
        </div>
      </div><!--END OF QUESTS -->
