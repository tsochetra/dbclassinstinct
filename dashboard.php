
<?php
   session_start();

   if(!isset($_SESSION['id'])) {
      session_destroy();
      ?><script type="text/javascript">
         window.location.href="login.php";
      </script> <?php
   }

   if(isset($_GET['action']) && $_GET['action'] == "logout") {
      session_destroy();
      ?><script type="text/javascript">
         window.location.href="login.php";
      </script> <?php
   }

   include_once "./db.php";

   include_once "./components/Header.php";

   include_once "./components/Dashboard/Index.php";

   include_once "./components/Footer.php";

?>
