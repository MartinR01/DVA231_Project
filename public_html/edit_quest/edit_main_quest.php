      <?php
      $quest = $_COOKIE['equest'];
      $sql= "select title, description, pdfpath from quest where idquest = $quest;";
      require_once('../protected/config.php');
      $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($result);
       ?>
       <form id="qup" action="./php/updatequest.php" method="post" enctype="multipart/form-data">
                 <div class="row" align="center">
                   <h2 class="edit_quest_title">EDIT QUEST</h2>
                 </div>

                 <!-- Forms start -->
                 <div class="col-sm-6 col-md-6 affix-content "> <!-- column 1 -->
                  <div class="row">

                       <div class="form-group">
                         <label>Name</label>

                         <input class="form-control" name="qname" placeholder="Enter name of the quest" value= <?php echo $row['title']; ?>>
                       </div>

                       <div class="form-group">
                         <label for="exampleFormControlSelect1">Type</label>
                         <select name="qtype" class="form-control">
                           <option value="main">Main Quest</option>
                           <option value="side">Side Quest</option>
                         </select>
                       </div>

                       <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="qdescription" rows="5" placeholder="Enter description of the Quest" ><?php echo $row['description']; ?></textarea>
                      </div>

                      <div class="form-group">

                       <?php

                       $path = $row['pdfpath'];
                       $file = str_replace('/', ' ', $path);
                       $split = explode(" ", $file);
                       $filename =$split[count($split)-1];
                       $pdf = "./img/pdf/".$filename;
                        ?>
                        <br>
                        <?php

                         if(empty($filename)){
                          ?>
                          <h4>No file was uploaded</h4>
                          <?php
                        }else{
                          ?>
                          <h4>PDF FILE UPLOADED - <a href=<?php echo $pdf;?> download><?php echo $filename; ?></a></h4>
                          <?php
                        }
                         ?>
                       <label for="exampleFormControlFile1">Upload New File</label>
                       <input type="file" name="file" class="" id="exampleFormControlFile1">

                     </div>



                   </div>
                 </div>

                 <div class="col-sm-6 col-md-6 affix-content "> <!-- column 2: Points -->
                   <br>
                   <?php
                     $sql = "SELECT q.points, t.skil FROM questpoints q, typeskil t WHERE q.idquest = $quest and t.idts = q.idts ;";
                     $skils=array("writing"=>"0","presenting"=> "0","thinking"=>"0","programming"=>"0","design"=>"0","research"=>"0");
                     require_once('../protected/config.php');
                     $result = mysqli_query($connection,$sql);
                     if (mysqli_num_rows($result) > 0) {
                      while($row = mysqli_fetch_assoc($result)) {
                         if($row['skil']== "Writing"){
                           $skils['writing']=$row['points'];
                         }
                         if ($row['skil']== "Presenting") {
                           $skils['presenting']=$row['points'];
                         }
                         if ($row['skil']== "Thinking") {
                           $skils['thinking']=$row['points'];
                         }
                         if ($row['skil']== "Programming") {
                           $skils['programming']=$row['points'];
                         }
                         if ($row['skil']== "Design") {
                           $skils['design']=$row['points'];
                         }
                         if($row['skil']== "Research"){
                           $skils['research']=$row['points'];
                         }
                      }
                    }else{
                      echo "error loading points";
                    }


                    ?>


                     <!-- skill 1 -->
                     <div class="form-group row">
                       <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Writing</label>
                       <div class="col-sm-8">
                           <input class="form-control" name="wquest" placeholder="Enter points" value=<?php echo $skils['writing']; ?>>
                       </div>
                     </div>

                     <!-- skill 2 -->
                     <div class="form-group row">
                       <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Presenting</label>
                       <div class="col-sm-8">
                         <input class="form-control" name="pquest" placeholder="Enter points" value=<?php echo $skils['presenting']; ?>>

                       </div>
                     </div>

                     <!-- skill 3 -->
                     <div class="form-group row">
                       <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Thinking</label>
                       <div class="col-sm-8">
                         <input class="form-control" name="tquests" placeholder="Enter points" value=<?php echo $skils['thinking']; ?>>
                       </div>
                     </div>

                     <!-- skill 4 -->
                     <div class="form-group row">
                       <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Programming</label>
                       <div class="col-sm-8">
                         <input class="form-control" name="prquests" placeholder="Enter points" value=<?php echo $skils['programming']; ?>>
                       </div>
                     </div>

                     <!-- skill 5 -->
                     <div class="form-group row">
                       <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Designing</label>
                       <div class="col-sm-8">
                         <input class="form-control" name="dquest"  placeholder="Enter points" value=<?php echo $skils['design']; ?>>
                       </div>
                     </div>
                     <!-- skill 6 -->
                     <div class="form-group row">
                       <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Research</label>
                       <div class="col-sm-8">
                         <input class="form-control" name="rquest"   placeholder="Enter points" value=<?php echo $skils['research']; ?>>
                       </div>
                     </div>

                   <!-- Buttons row -->
                   <div class="row" align="center">
                     <button type="button" name="button" class="btn1 shadow" id="quest-edit-btn" onclick="form_update_quest()">Update</button>
                     <button type="button" name="button" class="btn1 shadow" id="quest-edit-btn" onclick=<?php echo "quest(".$_COOKIE['journey'].")";  ?>>Cancel</button>
                   </div>
                 </div>
      </form>

      <div class="row" align="center">
        <button type="button" class="btn1 shadow" id="trash-btn" onclick=<?php echo " dquest(".$_COOKIE['journey'].")";  ?>><i class="material-icons icons">delete_forever</i></button>
      </div>
