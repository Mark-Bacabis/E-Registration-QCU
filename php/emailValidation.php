<?php
   include "./db_connection.php";
   $email = $_POST['email'];

   if(strlen($email) > 8){
      $selApplicants = mysqli_query($con, "SELECT * FROM `stud_application` WHERE `email` = '$email'");
      if(mysqli_num_rows($selApplicants) > 0){
         echo "This email is already registered. use other email.";
      }
   }
?>