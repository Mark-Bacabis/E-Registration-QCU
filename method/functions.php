<?php

function saveButton($email){
   $con = mysqli_connect("localhost", "root", "", "qcu_ereg");

   $query = mysqli_query($con, "INSERT INTO `stud_account` (`email`)  VALUES ('$email') ");
}



?>