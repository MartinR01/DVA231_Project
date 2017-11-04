<!DOCTYPE html>
<!-- LOGIN SCREEN
if user already logged in, redirect to student/teacher dashboard
-->
<?php
session_start();
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
                <?php
                require_once('protected/config.php');
                $sqls ="Select * from professor where idprof ='".$_SESSION['id']."'";
                $result = mysqli_query($connection,$sqls);
                $row = mysqli_fetch_assoc($result);
                ?>
                <br>
                <?php
                $path = $row['profilepath'];
                $file = str_replace('/', ' ', $path);
                $split = explode(" ", $file);
                $filename =$split[count($split)-1];
                $prof = "./img/profile/".$filename;
                ?>
                <a href="#" style="text-align:center"><img class="imgprofile shadow" src=<?php echo "$prof";  ?> width="150px" height="150px" alt=""></a>
                <h3 class="textName">
                  <?php
                  echo $row['name']." ".$row['lastname'];
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
                <a href="php/logout.php"><li class="butallign"><button type="button" class="btn btn1 shadow" id="logout-btn"><span>Log out</span></button></li></a>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.nav-normal -->
        </div><!--/sidebar-nav -->
      </div><!--/col - left -->

      <!-- RIGHT SIDE-->
      <div class="col-sm-9 col-md-9 affix-content">
        <div class="row" align="center">
            <h1>Profile settings</h1>
            <br>
            <br>
        </div>

        <div class="container affix-content">
          <div class="row " align="center">

            <div class="col-sm-6">
              <form method="post" action="php/profileupdate.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label>First Name</label>
                  <input class="form-control" name="name" value="<?php echo $row['name'] ?>">
                </div>

                <div class="form-group">
                  <label>Last Name</label>
                  <input class="form-control" name="lastname" value="<?php echo $row['lastname'] ?>">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" name="email" value="<?php echo $row['email'] ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <?php
                $path = $row['profilepath'];
                $file = str_replace('/', ' ', $path);
                $split = explode(" ", $file);
                $filename =$split[count($split)-1];
                $prof = "./img/profile/".$filename;
                ?>
                <img class="imgprofile shadow" src=<?php echo "$prof";  ?> width="150px" height="150px" alt="">
                <div class="form-group">
                  <label for="exampleFormControlFile1">Upload Profile picture</label>
                  <input type="file" class="form-control-file" name ="file" id="exampleFormControlFile1">
                </div>
            </div>
          </div>


          <div class="row" align="center">
              <div class="form-group">
                <button type="submit" name="button" class="btn2 shadow">Save</button>
                <button type="button" name="button" class="btn2 shadow">Cancel</button>
              </div>
        </div>
      </div>
      </form>


      <!-- JS for Bootstrap -->
      <script src="js/bootstrap.js"></script>
    </body>
    </html>
