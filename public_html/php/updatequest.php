<?php
  $error= "";
  require_once('../protected/config.php');
if($_SERVER['REQUEST_METHOD']== "POST"){

if (empty($_POST['qname']) || empty($_POST['qtype']) || empty($_POST['qdescription'])){
echo " Add quest information";
}else{
  $cookie_name = "quest";
  $cookie_value = "update";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

  $quest = $_COOKIE['equest'];
  $journey= $_COOKIE['journey'];
  $name = $_POST['qname'];
  $type = $_POST['qtype'];
  $description = $_POST['qdescription'];


  $sql = "";

        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];
        $fileSize = $_FILES['file']['size'];
        $fileTemp = $_FILES['file']['tmp_name'];
        if(is_uploaded_file($fileTemp)){
          if($fileSize < 2097152){
            if($fileType ='application/pdf'){
              $file = str_replace(' ', '', $fileName);
              $name1 = str_replace(' ', '', $name);
              $path = $_SERVER['DOCUMENT_ROOT']."/fancygroupworkspacerpg/public_html/img/pdf/".$quest.$name1.$file;
              if(move_uploaded_file($fileTemp, $path)){
                if($type == "main"){
                  $sql = "UPDATE quest set title='$name',description ='$description',pdfpath='$path', idjourn = $journey WHERE idquest=$quest";
                }else{
                  $sql = "UPDATE quest set title='$name',description ='$description',pdfpath='$path', idjourn = $journey WHERE idquest=$quest";                }
                if(mysqli_query($connection,$sql)){
                  echo  "Inserted file";
                }else{
                  echo  "Error";

                }

                echo  "Picture Uploaded ";
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
          if($type == "main"){
            $sql = "UPDATE quest set title='$name',description ='$description', idjourn = $journey WHERE idquest=$quest";
          }else{
            $sql = "UPDATE quest set title='$name',description ='$description', idjourn = $journey WHERE idquest=$quest";
          }
          if(mysqli_query($connection,$sql)){
            echo  "Inserted file";
          }else{
            echo  "Error";

          }
        }



        require_once('../protected/config.php');
        if (!empty($_POST['wquest']) || $_POST['wquest'] != 0){
            $writing = $_POST['wquest'] ;
            $sql = "UPDATE questpoints SET points=$writing WHERE idquest= $quest and idts = 1;";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          echo "aloha";
        }

        if (!empty($_POST['pquest']) || $_POST['pquest'] != 0){
            $presenting = $_POST['pquest'];
            $sql = "UPDATE questpoints SET points=$presenting WHERE idquest= $quest and idts = 2;";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          echo "aloha";
        }
        if (!empty($_POST['tquests']) || $_POST['tquests'] != 0){
            $thinking = $_POST['tquests'];
            $sql = "UPDATE questpoints SET points=$thinking WHERE idquest= $quest and idts = 3;";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          echo "aloha";
        }
        if (!empty($_POST['prquests']) || $_POST['prquests'] != 0){
            $programming = $_POST['prquests'];
            $sql = "UPDATE questpoints SET points=$programming WHERE idquest= $quest and idts = 4;";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          echo "aloha";
        }
        if (!empty($_POST['dquest']) || $_POST['dquest'] != 0){
              $design = $_POST['dquest'];
              $sql = "UPDATE questpoints SET points=$design WHERE idquest= $quest and idts = 5;";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          echo "aloha";
        }
        if (!empty($_POST['rquest']) || $_POST['rquest'] != 0){
            $research = $_POST['rquest'];
            $sql = "UPDATE questpoints SET points=$research WHERE idquest= $quest and idts = 6;";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          echo "aloha";
        }

        header("location:../journey_activity.php?journey=".$_COOKIE['journey']);





}




}


 ?>
