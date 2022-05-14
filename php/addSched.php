<?php
   include "../php/db_connection.php";
   include "../method/functions.php";

   if(isset($_POST['btnSave'])){
      $schedDate = $_POST['dateSched'];
      $schedTime =  $_POST['timeSched'];
      $schedSlot = $_POST['slot'];

      addSchedule($schedDate, $schedTime, $schedSlot);
   }
   include "../php/select.php";
?>
                  <table border="0">
                     <tr>
                        <th> Id </th>
                        <th> Date </th>
                        <th> Time </th>
                        <th> Slot </th>
                        <th colspan="2"> Action </th>
                     </tr>
                     <?php
                        if(mysqli_num_rows($dateQuery) > 0){
                           while($rows = mysqli_fetch_assoc($dateQuery)) { ?>
                           <tr>
                              <td> <?=$rows['schedID']?> </td>
                              <td> <?=$rows['Date']?> </td>
                              <td> <?=$rows['StartTime']?> </td>
                              <td> <?=$rows['Slot']?> </td>
                              <td> <a href="#"> Edit </a> </td>
                              <td> <a href="#"> Del </a> </td>
                           </tr>
                     <?php }
                        }
                     ?>
                  
                  </table>