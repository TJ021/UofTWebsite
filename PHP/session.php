<?php
   include('config.php');
   session_start();

   $type = $_SESSION['type'];

   // Get Username
   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"SELECT username FROM admin WHERE username = '$user_check'");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];


   if(strcmp($type, 'student') == 0){
     $student_id = $_SESSION['id'];

     $student_id_sql = mysqli_query($db,"SELECT firstname FROM student WHERE student_id = '$student_id'");

     $student_name_row = mysqli_fetch_array($student_id_sql,MYSQLI_ASSOC);

     $student_name = $student_name_row['firstname'];
   }
   elseif(strcmp($type, 'instructor') == 0){
     $instructor_id = $_SESSION['id'];

     $instructor_id_sql = mysqli_query($db,"SELECT lastname FROM instructor WHERE instructor_id = '$instructor_id'");

     $instructor_last_name_row = mysqli_fetch_array($instructor_id_sql,MYSQLI_ASSOC);

     $instructor_last_name = $instructor_last_name_row['lastname'];
   }
   elseif(strcmp($type, 'ta') == 0){
     $ta_id = $_SESSION['id'];

     $ta_id_sql = mysqli_query($db,"SELECT firstname FROM ta WHERE ta_id = '$ta_id'");

     $ta_name_row = mysqli_fetch_array($ta_id_sql,MYSQLI_ASSOC);

     $ta_name = $ta_name_row['firstname'];
   }

   //important, see the header, which will force to login page if the _SESSION variable is not set.
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
