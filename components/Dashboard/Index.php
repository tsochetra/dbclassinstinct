<?php include_once "Sidebar.php"; ?>

<div class="main-panel animated slideInUp">
   <?php include_once "Header.php"; ?>
   <!-- <app-content></app-content> -->

   <!--  dynamic here-->
   <?php

   $page = isset($_GET['page']) ? $_GET['page'] : "default";

   switch($page) {
      case "icons":
         include_once "Index/Icons.php";
         break;
      case "events":
         include_once "Index/Events.php";
         break;
      case "users":
         include_once "Index/Users.php";
         break;
      default:
         include_once "Index/Default.php";
         break;
   }

   ?>

   <?php include_once "Footer.php"; ?>
</div>
