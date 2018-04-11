<?php
use OSS\OssClient;
use OSS\Core\OssException;


function make($size) {
   $ret = "";
   for($i=0;$i<$size;$i++) {
   	$s1 = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,1);
   	$ret .= $s1;
   }
   return $ret;
}

   if(isset($_GET['edit'])) {
      $id = $_GET['edit'];
      include_once "Events/Edit.php";

   } else if(isset($_GET['delete'])) {
      $id = (int)$_GET['delete'];

      $conn->query("DELETE FROM event WHERE id = $id");

      include_once "Events/Default.php";
   } else if(
      isset($_POST['name']) &&
      isset($_POST['host_date']) &&
      isset($_POST['location']) &&
      isset($_POST['description'])
   ) {

      $name = $_POST['name'];
      $host_date = $_POST['host_date'];
      $end_date = "null";
      $location = $_POST['location'];
      $description = $_POST['description'];
      $picture_id = make(12);


      if(isset($_POST['id'])) {
         $update_id = (int)$_POST['id'];

         $query = $conn->prepare("UPDATE event SET `name`=?, `host_date`=?, `end_date`=?, `location`=?, `description`=? WHERE `id` = ?");

         $query->bind_param("sssssi", $name, $host_date, $end_date, $location, $description, $update_id);
         $query->execute();

      } else {

         $query = $conn->prepare("INSERT INTO event (`name`, `host_date`, `end_date`, `location`, `picture_url`, `description`) VALUES(?,?,?,?,?,?)");

         $query->bind_param("ssssss", $name, $host_date, $end_date, $location, $picture_id, $description);
         $query->execute();
      }



      $check = $_FILES['picture']['size'] !== 0 ? getimagesize($_FILES["picture"]["tmp_name"]) : false;
      if($check !== false) {

         require_once './oss/autoload.php';
         try {
            $accessKeyId = 'LTAIssZz9snfBYT1';
            $accessKeySecret = 'hyjwqSTUAo94O9sBsSNCOPWOPeFq3i';
            $endpoint = 'oss-ap-southeast-1.aliyuncs.com';
            $bucket = 'dtbbucket';
            $object = $picture_id . ".jpg";
            $content = file_get_contents($_FILES['picture']['tmp_name']);

            $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
            $ossClient->putObject($bucket, "cover/" . $object, $content);

            if(isset($_POST['id'])) {
               $update_id = (int)$_POST['id'];

               $query = $conn->prepare("UPDATE event SET `picture_url`= ? WHERE `id` = ?");
               $query->bind_param("si", $picture_id, $update_id);
               $query->execute();

            }
         } catch (OssException $e) {
             print $e->getMessage();
         }
      }




      include_once "Events/Default.php";
   } else {
      include_once "Events/Default.php";
   }

?>
