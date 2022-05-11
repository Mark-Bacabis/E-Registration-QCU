<?php
   // SELECT ALL DATES
   $selectDate = "SELECT DISTINCT `Date` FROM `schedule`";
   $dateQuery = mysqli_query($con, $selectDate);

   // SELECT START TIME, END TIME, AND SLOTS PER DATES
   $selSchedPerDate = "SELECT DISTINCT `StartTime`, `EndTime`, `Slot` FROM `schedule` WHERE Date = '2022-05-16'";
   $schedQuery = mysqli_query($con, $selSchedPerDate);
   $slot = mysqli_fetch_assoc($schedQuery);


   // SELECT ALL APPLICANTS
   $selApplicants = "SELECT * FROM `stud_application`";
   $applicantsQuery = mysqli_query($con, $selApplicants);

   function addstudent($lname,$fname,$mname,$exname,$address1,$address2,$address3,$address4,$bdate,$bplace,$age,$sex,$cstatus,$religion,$cpnumber,$email,$date,$time,$slot,$diploma,$grade,$goodmoral,$p2x2){
   $conn = $GLOBALS['con'];
   $conn1 = $GLOBALS['con'];
   $conn2 = $GLOBALS['con'];
   $mytime = array();
   $mytime = explode("-",$time);
   $starttime = $mytime[0];
   $endtime = $mytime[1];
   $address = $address1 . " ". $address2 . " " .$address3 . " " .$address4;
      $stmt = $conn->prepare("INSERT INTO stud_application(Last_Name,  First_Name, Middle_Name, Extension_Name, Complete_Address, Birthdate, Birth_Place, Age, Sex, Civil_Status, Religion,Mobile_Number,email ) VALUES ( ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)");
      $stmt->bind_param("sssssssssssss", $d1, $d2,$d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10, $d11, $d12,$d13);

      $stmt2 = $conn1->prepare("INSERT INTO schedule(Date,  StartTime, EndTime, Slot) VALUES ( ?, ?,?, ?)");
      $stmt2->bind_param("ssss", $d14, $d15,$d16, $d17);

      $stmt3 = $conn2->prepare("INSERT INTO stud_documents(email,  diploma, gradeslip, id_front,id_back) VALUES ( ?, ?,?, ?,?)");
      $stmt3->bind_param("sssss", $d13, $d18,$d19, $d20,$d21);
      
$d1 = $lname;
$d2 = $fname;
$d3 = $mname;
$d4 = $exname;
$d5 = $address;
$d6 = $bdate;
$d7 = $bplace;
$d8 = $age;
$d9 = $sex;
$d10 = $cstatus;
$d11 = $religion;
$d12 = $cpnumber;
$d13 = $email;
$d14 = $date;
$d15 = $starttime;
$d16 = $endtime;
$d17 = $slot;
$d18 = $diploma;
$d19 = $grade;
$d20 = $goodmoral;
$d21 = $p2x2;


$stmt->execute();
$stmt2->execute(); 
$stmt3->execute();
}

?>