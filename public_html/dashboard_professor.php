<!DOCTYPE html>
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
      <link rel="stylesheet" href="css/design_prof.css">
	  <link rel="stylesheet" href="css/activity_test.css">
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
              <li class="timecolor">
                <br>
                <a href="#"><img class="imgprofile shadow" src="img/profileTest.jpg" width="150px" height="150px" alt=""></a>
                <h3 class= "proname"> Name LastName<br><small>Student</small> </h3>
                <button type="button" class="btn btn-default btn-circle btn-lg shadow"><i class="material-icons icons">settings</i></button>
                <button type="button" class="btn btn-default btn-circle-not btn-lg shadow"><i class="material-icons icons" >forum</i></button>
                <br>
              </li>
              <!--Buttons -->
              <a href="dashboard.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Dashboard</span></button></li></a>
              <a href="journey.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Journey</span></button></li></a>
              <a href=""><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Quests</span></button></li></a>
              <a href=""><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Profile</span></button></li></a>
              <a href="index.php"><li class="butallign"><button type="button" class="btn btn1 shadow" id="logout-btn"><span>Log out</span></button></li></a>
              <!--li><a href="#"> Notification <span class="badge pull-right">42</span></a></li-->

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.nav-normal -->
      </div><!--/sidebar-nav -->
    </div><!--/col - left -->

    <!-- RIGHT SIDE-->
    <div class="col-sm-9 col-md-9 affix-content">
		<div class="container">
			<div class="row">
				
					<div class="col-xs-12 col-sm-4">
						<!-- RECENT ACTIVITY CARD -->
						<div class="activity-card">
							<div class="media">
								<!--student picture-->
								<div class="media-left student-pic-container">
								  <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
								</div>
								<!--info about submission-->
								<div class="media-body padded">
								  <a href="#"><h4 class="media-heading">WEB DEVELOPMENT</h4></a>
								  <a href="#"><h5 class="media-heading">STUDENT_NAME<small class="pull-right"><i>X mins ago</i></small></h5></a>
								 
								  <p>Uploaded quest 1</p>
								</div><!--Journey elements end-->
							</div>
						</div>
						<!-- RECENT ACTIVITY CARD END-->
					</div>
					
					<div class="col-xs-12 col-sm-4">
						<!-- RECENT ACTIVITY CARD -->
						<div class="activity-card">
							<div class="media">
								<!--student picture-->
								<div class="media-left student-pic-container">
								  <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
								</div>
								<!--info about submission-->
								<div class="media-body padded">
								  <a href="#"><h4 class="media-heading">WEB DEVELOPMENT</h4></a>
								  <a href="#"><h5 class="media-heading">STUDENT_NAME<small class="pull-right"><i>X mins ago</i></small></h5></a>
								 
								  <p>Uploaded quest 1</p>
								</div><!--Journey elements end-->
							</div>
						</div>
						<!-- RECENT ACTIVITY CARD END-->
					</div>
					
					<div class="col-xs-12 col-sm-4">
						<!-- RECENT ACTIVITY CARD -->
						<div class="activity-card">
							<div class="media">
								<!--student picture-->
								<div class="media-left student-pic-container">
								  <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
								</div>
								<!--info about submission-->
								<div class="media-body padded">
								  <a href="#"><h4 class="media-heading">WEB DEVELOPMENT</h4></a>
								  <a href="#"><h5 class="media-heading">STUDENT_NAME<small class="pull-right"><i>X mins ago</i></small></h5></a>
								 
								  <p>Uploaded quest 1</p>
								</div><!--Journey elements end-->
							</div>
						</div>
						<!-- RECENT ACTIVITY CARD END-->
					</div>
					
			</div>
		</div>
    </div>




  <!-- JS for Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>
