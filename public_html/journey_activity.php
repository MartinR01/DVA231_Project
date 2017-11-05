<!DOCTYPE html>
<!-- LOGIN SCREEN
if user already logged in, redirect to student/teacher dashboard
-->
<?php
session_start();
if (isset($_COOKIE['lvl'])){

  ?>
  <script type="text/javascript">

  </script>

  <?php
}
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS Our-->
  <link rel="stylesheet" href="css/design_prof.css">
  <link rel="stylesheet" href="css/journey_prof.css">
  <link rel="stylesheet" href="css/activity_test.css">
  <link rel="stylesheet" href="css/quest_prof.css">


    <!-- jQuery and theamJQuery comented-->
  <!--link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /-->


</head>
<?php
if (isset($_COOKIE['lvl'])){
  unset($_COOKIE['lvl']);
  setcookie('lvl', null, -1, '/');
  ?>
  <body onload=<?php echo "info(".$_COOKIE['journey'].")";  ?>>
  <?php


}elseif (isset($_COOKIE['stud'])) {
  unset($_COOKIE['stud']);
  setcookie('stud', null, -1, '/');
  ?>
  <body onload=<?php echo "students(".$_COOKIE['journey'].")";  ?>>
  <?php
}elseif (isset($_COOKIE['quest'])) {
  unset($_COOKIE['quest']);
  setcookie('quest', null, -1, '/');
  unset($_COOKIE['equest']);
  setcookie('equest', null, -1, '/');
  ?>
  <body onload=<?php echo "quest(".$_COOKIE['journey'].")";  ?>>
  <?php
}else{
 ?>
<body>
 <?php
}


 ?>

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
  				      <h3 class="textName" style="text-align: left;">
                <?php
              echo "&nbsp;".$row['name']." ".$row['lastname'];
                ?>
              <br><small><?php
                  echo $row['email'];
                ?></small> </h3><button type="button" class="btn btn-default btn-circle btn-lg shadow"><i class="material-icons icons">settings</i></button>
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
    <?php
      $journey = $_GET['journey'];
      require_once('protected/config.php');
      $sqls = "select title from journey where idjourn=$journey";
      $result = mysqli_query($connection,$sqls);
      if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result)
     ?>
    <div class="col-sm-9 col-md-9 affix-content ">
      <div class="leftpad">
        <div class="row">
          <div id="title">

          <h2 class="title ">  <?php echo $row['title']; ?> <button class="btn btn-xs skill" onclick="edittitle()"><i class="material-icons">mode_edit</i></button></h2>
        <?php
      }

         ?>
          </div>
        </div>

      </div>

      <nav class=" navbar1 navbar-default" >
        <div class="  navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lol">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
          <span class="visible-xs  navbar-brand">Journey Menu</span>
        </div>
          <div id="lol" class="navbar-collapse collapse sidebar-navbar-collapse" align="center">
          <ul class="nav navbar-nav" id="sidenav01" >
            <li class="active" id="act" onclick=<?php echo "activity(".$journey.")"; ?>><a href="#activity" >Activity</a></li>
            <li id="act1" class="" onclick=<?php echo "quest(".$journey.")"; ?>><a  href="#quest" >Quests</a></li>
            <li id="act2" class="" onclick=<?php echo "students(".$journey.")"; ?>><a href="#students">Students</a></li>
            <li id="act3" class="" onclick=<?php echo "info(".$journey.")"; ?>><a href="#information" >Info.</a></li>
          </ul>
        </div>
      </nav>

      <!-- Activities -->
      <div class="container" id="contain">


		</div><!--Container Ends-->


  </div><!--Right Side End-->


</div><!--Everything ends-->

<script>
	if($('.quest').is(':visible')){
		$('[data-toggle="tooltip"]').tooltip();
		console.log("i am here");
	};
</script>



<!-- JS for Multiple-->
<script src="js/multiple.js"></script>
<!-- JS for AJx -->
<script src="js/journeybrif.js"></script>
<!-- JS for Bootstrap -->


<?php
	if(isset($_GET['page'])){
		switch($_GET['page']){
			case "info":?>
			<script type="text/javascript">
					 $("#act3").click();
					 </script>
			<?php
			break;
			case "students":?>
			<script type="text/javascript">
					 $("#act2").click();
					 </script>
			<?php
			break;
			case "quests":?>
			<script type="text/javascript">
					 $("#act1").click();
					 </script>
			<?php
			break;
			default:?>
			<script type="text/javascript">
					 $("#act").click();
					 </script>
			<?php
		}
	}
	else{
		?>
			<script type="text/javascript">
					 $("#act").click();
					 </script>
			<?php
	}
?>

</body>
</html>
