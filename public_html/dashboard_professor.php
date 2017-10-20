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
    <title>Dashboard Professor</title>
    <link href="https://fonts.googleapis.com/css?family=Teko:700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- CSS Bootstrap -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- CSS Our-->
      <link rel="stylesheet" href="css/design_prof.css">

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

      <!-- Top navigation -->
      <nav class="navbar navbar-default "  style="border:0px " >
      <!--  <div class="container" style="text-align:center">
          <br>
          <span class="topnav navbar-btn topnav-active">Dashboard</span>
          <span class="topnav">Leaderboard</span>
          <a href="http://mdh.se/" class="shoolpage"><img class="imgprofiles shadow" src="img/schoologo.jpg" width="70px" height="70px" alt=""></a>
    </div>-->
      </nav><!--/end NAVIGATION -->

      <!--Start of Journey-->
      <div class="container">
        <div class="row">
          <h1 class="underline">Journey</h1>


          <!--Journey 1-->
          <div class="col-sm-4" align="center">
            <div class="card-style">
              <div class="media">
                <!--Journey picture-->
                <div class="media-left">
                  <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media-body">
                  <div>
                    <a href="#"><h5 class="media-heading shadow">WEB DEVELOPMENT <span class="total-points-box" >hello</span> </h5></a></div>

                  <!--<a href="#"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5> <div class="total-points-box shadow">10</div> </a>-->
                  <div class="pull-left btn-part"> Studens: 21 </br> Main Quests: 8 <br>Side Quests: 16</div>
                  <div class="circle shadow pull-right"><span class="points-circle"><i class="material-icons md-18 icons">zoom_in</i></span></div>
                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 1 end-->

          <!--Journey 2-->
          <div class="col-sm-4" align="center">
            <div class="card-style">
              <div class="media">
                <!--Journey picture-->
                <div class="media-left">
                  <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media-body">
                  <a href="#"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>
                  <div class="circle shadow"><span class="points-circle">7.5</span></div>
                  <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 2 end-->

          <!--Journey 3-->
          <div class="col-sm-4" align="center">
            <div class="card-style">
              <div class="media">
                <!--Journey picture-->
                <div class="media-left">
                  <img class="media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media-body">
                  <a href="#"><h5 class="media-heading shadow">WEB DEVELOPMENT</h5></a>
                  <div class="circle shadow"><span class="points-circle">7.5</span></div>
                  <div class="pull-right btn-part">Join Group <br><span class="light progress-font">7/10</span></div>
                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 3 end-->
            <a href="#" class="link"><span > Show more ...</span></a><br>
        </div>
      </div><!--END OF A JOURNEY-->
      <br>
      <hr />

      <!--QUESTS -->
      <div class="container">
        <div class="row"><!--quest row -->
          <h1>Quests</h1>
          <div class="col-sm-3" align="center" style="margin-bottom:10px;"><!--Quest 1 -->
            <div class="quest-type" style="background-color:orange;"></div>
            <div class="quest-availability" style="background-color:green;"></div>
            <div class="quest shadow">
              <div class="quest-title color"><h3 style="position: relative; top:50px">Title</h3></div>
              <div class="quest-description ">Description</div>
            </div>
          </div><!--Quest 1 end-->
          <div class="col-sm-3" align="center" style="margin-bottom:10px;"><!--Quest 2 -->
            <div class="quest-type" style="background-color:orange;"></div>
            <div class="quest-availability" style="background-color:green;"></div>
            <div class="quest shadow" style="background-color:green;">
              <div class="quest-title color"><h3 style="position: relative; top:50px">Title</h3></div>
              <div class="quest-description ">Description</div>
            </div>
          </div><!--Quest 2 end -->
          <div class="col-sm-3" align="center" style="margin-bottom:10px;"><!--Quest 3 -->
            <div class="quest-type" style="background-color:orange;"></div>
            <div class="quest-availability" style="background-color:green;"></div>
            <div class="quest shadow" style="background-color:green;">
              <div class="quest-title color"><h3 style="position: relative; top:50px">Title</h3></div>
              <div class="quest-description ">Description</div>
            </div>
          </div><!--Quest 3 end-->
          <div class="col-sm-3" align="center" style="margin-bottom:10px;"><!--Quest 3 -->
            <div class="quest-type" style="background-color:orange;"></div>
            <div class="quest-availability" style="background-color:green;"></div>
            <div class="quest shadow" style="background-color:green;">
              <div class="quest-title color"><h3 style="position: relative; top:50px">Title</h3></div>
              <div class="quest-description ">Description</div>
            </div>
          </div><!--Quest 3 end-->
              <a href="#" class="link"><span > Show more ...</span></a><br>
        </div>
      </div><!--END OF QUESTS -->

    </div>
  </div>
  <!-- JS for Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>
