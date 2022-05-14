<?php
   session_start();
   $adminID = $_SESSION['adminID'];

   if(empty($adminID)){
      header('location: ./index.php');
   }
 
   include "../php/db_connection.php";
   include "../php/select.php";
   include "../php/join.php";
   include "../php/count.php";
   include "../method/functions.php";

   //echo $cntApproved['total'];

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
<script src="../ajax/addSched.js"></script>
<script src="../ajax/approved.js"></script>

<!-- CHART --> 
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body>
   <section>
      <div class="side-navbar">
         <div class="admin-profile">
            <div class="profile-pic">
               <img src="../img/icons/<?=$admin['avatar']?>" alt="">
            </div>
            <div class="admin-info">
               <h1> <?=$admin['firstname']?> <?=$admin['lastname']?> </h1>
               <p> <?=$admin['id']?> </p>
            </div>
         </div>

         <nav id="navLink">
            <div class="nav-link current"> Dashboard </div>
            <div  class="nav-link"> Applicants </div>
            <div  class="nav-link"> Applicants Status </div>
            <div  class="nav-link"> Schedule </div>
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
               <a href="../php/admin_logout.php"><img src="../img/Icons/logout.png" alt=""> </a>
            </div>
         </div>

         <!-- DASHBOARD --> 
         <div class="dashboard">
            <div class="open-close-reg">
               <h3> Registration </h3>
               <div class="on-off">
                  <input type="checkbox" name="checkbox" id="checkbox" checked>
                  <label for="checkbox" class="label">
                     <div class="ball"></div>
                  </label>
               </div>
            </div>

            <div class="dashboard-content">
               <div class="summary">
                  <div class="summary-box applicants-summary"> 
                     <div class="icon">
                        <img src="../img/icons/student-with-graduation-cap.png" alt="">
                     </div>
                     <div class="text">
                        <h1> <?=$cntApplicant['total']?> </h1>
                        <p> Applicants </p>
                     </div>
                  </div>

                  <div class="summary-box pending"> 
                     <div class="icon">
                        <img src="../img/icons/file.png" alt="">
                     </div>
                     <div class="text">
                        <h1> <?=$cntPending['total']?> </h1>
                        <p> Pending </p>
                     </div>
                  </div>

                  <div class="summary-box approved"> 
                     <div class="icon">
                        <img src="../img/icons/file (1).png" alt="">
                     </div>
                     <div class="text">
                        <h1> <?=$cntApproved['total']?> </h1>
                        <p> Approved </p>
                     </div>
                  </div>

                  <div class="summary-box declined"> 
                     <div class="icon">
                        <img src="../img/icons/file (2).png" alt="">
                     </div>
                     <div class="text">
                        <h1> <?=$cntDeclined['total']?> </h1>
                        <p> Declined </p>
                     </div>
                  </div>
               </div>

               <div class="graph-log">
                  <div class="chart">
                     <div>
                        <canvas id="myChart"></canvas>
                     </div>

                  </div>
                  <div class="act-log">
                     <div>
                        <canvas id="doughnut-chart"></canvas>
                     </div>
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
               
            </div>

            <div class="tbl-box" id="tbl-box">
               <table class="tbl-applicant" border="0">
                  <tr>
                     
                     <th> Reg No. </th>
                     <th> 2x2 </th>
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
                        <td> <img src="../img/upload_documents/2x2/<?=$rows['id_pic']?>" alt="" class="id-pic"></td>
                        <td> <div id="fullname"> <?=$rows['First_Name']?> <?=$rows['Middle_Name']?> <?=$rows['Last_Name']?> <?=$rows['Extension_Name']?> </div> </td>
                        <td> <div id="email"> <?=$rows['email']?> </div> </td>
                        <td> <img src="../img/upload_documents/grade/<?=$rows['grade']?>" alt="" class="gwa-img"></td>
                        <td> <span style="font-size: .8em;"> <?=$rows['Date']?> <br> <?=$rows['StartTime']?> </span></td>
                        <td> <?=$rows['status']?></td>
                        <td> 
                           <button data-role="approve" data-id="<?=$rows['reg_num']?>"> <img src="../img/icons/checked.png" alt=""></button> 
                           <button data-role="decline" data-id="<?=$rows['reg_num']?>"> <img src="../img/icons/cancel.png" alt=""> </button>
                        </td>
                     </tr>
                  <?php }
                  }
                  else{ ?>
                  <td colspan="8"> No applicants yet.. </td> 
                  <?php }
                  ?>
                  
               </table>
            </div>
         </div>

         <!-- APPLICANT STATUS -->
         <div class="approved-applicants">
            <div class="title-header">
               <div class="title">
                  <h1> Applicants Status </h1>
               </div>
               <div class="search-list">
                  <div class="status">
                     <select name="status" id="status">
                        <option value=""> All </option>
                        <option value="Approved"> Approved </option>
                        <option value="Declined"> Declined </option>
                     </select>
                  </div>
                  <div class="search">
                     <input type="search" name="search" id="searchApp" placeholder="Search">
                  </div>

               </div>
            </div>
            <div class="tbl-box" id="tbl-box-approved">
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
            </div>
         
         </div>

         <!-- SCHEDULE -->
         <div class="schedule">
            <div class="title-header">
               <div class="title">
                  <h1> Schedule </h1>
               </div>
            </div>
         
            <div class="sched-context">
               <div class="schedule-tbl">
                  <table border="0">
                     <tr>
                        <th> Id </th>
                        <th> Date </th>
                        <th> Time </th>
                        <th> Slot </th>
                        <th colspan="2"> Action </th>
                     </tr>
                     <?php
                        if(mysqli_num_rows($dateQuery) > 0){
                           while($rows = mysqli_fetch_assoc($dateQuery)) { ?>
                           <tr>
                              <td> <?=$rows['schedID']?> </td>
                              <td> <?=$rows['Date']?> </td>
                              <td> <?=$rows['StartTime']?> </td>
                              <td> <?=$rows['Slot']?> </td>
                              <td> <a href="#"> Edit </a> </td>
                              <td> <a href="#"> Del </a> </td>
                           </tr>
                     <?php }
                        }
                     ?>
                  
                  </table>
               </div>
            
               <div class="add-schedule">
                  <h1> Add schedule </h1>
                  <label for="dateSched"> Date </label>
                  <input type="date" name="dateSched" id="dateSched">
                  <label for="timeSched"> Time </label>
                  <select name="timeSched" id="timeSched">
                     <?php
                        if(mysqli_num_rows($selTimeOnly) > 0){
                           while($rows = mysqli_fetch_assoc($selTimeOnly)){ ?>
                               <option value="<?=$rows['StartTime']?>"><?=$rows['StartTime']?></option>
                     <?php }
                        }
                     ?>
                    
                  </select>
                  <label for="slot"> Slot </label>
                  <input type="number" name="slot" id="slot" min="1" max="20">
                  <input type="button" value="Save" id="addSched">

               </div>
            </div>   
         </div>
      </div>
   </section>

   <!-- IMAGE VIEWER -->
   <div class="gwa-viewer" id="gwa-viewer">
      <div class="close">
         <p> + </p>
      </div>
      <img id="gwa-img-clicked" src="" alt="">
   </div>


</body>

<script>
   // SETUP
   const labels = [
      'May','June','July','August'
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: "Applicants' tracker each month",
      backgroundColor: '#2f51af',
      borderColor: '#2f51af',
      data: [
         <?php
         if(mysqli_num_rows($cntAppEachMos) > 0){
            while($rows = mysqli_fetch_assoc($cntAppEachMos)) { ?>
                  <?=$rows['total']?>, 
           <?php }
         }
      ?>
      ],
    }]
  };

  // CONFIG
  const config = {
    type: 'line',
    data: data,
    options: {}
  };

   var myChart = new Chart( 
      document.getElementById('myChart'),
      config
   );

   const ctx = document.getElementById('doughnut-chart');

    // DOUGHNUT CHART
    const doughnutChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
         labels: [  
            'Pending',
            'Approved',
            'Declined'
         ],
         datasets: [{
            data: [
               <?=$cntPending['total']?>,
               <?=$cntApproved['total']?>,
               <?=$cntDeclined['total']?>
            
            ],
            backgroundColor: [
               '#952faf',
               '#2faf73',
               '#af2f2f',
            ]
         }]
      },
      options: {
         responsive: false,
         
         plugins:  {
            legend: {
               display: true,
               position: 'left'
            },
            title: {
               display: true,
               text: 'Registered Students per course'
            }
         }
      },
      
   });

</script>


<script src="../script/sidenav.js"></script>
<script src="../script/admin-img.js"></script>
</html>