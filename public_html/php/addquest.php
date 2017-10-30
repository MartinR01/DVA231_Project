<?php
  $error= "";
  require_once('../protected/config.php');
if($_SERVER['REQUEST_METHOD']== "POST"){

if (empty($_POST['qname']) || empty($_POST['qtype']) || empty($_POST['qdescription'])){
echo " Add quest information";
}else{
  $journey = $_COOKIE['journey'];
  $name = $_POST['qname'];
  $type = $_POST['qtype'];
  $description = $_POST['qdescription'];

  /*$writing = $_POST['wquest'] ;
  $presenting = $_POST['pquest'];
  $thinking = $_POST['tquests'];
  $programming = $_POST['prquests'];
  $design = $_POST['dquest'];
  $research = $_POST['rquest'];*/
  $sql = "";
        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];
        $fileSize = $_FILES['file']['size'];
        $fileTemp = $_FILES['file']['tmp_name'];
        if(is_uploaded_file($fileTemp)){
          if($fileSize < 2097152){
            if($fileType ='application/pdf'){
              $path = "XAMPP/xamppfiles/htdocs/FancyGroupWorkspaceRPG/public_html/img/pdf/".$journey.$fileName;
              if(move_uploaded_file($fileTemp, $path)){
                if($type == "main"){
                  $sql = "INSERT INTO quest( title, description, pdfpath, idjourn, questm) VALUES ('$name','$description','$path',$journey,'$type')";
                }else{
                  $sql = "INSERT INTO quest( title, description, pdfpath, idjourn, quests) VALUES ('$name','$description','$path',$journey,'$type')";
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
          echo  "No File is selected";
        }


}




}


 ?>
