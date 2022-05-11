<?php
    include "../php/db_connection.php";
    include "../php/select.php";
    include "../php/join.php";
    include "../php/count.php";
?>

<div class="summary-box pending"> 
                     <div class="icon">
                        <img src="../img/icons/wfacebook.png" alt="">
                     </div>
                     <div class="text">
                        <h1> <?=$cntApplicant['total']?> </h1>
                        <p> Applicants </p>
                     </div>
                  </div>

                  <div class="summary-box applicant-sumamry"> 
                     <div class="icon">
                        <img src="../img/icons/wfacebook.png" alt="">
                     </div>
                     <div class="text">
                        <h1> <?=$cntPending['total']?> </h1>
                        <p> Pending </p>
                     </div>
                  </div>

                  <div class="summary-box approved"> 
                     <div class="icon">

                     </div>
                     <div class="text">
                        <h1> <?=$cntApproved['total']?> </h1>
                        <p> Approved </p>
                     </div>
                  </div>

                  <div class="summary-box declined"> 
                     <div class="icon">

                     </div>
                     <div class="text">
                        <h1> <?=$cntDeclined['total']?> </h1>
                        <p> Declined </p>
                     </div>
                  </div>