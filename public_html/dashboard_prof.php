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
				      <h3 class="textName" style="text-align: left;">
					    <?php
						echo "&nbsp;".$row['name']." ".$row['lastname'];
    					?>
    				<br><small><?php
    						echo $row['email'];
    					?></small> </h3>

                <a href="profile_professor.php"><button type="button" class="btn btn-default btn-circle btn-lg shadow"><i class="material-icons icons">settings</i></button></a>
                <button type="button" class="btn btn-default btn-circle-not btn-lg shadow"><i class="material-icons icons" >forum</i></button>
                <br>
              </li>
              <!--Buttons -->

              <a href="#"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Dashboard</span></button></li></a>
              <a href="journey_professor.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Journey</span></button></li></a>
              <a href="recent_activity.php"><li class="butallign "><button type="button" class="btn btn1 shadow">Recent Activity  <span class="badge pull-right">42</span></button></li></a>
              <!-- <a href="journey_activity.php"><li class="butallign "><button type="button" class="btn btn1 shadow"><span>Profile</span></button></li></a> -->
              <a href="php/logout.php"><li class="butallign"><button type="button" class="btn btn1 shadow" id="logout-btn"><span>Log out</span></button></li></a>

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.nav-normal -->
      </div><!--/sidebar-nav -->
    </div><!--/col - left -->

    <!-- RIGHT SIDE-->
    <div class="col-sm-9 col-md-9 affix-content">

      <!--Start of Journey-->
      <div class="container">
        <div class="row" align="center">
          <h1>Journey</h1>
            <?php
            $idp = $_SESSION['id'];
            require_once('protected/config.php');
            $sql="select DISTINCT j.idjourn, j.title from Journey j where j.idprof = $idp ";
             $main = 0;
             $side = 0;
             $title ='';
             $result = mysqli_query($connection,$sql);
             if (mysqli_num_rows($result) > 0) {
               while($row = mysqli_fetch_assoc($result)) {
                 ?>
                 <!--Journey 1-->
                 <div class="col-sm-4" align="center">
                   <div class="card-style not-active">
                     <div class="media media1">
                       <!--Journey picture-->
                       <div class="media1-left media-left">
                         <img class="media1-object media-object img-thumbnail card-img"
                         src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
                       </div><!--.Journey pictureend-->
                       <!--Journey elements-->
                       <div class="media1-body media-body">
                         <div>
                           <h5 class="media1-heading media-heading shadow"><?php echo $row['title']?>
                             <span class="total-points-box" >
                               <?php
                               $lol =$row['idjourn'];
                               $sql = "select sum( a.points) as total from (Select p.points from quest q, questpoints p where q.idjourn =$lol and p.idquest= q.idquest) a;";

                               $result1 = mysqli_query($connection,$sql);
                     		        $row1 = mysqli_fetch_assoc($result1);
                                ?>
                               <span class= "total-points-text"><?php echo $row1['total']?></span>
                             </span>
                           </h5>
                         </div>
                         <?php
                         $sql = "SELECT COUNT(a.idstudent) as students from (select s.idstudent from sjourney s  where s.idjourn = $lol) a";
                         $results = mysqli_query($connection,$sql);
                          $student = mysqli_fetch_assoc($results);
                          ?>
                   <div class="pull-left btn-part"> <?php echo "Student: ".$student['students']?> </br>
                     <?php
                     $sql="select count( a.questm) as qm from (Select q.questm from quest q where q.idjourn = $lol and q.questm='main') a;";
                     $resultq = mysqli_query($connection,$sql);
                      $qm = mysqli_fetch_assoc($resultq); $questm = $qm['qm'];
                      $sql="select count( a.quests) as qs from (Select q.quests from quest q where q.idjourn = $lol and q.quests='side') a;";
                      $resultq = mysqli_query($connection,$sql);
                       $qs = mysqli_fetch_assoc($resultq);$quests = $qs['qs'];

                     echo "Main Quests: $questm <br />Side Quests:$quests";
                      ?>

                    </div>

                   <div class="icon-journey">
                     <a class="active" href=<?php echo "journey_activity.php?journey=$lol";?>><i class="material-icons md-42 icons">info_outline</i></a>

                   </div>
                 </div><!--Journey elements end-->
               </div>
             </div>
           </div><!--Journey 1 end-->
                   <?php
                 }
             } else {
               $error = "DB ERROR";

             }
             ?>
        </div>
      </div>
      <hr />

      <!--RECENT ACTIVITY -->
      <div class="container">
        <div class="row" align="center"><!--RA row -->
          <h1 class="ractiv">Recent Activity</h1>
          <!--First Activity -->
					<div class="col-xs-12 col-sm-4">
						<!-- RECENT ACTIVITY CARD -->
						<div class="activity-card">
							<div class="media">
								<!--student picture-->
								<div class="media-left student-pic-container">
								  <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
								</div>
								<!--info about submission-->
								<div class="media-body padded">
								  <a href="#"><h4 class="media-heading">WEB DEVELOPMENT</h4></a>
								  <h5 class="media-heading"><a href="#">STUDENT_NAME </a><br/><small class=""><i>X mins ago</i></small></h5>
                  <!--LOG-->
                  <p>Uploaded quest 1</p>
                </div><!--info sub end-->
              </div>
            </div><!-- RECENT ACTIVITY CARD END-->
          </div><!-- COL END-->

          <!--Second Activity -->
					<div class="col-xs-12 col-sm-4">
						<!-- RECENT ACTIVITY CARD -->
						<div class="activity-card">
							<div class="media">
								<!--student picture-->
								<div class="media-left student-pic-container">
								  <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
								</div>
								<!--info about submission-->
								<div class="media-body padded">
									<a href="#"><h4 class="media-heading">WEB DEVELOPMENT</h4></a>
									<h5 class="media-heading"><a href="#">STUDENT_NAME </a><br/><small class=""><i>X mins ago</i></small></h5>
									<!--LOG-->
									<p>Uploaded quest 1</p>
								</div><!--info sub end-->
							</div>
						</div><!-- RECENT ACTIVITY CARD END-->
					</div><!-- COL END-->

          <!--Third Activity -->
					<div class="col-xs-12 col-sm-4">
						<!-- RECENT ACTIVITY CARD -->
						<div class="activity-card">
							<div class="media">
								<!--student picture-->
								<div class="media-left student-pic-container">
								  <img class="shadow-extra media-object student-pic" src="http://www.marshallheads.com/download/file.php?avatar=58_1328912023.jpg">
								</div>
								<!--info about submission-->
								<div class="media-body padded">
									<a href="#"><h4 class="media-heading">WEB DEVELOPMENT</h4></a>
									<h5 class="media-heading"><a href="#">STUDENT_NAME </a><br/><small class=""><i>X mins ago</i></small></h5>
									<!--LOG-->
									<p>Uploaded quest 1</p>
								</div><!--info sub end-->
							</div>
						</div><!-- RECENT ACTIVITY CARD END-->
					</div><!-- COL END-->

        </div><!--RA row end -->
      </div><!--RA container end -->
    </div>


    <!-- JS for Bootstrap -->
    <script src="js/bootstrap.js"></script>
  </body>
  </html>
