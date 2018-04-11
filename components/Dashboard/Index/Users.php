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

      include_once "Users/Edit.php";
   }  else if(isset($_GET['delete'])) {
      $id = (int)$_GET['delete'];

      $conn->query("DELETE FROM user WHERE id = $id");

      include_once "Users/Default.php";
   } else if(
      isset($_POST['fullname']) &&
      isset($_POST['username']) &&
      isset($_POST['email']) &&
      isset($_POST['password']) &&
      isset($_POST['gender'])
   ) {
      $fullname = $_POST['fullname'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = sha1($_POST['password']);
      $gender = (int)$_POST['gender'];
      $picture_id = make(12);



      if(isset($_POST['id'])) {
         $update_id = (int)$_POST['id'];

         $query = $conn->prepare("UPDATE user SET `username`=?, `fullname`=?, `password`=?, `gender_id`=?, `email`=? WHERE `id` = ?");

         $query->bind_param("sssisi", $username, $fullname, $password, $gender, $email, $update_id);
         $query->execute();
      } else {

         $query = $conn->prepare("INSERT INTO user (`username`, `fullname`, `password`, `gender_id`, `email`, `picture_url`) VALUES(?,?,?,?,?,?)");

         $query->bind_param("sssiss", $username, $fullname, $password, $gender, $email, $picture_id);
         $query->execute();
      }




      $check = $_FILES['picture']['size'] !== 0 ? getimagesize($_FILES["picture"]["tmp_name"]) : false;
      // echo var_dump($_FILES['picture']);

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
            $ossClient->putObject($bucket, "profiles/" . $object, $content);

            if(isset($_POST['id'])) {
               $update_id = (int)$_POST['id'];

               $query = $conn->prepare("UPDATE user SET `picture_url`= ? WHERE `id` = ?");
               $query->bind_param("si", $picture_id, $update_id);
               $query->execute();

            }
         } catch (OssException $e) {
             print $e->getMessage();
         }
      }



      ?><script type="text/javascript">
         window.location.href = "dashboard.php?page=users"
      </script><?php
   } else {
      include_once "Users/Default.php";
   }

?>
