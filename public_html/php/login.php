<?php

$error = "";

if($_SERVER['REQUEST_METHOD']=="POST"){

  if(empty($_POST['username']) && empty($_POST['password']) ){
    echo "Enter email and password ";
  } elseif(empty($_POST['username']) && !empty($_POST['password']) ){
    echo "Enter username ";
  }elseif (!empty($_POST['username']) && empty($_POST['password']) ) {
    echo "Enter password";
  }else{

    $username = $_POST['username'];
    $pass = $_POST['password'];


      require_once('../protected/config.php');
      $sqls ="Select idu,username, pass, role from verify where username like '$username' and pass like '$pass'";
      $result = mysqli_query($connection,$sqls);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {

          session_start();


			$_SESSION['id']=$row['idu'];
		if($row['role']=='prof'){
      echo "YOiu are heree LOLP";
			header("location: ../dashboard_prof.php");
        exit;
		}else{

			header('Location: ../dashboard.php');
      exit;

		}

    }
  } else {
    echo "Wrong Username or password";

  }

  }

}







 ?>
