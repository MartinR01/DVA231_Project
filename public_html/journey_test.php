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
	<link href="https://fonts.googleapis.com/css?family=Teko:700" rel="stylesheet">

    <!-- CSS Bootstrap -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- CSS Our-->
      <link rel="stylesheet" href="css/design.css">
      <link rel="stylesheet" href="css/journey_test.css">

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
        <h1 class="underline"> Journey </h1>

<!--- above this do not touch! -- >



<!-- Font Awesome 4.7 -->

<div class="container-fluid">
  <div class="row">

<!-- Design Group 'No Member'  -->
    <div class="container">
        <div class="row">

          <!--1-->
            <div class="col-sm-4" style="text-align:center">
                <div class="card-style">
                    <div class="media">

                        <div class="media-left">
                            <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                        </div>

                        <div class="media-body">
                                <a href="#"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>

                                <div class="circle shadow"><span class="points-circle">7.5</span></div>

                                <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--1-->
              <div class="col-sm-4" style="text-align:center">
                  <div class="card-style">
                      <div class="media">

                          <div class="media-left">
                              <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                          </div>

                          <div class="media-body">
                                  <a href="#"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>

                                  <div class="circle shadow"><span class="points-circle">7.5</span></div>

                                  <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                          </div>
                      </div>
                  </div>
              </div>

              <!--1-->
                <div class="col-sm-4" style="text-align:center">
                    <div class="card-style">
                        <div class="media">

                            <div class="media-left">
                                <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                            </div>

                            <div class="media-body">
                                    <a href="#"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>

                                    <div class="circle shadow"><span class="points-circle">7.5</span></div>

                                    <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
      </div>

    </div>
</div>

<!--- below this do not touch! -- >
      </div>


	 </div>
    <!-- JS for Bootstrap -->
      <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>
