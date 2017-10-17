<!DOCTYPE html>
<!-- LOGIN SCREEN
		if user already logged in, redirect to student/teacher dashboard
-->
<html>
<head>
    <meta charset="utf-8">
    <title>Quest up</title>
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
	    <div class="col-sm-4 col-md-2 affix-sidebar">
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

                <li class="active"><a href="#"><h4>Name Lastname<br><small>Student</small></h4></a></li>
                <li><a href="index.php">  <span class="glyphicon glyphicon-cloud"></span> Dashboard </a></li>
                <li class="active"><a href="#"><span class="glyphicon glyphicon-inbox"></span> Journey </span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-lock"></span>Quests</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> Notification <span class="badge pull-right">42</span></a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.nav-normal -->
        </div><!--/sidebar-nav -->
	    </div><!--/col - left -->

      <div class="col-sm-9 col-md-10 affix-content">
        <h1> Heyy </h1>
      </div>
	 </div>
    <!-- JS for Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>
