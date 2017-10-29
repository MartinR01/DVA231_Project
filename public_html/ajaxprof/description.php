
  <h2>Description</h2>
  <form action="./php/descupdate.php" method="post">
  <div class="form-group textd">

   <textarea class="form-control" id="newdesc" name="text" rows="4" placeholder="Enter description here" value =""></textarea>
 </div>
 <button class="btn btn-primary" type="submit" name="button" onclick="">Save Changes</button>
 <button class="btn btn-default" type="button" name="button" onclick=<?php echo "info(".$_COOKIE['journey'].")"; ?>> BACK</button>
</form>
<br><br>
