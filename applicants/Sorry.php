<?php
  if($fillUp['status'] == 'On'){
   header('location: ../form/fillup.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="refresh" content="5; url=http://localhost/EregQCU/index.php">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Sorry </title>
</head>
<body>
   <!--<header>
      <img src="../img/QCU_Logo_2019.png">
   </header> -->
   <div>
      <img src="../img/icons/sorry.png" alt="">
      <h1> Sorry </h1>
      <p> Quezon City University E-registration for Entrance Examination is currently not available.
 We are only available on June to August for accepting registration of freshmen students to take the Entrance Examination at Quezon City University. Thank you! </p>
   </div>


   <div class="message">
      <p> This page will redirect to the homepage in 5 seconds...</p>
   </div>
</body>
<style>
   *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   }

   body{
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      width: 100%;
      background-color: #e3e5ec;
   }
      
   header{
      position: absolute;
      top: 2%;
      left: 5%;
   }
   header img{
      height: 100px;
   }


   div{
      text-align: center;
      width: 50%;
   }
   div h1{
      font-size: 4em;
      color:#1F222E;
      letter-spacing: 2px;
      font-weight: 400;
   }
   div p{
      font-size: 1.1em;
      letter-spacing: 1px;
      font-weight: lighter;
   }
   div img{
      width: 300px;
      height: 300px;
   }

   .message{
      position: absolute;
      bottom: 5%;
      left: 1%;
      width: max-content;
      font-size: .9em;
      color: #888;
   }
</style>
</html>