<?php
   include "./db_connection.php";
   $schedTime = $_POST['schedDate'];
   $schedDate =  $_POST['schedTime']; 

      
   // SELECT SLOT ONLY
   $selSlotOnlyQuery = "SELECT `Slot` FROM `schedule` WHERE `Date` = '$schedDate' AND `Slot` = '$schedTime'";
   $selSlotOnly = mysqli_query($con, $selSlotOnlyQuery);
   $slotOnly = mysqli_fetch_assoc($selSlotOnly);
?>

<label for="slot"> Slot </label>
<input type="text" id="slot" name="schedslot" value="<?=$slotOnly['Slot']?>" disabled>