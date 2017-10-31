<!DOCTYPE html>
<!-- LOGIN SCREEN
if user already logged in, redirect to student/teacher dashboard
-->

<?php
	session_start();

	//add journey to database
	$profID = $_SESSION['id'];
	$dummyName = "New Journey";
	require_once('protected/config.php');
    $sql = "INSERT INTO journey (title, idprof) VALUES ( '".$dummyName."' , $profID );";
    mysqli_query($connection, $sql);
	
	//find the id
	$sql = "SELECT idjourn FROM journey WHERE title='".$dummyName."'";
    
	$row = mysqli_fetch_assoc(mysqli_query($connection, $sql));
	$_SESSION['idjourn'] = $row['idjourn'];
	$journey = $_SESSION['idjourn'] ;
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
	<form action="php/add_journey.php" method="post">
      <div class="leftpad">
        <div class="row">
          <div class="col-sm-6">
			
				<input type="text" class="form-control input-lg" name="title" placeholder="Enter the title of Journey" value="<?php echo $dummyName;?>">
          </div>
          <div class="col-sm-6">
            <button type="submit" name="button" class="btn btn-primary btn-lg shadow">Save</button>
			
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
                      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter description here"></textarea>
                    </div>
                   </div>
				   </form>
                   <!--List of assistnts -->
                   <div class="shadow leftpad padd" >
                     <h2>Assistants</h2>
                     <!--Professor -->
                     <div class="row" align="center">
                     <?php
$counter = 0;
$sql = "Select p.idprof, p.name, p.lastname, p.email from assistant a, professor p where a.idjourn = $journey and p.idprof = a.idprof;";
require_once('protected/config.php');
$result = mysqli_query($connection,$sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
   $counter = $counter +1;
  ?>
  <div class="row">
    <div class="col-sm-9">
  <!-- CARD -->
  <div class="activity-card shadow">
    <div class="media">
      <!--Prof picture-->
      <div class="media-left student-pic-container">
        <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
      </div>
      <!--info about submission-->
      <div class="media-body padded">
        <h4 class="media-heading"> <?php echo $row['name']." ".$row['lastname']; ?></h4>
        <h5 class="media-heading"><a href="#"><?php echo $row['email']; ?></a>
        <!--LOG-->

      </div><!--info sub end-->
      <div class="media-right student-pic-container">
        <button class="btn skilld btn-xs" type="button" name="button" onclick=<?php echo "deletea(".$row['idprof'].")"  ?>><i class="assist material-icons" >delete_forever</i></button>

      </div>
    </div>
  </div><!-- RECENT ACTIVITY CARD END-->
  </div>
  <div class="col-sm-3">

  </div>

</div>
  <?php

 }
}
?>

<?php
  if ($counter == 2 ){
    ?>
    <div class="row">
      <div class="col-sm-12">
        <button class="btn btn-default col-sm-offset-4" type="button" name="button" onclick=<?php echo "info(".$_COOKIE['journey'].")"; ?>> Save Changes</button>
      </div>
    </div>
    <?php
  }else{
    ?>
    <div class="row" >
      <div class="col-sm-3" >
        <button class="btn btn-primary col-sm-offset-2" type="button" data-toggle="modal" data-target="#Modal" name="button" >ADD ASSISTANT</button>
      </div>
      <div class="col-sm-9">
        <button class="btn btn-default col-sm-offset-6" type="button" name="button" onclick=<?php echo "info(".$_COOKIE['journey'].")"; ?>> Save changes</button>
      </div>
    </div>

    <?php
  }
 ?>
 <!-- Modal -->
 <form id="add_assist" action="php/addassiste.php" method="post">
 <div id="Modal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">

     
     <h5>Avalable Assistants</h5>
     <select name="idprof" id="idprof" style="height:30px; width:100%;">
       <option value="none">Choose Assistant</option>
     <?php
      $sql= "Select name,lastname,idprof from professor where idprof not in (Select a.idprof from assistant a, professor p where a.idjourn = $journey and p.idprof = a.idprof) and idprof not in (SELECT j.idprof  from Journey j WHERE j.idjourn=$journey);";
        require_once('protected/config.php');
        $result = mysqli_query($connection,$sql);
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
              echo "<option value=". $row['idprof'] .">".$row['name']." ".$row['lastname']."</option>";
          }
        }
      ?>
        </select>
		

   </div>
   <div class="modal-footer">
     <button type="button" onclick="form_assiste()" class="btn btn-primary" >Save Changes</button>
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   </div>
    
 </div>

 </div>
 </div>
 </form>
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
				   <br>
				   <div class="shadow leftpad padd" >
						   <div class="col-sm-6">
						<img class="imgprofile shadow" src="<?php
								echo $row['profilepath'];
							?>" width="150px" height="150px" alt="">
						<form>
							<div class="form-group">
							  <label for="exampleFormControlFile1">Upload Profile picture</label>
							  <input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div>
						</form>
						</div>

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
<script src="js/journeybrif.js"></script>
<!-- JS for Bootstrap -->

<script src="js/bootstrap.js"></script>
</body>
</html>
