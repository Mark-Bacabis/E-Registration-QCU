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

   

?>