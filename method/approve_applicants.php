<?php
   include "../php/db_connection.php";
   
   include "../php/date.php";
   include "../php/count.php";
   include "../method/functions.php";

  

   $regNum = $_POST['regNum'];

   // SELECT ALL APPLICANTS
   $selApplicants = "SELECT * FROM `stud_application` a 
   JOIN `stud_sched` b
   ON a.reg_num = b.reg_num
   JOIN `schedule` c
   ON b.schedID = c.schedID
   WHERE b.reg_num = '$regNum'";

   $applicantsQuery = mysqli_query($con, $selApplicants);
   $examinee = mysqli_fetch_assoc($applicantsQuery);

   $appNum = "APP20220".($cntApproved['total'] + 1);
   $fullname = $examinee['First_Name']." ".$examinee['Middle_Name']." ".$examinee['Last_Name']." ".$examinee['Extension_Name'];
   $sex = $examinee['Sex'];
   $bdate = $examinee['Birthdate'];
   $email = $examinee['email'];
   $sched = $examinee['Date']." ".$examinee['StartTime']."-".$examinee['EndTime'];

   //echo $sched;
   
   ApproveApplicants($regNum, $appNum, $fullname, $sex, $bdate, $sched, $email, $dateTime);

   include "../php/join.php";

?>


<table class="tbl-applicant" border="0">
               <tr>
                  
                  <th> Reg No. </th>
                  <th> Fullname </th>
                  <th> Email </th>
                  <th> GWA </th>
                  <th> Schedule </th>
                  <th> Status </th>
                  <th> Action </th>
               </tr>
            <?php 
               if(mysqli_num_rows($joinAppQuery) > 0){
                  while($rows = mysqli_fetch_assoc( $joinAppQuery)){ ?>
               <tr>
                  <td> <div id="reg_num"> <?=$rows['reg_num']?> </div></td>
                  <td> <div id="fullname"> <?=$rows['First_Name']?> <?=$rows['Middle_Name']?> <?=$rows['Last_Name']?> <?=$rows['Extension_Name']?> </div> </td>
                  <td> <div id="email"> <?=$rows['email']?> </div> </td>
                  <td> <img src="../img/upload_documents/<?=$rows['gradeslip']?>" alt="" class="gwa-img"></td>
                  <td> <span style="font-size: .8em;"> <?=$rows['Date']?> <br> <?=$rows['StartTime']?> : <?=$rows['EndTime']?> </span></td>
                  <td> <?=$rows['status']?></td>
                  <td> 
                     <button data-role="approve" data-id="<?=$rows['reg_num']?>"> <img src="../img/icons/checked.png" alt=""></button> 
                     <button data-role="approve" data-id="<?=$rows['reg_num']?>"> <img src="../img/icons/cancel.png" alt=""> </button>
                  </td>
               </tr>
            <?php }
               }
            ?>
               
            </table>