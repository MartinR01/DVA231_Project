<!DOCTYPE html>
<!-- LOGIN SCREEN
if user already logged in, redirect to student/teacher dashboard
-->
<?php
	session_start();
	require_once('protected/config.php');
	  $studentid = $_SESSION['id'];
  $journey = $_GET['journey'];
  $cookie_name = "journey";
  $cookie_value = $journey;
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quest up</title>
  <link href="https://fonts.googleapis.com/css?family=Teko:700" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS Our-->
  <link rel="stylesheet" href="css/design.css">
  <link rel="stylesheet" href="css/journey_test.css">
  <link rel="stylesheet" href="css/student_profile_test.css">
  <link rel="stylesheet" href="css/journey_student_test.css">
  <!-- CSS animations-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!-- jQuery and theamJQuery comented-->
  <!-- jQuery and theamJQuery comented-->
  <!--link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /-->

</head>
<?php
$sql="Select COUNT(p.idstudent) as ifplay from points p, skill s where idstudent=$studentid and p.idsk = s.idsk and s.idjourn = $journey;";
require_once('protected/config.php');
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);
if ($row['ifplay']  <= 0){
	echo "LOL";
 ?>
<body>
	<?php
}else{
	?>
<body onload="levels()">
	<?php
}
	 ?>
  <div class="row affix-row">
    <!--/col - left -->
    <div class="col-sm-3 col-md-3 affix-sidebar shadow">
      <!--/sidebar-nav -->
      <div class="sidebar-nav  ">
        <!--/.nav-normal -->
        <div class=" navbar navbar-default" role="navigation">
          <div class=" color navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>
            <span class="visible-xs color navbar-brand">Home Menu</span>
          </div>
          <!--/.nav-collapse -->
          <div class="navbar-collapse collapse sidebar-navbar-collapse">
            <ul class="nav navbar-nav" id="sidenav01">
              <!--Profile -->
              <!--Profile -->
        <?php
          $sqls ="Select * from student where idstudent ='".$_SESSION['id']."'";
          $result = mysqli_query($connection,$sqls);
          $row = mysqli_fetch_assoc($result);
        ?>
              <li class="timecolor">
                <br>
                <?php
                $path = $row['profilepath'];
                $file = str_replace('/', ' ', $path);
                $split = explode(" ", $file);
                $filename =$split[count($split)-1];
                $student = "./img/students/".$filename;
                 ?>
                <!-- progress bar -->
                <div class="progress progress-profile green">
                  <span class="progress-left">
                    <span class="progress-bar progress-bar-profile"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar progress-bar-profile"></span>
                  </span>

                  <div class="progress-value progress-value-profile"><a href="#"><img class="imgprofile shadow" src=<?php echo "$student";  ?> width="150px" height="150px" alt=""></a></div>
                </div>



                <h3 class= "proname">

                  <?php
        						//echo var_dump($_SESSION);
        						echo $row['name']." ".$row['lastname'];
        					?>
        					<br><small><?php
        						echo $row['email'];
        					?></small> </h3>
                        <a href="profile_student.php"><button type="button" class="btn btn-default btn-circle btn-lg shadow animated rotateIn"><i class="material-icons icons">settings</i></button></a>
                        <button type="button" class="btn btn-default btn-circle-not btn-lg shadow animated rotateIn"><i class="material-icons icons" >forum</i></button>
                        <br>
                      </li>
              <!--Buttons -->
              <a href="dashboard.php"><li class="butallign "><button type="button" class="btn btn1 shadow" ><span>Dashboard</span></button></li></a>
              <a href="journeys.php"><li class="butallign " ><button type="button" class="btn btn1 shadow" ><span>Journey</span></button></li></a>
              <a href="quests.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Quests</span></button></li></a>
              <!-- <a href="student/student_profile.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Profile</span></button></li></a> -->
              <a href="php/logout.php"><li class="butallign"><button type="button" class="btn btn1 shadow" id="logout-btn"><span>Log out</span></button></li></a>
              <!--li><a href="#"> Notification <span class="badge pull-right">42</span></a></li-->

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.nav-normal -->
      </div><!--/sidebar-nav -->
    </div><!--/col - left -->

    <!-- MID SECTION-->
    <div class="col-sm-6 col-md-6 affix-content">
      <?php $sql = "Select j.title,j.description, p.name, p.lastname, p.email from Journey j, professor p where j.idjourn=$journey and j.idprof = p.idprof";
              require_once('protected/config.php');
              $result = mysqli_query($connection,$sql);
    		  $row = mysqli_fetch_assoc($result);
        ?>
      <!-- Title of journey -->
      <div class="row">
        <h1><?php echo $row['title']; ?></h1>
        <h4	class="name_teacher"><?php echo $row['name']." ".$row['lastname']; ?>
          <br><small><?php echo $row['email']; ?></small>
        </h4>
        <p> <?php echo $row['description']; ?></p>
      </div>
      <hr/>
      <!--Quest Map
      <div class="row" align ="center">
        <h4>Quest Map</h4>
      </div-->

			<div id="questp">


			<?php
      $sql_main = "select idquest,title,description from quest where idjourn = $journey AND questm = 'main' ORDER BY sortnum ASC";
       $sql_side = "select idquest,title,description from quest where idjourn = $journey AND questm = '' ORDER BY sortnum ASC";
           ?>
           <h1>Main Quests</h1>
           <br>
        <div class="row animated slideInLeft" style="padding:10px">
          <?php
          require_once('protected/config.php');
          $result_main = mysqli_query($connection,$sql_main);
          if (mysqli_num_rows($result_main) > 0) {
            while($mains = mysqli_fetch_assoc($result_main)) {
           ?>
           <!-- Main Quest  -->
          <div class="col-sm-3 col-xs-6 animated zoomIn qm" onclick=<?php echo "questp(".$mains['idquest'].")"; ?> align="center" >

						<?php
						$sql1="SELECT idq from recenta where idq =".$mains['idquest'];
			      require_once('protected/config.php');
			      $result1 = mysqli_query($connection,$sql1);
			      $row1 = mysqli_fetch_assoc($result1);
			      if($row1['idq'] == 0){
			       ?>
						 <div class="quest-availability"></div>
						 <?php
			      }else{
			         ?>
							 <div class="quest-pending"></div>
							 <?php
			      }

						 ?>
              <div class=" quest shadow" data-toggle="tooltip" title=<?php echo $mains['description']; ?> data-placement="bottom" >
                 <h4><?php echo $mains['title'];?></h4>
              </div>
                </div>

          <?php
    			 }
    		 }
    		  ?>
      </div><!-- row 1 end -->

      <br>
      <h1>Side Quests</h1>
      <br>
      <div class="row animated slideInLeft" style="padding:10px">
        <?php
  			$result_side = mysqli_query($connection,$sql_side);
            if (mysqli_num_rows($result_side) > 0) {
  			while($side = mysqli_fetch_assoc($result_side)){?>

          <!-- side  -->
         <div class="col-sm-3 col-xs-6 animated zoomIn qs " onclick=<?php echo "questp(".$side['idquest'].")"; ?>  align="center" >
					 <?php
					 $sql1="SELECT idq from recenta where idq =".$side['idquest'];
					 require_once('protected/config.php');
					 $result1 = mysqli_query($connection,$sql1);
					 $row1 = mysqli_fetch_assoc($result1);
					 if($row1['idq'] == 0){
						?>
						<div class="sidequest-availability"></div>
						<?php
					 }else{
							?>
							<div class="sidequest-pending"></div>

							<?php
					 }

						?>

             <div class="sidequest shadow" data-toggle="tooltip" title=<?php echo $side['description']; ?> data-placement="bottom" >
                <h4><?php echo $side['title'];?></h4>
             </div>
             </div>

             <?php
              }
            }
             ?>
      </div><!-- row 1 end -->
    <br><br><br>
		</div>

			</div>


    <!-- RIGHT SECTION-->
    <div class="col-sm-3 col-md-3 ">
      <!--/sidebar-nav -->
      <div class="sidebar-nav affix-sidebar">
        <!--/.nav-normal -->
        <div class=" navbar navbar-default" role="navigation">
          <!--/.nav-collapse -->
          <div class="navbar-collapse collapse sidebar-collapse">
            <ul class="nav navbar-nav skillbar-right" id="sidenav01">

              <!-- AWARDS -->
              <div class="row">
                <h1>Awards</h1>
                <div class="award" >
                  <img data-toggle="tooltip" title="You worked hard - have a beer. Unlocked on 24/10/2017" data-placement="left" src="https://www.prazdroj.cz/cospospohzeg/uploads/2016/03/gambrinus-4.png"/>
                </div>
                <div class="award locked" >
                  <img data-toggle="tooltip" title="Complete all assignments. Locked" data-placement="left" src="https://www.prazdroj.cz/cospospohzeg/uploads/2016/03/gambrinus-4.png"/>
                </div>
              </div>
              <hr/>

              <!--STATS -->
              <div class="row" align="center">
                <h1>Start Game </h1>
								<div class="col-sm-11"  id="skills">
									<button class="btn-add-journey shadow"  name="button" onclick="levels()"><i class="material-icons">add</i></button>
								</div>


            </div>


          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.nav-normal -->
    </div><!--/sidebar-nav -->
  </div>
</div>
<script type="text/javascript">
function myFunction() {
	var a = document.getElementById("1").style.width;
    alert(a);
}
</script>
<!-- JS for Bootstrap -->
<script src="js/bootstrap.js"></script>
<script src="js/game.js"></script>
<!-- Install tooltips -->
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>

</body>
</html>
