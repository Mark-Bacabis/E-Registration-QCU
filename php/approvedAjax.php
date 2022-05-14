<?php
   session_start();
   include "./db_connection.php";
   include "./select.php";

   if(empty($_POST['status'])) { ?>
            <table class="tbl-approved-applicant" border="0">
               <tr>
                  
                  <th> Reg No. </th>
                  <th> 2x2 </th>
                  <th> Fullname </th>
                  <th> Email </th>
                  <th> Status </th>
               </tr>
               <?php 
                  if(mysqli_num_rows($selAppQuery) > 0){
                     while($rows = mysqli_fetch_assoc($selAppQuery)){ ?>
                          <tr>
                  <td> <?=$rows['reg_num']?> </td>
                  <td> 
                     <div class="img">
                        <img src="../img/upload_documents/2x2/<?=$rows['id_pic']?>" alt=""> 
                     </div>   
                  </td>
                 
                  <td> <?=$rows['First_Name']?> <?=$rows['Middle_Name']?> <?=$rows['Last_Name']?> <?=$rows['Extension_Name']?> </td>
                  <td> <?=$rows['email']?> </td>
                  
                  <td> 
                     <div class="status">
                        <?php
                           if($rows['status'] == 'Approved') { ?>
                              <img src="../img/Icons/checked.png" alt=""> 
                              <p> <?=$rows['status']?> </p>
                         <?php } else{
                            ?>
                            <img src="../img/Icons/delete.png" alt=""> 
                            <p> <?=$rows['status']?> </p>
                       <?php 
                         }
                        ?>
                        
                     </div>
                  </td>
               </tr>
                  <?php   }
                  }
                    else{ ?>
                  <td colspan="8"> No applicants yet.. </td> 
               <?php }
               ?>
             
            </table>
   <?php } 
   else if($_POST['status'] == 'Approved') { ?>
            <table class="tbl-approved-applicant" border="0">
               <tr>
                  
                  <th> Reg No. </th>
                  <th> 2x2 </th>
                  <th> Fullname </th>
                  <th> Email </th>
                  <th> Status </th>
               </tr>
               <?php 
                  if(mysqli_num_rows($selAppQueryApproved) > 0){
                     while($rows = mysqli_fetch_assoc($selAppQueryApproved)){ ?>
                          <tr>
                  <td> <?=$rows['reg_num']?> </td>
                  <td> 
                     <div class="img">
                        <img src="../img/upload_documents/2x2/<?=$rows['id_pic']?>" alt=""> 
                     </div>   
                  </td>
                 
                  <td> <?=$rows['First_Name']?> <?=$rows['Middle_Name']?> <?=$rows['Last_Name']?> <?=$rows['Extension_Name']?> </td>
                  <td> <?=$rows['email']?> </td>
                  
                  <td> 
                     <div class="status">
                        <?php
                           if($rows['status'] == 'Approved') { ?>
                              <img src="../img/Icons/checked.png" alt=""> 
                              <p> <?=$rows['status']?> </p>
                         <?php } else{
                            ?>
                            <img src="../img/Icons/delete.png" alt=""> 
                            <p> <?=$rows['status']?> </p>
                       <?php 
                         }
                        ?>
                        
                     </div>
                  </td>
               </tr>
                  <?php   }
                  }
                    else{ ?>
                  <td colspan="8"> No applicants yet.. </td> 
               <?php }
               ?>
             
            </table>
   <?php }
   else if($_POST['status'] == 'Declined'){ ?>
            <table class="tbl-approved-applicant" border="0">
               <tr>
                  
                  <th> Reg No. </th>
                  <th> 2x2 </th>
                  <th> Fullname </th>
                  <th> Email </th>
                  <th> Status </th>
               </tr>
               <?php 
                  if(mysqli_num_rows($selAppQueryDeclined) > 0){
                     while($rows = mysqli_fetch_assoc($selAppQueryDeclined)){ ?>
                          <tr>
                  <td> <?=$rows['reg_num']?> </td>
                  <td> 
                     <div class="img">
                        <img src="../img/upload_documents/2x2/<?=$rows['id_pic']?>" alt=""> 
                     </div>   
                  </td>
                 
                  <td> <?=$rows['First_Name']?> <?=$rows['Middle_Name']?> <?=$rows['Last_Name']?> <?=$rows['Extension_Name']?> </td>
                  <td> <?=$rows['email']?> </td>
                  
                  <td> 
                     <div class="status">
                        <?php
                           if($rows['status'] == 'Approved') { ?>
                              <img src="../img/Icons/checked.png" alt=""> 
                              <p> <?=$rows['status']?> </p>
                         <?php } else{
                            ?>
                            <img src="../img/Icons/delete.png" alt=""> 
                            <p> <?=$rows['status']?> </p>
                       <?php 
                         }
                        ?>
                        
                     </div>
                  </td>
               </tr>
                  <?php   }
                  }
                    else{ ?>
                  <td colspan="8"> No applicants yet.. </td> 
               <?php }
               ?>
             
            </table>
   <?php }
?>