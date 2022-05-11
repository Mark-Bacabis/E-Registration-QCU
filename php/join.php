<?php
   $joinApp = "SELECT * FROM stud_application a
   JOIN stud_documents b
   ON a.reg_num = b.reg_num
   JOIN stud_sched c
   ON a.reg_num = c.reg_num
   JOIN `schedule` d 
   ON c.schedID = d.schedID
   JOIN `stud_status` e
   ON a.reg_num = e.reg_num";

   $joinAppQuery = mysqli_query($con, $joinApp);

?>