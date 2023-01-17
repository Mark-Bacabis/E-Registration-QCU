<?php
   $con = mysqli_connect('localhost', 'root', '', 'qcu_ereg'); // LOCAL DATABASE
   // $con = mysqli_connect('sql6.freesqldatabase.com', 'sql6492227', 'MxBI2glBpC', 'sql6492227'); // ONLINE DATABASE

   if(!$con){
      echo "Connection failed";
   }
?>