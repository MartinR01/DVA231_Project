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
                <a href="#" style="text-align:center"><img class="imgprofile shadow" src="img/profileTest.jpg" width="150px" height="150px" alt=""></a>
                <h3 class="textName"> Name LastName<br><small>Professor</small> </h3>
                <button type="button" class="btn btn-default btn-circle btn-lg shadow"><i class="material-icons icons">settings</i></button>
                <button type="button" class="btn btn-default btn-circle-not btn-lg shadow"><i class="material-icons icons" >forum</i></button>
                <br>
              </li>
              <!--Buttons -->

              <a href="dashboard.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Dashboard</span></button></li></a>
              <a href="journey.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Journey</span></button></li></a>
              <a href=""><li class="butallign "><button type="button" class="btn btn1 shadow">Recent Activity  <span class="badge pull-right">42</span></button></li></a>
              <a href=""><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Profile</span></button></li></a>
              <a href="index.php"><li class="butallign"><button type="button" class="btn btn1 shadow" id="logout-btn"><span>Log out</span></button></li></a>


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
          <h1 class="underline titles">Journey</h1>


          <!--Journey 1-->
          <div class="col-sm-4" align="center">
            <div class="card-style not-active">
              <div class="media1 media">
                <!--Journey picture-->
                <div class="media1-left media-left">
                  <img class="media-object1 media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media1-body media-body">
                  <div>
                      <h5 class="media1-heading media-heading  shadow">WEB DEVELOPMENT
                        <span class="total-points-box" >
                          <span class= "total-points-text">360</span>
                        </span>
                      </h5>
                  </div>
                  <div class="pull-left btn-part"> Studens: 21 </br> Main Quests: 8 <br>Side Quests: 16</div>

                  <div class="icon-journey">
                      <a class="active" href="#IM WORKING"><i class="material-icons md-42 icons">info_outline</i></a>
                  </div>

                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 1 end-->
          <!--Journey 1-->
          <div class="col-sm-4" align="center">
            <div class="card-style not-active">
              <div class="media1 media">
                <!--Journey picture-->
                <div class="media1-left media-left">
                  <img class="media-object1 media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media1-body media-body">
                  <div>
                      <h5 class="media1-heading media-heading  shadow">WEB DEVELOPMENT
                        <span class="total-points-box" >
                          <span class= "total-points-text">360</span>
                        </span>
                      </h5>
                  </div>
                  <div class="pull-left btn-part"> Studens: 21 </br> Main Quests: 8 <br>Side Quests: 16</div>

                  <div class="icon-journey">
                      <a class="active" href="#IM WORKING"><i class="material-icons md-42 icons">info_outline</i></a>
                  </div>

                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 1 end-->
          <!--Journey 1-->
          <div class="col-sm-4" align="center">
            <div class="card-style not-active">
              <div class="media1 media">
                <!--Journey picture-->
                <div class="media1-left media-left">
                  <img class="media-object1 media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media1-body media-body">
                  <div>
                      <h5 class="media1-heading media-heading  shadow">WEB DEVELOPMENT
                        <span class="total-points-box" >
                          <span class= "total-points-text">360</span>
                        </span>
                      </h5>
                  </div>
                  <div class="pull-left btn-part"> Studens: 21 </br> Main Quests: 8 <br>Side Quests: 16</div>

                  <div class="icon-journey">
                      <a class="active" href="#IM WORKING"><i class="material-icons md-42 icons">info_outline</i></a>
                  </div>

                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 1 end-->
          <!--Journey 1-->
          <div class="col-sm-4" align="center">
            <div class="card-style not-active">
              <div class="media1 media">
                <!--Journey picture-->
                <div class="media1-left media-left">
                  <img class="media-object1 media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media1-body media-body">
                  <div>
                      <h5 class="media1-heading media-heading  shadow">WEB DEVELOPMENT
                        <span class="total-points-box" >
                          <span class= "total-points-text">360</span>
                        </span>
                      </h5>
                  </div>
                  <div class="pull-left btn-part"> Studens: 21 </br> Main Quests: 8 <br>Side Quests: 16</div>

                  <div class="icon-journey">
                      <a class="active" href="#IM WORKING"><i class="material-icons md-42 icons">info_outline</i></a>
                  </div>

                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 1 end-->
          <!--Journey 1-->
          <div class="col-sm-4" align="center">
            <div class="card-style not-active">
              <div class="media1 media">
                <!--Journey picture-->
                <div class="media1-left media-left">
                  <img class="media-object1 media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media1-body media-body">
                  <div>
                      <h5 class="media1-heading media-heading  shadow">WEB DEVELOPMENT
                        <span class="total-points-box" >
                          <span class= "total-points-text">360</span>
                        </span>
                      </h5>
                  </div>
                  <div class="pull-left btn-part"> Studens: 21 </br> Main Quests: 8 <br>Side Quests: 16</div>

                  <div class="icon-journey">
                      <a class="active" href="#IM WORKING"><i class="material-icons md-42 icons">info_outline</i></a>
                  </div>

                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 1 end-->
          <!--Journey 1-->
          <div class="col-sm-4" align="center">
            <div class="card-style not-active">
              <div class="media1 media">
                <!--Journey picture-->
                <div class="media1-left media-left">
                  <img class="media-object1 media-object img-thumbnail card-img" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                </div><!--.Journey pictureend-->
                <!--Journey elements-->
                <div class="media1-body media-body">
                  <div>
                      <h5 class="media1-heading media-heading  shadow">WEB DEVELOPMENT
                        <span class="total-points-box" >
                          <span class= "total-points-text">360</span>
                        </span>
                      </h5>
                  </div>
                  <div class="pull-left btn-part"> Studens: 21 </br> Main Quests: 8 <br>Side Quests: 16</div>

                  <div class="icon-journey">
                      <a class="active" href="#IM WORKING"><i class="material-icons md-42 icons">info_outline</i></a>
                  </div>

                </div><!--Journey elements end-->
              </div>
            </div>
          </div><!--Journey 1 end-->

        </div>
      </div><!--END OF A JOURNEY-->
      <br>

      <div class="container" align="center">
      <div class="row">
        <button type="button" class="btn-add-journey shadow"><i class="material-icons">add</i></button>
      </div>
    </div>
    </div>
  </div>


  <!-- JS for Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>
