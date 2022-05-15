<?php
   session_start();
   $adminID = $_SESSION['adminID'];
   if(!empty($adminID)){
      header('location: ./index.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/adminLogin.css">
   <title> QCU Administrator </title>
</head>
<body>
   <main>
      <div class="form-login">
         <div class="icon-holder">
            <img src="../img/QCU_Logo_2019.png" alt="">
         </div>

         <div class="qcu-title">
            <img src="../icon/qcu-logo.png" alt="">
         </div>
         
         <form action="../php/admin_login.php" method="POST">
           
            <label for="user"> Admin </label>
            <input type="text" name="user" id="user">
            <label for="pass"> Password </label>
            <input type="password" name="pass" id="pass">
            <input type="submit" value="Login" name="loginBtn">
         </form>
         <p> </p>
      </div>
      <div class="footer">
         <p> Quezon City University </p>
      </div>
   </main>

</body>
</html>