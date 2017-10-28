<?php
  $journey = $_COOKIE['journey'];
 ?>
       <div  class="row">
         <div class="col-sm-6 description " >
           <!--Description -->
           <div class="shadow leftpad" >
             <h2>Description</h2>
             <?php
             require_once('../protected/config.php');
             $sqls = "select description from journey where idjourn=$journey";
             $result = mysqli_query($connection,$sqls);
             if (mysqli_num_rows($result) > 0) {
             $row = mysqli_fetch_assoc($result)
              ?>
             <p class="textd">
                <?php
                 echo $row['description'];
                 ?>
             </p>
             <?php
           }else{
             ?>
             <h3>Add description</h3>
             <?php
           }

              ?>
           </div>
           <!--List of assistnts -->
           <div class="shadow leftpad padd" >
             <h2>Assistants</h2>
             <!--Professor -->
               <!-- CARD -->
               <div class="activity-card shadow">
                 <div class="media">
                   <!--Prof picture-->
                   <div class="media-left student-pic-container">
                     <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                   </div>
                   <!--info about submission-->
                   <div class="media-body padded">
                     <a href="#"><h4 class="media-heading">WEB DEVELOPMENT</h4></a>
                     <h5 class="media-heading"><a href="#">STUDENT_NAME </a><br/><small class=""><i>X mins ago</i></small></h5>
                     <!--LOG-->
                     <p>Uploaded quest 1</p>
                   </div><!--info sub end-->
                 </div>
               </div><!-- RECENT ACTIVITY CARD END-->

               <!--Professor -->
                 <!-- CARD -->
                 <div class="activity-card shadow">
                   <div class="media">
                     <!--Prof picture-->
                     <div class="media-left student-pic-container">
                       <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                     </div>
                     <!--info about submission-->
                     <div class="media-body padded">
                       <a href="#"><h4 class="media-heading">Rong gu</h4></a>
                       <h5 class="media-heading"><a href="#">STUDENT_NAME </a><br/><small class=""><i>X mins ago</i></small></h5>
                       <!--LOG-->
                       <p>Uploaded quest 1</p>
                     </div><!--info sub end-->
                   </div>
                 </div><!-- RECENT ACTIVITY CARD END-->
           </div>
         </div>
         <div class="col-sm-6 description">

           <div class="shadow leftpad" >
             <h2>Awards</h2>
             <p class="textd">
                 Lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco
             </p>
           </div>
           <!--List of Awards -->
           <div class="shadow leftpad padd" >
             <h2>Skils</h2>
           </div>

         </div><!-- COL END-->
       </div>

     </div>
