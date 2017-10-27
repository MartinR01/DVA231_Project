
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


  $sqls ="Select idu,username, pass, role from verify where username like '$username' and pass like '$pass'";
  $result = mysqli_query($connection,$sqls);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      session_start();
      if ($row['role'] == 'prof'){
        $_SESSION['idprof']=$row['idu'];
        header("location:dashboard_prof.php");
      }else {
          $_SESSION['idstud']=$row['idu'];
        header("location:dashboard.php");
      }

    }
  } else {
    $error = "Wrong Username or password";

  }

  }

}







 ?>
