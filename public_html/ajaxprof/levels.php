<?php $lvl = $_COOKIE['lvl']
?>
<h2>Levels</h2>
<form action="./php/levlupdate.php" method="post">

  <?php
  $sql = "SELECT l.idlvl,l.lvlname, l.maxpt, a.Path from levels l, awards a WHERE l.idsk =$lvl and a.ida=l.ida;";
  require_once('../protected/config.php');
  $result = mysqli_query($connection,$sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="">
        <div class="row">
          <div class="col-sm-3">
            <h4> <?php echo $row['lvlname'] ?></h4>
          </div>
          <div class="col-sm-6">
            <input type="text" class="form-control input-lg" name=<?php echo $row['idlvl'] ?> placeholder="Enter the title of Journey" value=<?php echo $row['maxpt'] ?>>
          </div>
          <div class="col-sm-3">
            <img src=<?php echo "./".$row['Path'] ?> width="60px" height="62px" alt="">
          </div>

        </div>
      </div>
      <br  />
      <?php
    }
  }else {
    ?>
    <h3>Add Skills</h3>
    <?php
  }
  ?>
  <button class="btn btn-primary" type="submit" name="button" onclick="">Save Changes</button>
  <button class="btn btn-default" type="button" name="button" onclick=<?php echo "info(".$_COOKIE['journey'].")"; ?>> BACK</button>
</form>
