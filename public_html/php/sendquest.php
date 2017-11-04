
<?php
session_start();
  require_once('../protected/config.php');
  $id=$_SESSION['id'];
  $idquest= $_COOKIE['questp'];
  $journey = $_COOKIE['journey'];


          $fileName = $_FILES['file']['name'];
          $fileType = $_FILES['file']['type'];
          $fileSize = $_FILES['file']['size'];
          $fileTemp = $_FILES['file']['tmp_name'];

          if(is_uploaded_file($fileTemp)){
            if($fileSize < 2097152){
                $file = str_replace(' ', '', $fileName);
                $path = $_SERVER['DOCUMENT_ROOT']."/fancygroupworkspacerpg/public_html/img/homeworks/".$id.$file;
                if(move_uploaded_file($fileTemp, $path)){
                  $date = date('Y-m-d H:i:s');
                  $sql = "INSERT INTO recenta ( ids, idq,idjourn, filepath, timeupload) VALUES($id,$idquest,$journey,'$path','$date')";
                  if(mysqli_query($connection, $sql)){
                    echo "YAS";
                  }else{
                    echo "NOPE";
                  }
                  mysqli_close($connection);

                header("location:../journey_student.php?journey=".$journey);
                }else{
                  echo  "$fileTemp";
                }

            }else{
              echo  "File needs to be max. 2MB";
            }
          }else{

          }

 ?>








 ?>
