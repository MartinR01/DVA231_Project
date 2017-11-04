
<?php
$idquest= $_COOKIE['questp'];
$journey = $_COOKIE['journey']
 ?>

<div class=" padd shadow">

  <?php
  $sql = "Select title, description,pdfpath from quest where idquest = $idquest;";
  require_once('../protected/config.php');
  $result = mysqli_query($connection,$sql);
  $row = mysqli_fetch_assoc($result);
   ?>

   <h2 align="center"><?php echo $row['title']; ?></h2>
   <br>

<div class="form-group" align="center">
  <label for="exampleFormControlFile1">Description</label>
   <p ><?php echo $row['description']; ?></p>
   </div>
     <br><br><br>
       <form class="" id="sendtopro" action="php/sendquest.php" method="post" enctype="multipart/form-data">

   <div class="row " align="center" >
     <div class="col-sm-6">

   <?php

   $path = $row['pdfpath'];
   $file = str_replace('/', ' ', $path);
   $split = explode(" ", $file);
   $filename =$split[count($split)-1];
   $pdf = "./img/pdf/".$filename;
    ?>
    <?php

     if(empty($filename)){
      ?>
      <h4>No file was uploaded</h4>
      <?php
    }else{
      ?>
      <div class="form-group">
      <label for="exampleFormControlFile1">Download a pdf file!</label>
      <h4>PDF FILE  - <a href=<?php echo $pdf;?> download><?php echo $filename; ?></a></h4>
      </div>
      <?php
    }
     ?>
    </div>
     <div class="col-sm-6">
     <div class=" form-group">
       <?php
       $sql1="SELECT idq,filepath from recenta where idq =$idquest";
       require_once('../protected/config.php');
       $result1 = mysqli_query($connection,$sql1);
       $row1 = mysqli_fetch_assoc($result1);
       if($row1['idq'] == 0){
        ?>
        <label for="exampleFormControlFile1">Upload File</label>
        <?php
       }else{

            $path = $row1['filepath'];
            $file = str_replace('/', ' ', $path);
            $split = explode(" ", $file);
            $filename =$split[count($split)-1];
            $pdf = "./img/homeworks/".$filename;
          ?>

        <label for="exampleFormControlFile1">Uploaded file - <a href=<?php echo $pdf;?> download><?php echo $filename; ?></a></label>

          <?php
       }

        ?>

      <input type="file" name="file" class="borderso " id="exampleFormControlFile1">
    </div>
      </div>

      </div>
<br><br>
      <div class="row " align ="center">
        <?php
        if($row1['idq'] == 0){
         ?>
          <button type="submit" name="button" class="btn btn-primary shadow" id="quest-edit-btn" onclick="form_home()">Send to professor!</button>
          <?php
        }else{
          ?>
          <button type="submit" name="button" class="btn btn-primary shadow" id="quest-edit-btn" onclick="form_home()">Send it again!</button>

          <?php
        }
           ?>
        <a href= <?php echo "journey_student.php?journey=$journey"?>>  <button type="button" name="button" class="btn btn-default shadow" id="quest-edit-btn" >Cancel</button></a>
      </div>
      <br><br>
      </form>

</div>
