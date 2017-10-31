<?php
  $error= "";
  require_once('../protected/config.php');
if($_SERVER['REQUEST_METHOD']== "POST"){

if (empty($_POST['qname']) || empty($_POST['qtype']) || empty($_POST['qdescription'])){
echo " Add quest information";
}else{
  $cookie_name = "quest";
  $cookie_value = "add";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

  $journey = $_COOKIE['journey'];
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
              $path = $_SERVER['DOCUMENT_ROOT']."/fancygroupworkspacerpg/public_html/img/pdf/".$name1.$file;
              if(move_uploaded_file($fileTemp, $path)){
                if($type == "main"){
                  $sql = "INSERT INTO quest( title, description, pdfpath, idjourn, questm,sortnum,quespath,quests) VALUES ('$name','$description','$path',$journey,'$type',0,'','')";
                }else{
                  $sql = "INSERT INTO quest( title, description, pdfpath, idjourn, quests, sortnum,quespath,questm) VALUES ('$name','$description','$path',$journey,'$type',0,'','')";
                }
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
            $sql = "INSERT INTO quest( title, description, pdfpath, idjourn, questm,sortnum,quespath,quests) VALUES ('$name','$description','//',$journey,'$type',0,'','')";
          }else{
            $sql = "INSERT INTO quest( title, description, pdfpath, idjourn, quests, sortnum,quespath,questm) VALUES ('$name','$description','//',$journey,'$type',0,'','')";
          }
          if(mysqli_query($connection,$sql)){
            echo  "Inserted file";
          }else{
            echo  "Error";

          }
        }
        $idq = 0;
        $sql = "Select idquest from quest";
        $result = mysqli_query($connection,$sql);
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $idq = $row['idquest'];
          }
        }


        echo "$idq";
        require_once('../protected/config.php');
        if (!empty($_POST['wquest'])){
            $writing = $_POST['wquest'] ;
            $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,1,$writing)";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,1,0)";
          if(mysqli_query($connection,$sql)){
            echo  "Inserted file";
          }else{
            echo  "Error";

          }
        }

        if (!empty($_POST['pquest'])){
            $presenting = $_POST['pquest'];
            $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,2,$presenting )";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,2,0)";
          if(mysqli_query($connection,$sql)){
            echo  "Inserted file";
          }else{
            echo  "Error";

          }
        }
        if (!empty($_POST['tquests'])){
            $thinking = $_POST['tquests'];
            $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,3,$thinking)";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,3,0)";
          if(mysqli_query($connection,$sql)){
            echo  "Inserted file";
          }else{
            echo  "Error";

          }
        }
        if (!empty($_POST['prquests'])){
            $programming = $_POST['prquests'];
            $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,4,$programming)";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,4,0)";
          if(mysqli_query($connection,$sql)){
            echo  "Inserted file";
          }else{
            echo  "Error";

          }
        }
        if (!empty($_POST['dquest'])){
              $design = $_POST['dquest'];
            $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,5,  $design )";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,5, 0 )";
          if(mysqli_query($connection,$sql)){
            echo  "Inserted file";
          }else{
            echo  "Error";

          }
        }
        if (!empty($_POST['rquest'])){
            $research = $_POST['rquest'];
            $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,6,$research)";
            if(mysqli_query($connection,$sql)){
              echo  "Inserted file";
            }else{
              echo  "Error";

            }
        }else{
          $sql = "INSERT INTO questpoints(idquest, idts, points) VALUES ($idq,6,0)";
          if(mysqli_query($connection,$sql)){
            echo  "Inserted file";
          }else{
            echo  "Error";

          }
        }

        header("location:../journey_activity.php?journey=".$_COOKIE['journey']);





}




}


 ?>
