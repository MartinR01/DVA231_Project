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
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CSS Bootstrap -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- CSS Our-->
      <link rel="stylesheet" href="css/design.css">
      <link rel="stylesheet" href="css/journey_test.css">
	  <link rel="stylesheet" href="css/student_profile_test.css">
	  <link rel="stylesheet" href="css/journey_student_test.css">
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
            <span class="visible-xs color navbar-brand">Home Menu</span>
          </div>
          <!--/.nav-collapse -->
          <div class="navbar-collapse collapse sidebar-navbar-collapse">
            <ul class="nav navbar-nav" id="sidenav01">
              <!--Profile -->
              <li class="timecolor">
                <br>
				<!-- progress bar -->
				<div class="progress green">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					
					<div class="progress-value"><a href="#"><img class="imgprofile shadow" src="img/profileTest.jpg" width="150px" height="150px" alt=""></a></div>
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
              <a href="student_profile.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Profile</span></button></li></a>
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
	  
		<!-- Title of journey -->
			<div class="row">
				<h1>WEB DEVELOPMENT</h1>
				<h4	class="name_teacher">Name of teacher</h4>
			</div>
			<hr/>
		<!--Quest Map-->
		<div class="row">
			<h3>Quest Map</h3>
		</div>
      
	    
		<div class="row"><!-- begin row 1 -->
		    <div class="col-sm-4" align="center" style="margin-bottom:10px;"><!-- Main Quest 1 -->
			<div class="quest-type" style="background-color:orange;"></div>
			<div class="quest-availability" style="background-color:green;"></div>
			<a href="#">
				<div class=" mainquest shadow" data-toggle="tooltip" title="Description of Quest - This quest helps you to improve your knowledge in HTML" data-placement="right" style="background-color:green;" >
					<div class="quest-title color"><h3 style="position: relative; top:50px">Title</h3></div>
					<div class="quest-description" >Description</div>
				</div>
			</a>
			</div><!--Mainquest 1 end-->
			
			<div class="col-sm-4" align="center" style="margin-bottom:10px;"><!-- Side Quest 1 -->
			<div class="quest-type" style="background-color:orange;"></div>
			<div class="quest-availability" style="background-color:green;"></div>
			<a href="#"> 
				<div class="sidequest shadow" data-toggle="tooltip" title="Description of Quest - This quest helps you to improve your knowledge in HTML" data-placement="right" style="background-color:green;">
					<div class="quest-title color"><h3 style="position: relative; top:50px">Title</h3></div>
					<div class="quest-description" >Description</div>
				</div>
			</a>
			</div><!--Sidequest 1 end-->
			
			<div class="col-sm-4" align="center" style="margin-bottom:10px;"><!-- Side Quest 2 -->
			<div class="sidequest-type" style="background-color:orange;"></div>
			<div class="sidequest-availability" style="background-color:green;"></div>
			<a href="#"> 
				<div class="sidequest shadow" data-toggle="tooltip" title="Description of Quest - This quest helps you to improve your knowledge in HTML" data-placement="right" style="background-color:green;">
					<div class="sidequest-title color"><h3 class="sidequest-title-text">Title</h3></div>
					<div class="sidequest-description">Description</div>
				</div>
			</a>
			</div><!--Sidequest 2 end-->
			
		</div><!-- row 1 end -->
		<br>
			
		<!-- Main Quest 2 -->
		<div class="row"><!-- begin row 2 -->
			<div class="col-sm-4" align="center" style="margin-bottom:10px;"><!-- Main Quest 2 -->
			<div class="quest-type" style="background-color:orange;"></div>
			<div class="quest-availability" style="background-color:green;"></div>
			<a href="#">
				<div class=" mainquest shadow" data-toggle="tooltip" title="Description of Quest - This quest helps you to improve your knowledge in HTML" data-placement="right" style="background-color:green;" >
					<div class="quest-title color"><h3 style="position: relative; top:50px">Title</h3></div>
					<div class="quest-description" >Description</div>
				</div>
			</a>
			</div><!--Quest 2 end-->
		</div><!-- row 2 end -->
			
      </div><!-- end of container -->
      <br>

    </div><!-- end of col -->
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
