<?php
   include "../php/db_connection.php";
   include "../php/select.php";
   include "../php/join.php";
   include "../php/count.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/dashboard.css">
   <title> QCU E-Registration </title>
</head>

 <!-- AJAX PLUGINS -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

 <!-- AJAX FILES -->
<script src="../ajax/ActionApplicant.js"></script>

<body>
   <section>
      <div class="side-navbar">
         <div class="admin-profile">
            <div class="profile-pic">
               <img src="" alt="">
            </div>
            <div class="admin-info">
               <h1> Admin Name </h1>
               <p> admin ID </p>
            </div>
         </div>

         <nav id="navLink">
            <div class="nav-link current"> Dashboard </div>
            <div  class="nav-link"> Applicants </div>
            <div  class="nav-link"> Approved Applicants </div>
            <div  class="nav-link"> Slot Available </div>
         </nav>

         <footer>
            <p> Quezon City University </p>
         </footer>
      </div>


      <div class="content-box">
         <div class="header">
            <div class="title">
               <img src="../img/QCU_Logo_2019.png" alt="">
               <h1> QCU E-Registration Dashboard </h1>
            </div>

            <div class="profile-icon">
               <img src="../img/Icons/twitter.png" alt="">
            </div>
         </div>

         <!-- DASHBOARD --> 
         <div class="dashboard">
            <div class="open-close-reg">
               <h3> Registration </h3>
               <div class="on-off">
                  <input type="checkbox" name="isOn" id="isOn">
                  <label for="isOn">
                     <div class="isOn"> </div>
                  </label>
               </div>
            </div>

            <div class="dashboard-content">
               <div class="summary">
                  <div class="summary-box pending"> 
                     <div class="icon">
                        <img src="../img/icons/wfacebook.png" alt="">
                     </div>
                     <div class="text">
                        <h1> <?=$cntApplicant['total']?> </h1>
                        <p> Applicants </p>
                     </div>
                  </div>

                  <div class="summary-box pending"> 
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
               </div>

               <div class="graph-log">
                  <div class="chart">
                     
                  </div>
                  <div class="act-log">

                  </div>
               </div>

            </div>

         </div>

         <!-- APPLICANTS -->
         <div class="applicants">
            <div class="title-header">
               <div class="title">
                  <h1> Applicants </h1>
               </div>
               <div class="search-list">
                  <div class="search">
                     <input type="search" name="search" id="search" placeholder="Search">
                  </div>
                  

               </div>
            </div>

            <div class="tbl-box">

            

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
            </div>
         </div>

         <!-- APPROVED -->
         <div class="approved-applicants">
            <div class="title-header">
               <div class="title">
                  <h1> Approved Applicants </h1>
               </div>
               <div class="search-list">
                  <div class="search">
                     <input type="search" name="search" id="search" placeholder="Search">
                  </div>
                  <div class="list">
                     <p> 5/30 </p>
                  </div>

               </div>
            </div>

            <table class="tbl-approved-applicant" border="0">
               <tr>
                  
                  <th> Application # </th>
                  <th> 2x2 </th>
                  <th> Fullname </th>
                  <th> Email </th>
                  <th> GWA </th>
                  <th> Schedule </th>
                  <th> Status </th>
               </tr>
               <tr>
                  <td> APP20220001 </td>
                  <td> 
                     <div class="img">
                        <img src="" alt="">
                     </div>
                  </td>
                  <td> Mark Melvin E. Bacabis </td>
                  <td> mark.melvin.bacabis@gmail.com </td>
                  <td> </td>
                  <td> 
                     <span style="font-size: .8em;"> 05/08 (Sun) <br> 9AM-10AM </span>
                  </td>
                  <td> 
                     <div class="status">
                        <img src="../img/Icons/checked.png" alt=""> 
                        <p> Approved </p>
                     </div>
                  </td>
               </tr>
            </table>
         </div>
      </div>
   </section>

   <div class="gwa-viewer" id="gwa-viewer">
      <div class="close">
         <p> + </p>
      </div>
      <img id="gwa-img-clicked" src="" alt="">
   </div>


</body>

<script src="../script/sidenav.js"></script>
<script src="../script/admin-img.js"></script>
</html>