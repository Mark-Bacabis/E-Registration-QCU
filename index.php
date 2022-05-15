<?php
   include "./php/db_connection.php";

   $prefQuery = "SELECT * FROM `web_preference` WHERE `name` = 'fillup'";
   $fill = mysqli_query($con, $prefQuery);
   $fillUp = mysqli_fetch_assoc($fill);



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/styles.css">
   <title> Quezon City University </title>
</head>
<script>
   function loadref(time){
      setTimeout("location.reload(true);", time);
   }
</script>
<body onload="Javascript:loadref(30000)">

   <!--<div class="button-fixed">
      <p> Shop now </p>
   </div>-->

   <a href="./index.php#header" class="Up-button">
        
      <img src="./img/icons/up-arrow.png">
   </a> 

   <!-- header --> 
   <div class="header" id="header">
      <div class="header-content">
         <div class="h-logo">
            <img src="img/svg/logo.svg" alt="">
         </div>

         <nav>
            <ul class="main-nav">
               <li> <a href="#"> Home </a> </li>
               <li> <a href="#"> Contact </a> </li>
               <li> <a href="#"> About </a> </li>
            </ul>

            <?php
            if($fillUp['status'] == 'On'){ ?>
                 <a href="./form/fillup.php" class="s-nav"> Register </a>
            <?php  } else { ?>
               <a href="./applicants/Sorry.php" class="s-nav"> Register </a>
            <?php } ?>
        
         </nav>
      </div>
   </div>
   <!--x header -->

   <!-- first page -->
   <div class="front-page">
      <div class="front-img">
         <div class="front-overlay">  aa </div>
         <img src="./img/bg1.jpg" alt="">
         
      </div>
     

      <div class="text-hero">
         <h1> Welcome to Quezon City University </h1>
         <p> Good life Starts here </p>
      </div>
      <div class="button-hero">
         <?php
            if($fillUp['status'] == 'On'){ ?>
                <a href="./form/fillup.php"> Register now </a>
         <?php  } else { ?>
            <a href="./applicants/Sorry.php"> Register now </a>
         <?php } ?>
        
      </div>
   </div>
   <!--x first page -->


   <!-- courses -->
   <div class="course-offer-container">
      <div class="course-offer-box">

         <!-- radio button start -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
           
         <!-- radio button end -->

         <!-- slides here -->
         <div class="course-offer first">          
            <div class="course-head">
               <div class="course-head-img">
                  <img src="./img/course head/it.png" alt="">
               </div>
               <div class="head-info">
                     <h3> Dr. Isagani M. Tano </h3>
                     <p> Dean, College of Computer Science and Information Technology </p>
               </div>
            </div>

            <div class="about-course">
               <div class="course-offer-banner">
                  <h2> Course offer </h2>
               </div>
               <div class="course-title"> <h2> Bachelor of Science in Information Technology </h2></div>
               <div class="course-desc"> 
                  <p> The Bachelor of Science in Information Technology (BSIT) program prepares students to be IT professionals who are able to perform installation,operation, development, maintenance and administration of computer applications. </p>
               </div>
            </div>
         </div>

         <div class="course-offer">          
            <div class="course-head">
               <div class="course-head-img">
                  <img src="./img/course head/Dr.-Gerardo-Bautista.jpg" alt="">
               </div>
              
               <div class="head-info">
                     <h3> Dr. Gerardo Bautista </h3>
                     <p> Dean, College of Business and Accountancy </p>
               </div>
            </div>

            <div class="about-course">
               <div class="course-offer-banner">
                  <h2> Course offer </h2>
               </div>
               <div class="course-title"> <h2> Bachelor of Science in Accountancy </h2></div>
               <div class="course-desc"> 
                  <p> The Bachelor of Science in Accountancy (BSA) program of the Quezon City University adopts an outcomes-based curriculum as prescribed by the Commission on Higher Education (CHED) and in accordance with CMO No. 27, series of 2017. </p>
               </div>
            </div>
         </div>

         <div class="course-offer">          
            <div class="course-head">
               <div class="course-head-img">
                  <img src="./img/course head/bsie.jpg" alt="">
               </div>
               <div class="head-info">
                     <h3> Engr. Ryan Arago </h3>
                     <p> Dean, College of Engineering </p>
               </div>
            </div>

            <div class="about-course">
               <div class="course-offer-banner">
                  <h2> Course offer </h2>
               </div>
               <div class="course-title"> <h2> Bachelor of Science in Electronics Engineering </h2></div>
               <div class="course-desc"> 
                  <p> The Bachelor of Science in Electronics Engineering (BSECE) and the Bachelor of Science in Industrial Engineering (BSIE) programs of the Quezon City University adopts an outcomes-based curriculum as prescribed by the Commission on Higher Education (CHED) and in accordance with CMO No. 101, series of 2018 and CMO No. 96, series of 2017 respectively. </p>
               </div>
            </div>
         </div>

         <div class="course-offer">          
            <div class="course-head">
               <div class="course-head-img">
                  <img src="./img/course head/beced.jpg" alt="">
               </div>
               <div class="head-info">
                     <h3> Prof. Araceli C. Suyat</h3>
                     <p> OIC, Dean, College of Education
Chairperson, Gen-Ed Social Sciences and Philosophy </p>
               </div>
            </div>

            <div class="about-course">
               <div class="course-offer-banner">
                  <h2> Course offer </h2>
               </div>
               <div class="course-title"> <h2> Bachelor of Early Childhood Education </h2></div>
               <div class="course-desc"> 
                  <p> The College of Education is a premier teacher-education center in the region providing quality instruction and training for future educators to serve the public schools in Quezon City in particular and the National Capital Region in general. </p>
               </div>
            </div>
         </div>

         <!--xx slides here -->

         <!--automatic navigation -->
         <div class="navigation-auto">
            <div class="auto-btn1"> </div>
            <div class="auto-btn2"> </div>
            <div class="auto-btn3"> </div>
            <div class="auto-btn4"> </div>
            
         </div>
         <!--xx automatic navigation -->
      </div>
         <!-- manual navigation -->
         <div class="navigation-manual">
            <label for="radio1" class="manual-btn"> </label>
            <label for="radio2" class="manual-btn"> </label>
            <label for="radio3" class="manual-btn"> </label>
            <label for="radio4" class="manual-btn"> </label>
         </div>
         <!--xx manual navigation -->

   </div>
   <!--x courses -->

   <!-- shop -->
   <div class="shop-container">
     
      <div class="shop-bg">
         <img src="./img/shopbg.jpg" class="shopbg">
         <div class="overlay-shop"></div>

      </div>
      
      <div class="shop-content">
         <div class="shop-text">
            <h1> Be presentable </h1>
            <p> Always wear complete uniform </p>

            <a href="../merchandise/index.php" class="button-hero"> 
               <img src="./img/Icons/wshop.png" alt=""> Shop now
            </a>
         </div>
         <div class="shop-img">
            <img src="./img/shop hero.png" alt="">
         </div>
      </div>
   </div>
   <!--x shop -->

   <!-- campuses -->
   <div class="campus-container">
      <div class="campus-head"> 
         <h1> Campuses </h1>
      </div>

      <div class="campuses">

         <div class="campus-box">
            <div class="camp-img">
               <img src="./img/QCU-Batasan-1.jpg" alt="">
            </div>

            <div class="campus-info"> 
                  <h2> Batasan Campus </h2>
                  <p>  Batasan Rd, Quezon City, Metro Manila </p>
            </div>
         </div>
         <div class="campus-box center-box">
            <div class="camp-img">
               <img src="./img/51948995_2224700194217155_7121890052690411520_n.jpg" alt="">
            </div>

            <div class="campus-info"> 
                  <h2> San Bartolome Campus </h2>
                  <p>  673 Quirino Highway, San Bartolome, Novaliches, Quezon City </p>
            </div>
         </div>
         <div class="campus-box">
            <div class="camp-img">
               <img src="./img/san-fransisco.jpg" alt="">
            </div>

            <div class="campus-info"> 
                  <h2> San Francisco Campus </h2>
                  <p> Bago Bantay, Quezon City, Metro Manila </p>
            </div>
         </div>

      </div>

   </div>
   <!--x campuses -->


   <!-- footer -->
   <div class="footer">
      <div class="icon-links">
            <ul>
               <li> <a href="#" ><img src="./img/Icons/wtwitter.png" alt=""> </a> </li>
               <li> <a href="#" ><img src="./img/Icons/wfacebook.png" alt=""> </a></li>
               <li> <a href="#" ><img src="./img/Icons/winstagram.png" alt=""></a> </li>
            </ul>
      </div>

      <div class="footer-text">
         <p>  673 Quirino Highway, San Bartolome, Novaliches, Quezon City </p>
         <p>  (02) 8806-3049 </p>
      </div>

      <div class="copyright">
         <p> &copy; 2022 Quezon City University </p> 
      </div>
   </div>
   <!--x footer -->

</body>

<script src="./script/slide.js"></script>

</html>