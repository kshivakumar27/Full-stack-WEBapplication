


 
<?php
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require "config.php";
require_once "config.php";
if(isset($_POST['submit']))
{




 $username = trim($_POST['username']);
 $email = trim($_POST['email']);
 $password = trim($_POST['password']);
 $mno = trim($_POST['mno']);
//$confirm_password=trim($_POST['confirm_passsword']);
 //$query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
 //  $query="INSERT INTO users (email, username, password) VALUES('','$email', '$username', '$password')";
// echo $query;exit;
$query = "UPDATE users SET email='$email',username='$username',password='$password',mno='$mno' WHERE id=$_SESSION[id]";
      
         
          $msg_class = "alert-success";
           

  if(mysqli_query($conn,$query)){
 if(empty($username))
 {
  $error = "enter your name !";
  $code = 1;
 }
 else if(!ctype_alpha($username))
 {
  $error = "letters only !";
  $code = 1;
 }
 else if(empty($email))
 {
  $error = "enter your email !";
  $code = 2;
 }
 else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
 {
  $error = "not valid email !";
  $code = 2;
 }




 else if(empty($mno))
 {
  $error = "Enter Mobile NO !";
  $code = 3;
 }
 else if(!is_numeric($mno))
 {
  $error = "Numbers only !";
  $code = 3;
 }
 else if(strlen($mno)!=10)
 {
  $error = "10 characters only !";
  $code = 3;
 }






 
 else if(empty($password))
 {
  $error = "enter password !";
  $code = 4;
 }
 else if(strlen($password) < 8 )
 {
  $error = "Minimum 8 characters !";
  $code = 4;
 }
 
 
 /*
 else if(empty($confirm_password))
 {
  $error = "enter confirm password !";
  $code = 4;
 }
 else if(empty($password!=$confirm_password))
 {
  $error = " password did not match";
  $code = 4;
 }
 else if(strlen($confirm_password) < 8 )
 {
  $error = "Minimum 8 characters !";
  $code = 4;
 }
*/








 else
 {

    header("location: login.php");
 }
 }
}
  ?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset email</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Reset email</h2>
        <p>Please fill out this form to reset your email.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
          












            <?php
if(isset($error))
{
 ?>
    <tr>
    <td id="error" style="color:red; "><?php echo $error; ?></td>
    </tr>
    <?php
}
?>



<div id="login-bg" class="container-fluid">
<div class="bg-img"></div>
<div class="bg-color"></div>
</div>

<div class="container" id="login">
<div class="row justify-content-center">
<div class="col-lg-8" >
<div class="login" >
<h1>Register</h1>








 
<meta name="viewport" content="width=device-width, initial-scale=1">

<form action="" id="myForm" method="post">





                <div class="form-group">
<label>Username</label>
<td><input type="text" name="username" placeholder="User Name" class="form-control value="<?php if(isset($username)){echo $username;} ?>"  <?php if(isset($code) && $code == 1){ echo "autofocus"; }  ?> /></td>
</div>


<div class="form-group">
<label>Email</label>
<td><input type="text" name="email" placeholder="Your Email"  class="form-control value="<?php if(isset($email)){echo $email;} ?>" <?php if(isset($code) && $code == 2){ echo "autofocus"; }  ?> /></td>
</div>
<div class="form-group">
<label>Mobile no</label>
<td><input type="text" name="mno" placeholder="Mobile No" class="form-control    value="<?php if(isset($mno)){echo $mno;} ?>" <?php if(isset($code) && $code == 3){ echo "autofocus"; }  ?> /></td>
</div>

<div class="form-group">
<label>Password</label>
<td><input type="password" name="password" placeholder="Your Password" class="form-control" <?php if(isset($code) && $code == 4){ echo "autofocus"; }  ?> /></td>
</div>

<div class="form-group">
<input type="submit" class="btn btn-success"  name="submit" value="submit">
<!---<button type="submit" name="submit">Submit</button>  ---->
</div>














                <a class="btn btn-link ml-2" href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>
</html>