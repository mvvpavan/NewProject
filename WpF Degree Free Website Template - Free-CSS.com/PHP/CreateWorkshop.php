<?php
include 'DBConnection.php';
function NewWorkShop()
 {
   echo "demo";
   $title = $_POST['title']; 
   $date = $_POST['date'];
   $time = $_POST['time']; 
   $cost = $_POST['cost']; 
   $capacity = $_POST['capacity'];
   $venu=$_POST['venu'];
   $address=$_POST['address'];
   $query = "INSERT INTO workshop (title,date,time,Costperstudent,Capacity,venu,Address) VALUES ('$title','$date','$time','$cost','$capacity','$venu','$address')"; 
   $data = mysql_query ($query)or die(mysql_error()); 
   if($data) 
   { 
          echo '<script type="text/javascript">'; 
          echo 'alert("REGISTERED USER SUCCESS...");'; 
          echo 'window.location.href = "../index.html";';
          echo '</script>';
	} 
}
/*function SignUp() { 
if(!empty($_POST['email'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
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
	  // while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
     //     echo "EMP ID :{$row['email']}  <br> ".
      //   "EMP NAME : {$row['type']} <br> ".
      //   "EMP SALARY : {$row['password']} <br> ".
       //  "--------------------------------<br>";
        // }
   
		  echo '<script type="text/javascript">'; 
      echo 'alert("SORRY...YOU ARE ALREADY REGISTERED USER...");'; 
      echo 'window.location.href = "../index.html";';
      echo '</script>';
		  //header("Location: ../index.html");
    }
}
} */
	if(isset($_POST['submit'])) 
		{ 
			echo "Data entered";
		    NewWorkShop(); 
		}
	 mysql_close($conn);
?>