
<!DOCTYPE html>
<?php
	session_start();
	require_once('protected/config.php');
?>
<!-- LOGIN SCREEN
if user already logged in, redirect to student/teacher dashboard
-->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quest up</title>
  <link href="https://fonts.googleapis.com/css?family=Teko:700" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS Our-->
  <link rel="stylesheet" href="css/design.css">
  <link rel="stylesheet" href="css/journey_test.css">
  <!-- CSS animations-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!-- jQuery and theamJQuery comented-->
  <!--link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /-->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

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
            <span class="visible-xs color navbar-brand">Home Menu</span>
          </div>
          <!--/.nav-collapse -->
          <div class="navbar-collapse collapse sidebar-navbar-collapse">
            <ul class="nav navbar-nav" id="sidenav01">
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
                <a href="#"><img class="imgprofile shadow animated bounceIn" src=<?php echo "$student";  ?> width="150px" height="150px" alt=""></a>
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
    <!-- RIGHT SIDE-->
    <div class="col-sm-9 col-md-9 affix-content" id="stud">

  <!-- Top navigation -->
      <nav class="navbar navbar-default  animated slideInLeft"  style="border:0px " >
        <div class="container" style="text-align:center">
          <br>
          <span class="topnav navbar-btn topnav-active" >Journey</span>
          <a href="http://mdh.se/" class="shoolpage "><img class="imgprofiles shadow" src="img/schoologo.jpg" width="70px" height="70px" alt=""></a>


        </div>
      </nav><!--/end NAVIGATION -->

      <!--AVAILABLE JOURNEYS-->
      <div class="container">
        <div class="row animated slideInLeft">
		  <h1 class="animated slideInLeft" >Available</h1>
          <!--Journey 1-->
          <div class="col-sm-4 animated zoomIn " align="center">
            <div class="card-style">
              <div class="media">
                <!--Journey picture-->
                <div class="media-left">
                  <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media-body">
                  <a href="journey_student.php"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>
                  <div class="circle shadow"><span class="points-circle">7.5</span></div>
                  <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 1 end-->

          <!--Journey 2-->
          <div class="col-sm-4 animated zoomIn " align="center">
            <div class="card-style">
              <div class="media">
                <!--Journey picture-->
                <div class="media-left">
                  <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media-body">
                  <a href="journey_student.php"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>
                  <div class="circle shadow"><span class="points-circle">7.5</span></div>
                  <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 2 end-->

          <!--Journey 3-->
          <div class="col-sm-4  animated zoomIn " align="center">
            <div class="card-style">
              <div class="media">
                <!--Journey picture-->
                <div class="media-left">
                  <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media-body">
                <a href="journey_student.php"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>
                  <div class="circle shadow"><span class="points-circle">7.5</span></div>
                  <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 3 end-->
            <a href="#" class="link animated fadeIn"><span > Show more ...</span></a><br>
        </div>
      </div><!--END OF A JOURNEY-->
      <br>
      <hr />

	  <!--UPCOMING JOURNEYS-->
	  <div class="container">
        <div class="row animated slideInLeft">

		  <h1 class="animated slideInLeft">Upcoming</h1>
          <!--Journey 1-->
          <div class="col-sm-4 animated zoomIn " align="center">
            <div class="card-style">
              <div class="media">
                <!--Journey picture-->
                <div class="media-left">
                  <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media-body">
                  <a href="journey_student.php"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>
                  <div class="circle shadow"><span class="points-circle">7.5</span></div>
                  <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 1 end-->

          <!--Journey 2-->
          <div class="col-sm-4 animated zoomIn " align="center">
            <div class="card-style">
              <div class="media">
                <!--Journey picture-->
                <div class="media-left">
                  <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media-body">
                <a href="journey_student.php"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>
                  <div class="circle shadow"><span class="points-circle">7.5</span></div>
                  <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 2 end-->

          <!--Journey 3-->
          <div class="col-sm-4 animated zoomIn " align="center">
            <div class="card-style">
              <div class="media">
                <!--Journey picture-->
                <div class="media-left">
                  <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media-body">
                  <a href="journey_student.php"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>
                  <div class="circle shadow"><span class="points-circle">7.5</span></div>
                  <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 3 end-->
            <a href="#" class="link animated fadeIn"><span > Show more ...</span></a><br>
        </div>
      </div><!--END OF A JOURNEY-->
    </div>
    </div>
    <!-- JS for Bootstrap -->
    <script src="js/ajaxstudent.js"></script>
    <script src="js/bootstrap.js"></script>
    </body>
    </html>
