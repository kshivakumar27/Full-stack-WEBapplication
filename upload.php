<?php 
//echo "<pre>"; print_r($_POST);exit();
$conn = mysqli_connect("localhost", "root", "", "demo1");  
if(isset($_POST["name"]))  
{  
	$name = mysqli_real_escape_string($conn, $_POST["name"]); 
	$email = mysqli_real_escape_string($conn, $_POST["email"]);  	
	$message = mysqli_real_escape_string($conn, $_POST["message"]);  
	$query = "INSERT INTO users1(name, email, message) VALUES ('".$name."','".$email."','".$message."')";  
	if(mysqli_query($conn, $query))  
	{  
	   echo '<p>You have entered</p>';  
	   echo '<p>Name:'.$name.'</p>';  
	   echo '<p>Email:'.$email.'</p>';  
	   echo '<p>Message : '.$message.'</p>';  
	}  
}  
?>