<?php
     
   // SELECT ALL DATES
   $selectDate = "SELECT * FROM `schedule`";
   $dateQuery = mysqli_query($con, $selectDate);

   // SELECT START TIME, END TIME, AND SLOTS PER DATES
   $selSchedPerDate = "SELECT DISTINCT `StartTime`, `Slot` FROM `schedule`";
   $schedQuery = mysqli_query($con, $selSchedPerDate);
   $slot = mysqli_fetch_assoc($schedQuery);


   // SELECT ALL APPLICANTS
   $selApplicants = "SELECT DISTINCT * FROM `stud_application`";
   $applicantsQuery = mysqli_query($con, $selApplicants);

   // COUNT ALL APPLICANTS EACH MONTH
   $cntApplicants = "SELECT DISTINCT month, COUNT(id) as total
   FROM `stud_application`
   GROUP BY month";
   $cntAppEachMos = mysqli_query($con, $cntApplicants);
   //$appEachMos = mysqli_fetch_assoc($cntAppEachMos);
   

   // SELECT ALL APPLICANTS AND THEIR STATUS
   $selAppStatus = "SELECT DISTINCT * FROM `stud_application` a 
   JOIN `stud_status` b 
   ON a.reg_num = b.reg_num
   JOIN `stud_sched` c
   ON a.reg_num = c.reg_num
   JOIN `schedule` d
   ON c.schedID = d.schedID
   JOIN `stud_documents` e
   ON a.reg_num = e.reg_num
   WHERE b.status = 'Declined' OR b.status = 'Approved' ";
   $selAppQuery = mysqli_query($con, $selAppStatus);

   // SELECT ALL APPRROVED APPLICANTS
   $selAppApproved = "SELECT DISTINCT * FROM `stud_application` a 
   JOIN `stud_status` b 
   ON a.reg_num = b.reg_num
   JOIN `stud_sched` c
   ON a.reg_num = c.reg_num
   JOIN `schedule` d
   ON c.schedID = d.schedID
   JOIN `stud_documents` e
   ON a.reg_num = e.reg_num
   WHERE b.status = 'Approved' ";
   $selAppQueryApproved = mysqli_query($con, $selAppApproved);

    // SELECT ALL DECLINED APPLICANTS
    $selAppDeclined  = "SELECT DISTINCT * FROM `stud_application` a 
    JOIN `stud_status` b 
    ON a.reg_num = b.reg_num
    JOIN `stud_sched` c
    ON a.reg_num = c.reg_num
    JOIN `schedule` d
    ON c.schedID = d.schedID
    JOIN `stud_documents` e
    ON a.reg_num = e.reg_num
    WHERE b.status = 'Declined' ";
    $selAppQueryDeclined = mysqli_query($con, $selAppDeclined);


   // SELECT DATE ONLY 
   $selDateOnlyQuery = "SELECT DISTINCT Date FROM `schedule`";
   $selDateOnly = mysqli_query($con, $selDateOnlyQuery);

   // SELECT TIME ONLY 
   $selTimeOnlyQuery = "SELECT DISTINCT StartTime FROM `schedule`";
   $selTimeOnly = mysqli_query($con, $selTimeOnlyQuery);

 

?>