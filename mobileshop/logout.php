<?php 
  session_start();
  session_destroy();
   // header("location:".SITE_URL."/login.php");
  header("location:index.php");
?>