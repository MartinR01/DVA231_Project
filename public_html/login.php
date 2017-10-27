
<?php

$error = "";

if($_SERVER['REQUEST_METHOD']=="POST"){

  if(empty($_POST['username']) && empty($_POST['password']) ){
    $error = "Enter email and password ";
  } elseif(empty($_POST['username']) && !empty($_POST['password']) ){
    $erroru="Enter username ";
  }elseif (!empty($_POST['username']) && empty($_POST['password']) ) {
    $errorp="Enter password";
  }else{
    $username = $_POST['username'];
    $pass = $_POST['password'];

  require_once('protected/config.php');

  $connection =mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

  $sqls ="Select username, pass, role from verify where username like '$username' and pass like '$pass'";
  $result = mysqli_query($connection,$sqls);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION['user']=$row['username'];
      $_SESSION['pass']=$row['pass'];

      if ($row['role'] == 'prof'){
        header("location:dashboard_prof.php");  
      }else {
        header("location:dashboard.php");
      }

    }
  } else {
    $error = "Wrong Username or password".$pass;

  }

  }

}







 ?>
