<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

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





function sendEmail($appNum) {
   include "../php/db_connection.php";
   include "../include/PHPMailer.php";
   include "../include/SMTP.php";
   include "../include/Exception.php";

      
  

   // SESSIONS
   //$email = $_SESSION['email'];
   //$sid = $_SESSION['sid'];
   //$code = $_SESSION['Code'];
   
   // GET ALL THE DATA OF APPROVED APPLICANTS
   $select = mysqli_query($conn, "SELECT * FROM `approved_applicant` a 
   JOIN `stud_account` b
   ON a.app_num = b.app_num
   JOIN `stud_status` c
   ON a.reg_num = c.reg_num;
   WHERE b.app_num = '$appNum'");
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
   $mail -> Port = '587';


   if($status == 'Approved'){
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
   }
   
   if($status == 'Declined'){
       // RECEPIENTS
       $mail ->Subject = 'Quezon City University E-Registration Status';
       $mail ->setFrom("qcu.sms@gmail.com", "Quezon City University E-Registration Status");
       $mail ->addAddress($email);
       $mail ->addReplyTo("qcu.sms@gmail.com", "Hello");
       $mail ->Body = "<h2> Hello $fullname, your application is denied.  </h2>";
       $mail ->Body .= "<p> Thank you for register. have a good day. </p>";
   }
 
   $mail ->Send();

   $mail ->smtpClose();
}
?>