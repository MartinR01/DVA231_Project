<!DOCTYPE html>
<!-- LOGIN SCREEN
if user already logged in, redirect to student/teacher dashboard
-->

<?php

    $QUESTS_PER_ROW = 4;
  $QUEST_COLS = 12 / $QUESTS_PER_ROW;
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

<body>
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
              <li class="timecolor">
                <br>
                <!-- progress bar -->
                <div class="progress progress-profile green">
                  <span class="progress-left">
                    <span class="progress-bar progress-bar-profile"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar progress-bar-profile"></span>
                  </span>

                  <div class="progress-value progress-value-profile"><a href="#"><img class="imgprofile shadow" src="img/profileTest.jpg" width="150px" height="150px" alt=""></a></div>
                </div>



                <h3 class= "proname"> Name LastName<br><small>Student</small> </h3>
                <button type="button" class="btn btn-default btn-circle btn-lg shadow"><i class="material-icons icons">arrow_back</i></button>
                <button type="button" class="btn btn-default btn-circle-not btn-lg shadow"><i class="material-icons icons" >forum</i></button>
                <br>
              </li>
              <!--Stats -->


              <!--Buttons -->
              <a href="dashboard.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Dashboard</span></button></li></a>
              <a href="journey.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Journey</span></button></li></a>
              <a href="quests.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Quests</span></button></li></a>
              <!-- <a href="student/student_profile.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Profile</span></button></li></a> -->
              <a href="index.php"><li class="butallign"><button type="button" class="btn btn1 shadow" id="logout-btn"><span>Log out</span></button></li></a>
              <!--li><a href="#"> Notification <span class="badge pull-right">42</span></a></li-->

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.nav-normal -->
      </div><!--/sidebar-nav -->
    </div><!--/col - left -->

    <!-- MID SECTION-->
    <div class="col-sm-9 col-md-9 affix-content">
		<div class="row">
		<div class="col-sm-8 col-md-8">
      <!-- Title of journey -->
      <div class="row">
        <h1>WEB DEVELOPMENT</h1>
        <h4	class="name_teacher">Name of teacher</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

      <hr/>
      <!--Quest Map
      <div class="row" align ="center">
        <h4>Quest Map</h4>
      </div-->

	  <?php

         $sql_main = "select idquest,title,description from quest where idjourn = 1 AND questm = 'main' ORDER BY sortnum ASC";
		 $sql_side = "select idquest,title,description from quest where idjourn = 1 AND questm = '' ORDER BY sortnum ASC";

         ?>

		<h1>Main Quests</h1>
        <div class="row"><!--quest row-->
		<br>

          <?php
          require_once('protected/config.php');
          $result_main = mysqli_query($connection,$sql_main);
		  $result_side = mysqli_query($connection,$sql_side);
          if (mysqli_num_rows($result_main) > 0) {
            while($mains = mysqli_fetch_assoc($result_main)) {
           ?>

          <div class="col-sm-<?php echo $QUEST_COLS ?> quest-container" align="center"><!--Quest 1 -->
            <div class="quest-availability"></div>
            <div class="quest shadow" data-toggle="tooltip" title="" data-placement = "right"; onclick=<?php echo "editquest(".$mains['idquest'].")"  ?>>
				          <h4><?php echo $mains['title'];?></h4>

            </div>
          </div><!--Quest 1 end-->
		  <?php
			}
		  }
		  ?>

		  </div>

		  	<hr/>
			<h1>Side Quests</h1>
			<div class="row">
			<br>
			<?php
			$result_side = mysqli_query($connection,$sql_side);
          if (mysqli_num_rows($result_side) > 0) {
			while($side = mysqli_fetch_assoc($result_side)){?>
			<div class="col-sm-<?php echo $QUEST_COLS ?> sidequest-container" align="center"><!--Quest 1 -->
            <div class="sidequest-availability"></div>
            <div class="sidequest shadow" data-toggle="tooltip" title="<?php echo $side['description']; ?>" data-placement="right" onclick=<?php echo "editquest(".$side['idquest'].")"  ?>>
				<h4><?php echo $side['title'];?></h4>

            </div>
          </div><!--Quest 1 end-->
		  <?php
			}
		  }
		  ?>
		</div>


		<br><br><br>
		</div>
		</div>
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
              <div class="row">
                <h1>Skills</h1>

                <h4>Programming: Cody mcCodyson</h4>
                <div class="progress progress-stats" data-toggle="tooltip" title="Next Level: 70/100: Cracker" data-placement="bottom">
                  <div class="progress-bar progress-bar-success progress-bar-done" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                    50/100
                  </div>
                  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                  +20
                </div>
              </div>
            </div>


          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.nav-normal -->
    </div><!--/sidebar-nav -->
  </div>


    </div>

    <!-- RIGHT SECTION-->

</div>

<!-- JS for Bootstrap -->
<script src="js/bootstrap.js"></script>
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
