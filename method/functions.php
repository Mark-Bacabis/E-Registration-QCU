<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


function ApproveApplicants($regID, $appNum, $fullname, $gender, $birthdate, $sched, $email, $date_approval){
   include "../php/db_connection.php";
   
   $password = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$'), 0, 12);

   
   $insert = "INSERT INTO `approved_applicant` (`reg_num`, `app_num`, `fullname`, `gender`, `birthdate`, `schedule` , `email`, `date_approval`) VALUES ('$regID', '$appNum', '$fullname', '$gender', '$birthdate', '$sched', '$email', '$date_approval')";
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

function registerApplicant($lname, $fname, $mname, $exname, $bdate , $bplace, $age, $sex, $zipCode, $hNoStrt, $brgy, $city, $cStatus, $nationality, $religion, $email, $cNum , $schedDate, $schedTime, $diploma, $grade, $gdMoral,
 $id2x2) {
   include "../php/db_connection.php";
   include "../php/count.php";

   $regNum = "REG20220".$cntApplicant['total'] + 1;

   $dateNow = Date("Y-m-d");
   $month = Date("M");

   
   $findSched = "SELECT * FROM `schedule` WHERE `Date` = '$schedDate' AND `StartTime` = '$schedTime'";
   $query = mysqli_query($con, $findSched);
   $id = mysqli_fetch_assoc($query);
   $schedId = $id['schedID'];

   // SELECT 
   $insertApplicant = "INSERT INTO `stud_application`
   (`reg_num`, `Last_Name`, `First_Name`, `Middle_Name`, `Extension_Name`, `Complete_Address`, `Birthdate`, `Birth_Place`, `Age`, `Sex`, `Civil_Status`, `Nationality`, `Religion`, `Mobile_Number`, `email`, `dor`, `month`)
   VALUES 
   ('$regNum','$lname','$fname','$mname','$exname','$hNoStrt $brgy $city $zipCode', '$bdate','$bplace','$age','$sex','$cStatus','$nationality','$religion','$cNum',' $email','$dateNow','$month')";

   $insertDocuments = "INSERT INTO `stud_documents`(`reg_num`, `email`, `diploma`, `good_moral`, `grade`, `id_pic`) VALUES ('$regNum','$email','$diploma','$gdMoral','$grade','$id2x2')";

   $insertSchedule = "INSERT INTO `stud_sched`(`reg_num`, `schedID`) VALUES ('$regNum', '$schedId')";

   $insertStatus = "INSERT INTO `stud_status`(`reg_num`, `status`) VALUES ('$regNum', 'Pending')";

   $insertAdd = "INSERT INTO `stud_address`(`reg_num`, `zip_code`, `houseNo`, `brgy`, `city`) VALUES ('$regNum','$zipCode','$hNoStrt','$brgy','$city')";

   $addApp = mysqli_query($con, $insertApplicant);
   $addDoc = mysqli_query($con, $insertDocuments);
   $addSched = mysqli_query($con, $insertSchedule);
   $addStats = mysqli_query($con, $insertStatus);
   $addAddress = mysqli_query($con, $insertAdd);

   if($addApp && $addDoc && $addSched && $addStats && $addAddress){
     header("location: ../applicants/thankyou.php");
   }
   else{
      echo error_log($con);
   }


}


function sendEmail($appNum) {
   include "../php/db_connection.php";
   include "../include/PHPMailer.php";
   include "../include/SMTP.php";
   include "../include/Exception.php";

   
   // GET ALL THE DATA OF APPROVED APPLICANTS
   $select = mysqli_query($con, "SELECT * FROM `approved_applicant` a 
   JOIN `stud_account` b
   ON a.app_num = b.app_num
   JOIN `stud_status` c
   ON a.reg_num = c.reg_num
   WHERE b.app_num = '$appNum' OR c.reg_num = '$appNum'");
   $applicant = mysqli_fetch_assoc($select);

   // VARIABLES
   $email = $applicant['email'];
   $pword = $applicant['stud_password'];
   $fullname = $applicant['fullname'];
   $status = $applicant['status'];
   

   // FUNCTION FOR SENDING A MESSAGE TO STUDENT'S EMAIL   
   // SERVER 
   $mail = new PHPMailer();
   $mail -> isSMTP();
   $mail ->isHTML(true);
   $mail -> Host = 'smtp.gmail.com';
   $mail -> SMTPAuth = 'true';
   $mail ->Username = 'qcu.sms@gmail.com';
   $mail ->Password = '12345678@Qcu';
   $mail -> SMTPSecure = 'tls';
   $mail -> Port = 587;


   
   // RECEPIENTS
   $mail ->Subject = 'Quezon City University E-Registration Status';
   $mail ->setFrom("qcu.sms@gmail.com", "Quezon City University E-Registration Status");
   $mail ->addAddress($email);
   $mail ->addReplyTo("qcu.sms@gmail.com", "Hello");
   $mail ->Body = "<h2> Congratulation $fullname, your application is approved.  </h2>";
   $mail ->Body .= "<p> This is your application number: <b> $appNum </b> </p>";
   $mail ->Body .= "<h3> Use this account for examination </h3>";
   $mail ->Body .= "<p> Email: $email </p>";
   $mail ->Body .= "<p> Password: $pword </p>";
 
   $mail ->Send();

   if($mail){
     
   }
   else{
      echo "Error!";
   }

   $mail ->smtpClose();
}


function sendEmailDec($regID) {
   include "../php/db_connection.php";
   include "../include/PHPMailer.php";
   include "../include/SMTP.php";
   include "../include/Exception.php";

   
   // GET ALL THE DATA OF APPROVED APPLICANTS
   $select = mysqli_query($con, "SELECT * FROM `stud_application` a 
   JOIN `stud_status` b 
   ON a.reg_num = b.reg_num
   WHERE b.reg_num = '$regID'");
   $applicant = mysqli_fetch_assoc($select);

   // VARIABLES
   $email = $applicant['email'];
   $fullname = $applicant['First_Name']." ".$applicant['Middle_Name']." ".$applicant['Last_Name']." ".$applicant['Extension_Name'];
   

   // FUNCTION FOR SENDING A MESSAGE TO STUDENT'S EMAIL   
   // SERVER 
   $mail = new PHPMailer();
   $mail -> isSMTP();
   $mail ->isHTML(true);
   $mail -> Host = 'smtp.gmail.com';
   $mail -> SMTPAuth = 'true';
   $mail ->Username = 'qcu.sms@gmail.com';
   $mail ->Password = '12345678@Qcu';
   $mail -> SMTPSecure = 'tls';
   $mail -> Port = 587;

   // RECEPIENTS
   $mail ->Subject = 'Quezon City University E-Registration Status';
   $mail ->setFrom("qcu.sms@gmail.com", "Quezon City University E-Registration Status");
   $mail ->addAddress($email);
   $mail ->addReplyTo("qcu.sms@gmail.com", "Hello");
   $mail ->Body = "<h2> Hello $fullname, your application is denied. </h2>";
   $mail ->Body .= "<p> Thank you for register. have a good day. </p>";
 
   $mail ->Send();

   if($mail){
      
   }
   else{
      echo "Error!";
   }

   $mail ->smtpClose();
}
?>