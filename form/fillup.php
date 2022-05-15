<?php
   include "../php/db_connection.php";
   include "../php/select.php";

   $prefQuery = "SELECT * FROM `web_preference` WHERE `name` = 'fillup'";
   $fill = mysqli_query($con, $prefQuery);
   $fillUp = mysqli_fetch_assoc($fill);

   if($fillUp['status'] == 'Off'){
      header('location: ../applicants/Sorry.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/form.css">
   <title> Fill up</title>
</head>
<script>
    function loadref(time){
      setTimeout("location.reload(true);", time);
   }
</script>

 <!-- AJAX PLUGINS -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

 <!-- AJAX --> 
 <script src="../ajax/schedule.js"></script>

<body>
   <header>
      <img src="../img/svg/logo.svg">
   </header>
   
   <section>
      <div class="form-box">
      
         <div class="progress-bar">
            <div class="progress" id="progress">
               <div class="number current"> 1 </div>
               <div class="number"> 2 </div>
               <div class="number"> 3 </div>
               <div class="number"> 4 </div>
            </div>
         </div>   
        
         <div class="form-fill-box">
            

           
            <!-- Demographic 1 -->
            <div class="demographic-box toLeft"> 
               <form action="../php/process.php" method="POST" enctype="multipart/form-data">
               <h1> Demographic Profile </h1>
               <div class="input-forms">  
                  <div class="input-name">
                     <div class="text-input">
                        <label for="lname"> Lastname <span class="errMessage"> </span></label>
                        <input type="text" id="lname" name="lname">
                     </div>
                     <div class="text-input">
                        <label for="fname"> Firstname <span class="errMessage"> </span></label>
                        <input type="text" id="fname" name="fname" >
                     </div>
                     <div class="text-input">
                        <label for="mname"> Middlename <span class="errMessage">  *leave attended if not applicable </span></label>
                        <input type="text" id="mname" name="mname" >
                     </div>
                     <div class="text-input">
                        <label for="ext"> Extension <span class="errMessage"> *leave attended if not applicable </span> </label>
                        <input type="text" id="ext" name="exname">
                     </div>
                  </div>

                  <div class="input-other">
                     <div class="text-input">
                        <label for="bdate"> Birth date <span class="errMessage"> </span> </label>
                        <input type="date" id="bdate" name="bdate" >
                        
                     </div>
                     <div class="text-input">
                        <label for="PoB"> Place of Birth <span class="errMessage"></span></label>
                        <input type="text" id="PoB" name="bplace" >
                     </div>
                     <div class="text-input">
                        <label for="age"> Age <span class="errMessage"> </span></label>
                        <input type="number" id="age" name="age">
                     </div>
                     <div class="text-input">
                        <label for="sex"> Sex <span class="errMessage"> </span></label>
                        <select name="sex" id="sex">
                           <option value=""> Choose </option>
                           <option value="M"> Male </option>
                           <option value="F"> Female </option>
                        </select>
                     </div>
                  </div>
               </div>
               
               
               <div class="buttons">
                  <a href="../index.php" id="cancel"> Cancel </a>
                  <button type="button" id="next1" > Next </button>
               </div>
            </div>
            
            
            <!-- Demographic 2 -->
            <div class="demographic-box2 toLeft">
               <h1> Demographic Profile </h1>
               <div class="input-forms">  
                  <div class="input-name">
                     <div class="text-input">
                        <label for="zipCode"> Zip Code  <span class="errMessage"> </span></label>
                        <input type="text" id="zipCode" name="zipCode" >
                     </div>
                     <div class="text-input">
                        <label for="hNoStrt"> House No. and Street  <span class="errMessage"> </span></label>
                        <input type="text" id="hNoStrt" name="hNoStrt">
                     </div>
                     <div class="text-input">
                        <label for="brgy"> Barangay <span class="errMessage"> </span></label>
                        <input type="text" id="brgy" name="brgy" >
                     </div>
                     <div class="text-input">
                        <label for="city"> City <span class="errMessage"> </span></label>
                        <input type="text" id="city" name="city">
                     </div>
                  </div>

                  <div class="input-other">
                     <div class="text-input">
                        <label for="bdate"> Civil Status <span class="errMessage"> </span></label>
                        <select name="cStatus" id="cStatus">
                           <option value=""> Choose </option>
                           <option value="Single"> Single </option>
                           <option value="Married"> Married </option>
                           <option value="Widowed"> Widowed </option>
                           <option value="Divorced"> Divorced </option>
                        </select>
                        
                     </div>
                     <div class="text-input">
                        <label for="nationality"> Nationality <span class="errMessage"> </span></label>
                        <input type="text" id="nationality" name="nationality">
                     </div>
                     <div class="text-input">
                        <label for="religion"> Religion <span class="errMessage"> </span></label>
                        <input type="text" id="religion" name="religion">
                     </div>
                  </div>
               </div>
               
               <div class="buttons">
                  <button id="back1" type="button"> Back </button>
                  <button id="next2" type="button"> Next </button>
               </div>
            </div> 
            

            <!-- Contact and schedule -->
            <div class="contact-sched ">
            
               <div class="input-forms">
                  <div class="contact">
                     <h1> Contact </h1>
                     <div class="text-input">
                        <label for="email"> Email <span style="color:red;font-size:.8em">  *must be a gmail account </span> <span class="errMessage"> </span>  </label>
                        <input type="text" id="email" name="email" >
                     </div>
                     <div class="text-input">
                        <label for="cNum"> Contact number <span class="errMessage"> </span> </label>
                        <input type="text" id="cNum" name="cNum" minlength="11" maxlength="11">
                     </div>
               
                    
                  </div>


                  <div class="schedule">
                     <h1> Schedule </h1>
                     
                     <div class="text-input">
                        <label for="schedDate"> Date </label>
                        
                        <select name="schedDate" id="schedDate">
                           <?php
                              if(mysqli_num_rows($selDateOnly) > 0){
                                 while($rows = mysqli_fetch_assoc($selDateOnly)){ 
                                    ?>
                                 <option value="<?=$rows['Date']?>"> <?=$rows['Date']?> </option>      
                              <?php } 
                              }
                           ?>
                        </select>
                        
                        
                     </div>
                    

                     <div class="text-input">
                        <label for="schedTime"> Time </label>
                        <select name="schedTime" id="schedTime">
                           <?php
                             if(mysqli_num_rows($selTimeOnly) > 0){
                                 while($rows = mysqli_fetch_assoc($selTimeOnly)){  ?>
                                    <option> <?=$rows['StartTime']?> </option>
                                 <?php 
                                 }
                              } else{ ?>
                                 <option> No available </option>
                              <?php } 
                           ?>
                           
                        </select>
                     </div>
                     <div class="text-input" id="slot-containter">
                        <label for="slot"> Slot </label>
                        <input type="text" id="slot" name="schedslot" value="<?=$slot['Slot']?>" disabled>
                     </div>
                  
                  </div>
               </div>
                  
               <div class="buttons">
                  <button id="back2" type="button"> Back </button>
                  <button id="next3" type="button"> Next </button>
               </div>
            </div>
    
            

            <!-- Attach documents -->
            <div class="documents toLeft">
               <h1> Attach Documents </h1>
               <div class="input-forms">  
                     <div class="text-input">
                        <label for="diploma"> Diploma </label>
                        <input type="file" name="diploma" id="diploma" required>
                     </div>
                     <div class="text-input">
                        <label for="grade"> SHS / 4<sup>th</sup> yr grade </label>
                        <input type="file" id="grade" name="grade" required>
                     </div>
                     <div class="text-input">
                        <label for="gdMoral"> Good Moral </label>
                        <input type="file" id="gdMoral" name="gdMoral" required>
                     </div>

                     <div class="text-input">
                        <label for="id2x2"> ID Picture (2x2) </label>
                        <input type="file" id="id2x2" name="id2x2" required>
                     </div>
               </div>
               <div class="buttons">
                  <button id="back3" type="button"> Back </button>
                  <input type="submit" value="Submit" name="submit" id="submit">
               
               </div>
               </form>
            </div>
            
         </div>
      </div>
      
   </section>
   


   <script src="../script/nextFill.js"> </script> 
</body>

</html>