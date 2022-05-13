<?php
   include "../php/db_connection.php";
   include "../method/functions.php";
   include "../php/count.php";

   //echo "REG20220".$cntApplicant['total'] + 1;
   
   if(isset($_POST['submit'])){
      $lname = $_POST['lname'];
      $fname = $_POST['fname'];
      $mname = $_POST['mname'];
      $exname = $_POST['exname'];
      $bdate = $_POST['bdate'];
      $bplace = $_POST['bplace'];
      $age = $_POST['age'];
      $sex = $_POST['sex'];
      $zipCode = $_POST['zipCode'];
      $hNoStrt = $_POST['hNoStrt'];
      $brgy = $_POST['brgy'];
      $city= $_POST['city'];
      $cStatus = $_POST['cStatus'];
      $nationality = $_POST['nationality'];
      $religion = $_POST['religion'];
      $email = $_POST['email'];
      $cNum = $_POST['cNum'];
      $schedDate = $_POST['schedDate'];
      $schedTime = $_POST['schedTime'];

      $diploma = $_FILES['diploma'];
      $grade = $_FILES['grade'];
      $gdMoral = $_FILES['gdMoral'];
      $id2x2 = $_FILES['id2x2'];

      $diploma_filename = $diploma['name'];
      $diploma_size = $diploma['size'];
      $diploma_tmp_name = $diploma['tmp_name'];
      $diploma_err = $diploma['error'];
      
      $grade_filename = $grade['name'];
      $grade_size = $grade['size'];
      $grade_tmp_name = $grade['tmp_name'];
      $grade_err = $grade['error'];

      $gdMoral_filename = $gdMoral['name'];
      $gdMoral_size = $gdMoral['size'];
      $gdMoral_tmp_name = $gdMoral['tmp_name'];
      $gdMoral_err = $gdMoral['error'];

      $id2x2_filename = $id2x2['name'];
      $id2x2_size = $id2x2['size'];
      $id2x2_tmp_name = $id2x2['tmp_name'];
      $id2x2_err = $id2x2['error'];

      /*echo $diploma_filename;
      echo $grade_filename;
      echo $gdMoral_filename;
      echo $id2x2_filename;*/

      //findSchedule($schedDate, $schedTime);

      //echo $schedID;
      
      if($diploma_err == 0 || $grade_err == 0 || $gdMoral_err == 0 || $id2x2_err == 0){
         $extension = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG'];
         
         $diploma_ext = pathinfo($diploma_filename, PATHINFO_EXTENSION);
         $grade_ext = pathinfo($grade_filename, PATHINFO_EXTENSION);
         $gdMoral_ext = pathinfo($gdMoral_filename, PATHINFO_EXTENSION);
         $id2x2_ext = pathinfo($id2x2_filename, PATHINFO_EXTENSION);

         $diploma_ext_lc = strtolower($diploma_ext);
         $grade_ext_lc = strtolower($grade_ext);        
         $gdMoral_ext_lc = strtolower($gdMoral_ext);
         $id2x2_ext_lc = strtolower($id2x2_ext);

         if(in_array($diploma_ext_lc, $extension) || in_array($grade_ext_lc, $extension) || in_array($gdMoral_ext_lc, $extension) || in_array($gdMoral_ext_lc, $extension)){
            
            $diploma_img_name = uniqid('diploma', true).'.'.$diploma_ext_lc;
            $grade_img_name = uniqid('grade', true).'.'.$grade_ext_lc;
            $gdMoral_img_name = uniqid('gdMoral', true).'.'.$gdMoral_ext_lc;
            $id2x2_img_name = uniqid('id2x2', true).'.'.$id2x2_ext_lc;

            $diploma_upload_path = 'C:\xampp\htdocs\EregQCU\img/upload_documents/diploma/'.$diploma_img_name;
            $grade_upload_path = 'C:\xampp\htdocs\EregQCU\img/upload_documents/grade/'.$grade_img_name;
            $gdMoral_upload_path = 'C:\xampp\htdocs\EregQCU\img/upload_documents/good_moral/'.$gdMoral_img_name;
            $id2x2_upload_path = 'C:\xampp\htdocs\EregQCU\img/upload_documents/2x2/'.$id2x2_img_name;

            move_uploaded_file($diploma_tmp_name, $diploma_upload_path);
            move_uploaded_file($grade_tmp_name, $grade_upload_path);
            move_uploaded_file($gdMoral_tmp_name, $gdMoral_upload_path);
            move_uploaded_file($id2x2_tmp_name, $id2x2_upload_path);


            registerApplicant($lname, $fname, $mname, $exname, $bdate , $bplace, $age, $sex, $zipCode, $hNoStrt, $brgy, $city, $cStatus, $nationality, $religion, $email, $cNum , $schedDate, $schedTime, $diploma_img_name, $grade_img_name, $gdMoral_img_name, $id2x2_img_name);

              
         }
         else{
            echo "Low";
         }
      }
   }
?>