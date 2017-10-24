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
  <title>Quest Professor</title>
  <link href="https://fonts.googleapis.com/css?family=Teko:700" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- CSS Our-->
  <link rel="stylesheet" href="../css/quest_prof.css">
  <link rel="stylesheet" href="../css/journey_prof.css">
  <link rel="stylesheet" href="../css/activity_test.css">


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

              <a href="dashboard_prof.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Dashboard</span></button></li></a>
              <a href="journey_professor.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Journey</span></button></li></a>
              <a href="recent_activity.php"><li class="butallign "><button type="button" class="btn btn1 shadow">Recent Activity  <span class="badge pull-right">42</span></button></li></a>
              <a href="journey_activity.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Profile</span></button></li></a>
              <a href="index.php"><li class="butallign"><button type="button" class="btn btn1 shadow" id="logout-btn"><span>Log out</span></button></li></a>


            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.nav-normal -->
      </div><!--/sidebar-nav -->
    </div><!--/col - left -->

    <!-- RIGHT SIDE-->
    <div class="col-sm-9 col-md-9 affix-content ">
      <div class="leftpad">
        <h1 class="title ">Web Development </h1>
      </div>

      <nav class=" navbar1 navbar-default" >
        <div class="container-fluid">

          <ul class="nav navbar-nav">
            <li><a href="#">Activity</a></li>
            <li class="active"><a href="#" >Quests</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Info.</a></li>
          </ul>
        </div>
      </nav>
      <br>

      <div class="container"> <!-- START OF EDITING QUEST -->

        <div class="row" align="center">
          <h2 class="edit_quest_title">EDIT QUEST</h2>
        </div>

        <div class="col-sm-6 col-md-6 affix-content "> <!-- column 1 -->
          <div class="row">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input class="form-control" id="exampleFormControlSelect1"  placeholder="Enter name of the quest">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Main Quest</option>
                  <option>Side Quest</option>
                </select>
              </div>
            </form>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 affix-content "> <!-- column 2 -->
          <form>
            <div class="form-group">
             <label for="exampleFormControlTextarea1">Example textarea</label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
           </div>

           <div class="form-group">
            <label for="exampleFormControlFile1">Upload File</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          </form>
        </div>


        <i class="material-icons arrow">forward</i>



      </div><!--END OF EDITING QUEST -->


    </div><!--RA row end -->
  </div><!--RA container end -->

  <!-- JS for Bootstrap -->

  <script src="../js/bootstrap.js"></script>
</body>
</html>
