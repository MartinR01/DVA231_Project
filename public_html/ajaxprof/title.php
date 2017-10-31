<?php
  $journey = $_COOKIE['journey'];
 ?>
  <form action="./php/titleupdate.php" method="post">
  <div class="form-group textd">
	<?php $sql = "select title from journey where idjourn = $journey";
          require_once('../protected/config.php');
          $result = mysqli_query($connection,$sql);
		  $row = mysqli_fetch_assoc($result);
    ?>

   <textarea class="" id="newtitle" name="text" rows="4" placeholder="Enter title here" value =""><?php echo $row['title']; ?></textarea>
 </div>
 <button class="btn btn-primary" type="submit" name="button" onclick="">Save Changes</button>
 <button class="btn btn-default" type="button" name="button" onclick=<?php echo "info(".$_COOKIE['journey'].")"; ?>> BACK</button>
</form>
<br><br>