<?php
   include "../php/db_connection.php";
   include "../php/select.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/form.css">
   <title>Document</title>
</head>
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
            <div class="demographic-box">
               
                  <h1> Demographic Profile </h1>
               <div class="input-forms">  
                  <div class="input-name">
                     <div class="text-input">
                        <label for="lname"> Lastname <span style="font-size: 15px;color:red;" id="error1"></span></label>
                        <input type="text" id="lname" name="lname" >
                     </div>
                     <div class="text-input">
                        <label for="fname"> Firstname <span style="font-size: 15px;color:red;" id="error2"></label>
                        <input type="text" id="fname" name="fname" >
                     </div>
                     <div class="text-input">
                        <label for="mname"> Middlename <span style="font-size: 15px;color:red;" id="error3"></label>
                        <input type="text" id="mname" name="mname" >
                     </div>
                     <div class="text-input">
                        <label for="ext"> Extension <span style="color:blue;font-size:.8em"> *leave attended if not applicable </span> </label>
                        <input type="text" id="ext" name="exname">
                     </div>
                  </div>

                  <div class="input-other">
                     <div class="text-input">
                        <label for="bdate"> Birth date <span style="font-size: 15px;color:red;" id="error5"></label>
                        <input type="date" id="bdate" name="bdate" >
                        
                     </div>
                     <div class="text-input">
                        <label for="PoB"> Place of Birth <span style="font-size: 15px;color:red;" id="error6"></label>
                        <input type="text" id="PoB" name="bplace" >
                     </div>
                     <div class="text-input">
                        <label for="age"> Age <span style="font-size: 15px;color:red;" id="error7"></label>
                        <input type="number" id="age" name="age" maxlength="2" minlength="1" min="1" max="40" d>
                     </div>
                     <div class="text-input">
                        <label for="sex"> Sex <span style="font-size: 15px;color:red;" id="error8"></label>
                        <select name="sex" id="sex" onblur="checkTextFieldpb(this);" required>
                           <option value=""> Choose </option>
                           <option value="M"> Male </option>
                           <option value="F"> Female </option>
                        </select>
                     </div>
                  </div>
               </div>
               
               
               <div class="buttons">
                  <a href="../index.php" id="cancel"> Cancel </a>
                  <button type="submit" id="next1" > Next </button>
               </div>
            </div>
            

            <!-- Demographic 2 -->
            <div class="demographic-box2 toLeft">
                  <h1> Demographic Profile </h1>
               <div class="input-forms">  
                  <div class="input-name">
                     <div class="text-input">
                        <label for="zipCode"> Zip Code </label>
                        <input type="text" id="zipCode" name="zipCode" onblur="checkTextFieldpb(this);" required>
                     </div>
                     <div class="text-input">
                        <label for="hNoStrt"> House No. and Street </label>
                        <input type="text" id="hNoStrt" name="hNoStrt" onblur="checkTextFieldpb(this);" required>
                     </div>
                     <div class="text-input">
                        <label for="brgy"> Barangay</label>
                        <input type="text" id="brgy" name="brgy" onblur="checkTextFieldpb(this);" required>
                     </div>
                     <div class="text-input">
                        <label for="city"> City </label>
                        <input type="text" id="city" name="city" onblur="checkTextFieldpb(this);" required>
                     </div>
                  </div>

                  <div class="input-other">
                     <div class="text-input">
                        <label for="bdate"> Civil Status </label>
                        <select name="cStatus" id="cStatus" onblur="checkTextFieldpb(this);" required>
                           <option value=""> Choose </option>
                           <option value="Single"> Single </option>
                           <option value="Married"> Married </option>
                           <option value="Widowed"> Widowed </option>
                           <option value="Divorced"> Divorced </option>
                        </select>
                        
                     </div>
                     <div class="text-input">
                        <label for="nationality"> Nationality </label>
                        <input type="text" id="nationality" name="nationality" onblur="checkTextFieldpb(this);" required>
                     </div>
                     <div class="text-input">
                        <label for="religion"> Religion </label>
                        <input type="text" id="religion" name="religion" maxlength="2" minlength="1" min="1" max="40" onblur="checkTextFieldpb(this);" required>
                     </div>
                  </div>
               </div>
               
               <div class="buttons">
                  <button id="back1" type="button"> Back </button>
                  <button id="next2" type="submit"> Next </button>
               </div>
            </div> 
           

            <!-- Contact and schedule -->
            <div class="contact-sched toLeft">
               <div class="input-forms">
                  <div class="contact">
                     <h1> Contact </h1>
                     <div class="text-input">
                        <label for="email"> Email <span style="color:red;font-size:.8em">  *must be a gmail account </span> </label>
                        <input type="text" id="email" name="email" onblur="checkTextFieldpb(this);" required>
                     </div>
                     <div class="text-input">
                        <label for="cNum"> Contact number </label>
                        <input type="text" id="cNum" name="cNum" onblur="checkTextFieldpb(this);" required>
                     </div>
               

                  </div>
                  <div class="schedule">
                     <h1> Schedule </h1>

                     <div class="text-input">
                        <label for="schedDate"> Date </label>
                        <select name="schedDate" id="schedDate">
                           <?php
                              if(mysqli_num_rows($dateQuery) > 0){
                                 while($rows = mysqli_fetch_assoc($dateQuery)){
                                    $datetime = date("Y/m/d",$rows['Date']);
                                    ?>
                                    <option> <?php echo $datetime; ?> </option>
                                 <?php }
                              } else{ ?>
                                 <option> No available </option>
                              <?php }
                           ?>
                           
                        </select>
                        
                     </div>
                     <div class="text-input">
                        <label for="schedTime"> Time </label>
                        <select name="schedTime" id="schedTime">
                           <?php
                              if(mysqli_num_rows($schedQuery) > 0 && ($slot['Slot'] > 0 && $slot['Slot'] <= 10)){
                                 while($rows = mysqli_fetch_assoc($schedQuery)){?>
                                    <option> <?=$rows['StartTime']?>-<?=$rows['EndTime']?> </option>
                                 <?php }
                              } else{ ?>
                                 <option> No available </option>
                              <?php }
                           ?>
                           
                        </select>
                     </div>
                     <div class="text-input">
                        <label for="slot"> Slot </label>
                        <input type="text" id="slot" name="schedslot" value="<?=$slot['Slot']?>">
                     </div>
                  
                  </div>
               </div>

               <div class="buttons">
                  <button id="back2" type="button"> Back </button>
                  <button id="next3" type="submit"> Next </button>
               </div>
            </div>

            <!-- Attach documents -->
            <div class="documents toLeft">
             <h1> Attach Documents </h1>
               <div class="input-forms">  
                     <div class="text-input">
                        <label for="diploma"> Diploma </label>
                        <input type="file" name="diploma" id="diploma">
                     </div>
                     <div class="text-input">
                        <label for="grade"> SHS / 4<sup>th</sup> yr grade </label>
                        <input type="file" id="grade" name="grade">
                     </div>
                     <div class="text-input">
                        <label for="gdMoral"> Good Moral </label>
                        <input type="file" id="gdMoral" name="gdMoral">
                     </div>
                     <div class="text-input">
                        <label for="id2x2"> ID Picture (2x2) </label>
                        <input type="file" id="id2x2" name="id2x2">
                     </div>
               </div>
               <div class="buttons">
                  <button id="back3" type="button"> Back </button>
                  <input type="submit" value="Submit" name="submit" id="submit">
               
               </div>
            </div>
      
      </div>
   </section>




   <footer>
        <p> &copy; 2020 Quezon City University </p>
   </footer>   

   <script src="../script/nextbtn.js"></script>
</body>

</html>