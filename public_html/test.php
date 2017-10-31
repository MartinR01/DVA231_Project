<!--Start of Journey-->
<div class="container">
  <div class="row">
    <h1>Journey</h1>
      <?php
      $idp = $_SESSION['id'];
      require_once('protected/config.php');
      $sql="select DISTINCT j.idjourn, j.title from Journey j where j.idprof = $idp ";
       $main = 0;
       $side = 0;
       $title ='';
       $result = mysqli_query($connection,$sql);
       if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
           ?>
           <!--Journey 1-->
           <div class="col-sm-4" align="center">
             <div class="card-style not-active">
               <div class="media media1">
                 <!--Journey picture-->
                 <div class="media1-left media-left">
                   <img class="media1-object media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                 </div><!--.Journey pictureend-->
                 <!--Journey elements-->
                 <div class="media1-body media-body">
                   <div>
                     <h5 class="media1-heading media-heading shadow"><?php echo $row['title']?>
                       <span class="total-points-box" >
                         <span class= "total-points-text">360</span>
                       </span>
                     </h5>
                   </div>
             <div class="pull-left btn-part"> <?php echo "Student: "?> </br>
               <?php
               echo "Main Quests: <br />Side Quests:";
                ?>

              </div>

             <div class="icon-journey">
               <a class="active" href=<?php echo "journey_activity.php?journey=".$row['idjourn']; ?>><i class="material-icons md-42 icons">info_outline</i></a>

             </div>
           </div><!--Journey elements end-->
         </div>
       </div>
     </div><!--Journey 1 end-->
             <?php
           }
       } else {
         $error = "DB ERROR";

       }
       ?>

  </div>
</div>

select j.idjourn, j.title from sjourney sj, Journey j where sj.idstudent = $id  and j.idjourn = sj.idjourn;
