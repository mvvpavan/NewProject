<?php
include 'DBConnection.php';
function NewUser()
 {
  $fullname = $_POST['name']; 
  $email = $_POST['email'];
  $password = $_POST['password']; 
  $mobile = $_POST['mobile']; 
  $countryCode = $_POST['countryCode'];
  $phone=$mobile.$countryCode; 
   $query = "INSERT INTO users (fullname,email,password,mobile) VALUES ('$fullname','$email','$password','$phone')"; 
   $data = mysql_query ($query)or die(mysql_error()); 
   if($data) 
   { 
   	echo "YOUR REGISTRATION IS COMPLETED..."; 
   } 
}
function SignUp() { if(!empty($_POST['email'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
{ 
	$query = mysql_query("SELECT * FROM users WHERE email = '$_POST[email]' AND password = '$_POST[password]'") or die(mysql_error()); 
	if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
		{ 
		newuser();
		} 
		else
		 {
		  echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
		   }
		 }
		 else 
		 {
		 	echo "Please pass username";
		 }
		} 
	if(isset($_POST['submit'])) 
		{ 
			echo "Data entered";
			SignUp(); 
		}
?>