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
            <div class="progress">
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
                        <label for="ext"> Extension <span style="color:red;font-size:.8em"> *put N/A if not applicable </span> </label>
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
                  <button id="cancel"> Cancel </button>
                  <button id="next1"> Next </button>
               </div>
            </div>  
            

            <!-- Demographic 2 -->
            <div class="demographic-box2">
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
                  <button id="back1"> Back </button>
                  <button id="next2"> Next </button>
               </div>
            </div> 
           

            <!-- Contact and schedule -->
            <div class="contact-sched">
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
                        <input type="text" id="schedDate" name="schedDate">
                     </div>
                     <div class="text-input">
                        <label for="schedTime"> Time </label>
                        <input type="text" id="schedTime" name="schedTime">
                     </div>
                     <div class="text-input">
                        <label for="slot"> Slot </label>
                        <input type="text" id="slot" name="slot" disabled>
                     </div>
                  
                  </div>
               </div>

               <div class="buttons">
                  <button id="back2"> Back </button>
                  <button id="next3"> Next </button>
               </div>
            </div>

            <!-- Attach documents -->
            <div class="documents">

            </div>




         </div>

      </div>
   </section>

   <footer>
        <p> &copy; 2020 Quezon City University </p>
   </footer>
</body>
</html>