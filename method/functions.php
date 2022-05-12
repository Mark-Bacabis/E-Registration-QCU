<?php
 function generatePassword(){
    $password = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$'), 0, 12);
   }


function ApproveApplicants($regID, $appNum, $fullname, $gender, $birthdate, $sched, $email, $date_approval){
   include "../php/db_connection.php";
   
   $password = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$'), 0, 12);

   $insert = "INSERT INTO `approved_applicant`(`reg_num`, `app_num`, `fullname`, `gender`, `birthdate`, `schedule` , `email`, `date_approval`) VALUES ('$regID', '$appNum', '$fullname', '$gender', '$birthdate', '$sched', '$email', '$date_approval')";
   mysqli_query($con,  $insert);

   $studAccount = "INSERT INTO `stud_account`(`app_num`, `email`, `stud_password`) VALUES ('$appNum','$email','".$password."')";
   mysqli_query($con,  $studAccount);

   $update = "UPDATE `stud_status` SET `status`='Approved' WHERE `reg_num` = '$regID'";
   mysqli_query($con,  $update);

}


function declineApplicants($regID){
   include "../php/db_connection.php";

   $update = "UPDATE `stud_status` SET `status`='Declined' WHERE `reg_num` = '$regID'";
   mysqli_query($con,  $update);

}

?>