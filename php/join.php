<?php
   $joinApp = "SELECT * FROM stud_application a
   JOIN stud_documents b
   ON a.reg_num = b.reg_num
   JOIN stud_sched c
   ON a.reg_num = c.reg_num
   JOIN `schedule` d 
   ON c.schedID = d.schedID
   JOIN `stud_status` e
   ON a.reg_num = e.reg_num WHERE e.status = 'Pending'";

   $joinAppQuery = mysqli_query($con, $joinApp);


   $joinAppApproved = "SELECT * FROM `approved_applicant` a
   JOIN `stud_status` b
   ON a.reg_num = b.reg_num
   JOIN `stud_documents` c
   ON a.reg_num = c.reg_num";

   $joinAppQueryApproved = mysqli_query($con, $joinAppApproved);

?>