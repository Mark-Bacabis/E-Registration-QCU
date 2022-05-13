<?php
   session_start();
   unset($_SESSION['adminID']);

   if(empty($_SESSION['adminID'])){
      header('location: ../admin/index.php');
   }
?>