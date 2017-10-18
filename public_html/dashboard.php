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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- CSS Bootstrap -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- CSS Our-->
      <link rel="stylesheet" href="css/design.css">
    <!-- jQuery and theamJQuery comented-->
    <!--link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>

<body>
	 <div class="row affix-row">
     <!--/col - left -->
	    <div class="col-sm-3 col-md-3 affix-sidebar">
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

                <li class="timecolor"><a href="#">
                  <img class="imgprofile" src="img/profileTest.jpg" width="150px" height="150px" alt="">
                  <h4 class= "proname">
                    Name LastName<br><small>Student</small><br>
                    <button type="button" class="btn btn-default btn-circle btn-lg"><i class="material-icons" style="font-size:20px;">settings</i></button>
                    <button type="button" class="btn btn-default btn-circle-not btn-lg"><i class="material-icons" style="font-size:20px;">speaker_notes</i></button>

                  </h4>

              </a>


            </li>
                <li class="butallign "><button type="button" class="btn btn1 shadow"><span>Dashboard</span></button></li>
                <li class="butallign "><button type="button" class="btn btn1 shadow"><span>Journey</span></button></li>
                <li class="butallign "><button type="button" class="btn btn1 shadow"><span>Quests</span></button></li>
                <li class="butallign "><button type="button" class="btn btn1 shadow"><span>Profile</span></button></li>

                <li class="butallign"><button type="button" class="btn1 shadow" id="logout-btn"><span>Log out</span></button></li>

                  <li><a href="#"> Notification <span class="badge pull-right">42</span></a></li>

              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.nav-normal -->
        </div><!--/sidebar-nav -->
	    </div><!--/col - left -->

      <div class="col-sm-9 col-md-9 affix-content">
        <h1> Heyy </h1>


      </div>
	 </div>
    <!-- JS for Bootstrap -->
      <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>
