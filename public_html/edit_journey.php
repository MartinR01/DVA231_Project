<!DOCTYPE html>
<!-- LOGIN SCREEN
if user already logged in, redirect to student/teacher dashboard
-->

<?php
	session_start();

	//add journey to database
	$profID = $_SESSION['id'];
	require_once('protected/config.php');
    $sql = "INSERT INTO journey (title, idprof) VALUES ('New Journey', $profID );";
    mysqli_query($connection, $sql);

	//find the id
	$sql = "SELECT idjourn FROM journey WHERE title='New Journey'";

	$row = mysqli_fetch_assoc(mysqli_query($connection, $sql));
	$_SESSION['idjourn'] = $row['idjourn'];
 ?>

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
  <link rel="stylesheet" href="css/journey_prof.css">
  <link rel="stylesheet" href="css/activity_test.css">
  <link rel="stylesheet" href="css/quest_prof.css">


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
                <?php
                  require_once('protected/config.php');
                  $sqls ="Select * from professor where idprof ='".$_SESSION['id']."'";
                  $result = mysqli_query($connection,$sqls);
                  $row = mysqli_fetch_assoc($result);
                ?>
                <br>
                <a href="#" style="text-align:center"><img class="imgprofile shadow" src="
                <?php
                      echo $row['profilepath'];
                ?>" width="150px" height="150px" alt=""></a>
                <h3 class="textName" style="text-align: left;">
                <?php
               echo "&nbsp;".$row['name']." ".$row['lastname'];
                ?>
               <br><small><?php
                  echo $row['email'];
                ?></small> </h3>
                <button type="button" class="btn btn-default btn-circle btn-lg shadow"><i class="material-icons icons">settings</i></button>
                <button type="button" class="btn btn-default btn-circle-not btn-lg shadow"><i class="material-icons icons" >forum</i></button>
                <br>
              </li>
              <!--Buttons -->

              <a href="dashboard_prof.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Dashboard</span></button></li></a>
              <a href="journey_professor.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Journey</span></button></li></a>
              <a href="recent_activity.php"><li class="butallign "><button type="button" class="btn btn1 shadow">Recent Activity  <span class="badge pull-right">42</span></button></li></a>
              <!-- <a href="journey_activity.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Profile</span></button></li></a> -->
              <a href="index.php"><li class="butallign"><button type="button" class="btn btn1 shadow" id="logout-btn"><span>Log out</span></button></li></a>


            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.nav-normal -->
      </div><!--/sidebar-nav -->
    </div><!--/col - left -->

    <!-- RIGHT SIDE-->
    <div class="col-sm-9 col-md-9 affix-content ">
      <div class="leftpad">
        <div class="row">
          <div class="col-sm-6">
            <input type="text" class="form-control input-lg" placeholder="Enter the title of Journey">
          </div>
          <div class="col-sm-6">
            <button type="button" name="button" onclick="addjourney()" class="btn btn-primary btn-lg shadow">Save</button>
          </div>
        </div>
          <br> <!-- Edit this with css -->
      </div>

      <nav class=" navbar1 navbar-default" >
        <div class="container-fluid">

          <ul class="nav navbar-nav">
            <li id="act1" class="active" onclick="infoe()"><a href="#information" >Info.</a></li>
            <li id="act2" class="" onclick="queste()"><a href="#quests">Quests</a></li>
            <li id="act3" class="" onclick="studentse()"><a href="#students">Students</a></li>

          </ul>
        </div>
      </nav>

      <!-- Activities -->
      <div class="container" id="contain">
        <!-- AJAX WILL CHANGE THIS -->
        <br>
               <div  class="row">
                 <div class="col-sm-6 description " >
                   <!--Description -->
                   <div class="shadow leftpad" >
                     <h2>Description</h2>
                     <div class="form-group textd">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter description here"></textarea>
                    </div>
                   </div>
                   <!--List of assistnts -->
                   <div class="shadow leftpad padd" >
                     <h2>Assistants</h2>
                     <!--Professor -->
                     <div class="row" align="center">
                     <h4>Add Assistants</h4>
                     <!-- Button -->
                     <button type="button" class="btn-add-journey shadow"><i class="material-icons">add</i></button>
                     </div><!--RowEnds-->

                       <!--Professor -->
                   </div>
                 </div>
                 <div class="col-sm-6 description">

                   <!--List of Awards -->
                   <div class="shadow leftpad padd" >
                     <h2>Skills</h2>
                     <div class="row" align="center">
                       <h4>Add Skills</h4>
                       <!-- Button -->
                       <button type="button" class="btn-add-journey shadow"><i class="material-icons">add</i></button>
                     </div><!--RowEnds-->
                   </div>

                 </div><!-- COL END-->
               </div>
                 <!-- AJAX WILL CHANGE THIS -->
             </div>



    </div><!--Container Ends-->
  </div><!--Right Side End-->

</div><!--Everything ends-->
<!-- JS AJx -->
<script src="js/editjourny.js"></script>
<!-- JS for Bootstrap -->

<script src="js/bootstrap.js"></script>
</body>
</html>
