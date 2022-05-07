<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/dashboard.css">
   <title> QCU E-Registration </title>
</head>
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
                        <h1> 1024 </h1>
                        <p> Applicants </p>
                     </div>
                  </div>

                  <div class="summary-box pending"> 
                     <div class="icon">
                        <img src="../img/icons/wfacebook.png" alt="">
                     </div>
                     <div class="text">
                        <h1> 1024 </h1>
                        <p> Applicants </p>
                     </div>
                  </div>

                  <div class="summary-box approved"> 
                     <div class="icon">

                     </div>
                     <div class="text">
                        <h1> 1024 </h1>
                        <p> Applicants </p>
                     </div>
                  </div>

                  <div class="summary-box declined"> 
                     <div class="icon">

                     </div>
                     <div class="text">
                        <h1> 1024 </h1>
                        <p> Applicants </p>
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
                  <div class="list">
                     <p> 5/30 </p>
                  </div>

               </div>
            </div>

            <table class="tbl-applicant" border="0">
               <tr>
                  <th> # </th>
                  <th> Reg No. </th>
                  <th> 2x2 </th>
                  <th> Fullname </th>
                  <th> Email </th>
                  <th> GWA </th>
                  <th> Schedule </th>
                  <th> Action </th>
               </tr>
               <tr>
                  <td> 1 </td>
                  <td> REG20220001 </td>
                  <td> 
                     <div class="img">
                        <img src="" alt="">
                     </div>
                  </td>
                  <td> Mark Melvin E. Bacabis </td>
                  <td> mark.melvin.bacabis@gmail.com </td>
                  <td> </td>
                  <td> <span style="font-size: .8em;"> 05/08 (Sun) <br> 9AM-10AM </span></td>
                  <td> 
                     <button> <img src="../img/icons/checked.png" alt=""></button> 
                     <button> <img src="../img/icons/cancel.png" alt=""> </button>
                  </td>
               </tr>
            </table>
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
   
</body>

<script src="../script/sidenav.js"></script>
</html>