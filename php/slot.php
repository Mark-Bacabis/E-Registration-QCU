<?php
   include "./db_connection.php";
   $schedTime = $_POST['schedDate']."<br>";
   $schedDate =  $_POST['schedTime']; 

    // SELECT START TIME, END TIME, AND SLOTS PER DATES
   $selSchedPerDate = "SELECT DISTINCT `StartTime`, `Slot` FROM `schedule` WHERE `Date` = '$schedTime' AND `StartTime` = '$schedDate'";
   $schedQuery = mysqli_query($con, $selSchedPerDate);
   $slot = mysqli_fetch_assoc($schedQuery);
?>

<label for="slot"> Slot </label>
<input type="text" id="slot" name="schedslot" value="<?=$slot['Slot']?>" disabled>