<?php
  $journey = $_COOKIE['journey'];
 ?>
  <h2>Description</h2>
  <form action="./php/descupdate.php" method="post">
  <div class="form-group textd">
	<?php $sql = "select description from journey where idjourn = $journey";
          require_once('../protected/config.php');
          $result = mysqli_query($connection,$sql);
		  $row = mysqli_fetch_assoc($result);
    ?>

   <textarea class="form-control" id="newdesc" name="text" rows="4" placeholder="Enter description here" value =""><?php echo $row['description']; ?></textarea>
 </div>
 <button class="btn btn-primary" type="submit" name="button" onclick="">Save Changes</button>
 <button class="btn btn-default" type="button" name="button" onclick=<?php echo "info(".$_COOKIE['journey'].")"; ?>> BACK</button>
</form>
<br><br>
