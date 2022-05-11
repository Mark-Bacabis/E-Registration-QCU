<?php
 

function ApproveApplicants($regID, $appNum, $fullname, $gender, $birthdate, $sched, $email, $date_approval){
   include "../php/db_connection.php";

   $insert = "INSERT INTO `approved_applicant`(`reg_num`, `app_num`, `fullname`, `gender`, `birthdate`, `schedule` , `email`, `date_approval`) VALUES ('$regID', '$appNum', '$fullname', '$gender', '$birthdate', '$sched', '$email', '$date_approval')";
   mysqli_query($con,  $insert);

   $update = "UPDATE `stud_status` SET `status`='Approved' WHERE `reg_num` = '$regID'";
   mysqli_query($con,  $update);

}

?>