<?php
 $journey = $_COOKIE['journey'];
function addStud($journey,$connection) {
  ?>
  <select name="idstudent[]" style="height:30px; width:100%;">
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
     <?php
}

  require_once('../protected/config.php');
  addStud($journey,$connection);
 ?>
