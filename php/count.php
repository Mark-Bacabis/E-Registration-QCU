<?php
   // COUNT ALL APPLICANTS
   $cntApp = "SELECT COUNT(*) AS total FROM `stud_application`";
   $appQry = mysqli_query($con, $cntApp);
   $cntApplicant = mysqli_fetch_assoc($appQry);

   // COUNT ALL PENDING APPLICANTS
   $cntPend = "SELECT count(*) as total from `stud_status` WHERE status = 'Pending'";
   $pendQry = mysqli_query($con, $cntPend);
   $cntPending = mysqli_fetch_assoc($pendQry);

   // COUNT ALL APPROVED APPLICANTS
   $cntApprove = "SELECT count(*) as total from `stud_status` WHERE status = 'Approved'";
   $approveQry = mysqli_query($con, $cntApprove);
   $cntApproved = mysqli_fetch_assoc($approveQry);

   
   // COUNT ALL DECLINED APPLICANTS
   $cntDec = "SELECT count(*) as total from `stud_status` WHERE status = 'Declined'";
   $decQry = mysqli_query($con, $cntDec);
   $cntDeclined = mysqli_fetch_assoc($decQry);

?>