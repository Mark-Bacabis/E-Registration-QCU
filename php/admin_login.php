<?php
   session_start();
   include('./db_connection.php'); // $conn = variable name ng db

   if(isset($_POST['loginBtn'])){   

      $un = $_POST['user'];
      $pw = $_POST['pass'];

      // SELECT Username and Pass from Default Account database
      $query = mysqli_query($con, 'SELECT * FROM `admin_account`');
      //$user = mysqli_fetch_assoc($query);
      
      
     

      if(mysqli_num_rows($query) > 0){
         while($row = mysqli_fetch_assoc($query)){
            if($un === $row['username'] && $pw === $row['password']){
               $userID = $row['id']; 
               $_SESSION['adminID'] = $userID; 
               header("location: ../admin/admin.php");
               
            }
            else{
               header("location: ../admin/index.php");
            }
         }
      }
   }



?>