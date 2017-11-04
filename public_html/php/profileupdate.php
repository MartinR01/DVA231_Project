<?php
session_start();
  require_once('../protected/config.php');
  $id=$_SESSION['id'];
  if (empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['email']) ){
    echo "Fill all informations !";

  }else{
  $name =$_POST['name'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];

          $fileName = $_FILES['file']['name'];
          $fileType = $_FILES['file']['type'];
          $fileSize = $_FILES['file']['size'];
          $fileTemp = $_FILES['file']['tmp_name'];
          if(is_uploaded_file($fileTemp)){
            if($fileSize < 2097152){
              if($fileType ='image/jpeg'){
                $file = str_replace(' ', '', $fileName);
                $path = $_SERVER['DOCUMENT_ROOT']."/fancygroupworkspacerpg/public_html/img/profile/".$id.$file;
                if(move_uploaded_file($fileTemp, $path)){
                  $sql = "UPDATE professor set name = '$name ' , lastname = '$lastname' , email = '$email',profilepath = '$path'  WHERE idprof = $id";
                  if(mysqli_query($connection, $sql)){
                    echo "YAS";
                  }else{
                    echo "NOPE";
                  }
                  mysqli_close($connection);

                header("location:../profile_professor.php");
                }else{
                  echo  "$fileTemp";
                }
              }else{
              echo  "Choose .pdf format";
              }
            }else{
              echo  "File needs to be max. 2MB";
            }
          }else{
            $sql = "UPDATE professor set name = '$name' , lastname = '$lastname' , email = '$email' WHERE idprof = $id";
            mysqli_query($connection, $sql);
            mysqli_close($connection);
            echo  "Uploded no pic ";
            header("location:../profile_professor.php");
          }
}
 ?>
