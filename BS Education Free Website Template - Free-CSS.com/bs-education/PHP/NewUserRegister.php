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
          echo '<script type="text/javascript">'; 
          echo 'alert("YOUR REGISTRATION IS COMPLETED...");'; 
          echo 'window.location.href = "../index.html";';
          echo '</script>';	
   } 
}
function SignUp() { if(!empty($_POST['email'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
{ 
	$query = mysql_query("SELECT * FROM users WHERE email = '$_POST[email]'") or die(mysql_error()); 
	$count = mysql_num_rows($query);
	echo $count;
	if($count == 0) 
	{ 
	    newuser();
	} 
    else
    {
		  echo '<script type="text/javascript">'; 
          echo 'alert("SORRY...YOU ARE ALREADY REGISTERED USER...");'; 
          echo 'window.location.href = "../index.html";';
          echo '</script>';
		  //header("Location: ../index.html");
    }
		} 
	if(isset($_POST['submit'])) 
		{ 
			echo "Data entered";
			SignUp(); 
		}
?>