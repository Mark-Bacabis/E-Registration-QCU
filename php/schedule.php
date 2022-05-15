<?php
   include "./db_connection.php";
   $schedDate = $_POST['schedDate'];
  // SELECT TIME ONLY 
   $selTimeOnlyQuery = "SELECT `StartTime` FROM `schedule` WHERE `Date` = '$schedDate'  AND `Slot` != 0;";
   $selTimeOnly = mysqli_query($con, $selTimeOnlyQuery);

   if(mysqli_num_rows($selTimeOnly) > 0){
      while($rows = mysqli_fetch_assoc($selTimeOnly)){ ?>
         <option> <?=$rows['StartTime']?> </option>
      <?php 
         }
   } else{ ?>
      <option> No available </option>
   <?php } 

?>