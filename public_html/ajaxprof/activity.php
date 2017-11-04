  <?php
    $journey = $_COOKIE['journey'];

    if(isset($COOKIE['a'])){
      $idstudent = $_COOKIE['a'];
        $idquest  = $_COOKIE['b'];

      require_once('../protected/config.php');
      $sql = " select pointsum from points where ";
      $points1= array();
      $sql ="select ts.idts,q.points from typeskil ts, questpoints q where q.idquest =$idquest and ts.idts= q.idts";
      require_once('../protected/config.php');
      $result = mysqli_query($connection,$sql);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          array_push($points1,$row['points']);
        }
      }else {
        echo "nope";
      }
        $skils= array();
      $sql ="select sk.idsk from quest qu, Journey j, skill sk where qu.idquest =$idquest and j.idjourn = qu.idjourn and sk.idjourn = j.idjourn  ";
      require_once('../protected/config.php');
      $result = mysqli_query($connection,$sql);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          array_push($skils,$row['idsk']);
        }
      }else {
        echo "nope";
      }
      $max = sizeof($points1);
      for ($i=0; $i < $max ; $i++) {
        $sql = "update points set pointsum = ".$points1[$i]."where idstudent = $idstudent and idsk =".$skils['i'];
        require_once('../protected/config.php');
        if (mysqli_query($connection, $sql)) {
          echo "YAp";
        } else {
          echo "nope";
        }
      }

    }
   ?>

  <br>
	<div class="row">
		<!-- Dropdowns for sorting -->
		<div class="dropdown">
			<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Sort by: Time
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">Name</a></li>
				<li><a href="#">Quest</a></li>
				<li><a href="#">Time</a></li>
			</ul>
		</div>

		<div class="dropdown">
			<button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><i class="material-icons" style="font-size:1em;">arrow_upward</i> Ascending
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#"><i class="material-icons" style="font-size:1em;">arrow_upward</i> Ascending</a></li>
				<li><a href="#"><i class="material-icons" style="font-size:1em;">arrow_downward</i> Descending</a></li>
			</ul>
		</div>
	</div>
	<hr/>
	<div class="row">
		  </br>
        <?php

        $sql = "Select s.idstudent, s.profilepath,q.idquest, q.title, s.name, s.lastname, r.timeupload, r.filepath from recenta r, quest q, Student s WHERE"
        ." r.idjourn = $journey and q.idquest = r.idq and s.idstudent = r.ids;";
        require_once('../protected/config.php');
        $result = mysqli_query($connection,$sql);
        if (mysqli_num_rows($result) > 0) {
          while($row= mysqli_fetch_assoc($result)) {

         ?>
          <!--First Activity -->
					<div class="col-xs-12 col-sm-5">
						<!-- RECENT ACTIVITY CARD -->
						<div class="activity-card">
							<div class="media">
								<!--student picture-->
								<div class="media-left student-pic-container">
                  <?php
                  $path = $row['profilepath'];
                  $file = str_replace('/', ' ', $path);
                  $split = explode(" ", $file);
                  $filename =$split[count($split)-1];
                  $prof = "./img/profile/".$filename;
                  ?>
								  <img class="shadow-extra media-object student-pic" src=<?php echo "$prof";  ?>>
								</div>

								<!--info about submission-->
								<div class="media-body padded">
								  <a href="#"><h4 class="media-heading"><?php echo $row['title']; ?></h4></a>
								  <h5 class="media-heading"><a href="#"><?php echo $row['name']." ".$row['lastname']; ?></a><br/><small class=""><i><?php echo $row['timeupload']; ?></i></small></h5>
                  <!--LOG-->

                     <?php

                     $path = $row['filepath'];
                     $file = str_replace('/', ' ', $path);
                     $split = explode(" ", $file);
                     $filename =$split[count($split)-1];
                     $pdf = "./img/pdf/".$filename;
                      ?>
                        <p> <a href=<?php echo $pdf;?> download><?php echo $filename; ?></a></p>


                        </div>
                        <div class="media-right student-pic-container">
                          <button class=" btn-xs" type="button" name="button" onclick= <?php echo  "activitya(".$row['idstudent'].",".$row['idquest'].")";?>><i class="assist material-icons" >done</i></button>
                          <button class="  btn-xs" type="button" name="button" onclick=""><i class="assist material-icons" >delete_forever</i></button>

                        </div>

								</div><!--info sub end-->
							</div>
						</div><!-- RECENT ACTIVITY CARD END-->

					</div><!-- COL END-->

          <?php
        }
      }
           ?>

	</div>
