<?php
   include 'DBConnection.php';
   session_id('mySessionID');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['email'];
      $mypassword = $_POST['password']; 
      
      $query = mysql_query("SELECT fullname,email,type,password FROM users WHERE email = '$_POST[email]' AND password = '$_POST[password]'") or die(mysql_error()); 
   if($row = mysql_fetch_array($query,MYSQLI_ASSOC) or die(mysql_error())) 
      {  
        $count = 1; 	 
         if ( strcasecmp( $row['type'], 'Student' ) == 0 ){
           
               $_SESSION['fullname']=$row['fullname'];
			    $_SESSION['email']=$row['email'];
                echo 'Student Sccessfull logged in';
                header("Location: ../AdminLTE-master/Studentdashboard.php");

            }
	   else{
		        $_SESSION['fullname']=$row['fullname'];
			    $_SESSION['email']=$row['email'];
		         echo 'Tutor  Sccessfull logged in';
             header("Location: ../AdminLTE-master/index.php");
	         }
      
   
		 
      }
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         echo "Your are successful logged";
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
    mysql_close($conn);
?>