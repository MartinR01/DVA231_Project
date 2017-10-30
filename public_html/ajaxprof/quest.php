<?php
  $journey = $_COOKIE['journey'];
  $QUESTS_PER_ROW = 4;
  $QUEST_COLS = 12 / $QUESTS_PER_ROW;
 ?>
		 <div class="container" align="center">
		  <div class="row">
			<button type="button" class="btn-add-journey shadow" onclick="editquest()"><i class="material-icons">add</i></button>
		  </div>
		</div>
        <hr/>
        <?php

         $sql_main = "select idquest,title,description from quest where idjourn = $journey AND questm = 'main' ORDER BY sortnum ASC";
		 $sql_side = "select idquest,title,description from quest where idjourn = $journey AND questm = '' ORDER BY sortnum ASC";

         ?>
      <div class="container">
		<h1>Main Quests</h1>
        <div class="row"><!--quest row -->
          <?php
          require_once('../protected/config.php');
          $result_main = mysqli_query($connection,$sql_main);
		  $result_side = mysqli_query($connection,$sql_side);
          if (mysqli_num_rows($result_main) > 0) {
            while($mains = mysqli_fetch_assoc($result_main)) {
           ?>
          <div class="col-sm-<?php echo $QUEST_COLS ?> quest-container" align="center"><!--Quest 1 -->
            <div class="quest-availability"></div>
            <div class="quest shadow" data-toggle="tooltip" title="<?php echo $mains['description']; ?>" data-placement="right">
				<h4><?php echo $mains['title'];?></h4>
				
            </div>
          </div><!--Quest 1 end-->
          <?php
			}?>
			</div>
			<hr/>
			<h1>Side Quests</h1>
			<div class="row">
			<?php
			while($side = mysqli_fetch_assoc($result_side)){?>
			<div class="col-sm-<?php echo $QUEST_COLS ?> sidequest-container" align="center"><!--Quest 1 -->
            <div class="sidequest-availability"></div>
            <div class="sidequest shadow" data-toggle="tooltip" title="<?php echo $side['description']; ?>" data-placement="right">
				<h4><?php echo $side['title'];?></h4>
				
            </div>
          </div><!--Quest 1 end-->
		<?php		
		}
			
      }
		else {
        ?>
        <h1> ADD quest !</h1>
        <?php
      }
           ?>
        </div>
      </div><!--END OF QUESTS -->

	