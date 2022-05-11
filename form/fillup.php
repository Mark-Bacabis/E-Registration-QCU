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
         <?php 
            $lname = "";
            $fname = "";
            $mname = "";
            $ext = "";
            $bdate = "";
            $PoB = "";
            $age = "";
            $sex = "";
            $lnameerr = "";
            $fnameerr = "";
            $mnameerr = "";
            $exterr = "";
            $bdateerr = "";
            $poberr = "";
            $ageerr = "";
            $sexerr = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
               if (empty($_POST["lname"])){
                  $lnameerr = "Lastname is required";
               }
               else{
                  $lname = test_input($_POST["lname"]);
               }
               if (empty($_POST["fname"])){
                  $fnameerr = "Firstname is required";
               }
               else{
                  $fname = test_input($_POST["fname"]);
               }
               if (empty($_POST["mname"])){
                  $mnameerr = "Middlename is required";
               }
               else{
                  $mname = test_input($_POST["mname"]);
               }
               if (empty($_POST["ext"])){
                  $exterr = "Extension is required";
               }
               else{
                  $ext = test_input($_POST["ext"]);
               }
               if (empty($_POST["bdate"])){
                  $bdateerr = "Birthday is required";
               }
               else{
                  $bday = test_input($_POST["bday"]);
               }
               if (empty($_POST["PoB"])){
                  $poberr = "Place of Birth is required";
               }
               else{
                  $pob = test_input($_POST["PoB"]);
               }
               if (empty($_POST["age"])){
                  $ageerr = "Age is required";
               }
               else{
                  $age = test_input($_POST["age"]);
               }
               if (empty($_POST["sex"])){
                  $sexerr = "Sex is required";
               }
               else{
                  $sex = test_input($_POST["sex"]);
               }
               if (empty($_POST["diploma"])){ //1222222222222222222222222222222222
                  $diplomaerr = "Diploma is required";//12222222222222222222222222222222222
               }
               else{
                  $diploma = test_input($_POST["diploma"]);
               }
            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }


         ?>
         
            <!-- Demographic 1 -->
            <div class="demographic-box">
               <form action="" method="post">
                  <h1> Demographic Profile </h1>
               <div class="input-forms">  
                  <div class="input-name">
                     <div class="text-input">
                        <label for="lname"> Lastname </label>
                        <input type="text" id="lname" name="lname">
                     </div>
                     <div class="text-input">
                        <label for="fname"> Firstname </label>
                        <input type="text" id="fname" name="fname">
                     </div>
                     <div class="text-input">
                        <label for="mname"> Middlename </label>
                        <input type="text" id="mname" name="mname">
                     </div>
                     <div class="text-input">
                        <label for="ext"> Extension <span style="color:red;font-size:.8em"> *leave attended if not applicable </span> </label>
                        <input type="text" id="ext" name="ext">
                     </div>
                  </div>

                  <div class="input-other">
                     <div class="text-input">
                        <label for="bdate"> Birth date </label>
                        <input type="date" id="bdate" name="bdate">
                        
                     </div>
                     <div class="text-input">
                        <label for="PoB"> Place of Birth </label>
                        <input type="text" id="PoB" name="PoB">
                     </div>
                     <div class="text-input">
                        <label for="age"> Age </label>
                        <input type="number" id="age" name="age" maxlength="2" minlength="1" min="1" max="40">
                     </div>
                     <div class="text-input">
                        <label for="sex"> Sex</label>
                        <select name="sex" id="sex">
                           <option value="M"> Male </option>
                           <option value="F"> Female </option>
                        </select>
                     </div>
                  </div>
               </div>
               
               <div class="buttons">
                  <a href="../index.php" id="cancel"> Cancel </a>
                  <button id="next1" type="button"> Next </button>
               </div>
            </div>  
            

            <!-- Demographic 2 -->
            <div class="demographic-box2 toLeft">
                  <h1> Demographic Profile </h1>
               <div class="input-forms">  
                  <div class="input-name">
                     <div class="text-input">
                        <label for="zipCode"> Zip Code </label>
                        <input type="text" id="zipCode" name="zipCode">
                     </div>
                     <div class="text-input">
                        <label for="hNoStrt"> House No. and Street </label>
                        <input type="text" id="hNoStrt" name="hNoStrt">
                     </div>
                     <div class="text-input">
                        <label for="brgy"> Barangay</label>
                        <input type="text" id="brgy" name="brgy">
                     </div>
                     <div class="text-input">
                        <label for="city"> City </label>
                        <input type="text" id="city" name="city">
                     </div>
                  </div>

                  <div class="input-other">
                     <div class="text-input">
                        <label for="bdate"> Civil Status </label>
                        <select name="cStatus" id="cStatus">
                           <option value="Single"> Single </option>
                           <option value="Married"> Married </option>
                           <option value="Widowed"> Widowed </option>
                           <option value="Divorced"> Divorced </option>
                        </select>
                        
                     </div>
                     <div class="text-input">
                        <label for="nationality"> Nationality </label>
                        <input type="text" id="nationality" name="nationality">
                     </div>
                     <div class="text-input">
                        <label for="religion"> Religion </label>
                        <input type="text" id="religion" name="religion" maxlength="2" minlength="1" min="1" max="40">
                     </div>
                  </div>
               </div>
               
               <div class="buttons">
                  <button id="back1" type="button"> Back </button>
                  <button id="next2" type="button"> Next </button>
               </div>
            </div> 
           

            <!-- Contact and schedule -->
            <div class="contact-sched toLeft">
               <div class="input-forms">
                  <div class="contact">
                     <h1> Contact </h1>
                     <div class="text-input">
                        <label for="email"> Email <span style="color:red;font-size:.8em">  *must be a gmail account </span> </label>
                        <input type="text" id="email" name="email">
                     </div>
                     <div class="text-input">
                        <label for="cNum"> Contact number </label>
                        <input type="text" id="cNum" name="cNum">
                     </div>
               

                  </div>
                  <div class="schedule">
                     <h1> Schedule </h1>

                     <div class="text-input">
                        <label for="schedDate"> Date </label>
                        <select name="schedDate" id="schedDate">
                           <?php
                              if(mysqli_num_rows($dateQuery) > 0){
                                 while($rows = mysqli_fetch_assoc($dateQuery)){?>
                                    <option> <?=$rows['Date']?> </option>
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
                                    <option> <?=$rows['StartTime']?> - <?=$rows['EndTime']?> </option>
                                 <?php }
                              } else{ ?>
                                 <option> No available </option>
                              <?php }
                           ?>
                           
                        </select>
                     </div>
                     <div class="text-input">
                        <label for="slot"> Slot </label>
                        <input type="text" id="slot" name="slot" value="<?=$slot['Slot']?>" disabled>
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
                  </form>
               </div>
            </div>
      
      </div>
   </section>




   <footer>
        <p> &copy; 2020 Quezon City University </p>
   </footer>
</body>

<script src="../script/nextFill.js"></script>
</html>