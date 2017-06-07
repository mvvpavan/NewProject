<?php
session_id('mySessionID'); session_start();
include 'DBConnection.php';
function NewJob()
 {
  $summary = $_POST['summary']; 
  $level = $_POST['level'];
  $userID=$_SESSION['userID'];
  echo "userid".$userID."\n";
  foreach ($_POST['subject'] as $subject)
 {
        print "You are selected $subject<br/>";
        $subject .= $subject . "\n";
        
 }
print $body;
   $service = $_POST['service']; 
   $cost = $_POST['cost']; 
   $details = $_POST['details'];
   #$query = "INSERT INTO newjob (userId,summary,subject,level,service,cost,details) VALUES ('$userID','$summary','$subject','$level','$service','$cost','$details')"; 
   #$data = mysql_query ($query)or die(mysql_error()); 
   #if($data) 
  # { 
         #echo '<script type="text/javascript">'; 
         #echo 'alert("REGISTERED USER SUCCESS...");'; 
         #echo 'window.location.href = "../index.html";';
         #echo '</script>';
	#} 
}
function SignUp() { 
    NewJob();

}

	if(isset($_POST['submit'])) 
		{ 
			echo "Data entered";
			SignUp(); 
		}
		 mysql_close($conn);

?>