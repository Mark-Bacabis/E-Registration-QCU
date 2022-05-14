<?php
include "../php/db_connection.php";

$status = $_POST['status'];
if($status === 'Off'){
   $updQ = "UPDATE `web_preference` SET `status`='On', `url`='./form/fillup.php' WHERE `name` = 'fillup'";
   $upd = mysqli_query($con, $updQ);
} else{
   $updQ = "UPDATE `web_preference` SET `status`='Off', `url`='./applicants/Sorry.php' WHERE `name` = 'fillup'";
   $upd = mysqli_query($con, $updQ);
}


/*if($status == 'On'){
   echo "Off";
   //$updQ = "UPDATE `web_preference` SET `status`='Off', `url`='./applicants/Sorry.php' WHERE `name` = 'fillup'";
   //$upd = mysqli_query($con, $updQ);
}
else if($status == 'Off'){
   echo "On";
   //$updQ = "UPDATE `web_preference` SET `status`='On', `url`='./form/fillup.php' WHERE `name` = 'fillup'";
   //$upd = mysqli_query($con, $updQ);
}*/


$prefQuery = "SELECT * FROM `web_preference` WHERE `name` = 'fillup'";
$fill = mysqli_query($con, $prefQuery);
$fillUp = mysqli_fetch_assoc($fill);

?>


<?php
                     if($fillUp['status'] == 'On'){ ?>
                     <p class="status-web"> <?=$fillUp['status']?> </p>
                     <input type="checkbox" name="checkbox" id="checkbox" checked>
                     <label for="checkbox" class="label" id="label">
                        <div class="ball"></div>
                     </label>

                <?php  } else if($fillUp['status'] == 'Off'){ ?>
                     <p class="status-web"><?=$fillUp['status']?></p>
                     <input type="checkbox" name="checkbox" id="checkbox">
                     <label for="checkbox" class="label" id="label">
                        <div class="ball"> </div>
                     </label>
               <?php  }
                  ?>